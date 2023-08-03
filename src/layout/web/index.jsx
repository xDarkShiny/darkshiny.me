import { Outlet } from "react-router-dom";
import Header from "../companents/header.jsx";

function Web() {
    return (
        <div>
            <Header />
            <Outlet />
        </div>
    );
}

export default Web;
