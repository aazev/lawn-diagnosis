import React, { useContext } from 'react';

import { ApplicationContext } from './AppContext';

function RecommendationBox() {
    const { issues } = useContext(ApplicationContext);
    let processed = issues
        .flatMap((issue) => {
            return issue.parameters.flatMap((parameter) => {
                if (issue.parameter_values[parameter.id])
                    return issue.parameter_values[parameter.id].map(
                        (v) => v.recommendation,
                    );
                else return null;
            });
        })
        .filter((v) => v != null && v.length > 0);

    console.log(processed);

    return (
        <div className="flex-1 p-4 bg-white rounded-md">
            <h2 className="text-xl font-bold mb-4">Recommendations</h2>
            <ul className='class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400'>
                {issues.length > 0 ? (
                    issues
                        .flatMap((issue) => {
                            return issue.parameters.flatMap((parameter) => {
                                if (issue.parameter_values[parameter.id])
                                    return issue.parameter_values[
                                        parameter.id
                                    ].map((v) => v.recommendation);
                                else return null;
                            });
                        })
                        .filter((v) => v != null && v.length > 0)
                        .map((text, index) => (
                            <li key={`recommendation_${index}`}>
                                {text?.replace(/[\s]*[!?.]*$/, ";")}
                            </li>
                        ))
                ) : (
                    <p>
                        No recommendations yet, it's good to see your lawn has
                        no issues!
                    </p>
                )}
            </ul>
        </div>
    );
}

export default RecommendationBox;
