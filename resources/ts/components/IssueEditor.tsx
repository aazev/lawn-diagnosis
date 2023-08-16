import React, { useContext, useState } from 'react';

import { Issue } from '../types/Issue';
import { ParameterValue } from '../types/ParameterValue';
import { ApplicationContext } from './AppContext';
import IssueComponent from './IssueComponent';
import IssuePopup from './IssuePopup';

function IssueEditor() {
    const { issues, handleIssueSubmit } = useContext(ApplicationContext);
    const [isPopupVisible, setPopupVisible] = useState(false);

    const handleSubmit = (
        issue: Issue,
        parameters: { [key: number]: ParameterValue[] },
    ) => {
        handleIssueSubmit(issue, parameters);
        setPopupVisible(false);
    };

    function clamp(value, min, max) {
        return Math.min(Math.max(value, min), max);
    }

    return (
        <div className="flex-1 p-4 bg-white rounded-md mr-4">
            <h2 className="text-xl font-bold mb-4">
                Select Issues & Parameters
            </h2>
            <div className="flex flex-col flex-nowrap space-y-2 mb-4">
                {issues.map((issue) => {
                    const issue_max = issue.parameters.reduce((acc, param) => {
                        const values_max = param.possible_values.reduce(
                            (acc, value) => {
                                return acc + value.score;
                            },
                            0,
                        );

                        return acc + values_max;
                    }, 0);
                    const values = issue.parameters.reduce((acc, param) => {
                        const values = param.possible_values.reduce(
                            (acc, value) => {
                                const value_total = issue.parameter_values[
                                    param.id
                                ].reduce((sum, v) => {
                                    return sum + v.score;
                                }, 0);
                                return acc + value_total;
                            },
                            0,
                        );
                        return (acc += values);
                    }, 0);

                    const score = clamp((100 * values) / issue_max, 0, 100);
                    return (
                        <IssueComponent
                            issue={issue}
                            key={issue.id}
                            score={score}
                        />
                    );
                })}
            </div>
            <button
                type="button"
                className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                onClick={() => setPopupVisible(true)}
                disabled={isPopupVisible}
            >
                Add New Issue
            </button>
            {isPopupVisible && (
                <IssuePopup
                    issue={null}
                    onClose={() => setPopupVisible(false)}
                    onSubmit={handleSubmit}
                />
            )}
        </div>
    );
}

export default IssueEditor;
