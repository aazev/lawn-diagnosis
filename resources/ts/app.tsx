import React, { StrictMode, useContext, useState } from 'react';
import { createRoot } from 'react-dom/client';

import { ApplicationContext } from './components/AppContext';
import DynamicImage from './components/DynamicImage';
import IssueEditor from './components/IssueEditor';
import RecommendationBox from './components/RecommendationBox';
import { DetailedIssue, Issue } from './types/Issue';
import { ParameterValue } from './types/ParameterValue';

const App = () => {
    const [issues, setIssues] = useState<DetailedIssue[]>([]);

    const addIssue = (
        newIssue: Issue,
        parameters: { [key: number]: ParameterValue[] },
    ) => {
        console.log("Tring to add new issue", newIssue);
        if (!issues.find((issue) => issue.id === newIssue.id)) {
            const issueToadd = {
                ...newIssue,
                parameter_values: parameters,
            };
            setIssues((prevIssues) => [...prevIssues, issueToadd]);
        }
    };

    const removeIssue = (issueId: number) => {
        setIssues((prevIssues) =>
            prevIssues.filter((issue) => issue.id !== issueId),
        );
    };

    const handleIssueSubmit = (
        issue: Issue,
        parameters: { [key: number]: ParameterValue[] },
    ) => {
        // logic here, for example:
        console.log("Selected Issue:", issue);
        console.log("Selected Parameters:", parameters);
        addIssue(issue, parameters);
        // ... any other necessary logic ...
    };

    const context = {
        ...useContext(ApplicationContext),
        issues,
        add_issue: addIssue,
        remove_issue: removeIssue,
        handleIssueSubmit,
    };

    return (
        <ApplicationContext.Provider value={context}>
            <div className="min-h-screen bg-gray-100 p-4">
                <DynamicImage />
                <div className="flex mt-6">
                    <IssueEditor />
                    <RecommendationBox />
                </div>
            </div>
        </ApplicationContext.Provider>
    );
};

const container = document.getElementById("app");
if (container) {
    createRoot(container).render(
        <StrictMode>
            <App />
        </StrictMode>,
    );
}
