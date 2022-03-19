import {NavLink} from 'react-router-dom'
import React, { useState, useEffect } from 'react';
import Axios from 'axios';
import moment from 'moment'


function SalatsDay(props) {

    const [stateAPI, setStateAPI] = useState(false);
    const [salatAPI, setSalatAPI] = useState(0);

    const fetchData = async () => {

        Axios.get(`https://api.pray.zone/v2/times/today.json?ip=${props.query}`).then(res => {
            setSalatAPI(res.data);setStateAPI(true);
        }).catch(err=>{window.localStorage('SalatDay' + err)})
    }

   useEffect(() => {
       fetchData()
    },[stateAPI])



if (stateAPI === false) {
    return(
    <>Opss...</>
    )
}
if (stateAPI === true) {
    
return (
        <>
            
            <div className="w-2/3 rounded-lg shadow-lg" style={{ background: "url('https://tlgur.com/d/GZ3XKdNg') center center / cover" }}>
                <div className="flex flex-col rounded-lg items-center space-y-4 justify-center content-center w-full h-full p-4 overflow-y-scroll" style={{ background: 'linear-gradient(71deg, #000000d9, transparent)' }} >

            <div className="p-2 px-4 w-full rounded-lg space-x-2 " style={{ background: "linear-gradient(21deg,  #00000061, #ffffff29)" }}>
                <header className="font-bold text-lg"><NavLink to='/salat/fajr'>Fajr</NavLink></header>
                <p className="">{props.cc === 'MA' ? moment(moment(salatAPI.results.datetime[0].times.Fajr, 'HH:mm').format()).add(1,'hours').format('HH:mm') : salatAPI.results.datetime[0].times.Fajr}</p>
            </div>
            <div className="p-2 px-4 w-full rounded-lg space-x-2 " style={{ background: "linear-gradient(21deg,  #00000061, #ffffff29)" }}>
                <header className="font-bold text-lg"><NavLink to='/salat/sunrise'>Sunrise</NavLink></header>
                <p className="">{props.cc === 'MA' ? moment(moment(salatAPI.results.datetime[0].times.Sunrise, 'HH:mm').format()).add(1,'hours').format('HH:mm') : salatAPI.results.datetime[0].times.Sunrise}</p>
            </div>
            <div className="p-2 px-4 w-full rounded-lg space-x-2 " style={{ background: "linear-gradient(21deg,  #00000061, #ffffff29)" }}>
                <header className="font-bold text-lg"><NavLink to='/salat/dhuhr'>Dhuhr</NavLink></header>
                <p className="">{props.cc === 'MA' ? moment(moment(salatAPI.results.datetime[0].times.Dhuhr, 'HH:mm').format()).add(1,'hours').format('HH:mm') : salatAPI.results.datetime[0].times.Dhuhr}</p>
            </div>
            <div className="p-2 px-4 w-full rounded-lg space-x-2 " style={{ background: "linear-gradient(21deg,  #00000061, #ffffff29)" }}>
                <header className="font-bold text-lg"><NavLink to='/salat/asr'>Asr</NavLink></header>
                <p className="">{props.cc === 'MA' ? moment(moment(salatAPI.results.datetime[0].times.Asr, 'HH:mm').format()).add(1,'hours').format('HH:mm') : salatAPI.results.datetime[0].times.Asr}</p>
            </div>
            <div className="p-2 px-4 w-full rounded-lg space-x-2 " style={{ background: "linear-gradient(21deg,  #00000061, #ffffff29)" }}>
                <header className="font-bold text-lg"><NavLink to='/salat/maghrib'>Maghrib</NavLink></header>
                <p className="">{props.cc === 'MA' ? moment(moment(salatAPI.results.datetime[0].times.Maghrib, 'HH:mm').format()).add(1,'hours').format('HH:mm') : salatAPI.results.datetime[0].times.Maghrib}</p>
            </div>
            <div className="p-2 px-4 w-full rounded-lg space-x-2 " style={{ background: "linear-gradient(21deg,  #00000061, #ffffff29)" }}>
                <header className="font-bold text-lg"><NavLink to='/salat/isha'>Isha</NavLink></header>
                <p className="">{props.cc === 'MA' ? moment(moment(salatAPI.results.datetime[0].times.Isha, 'HH:mm').format()).add(1,'hours').format('HH:mm') : salatAPI.results.datetime[0].times.Isha}</p>
            </div>
            
        

                </div>
            </div>
            

        </>
     );


}
}

export default SalatsDay;