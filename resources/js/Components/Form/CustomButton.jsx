import React from 'react';
import { Button } from 'antd';

function CustomButton(props) {
    const { loading, onClick, type, className, children } = props;

    return (
        <Button
            type={type}
            onClick={onClick}
            className={`w-full rounded-md bg-blue-500 hover:bg-blue-700 text-white ${className}`}
            loading={loading}
        >
            {children}
        </Button>
    );
}

export default CustomButton;
