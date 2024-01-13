import { Outlet } from "react-router-dom";
import Header from "../companents/header.jsx";
import Footer from "../companents/footer.jsx";


function Web() {
    return (
        <div>
            <Header />
            <Outlet />
            <Footer />
        </div>
    );
}

export default Web;
