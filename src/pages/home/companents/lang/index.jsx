import react from '../../../../assets/react.svg'
import vue from '../../../../assets/vue.svg'
import svelte from '../../../../assets/svelte.svg'
import php from '../../../../assets/php.svg'
import js from '../../../../assets/js.svg'
import html from '../../../../assets/html.svg'
import mongo from '../../../../assets/mongo.svg'

function Lang() {
    return (
        <div className="items-start flex flex-col mr-5 justify-center space-y-5">
            <div className="lg:w-[500px] w-64 bg-[#1E1E1E] font-bold uppercase items-center p-5 flex h-12 space-x-3 border-2 border-[#272727] rounded-xl">
                <h1 className="py-1.5 px-4 text-sm bg-[#272727] rounded-md ">LANG</h1>
            </div>
            <div className="gap gap-5 font-normal lg:grid-cols-2 grid-cols-1 grid ">
                <div className="bg-[#1E1E1E] px-5 space-x-10 justify-items-start items-center  rounded-xl flex border-2 border-[#272727] w-64 h-28  transition-all ease-in-out duration-300 hover:scale-95">
                        <div className="bg-[#272727] items-center justify-center flex rounded-lg w-20 h-20">
                            <img src={react} className="h-10" alt="react"/>
                        </div>
                        <h1>REACT</h1>
                </div>
                <div className="bg-[#1E1E1E] px-5 space-x-10 justify-items-start items-center  rounded-xl flex border-2 border-[#272727] w-64 h-28 transition-all ease-in-out duration-300 hover:scale-95">
                    <div className="bg-[#272727] items-center justify-center flex rounded-lg w-20 h-20">
                        <img src={vue} className="h-10" alt="vue"/>
                    </div>
                    <h1>VUE</h1>
                </div>
                <div className="bg-[#1E1E1E] px-5 space-x-10 justify-items-start items-center  rounded-xl flex border-2 border-[#272727] w-64 h-28 transition-all ease-in-out duration-300 hover:scale-95">
                    <div className="bg-[#272727] items-center justify-center flex rounded-lg w-20 h-20">
                        <img src={svelte} className="h-10" alt="svelte"/>
                    </div>
                    <h1>SVELTE</h1>
                </div>
                <div className="bg-[#1E1E1E] px-5 space-x-10 justify-items-start items-center  rounded-xl flex border-2 border-[#272727] w-64 h-28 transition-all ease-in-out duration-300 hover:scale-95">
                    <div className="bg-[#272727] items-center justify-center flex rounded-lg w-20 h-20">
                        <img src={php} className="h-10" alt="php"/>
                    </div>
                    <h1>PHP</h1>
                </div>
                <div className="bg-[#1E1E1E] px-5 space-x-10 justify-items-start items-center  rounded-xl flex border-2 border-[#272727] w-64 h-28 transition-all ease-in-out duration-300 hover:scale-95">
                    <div className="bg-[#272727] items-center justify-center flex rounded-lg w-20 h-20">
                        <img src={js} className="h-10" alt="javascript"/>
                    </div>
                    <h1>JAVASCRIPT</h1>
                </div>
                <div className="bg-[#1E1E1E] px-5 space-x-10 justify-items-start items-center  rounded-xl flex border-2 border-[#272727] w-64 h-28 transition-all ease-in-out duration-300 hover:scale-95">
                    <div className="bg-[#272727] items-center justify-center flex rounded-lg w-20 h-20">
                        <img src={html} className="h-10" alt="html"/>
                    </div>
                    <h1>HTML</h1>
                </div>
                <div className="bg-[#1E1E1E] px-5 space-x-10 justify-items-start items-center  rounded-xl flex border-2 border-[#272727] w-64 h-28 transition-all ease-in-out duration-300 hover:scale-95">
                    <div className="bg-[#272727] items-center justify-center flex rounded-lg w-20 h-20">
                        <img src={mongo} className="h-10" alt="mongo"/>
                    </div>
                    <h1>MONGO</h1>
                </div>



            </div>
        </div>
    )
}
export default Lang;
