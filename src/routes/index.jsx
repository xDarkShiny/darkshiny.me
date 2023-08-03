import { createBrowserRouter } from "react-router-dom";
import Home from "../pages/Home";
import Projects from "../pages/Projects";
import Web from "../layout/web";
import Background from "../layout/background";
import Beta from "../pages/beta";


const router = createBrowserRouter([
    {
        path: "/",
        element: <Web />,
        errorElement: <div>404</div>,
        children: [
            {
                element: <Background />,
                children: [
                    {
                        index: true,
                        element: <Home />,
                    },
                    {
                        path: "/projects",
                        element: <Projects />,
                    },
                    {
                        path: "*",
                        element: <div>404</div>,
                    },
                    {
                        path: "/projects/:id",
                        element: <div>Project</div>,
                    },
                    {
                        path: "/beta",
                        element: <Beta />,
                    }
                    ]
            }
        ]
    }

]);

export default router;
