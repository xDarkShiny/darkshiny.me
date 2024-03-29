import { useState, useEffect, createContext } from "react";
import link from '../../../assets/link.png';


function Head() {


    return (
        <div className="flex flex-col relative px-2 md:px-0">
            <div className="h-32 md:w-[700px] w-auto rounded-xl opacity-50 bg-black duration-300" style={{backgroundImage: `url("https://media.discordapp.net/attachments/933433373844705301/1200812693246972055/src_340x1912xbatman-2-nin-cikis-tarihi-belli-oldu.png?ex=65c78af8&is=65b515f8&hm=2a1d13372007baaf48ad82d6837ffd9e2b0e8a44d51fbc1fc6d96736ca8b44b4&=&format=webp&quality=lossless&width=1202&height=676")` }} ></div>
            <a href="https://discord.com/users/894637264259387402" target="_blank" className="group relative">
                <img className="rounded-full z-10 md:w-32 w-28 absolute md:left-10 left-5 bottom-[-80px] border-[#171717] border-[10px]  duration-300 hover:opacity-10" src="https://images-ext-1.discordapp.net/external/d6HohqB-xF9aPDhHcp3cd-7JVmDHW5Wlj-t-ub_PqTE/%3Fsize%3D1024/https/cdn.discordapp.com/avatars/894637264259387402/2d79e3be92fcc5d4ace67518743cebb6.png?format=webp&quality=lossless" alt=""/>
                <a class="absolute md:w-32 w-28 md:h-32 h-28 rounded-full flex md:left-10 items-center justify-center border-[#171717] border-[10px] bg-black  duration-300 left-5  bottom-[-80px]">
                    <img src={link} alt="" />
                 </a>
            </a>
            <h1 className="md:ml-44 ml-36 text-xl duration-300 mt-3 ">@darkshiny7</h1>
        </div>
    )
}
export default Head;
