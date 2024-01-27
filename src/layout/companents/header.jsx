import React, { useState } from 'react'
import Hamburguer from '../../assets/hamburger.svg'
import logo from '../../assets/logo.svg'
import confetti from '../../assets/confetti.svg'


function header() {

    const [menu, setMenu] = useState(false);

    const toggleMenu = () => {
        setMenu(!menu);
    }


    if (menu) {
        console.log("menu is true")
    } else {
        console.log("menu is false")
    }



        return (
        <>
            <div className="sm:block hidden ">
                <div className="bg-[#232323] w-full h-[57px] border-b-4 border-[#535252] flex justify-between">
                    <div className="flex space-x-4 items-center text-white font-bold uppercase px-2">
                        <img className="mb-2 ml-5 transition-all ease-in-out duration-300 hover:scale-95 hover:text-sm rounded-lg" src={logo} alt="myLogo"/>
                        <a className='transition-all ease-in-out duration-300 hover:scale-95 hover:bg-white/10 py-2 hover:text-sm px-3 rounded-lg' href="/" >Home</a>
                        <a className="transition-all ease-in-out duration-300 hover:scale-95 hover:bg-white/10 py-2 hover:text-sm px-3 rounded-lg" href="/projects">Projects</a>

                    </div>
                    <a href="mailto:darkshiny@duck.com" className="h-full w-40 bg-[#006BFF] hover:bg-[#005CDB] items-center justify-center space-x-3 flex font-bold text-white text-sm transition">
                        <img src={confetti} alt="confetti"/>
                               <div  className="flex flex-col">
                                   <h1>
                                       LETS TALK
                                   </h1>
                               </div>
                    </a>
                </div>
            </div>
            <div className="sm:hidden block">
                <div className="items-center flex flex-col">
                    <div className="bg-[#232323] w-full h-[57px] border-b-4 border-[#535252] flex   items-center justify-center justify-between">
                        <img className="mb-2 ml-5" src={logo} alt=""/>
                        <h1 className="text-white text-[#6D6D6D] uppercase">ITS A MOBILE VERSION</h1>
                        <button className="px-3 text-white duration-300 hover:scale-90 hover:bg-white/10 py-2 hover:text-sm  rounded-lg " onClick={toggleMenu}><img src={Hamburguer} alt=""/></button>
                    </div>
                    {menu === true &&
                        <div className="bg-[#2c2c2c] w-full h-[40px] space-x-5 text-white font-bold uppercase flex items-center justify-center duration-300">
                        <a className='transition-all ease-in-out duration-300 hover:scale-95 hover:bg-white/10 py-1 hover:text-sm px-3 rounded-lg' href="/" >Home</a>
                        <a className="transition-all ease-in-out duration-300 hover:scale-95 hover:bg-white/10 py-1 hover:text-sm px-3 rounded-lg" href="/projects">Projects</a>
                        </div>
                    }

                </div>
            </div>
        </>


    )
}

export default header;
