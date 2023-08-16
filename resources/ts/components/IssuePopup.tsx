import axios from 'axios';
import React, { useEffect, useState } from 'react';

import { Issue } from '../types/Issue';
import { ParameterValue } from '../types/ParameterValue';
import ButtonGroupSelector from './ButtonGroupSelector';

type IssuePopupProps = {
    issue: Issue | null;
    onClose: () => void;
    onSubmit: (
        issue: Issue,
        parameters: { [key: number]: ParameterValue[] },
    ) => void;
    initialValues?: { [key: number]: ParameterValue[] };
};

const IssuePopup: React.FC<IssuePopupProps> = ({
    issue,
    onClose,
    onSubmit,
    initialValues,
}) => {
    const [selectedIssue, setSelectedIssue] = useState<Issue | null>(issue);
    const [issuesList, setIssuesList] = useState([]);
    const [selectedParameters, setSelectedParameters] = useState<{
        [key: number]: ParameterValue[];
    }>(initialValues || {});

    const handleParameterChange = (
        parameterId: number,
        selected: Array<ParameterValue>,
    ) => {
        setSelectedParameters((prevState) => ({
            ...prevState,
            [parameterId]: selected,
        }));
    };

    const source = axios.CancelToken.source();

    useEffect(() => {
        const issues = axios
            .get("/api/issues")
            .then((response) => {
                setIssuesList(response.data);
            })
            .catch((error) => {
                if (axios.isCancel(error)) {
                    console.log("Axios request cancelled.");
                } else console.error("Error fetching issues:", error);
            });
        // Cleanup function to cancel the Axios request if the component is unmounted
        return () => {
            source.cancel(
                "IssuePopup component unmounted. Axios request cancelled.",
            );
        };
    }, []);

    const handleIssueChange = (event) => {
        const issueId = event.target.value;
        const selected: Issue | undefined = issuesList.find(
            (i: Issue) => i.id === Number(issueId),
        );
        if (selected) setSelectedIssue(selected);
    };
    return (
        <div className="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-black bg-opacity-50">
            <div className="bg-white p-6 rounded-md relative w-1/2">
                <button
                    onClick={onClose}
                    className="absolute top-2 right-2 p-1 rounded-md"
                >
                    x
                </button>
                <h2 className="text-2xl mb-4">Issues</h2>
                <div>
                    <select
                        value={selectedIssue?.id}
                        onChange={handleIssueChange}
                        className="border rounded-md p-2 w-full"
                    >
                        {issuesList.map((i: Issue) => (
                            <option key={i.id} value={i.id}>
                                {i.name}
                            </option>
                        ))}
                    </select>
                </div>

                <div className="mt-4 space-y-2">
                    <label className="block mb-2">Parameters:</label>
                    {selectedIssue?.parameters?.map((param) => (
                        <div
                            key={param.id}
                            className="mb-2 flex flex-row flex-nowrap items-baseline justify-between"
                        >
                            <span className="whitespace-nowrap">
                                {param.name}
                            </span>
                            <ButtonGroupSelector
                                options={param.possible_values}
                                onSelectionChange={(selected) =>
                                    handleParameterChange(param.id, selected)
                                }
                                initialValue={
                                    selectedParameters[param.id] || []
                                }
                                allowMultiple={param.allow_multiple}
                            />
                        </div>
                    ))}
                </div>

                <div className="mt-4 flex justify-end">
                    <button
                        onClick={() => {
                            if (selectedIssue) {
                                onSubmit(selectedIssue, selectedParameters);
                            }
                        }}
                        className="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        disabled={!selectedIssue}
                    >
                        Save
                    </button>
                </div>
            </div>
        </div>
    );
};

export default IssuePopup;
