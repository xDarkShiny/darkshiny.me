import { Outlet } from "react-router-dom";


function Background() {
    return (
        <div className="min-h-screen bg-[#171717] items-center justify-center flex">
            <Outlet />
        </div>
    )
}

export default Background;
