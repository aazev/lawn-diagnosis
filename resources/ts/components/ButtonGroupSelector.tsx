import React, { useEffect, useState } from 'react';

import { ParameterValue } from '../types/ParameterValue';

type ButtonGroupSelectorProps = {
    options: Array<ParameterValue>;
    onSelectionChange: (selected: Array<ParameterValue>) => void;
    initialValue: Array<ParameterValue>;
    allowMultiple: boolean;
};

const ButtonGroupSelector: React.FC<ButtonGroupSelectorProps> = ({
    options,
    onSelectionChange,
    initialValue,
    allowMultiple,
}) => {
    const [selectedOptions, setSelectedOptions] =
        useState<Array<ParameterValue>>(initialValue);

    useEffect(() => {
        onSelectionChange(selectedOptions);
    }, [selectedOptions]);

    const toggleOption = (option: ParameterValue) => {
        setSelectedOptions((prevState) => {
            if (prevState.includes(option)) {
                return prevState.filter((item) => item !== option);
            } else {
                if (!allowMultiple) {
                    return [option];
                }
                return [...prevState, option];
            }
        });
    };

    return (
        <div className="flex flex-row flex-wrap items-start justify-end">
            {options.map((option, idx) => (
                <button
                    key={idx}
                    className={`px-4 py-2 m-0.5 ${
                        selectedOptions.includes(option)
                            ? "bg-blue-500 text-white"
                            : "bg-gray-200"
                    }`}
                    onClick={() => toggleOption(option)}
                >
                    {option.value}
                </button>
            ))}
        </div>
    );
};

export default ButtonGroupSelector;
