import { ParameterValue, ParameterValueType } from './ParameterValue';

export type ParameterType = {
    id: number;
    name: string;
    description: string;
    possible_values: ParameterValueType[];
    allow_multiple: boolean;
    created_at: Date | string;
    updated_at?: Date | string | null;
};

export class Parameter implements ParameterType {
    id: number;
    name: string;
    description: string;
    possible_values: ParameterValue[];
    allow_multiple: boolean;
    created_at: Date;
    updated_at?: Date | null;

    constructor(data: ParameterType) {
        this.id = data.id;
        this.name = data.name;
        this.description = data.description;
        this.possible_values = data.possible_values.map(
            (value) => new ParameterValue(value),
        );
        this.allow_multiple = data.allow_multiple;
        this.created_at = new Date(data.created_at);
        if (data.updated_at) {
            this.updated_at = new Date(data.updated_at);
        }
    }
}
