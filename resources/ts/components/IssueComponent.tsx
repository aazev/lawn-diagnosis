import React, { useContext, useMemo, useState } from 'react';

import { Issue } from '../types/Issue';
import { ParameterValue } from '../types/ParameterValue';
import { ApplicationContext } from './AppContext';
import IssuePopup from './IssuePopup';

type IssueComponentProps = {
    issue: Issue;
    score: number;
};

const IssueComponent: React.FC<IssueComponentProps> = ({ issue, score }) => {
    const { handleIssueSubmit, remove_issue } = useContext(ApplicationContext);
    const [showPopup, setShowPopup] = useState(false);
    const [storedParameters, setStoredParameters] = useState<{
        [key: number]: ParameterValue[];
    }>({});

    const bgColor = useMemo(() => {
        if (score > 80) return "bg-red-600";
        if (score > 50) return "bg-yellow-500";
        if (score > 30) return "bg-green-400";
        return "bg-gray-300";
    }, [score]);
    const scoreColor = useMemo(() => {
        if (score > 80) return "text-red-600";
        if (score > 50) return "text-yellow-500";
        if (score > 30) return "text-green-400";
        return "text-gray-300";
    }, [score]);

    const handleSubmit = (
        issue: Issue,
        parameters: { [key: number]: ParameterValue[] },
    ) => {
        handleIssueSubmit(issue, parameters);
        setStoredParameters(parameters);
        setShowPopup(false);
    };

    return (
        <div
            className={`${bgColor} rounded-md relative shadow-lg flex flex-row flex-nowrap space-x-2`}
        >
            <div className="flex-1 p-4 ">
                <h3 className="text-xl">{issue.name}</h3>
                <p>{issue.description}</p>
                <button
                    className="absolute top-2 right-2 bg-white p-1 rounded-md"
                    onClick={() => remove_issue(issue.id)}
                >
                    x
                </button>

                {showPopup && (
                    <IssuePopup
                        issue={issue}
                        initialValues={storedParameters}
                        onClose={() => setShowPopup(false)}
                        onSubmit={handleSubmit}
                    />
                )}
            </div>
            <div
                className={`p-2 flex flex-row items-center justify-center text-6xl whitespace-nowrap bg-white ${scoreColor}`}
            >{`${score.toLocaleString("en-US", {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2,
            })} %`}</div>
        </div>
    );
};

export default IssueComponent;
