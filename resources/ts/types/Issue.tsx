import { Parameter, ParameterType } from './Parameter';
import { ParameterValue } from './ParameterValue';

type IssueType = {
    id: number;
    name: string;
    description: string;
    parameters: ParameterType[];
    image?: string;
    created_at: Date | string;
    updated_at?: Date | string | null;
};

export class Issue implements IssueType {
    id: number;
    name: string;
    description: string;
    parameters: Parameter[];
    image?: string;
    created_at: Date;
    updated_at?: Date | null;

    constructor(rawIssue: IssueType) {
        this.id = rawIssue.id;
        this.name = rawIssue.name;
        this.description = rawIssue.description;
        this.image = rawIssue.image;
        this.created_at = new Date(rawIssue.created_at);
        this.updated_at = rawIssue.updated_at
            ? new Date(rawIssue.updated_at)
            : null;
    }

    static from(rawIssue: IssueType): Issue {
        return new Issue(rawIssue);
    }

    static fromArray(rawIssues: IssueType[]): Issue[] {
        return rawIssues.map(Issue.from);
    }
}

export type DetailedIssue = Issue & {
    parameter_values: { [key: number]: ParameterValue[] };
};
