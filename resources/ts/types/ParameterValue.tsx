export type ParameterValueType = {
    value: string;
    score: number | string;
    recommendation?: string;
};

export class ParameterValue implements ParameterValueType {
    value: string;
    score: number;
    recommendation?: string;

    constructor(data: ParameterValueType) {
        this.value = data.value;
        this.score =
            typeof data.score === "string"
                ? parseFloat(data.score)
                : data.score;
        if (isNaN(this.score)) {
            throw new Error("Invalid score value provided");
        }
        this.recommendation = data.recommendation;
    }
}
