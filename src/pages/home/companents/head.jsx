import { useState, useEffect, createContext } from "react";
import axios from "axios";
import react from '../../../assets/react.svg';


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
            <img className="rounded-full md:w-32 w-28 absolute md:left-10 left-5 top-20 border-[#171717] border-[10px]" src="https://images-ext-1.discordapp.net/external/zls1qYBfsMmB9IirK1VSTeoSsqvTgUi_AA0jr0rLVZ8/%3Fsize%3D1024/https/cdn.discordapp.com/avatars/894637264259387402/43945eba9394acbdbabe701c79f0c300.png" alt=""/>
            <h1 className="md:ml-44 ml-32 text-xl  mt-3 ">@darkshiny7</h1>
        </div>
    )
}
export default Head;
