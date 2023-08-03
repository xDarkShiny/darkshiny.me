import { useState, useEffect, createContext } from "react";
import axios from "axios";

function Head() {

    const [data, setData] = useState({});
    const [loading, setLoading] = useState(true);

    useEffect(() => {
            axios
                .get("https://api.lanyard.rest/v1/users/894637264259387402")
                .then((res) => {
                    setData(res.data.data);
                    setLoading(false);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        []);

    console.log(data);
    return (
        <div className="flex flex-col relative px-2 md:px-0">
            <div className="h-32 md:w-[700px] w-auto rounded-xl bg-black"></div>
            <img className="rounded-full w-32 absolute md:left-10 left-2 top-20 border-[#171717] border-[10px]" src="https://images-ext-2.discordapp.net/external/Myny-74NTtSt0txqUGrvs66Si1oyBAaaaYZ4oVe0lPc/%3Fsize%3D1024/https/cdn.discordapp.com/avatars/894637264259387402/1a1ac5c1c02d6a159fb0aeab99d3d010.png" alt=""/>
            <h1 className="md:ml-44 ml-36 text-xl  mt-3 ">@darkshiny7</h1>
        </div>
    )
}
export default Head;
