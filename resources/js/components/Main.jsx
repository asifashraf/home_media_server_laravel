import React from 'react';
import ReactDOM from 'react-dom/client';
import 'antd/dist/reset.css';
import { Button } from 'antd';
function Main() {
    return (
        <div>
            <h1>Hello, world!</h1>
            <div>
                <Button type="primary">Hello Antd</Button>
            </div>
        </div>
    );
}

export default Main;


if (document.getElementById('react-root')) {
    const Index = ReactDOM.createRoot(document.getElementById("react-root"));

    Index.render(
        <React.StrictMode>
            <Main/>
        </React.StrictMode>
    )
}
