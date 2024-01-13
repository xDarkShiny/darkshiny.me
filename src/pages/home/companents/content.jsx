import Discord from '../../../assets/discord.svg';
import Github from '../../../assets/github.svg';
import Lang from "./lang/index.jsx";
import arrow from '../../../assets/arrow.svg';
import react from '../../../assets/react.svg';




function Content() {
    return (
        <div className="flex md:flex-row flex-col items-center justify-self-start xl:space-x-[300px] xl:space-y-0 space-y-5  ">
                <div className="mt-12 md:ml-10 ml-2 px-2 md:px-0">
                    <span className="text-[#747474]">Hello ı am @darkshiny7</span>
                    <h1 className="text-2xl font-bold">FRONT-END DEVELOPER.</h1>
                    <div className="flex items-center md:ml-20 ml-0 mt-10 space-x-10">
                        <h1 className="flex flex-col items-center justify-center text-7xl font-bold text-[#006BFF]">
                            +2
                            <span className="text-sm font-medium mt-2 text-[#747474]">Years Of Experience</span>
                        </h1>
                        <h1 className="flex flex-col items-center justify-center text-7xl font-bold text-[#006BFF]">
                            +7
                            <span className="text-sm font-medium mt-2 text-[#747474]">Completed Projects</span>
                        </h1>
                    </div>
                    <h2 className="mt-5 text-[#747474]">ABOUT ME</h2>
                    <h1 className="text-2xl mt-3 md:w-[422px] w-auto font-bold">I develop websites as a hobby. Every time I try, I try and develop different things.</h1>
                    <h2 className="mt-5 text-[#747474]">CONTACT</h2>
                    <div className="flex mt-2 space-x-5">
                        <a target='_blank' href="https://discord.com/users/894637264259387402" className="flex w-14 h-14 items-center justify-center rounded-xl bg-[#252525]"><img className="w-8" src={Discord} alt="discord"/></a>
                        <a target='_blank' href="https://github.com/xDarkShiny" className="flex w-14 h-14 items-center justify-center rounded-xl bg-[#252525]"><img className="w-8" src={Github} alt="github"/></a>
                    </div>
                    <a href='/projects' className="flex mt-4 rounded-md px-5 uppercase py-3 bg-[#006BFF] w-52 items-center justify-between font-bold text-sm"><h1>See Projects</h1><img src={arrow} alt="arrow"/></a>
                </div>
            <Lang />
        </div>
    )
}
export default Content;
