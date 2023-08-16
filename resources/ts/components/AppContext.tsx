import { createContext } from 'react';

import { DetailedIssue, Issue } from '../types/Issue';
import { ParameterValue } from '../types/ParameterValue';

type ApplicationContextType = {
    available_issues: Issue[];
    issues: DetailedIssue[];
    selected_issue: Issue | null;
    handleIssueSubmit: (
        issue: Issue,
        parameters: { [key: number]: ParameterValue[] },
    ) => void;
    add_issue: (
        issue: Issue,
        parameters: { [key: number]: ParameterValue[] },
    ) => void;
    remove_issue: (issueId: number) => void;
    select_issue: () => void;
    update_issue: () => void;
    issue_parameter: any; // Use the appropriate type here.
    set_issue_parameter: () => void;
    set_issue_parameter_value: () => void;
    image_data: any | null; // Use the appropriate type here.
};

export const ApplicationContext = createContext<ApplicationContextType>({
    available_issues: [],
    issues: [],
    selected_issue: null,
    add_issue: () => {},
    handleIssueSubmit: () => {},
    remove_issue: (issueId: number) => {},
    select_issue: () => {},
    update_issue: () => {},
    issue_parameter: null,
    set_issue_parameter: () => {},
    set_issue_parameter_value: () => {},
    image_data: null,
});
