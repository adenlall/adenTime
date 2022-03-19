import Footer from "../footer/footer";
import Navbar from "../navbar/Navbar";

function ChangeLog() {
    return (
        <>
            <div className='p-0 m-0 flex flex-col space-y-4 items-center bg-white dark:bg-gray-900'>
                <Navbar />
                <div className="lg:w-3/4 mt-16 w-4/5 shadow-xl flex md:flex-row flex-col items-center h-80 justify-center rounded-lg dark:text-slate-100 text-gray-800" style={{ background: 'url("https://tlgur.com/d/8BOqzyxG") center / cover' }}>
                    <div className="flex flex-col h-full w-full items-center content-center rounded-lg p-4 justify-center" style={{ background: 'linear-gradient(228deg, #000000ba, transparent)' }}>
                        <div className="flex flex-col items-start space-y-4">
                            <header className="text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Track full progress on GitHub</header>
                            <a rel="nofollow" href="https:www.github.com/adenlall/salatok"><button className="btn">GitHub</button></a>
                        </div>
                    </div>
                </div>

                <div className="lg:w-full mt-12 w-full flex md:flex-row flex-col items-center min-h-fit  justify-center  p-4 rounded-lg dark:text-slate-100 text-gray-800">
                    <div className="px-14 items-center ">
                        <div className="flex flex-col w-full space-y-2">
                            <h1 class="text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">First Release</h1>
                            <p>Friay 18-03-22</p>
                        </div>
                        <div className="flex space-x-2">
                            <div className="p-2 pl-0 text-xl lg:w-3/4 w-full items-center font-bold tracking-tight text-gray-900 dark:text-white sm:text-2xl">
                                thus smoke invented molecular constantly physical cloud various ran bus noon anyway zero plenty trip list water determine arrangement straw diagram pair mix told
                                thus smoke invented molecular constantly physical cloud various ran bus noon anyway zero plenty trip list water determine arrangement straw diagram pair mix told
                                thus smoke invented molecular constantly physical cloud various ran bus noon anyway zero plenty trip list water determine arrangement straw diagram pair mix told
                                thus smoke invented molecular constantly physical cloud various ran bus noon anyway zero plenty trip list water determine arrangement straw diagram pair mix told
                            </div>
                            <div className="lg:w-1/4 w-full min-h-fit">
                                <img alt="" className="object-cover" src="https://tlgur.com/d/4qqQmvZ4"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div className='w-full flex lg:flex-row flex-col items-stretch justify-center content-center space-y-4 space-x-0 lg:space-y-0 lg:space-x-4 p-4'>
                        <Footer />
                    </div>

            </div>
        </>
    );
}

export default ChangeLog;