import React from 'react';

function DynamicImage() {
    // For simplicity, I'll use a placeholder image. You can replace this with your dynamic image logic.
    const imageUrl = "https://via.placeholder.com/600x600";

    return (
        <div className="flex flex-row items-center justify-center">
            <img
                src={imageUrl}
                alt="Dynamic"
                className="h-[600px] object-cover rounded-md aspect-square"
            />
        </div>
    );
}

export default DynamicImage;
