import React, { useState, useEffect } from 'react';
import axios from 'axios';


function Vers(props) {
    // const [wait, setWait] = useState(true);
    const [ayah, setAyah] = useState(0);
    // const [surah, setSurah] = useState(0);
    // const [snum, setSmum] = useState(0);

    const getQrn = () => {
        axios.get(`https://api.quran.com/api/v4/quran/verses/imlaei?verse_key=${props.num}`)
            .then((response) => {
                // handle success
                setAyah(response.data.verses[0].text_imlaei)
                //   console.log(response);
            })
            .catch((error) => {
                // handle error
                console.log(error);
            })


    }
    const fontType = (para) => {
        axios.get(`https://api.quran.com/api/v4/quran/verses/${para}?verse_key=${props.num}`)
            .then((response) => {
                // handle success
                setAyah(response.data['verses'][0][`text_${para}`])
                console.log(`https://api.quran.com/api/v4/quran/verses/${para}?verse_key=${props.num}`);
            })
            .catch((error) => {
                // handle error
                console.log(error);
            })

    }
    const trans = (para) => {
        axios.get(`https://api.quran.com/api/v4/quran/translations/${para}?verse_key=${props.num}`)
            .then((response) => {
                // handle success
                setAyah(response.data['translations'][0][`text`])
                console.log(`https://api.quran.com/api/v4/quran/verses/${para}?verse_key=${props.num}`);
            })
            .catch((error) => {
                // handle error
                console.log(error);
            })
    }
    
    useEffect(() => {
        getQrn()
    }, [])

    return (
        <div className="lg:w-1/2 w-full shadow-xl flex justify-between items-center p-4 rounded-lg bg-slate-100 dark:bg-gray-800 dark:text-slate-100 text-gray-800">
            <div className="flex w-full flex-col items-start justify-center content-center space-y-4 ">
                    <div id='ayyah' className='overflow-scroll max-h-48'>
                        <p className=" text-2xl"><span className="font-extrabold font-2xl italic">" </span>{ayah}<span className="font-extrabold font-2xl"> "</span></p>
                    </div>
               
                <div>
                    {/* <p className="text-xl">{surah.englishName + ' - ' + surah.englishNameTranslation }<p className='text-lg'>{'ayah : '+snum}</p></p> */}
                </div>
                <div className='w-full p-1 rounded-lg bg-slate-200 flex flex-col dark:bg-gray-900'>
                    <h1 className='pl-2 text-lg'>Select Ayah font format</h1>
                    <div className='w-full p-2 rounded-lg space-x-2'>
                        <button onClick={() => { fontType('indopak') }} className='badge badge-accent badge-outline'>indopak</button>
                        <button onClick={() => { fontType('uthmani') }} className='badge badge-accent badge-outline'>uthmani</button>
                        <button onClick={() => { fontType('uthmani_simple') }} className='badge badge-accent badge-outline'>simple</button>
                        <button onClick={() => { fontType('imlaei') }} className='badge badge-accent badge-outline'>imlaei</button>
                        <button onClick={() => { trans(20) }} className='badge badge-primary badge-outline'>english</button>
                        <button onClick={() => { trans(136) }} className='badge badge-primary badge-outline'>french</button>
                        <button onClick={() => { trans(78) }} className='badge badge-primary badge-outline'>russian</button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Vers;