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
                    <div className="flex space-x-10 items-center text-white font-bold uppercase px-2">
                        <img className="mb-2 ml-5" src={logo} alt="myLogo"/>
                        <a href="/" >Home</a>
                        <a href="/projects">Projects</a>
                        <a href="/beta">BETA v0.2</a>

                    </div>
                    <a href="#" className="h-full w-32 bg-[#006BFF] hover:bg-[#005CDB] items-center justify-center space-x-3 flex font-bold text-white text-sm transition">
                        <img src={confetti} alt="confetti"/>
                               <div className="flex flex-col">
                                   <h1>
                                       LETS
                                   </h1>
                                   <h1>
                                       TALK
                                   </h1>
                               </div>
                    </a>
                </div>
            </div>
            <div className="sm:hidden block">
                <div className="items-center flex flex-col">
                    <div className="bg-[#232323] w-full h-[57px] border-b-4 border-[#535252] flex  items-center justify-center justify-between">
                        <img className="mb-2 ml-5" src={logo} alt=""/>
                        <h1 className="text-white text-[#6D6D6D] uppercase">ITS A MOBILE VERSION</h1>
                        <button className="px-4 text-white" onClick={toggleMenu}><img src={Hamburguer} alt=""/></button>
                    </div>
                    {menu === true &&
                        <div className="bg-[#006BFF] w-full h-[40px] space-x-5 text-white font-bold uppercase flex items-center justify-center">
                            <a href="/" >Home</a>
                            <a href="/projects">Projects</a>
                            <a href="/beta">BETA v0.2</a>
                        </div>
                    }

                </div>
            </div>
        </>


    )
}

export default header;
