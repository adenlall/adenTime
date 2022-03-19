import React, { useState, useEffect } from 'react';
import Axios from 'axios';
import moment from 'moment'


function Clock(props) { // TODO:         line 73....

    const [hAngle, sethAngle] = useState((new Date().getHours() % 12 / 12) * 360);
    const [mAngle, setmAngle] = useState((new Date().getMinutes() / 60) * 360);
    const [sAngle, setsAngle] = useState((new Date().getSeconds() / 60) * 360);

    const [slt, setSlt] = useState(0);
    const [stt, setStt] = useState(true);

    const [Hdiff, setHDiff] = useState(0);
    const [Mdiff, setMDiff] = useState(0);
    const [nextis, setNextis] = useState(0);


    const logTime = () => {


        const date = new Date();
        const hourm = date.getHours();
        const min = date.getMinutes();
        const sec = date.getSeconds();

        var hour = hourm % 12; // 12 format

        var angH = (hour / 12) * 360;
        var angM = (min / 60) * 360;
        var angS = (sec / 60) * 360;



        sethAngle(angH);
        setmAngle(angM);
        setsAngle(angS)

    }


    const fetchData = async () => {

        Axios.get(`https://api.pray.zone/v2/times/today.json?ip=${props.query}`).then(res => {
            setSlt(res.data.results.datetime[0].times); setStt(false);
        }).catch(err => { window.alert('Clock' + err) })
    }




    useEffect(() => {
        fetchData();
    }, [stt]);


    //


    const calC = async () => {

        const sltAr = ['Fajr', 'Sunrise', 'Dhuhr', 'Asr', 'Maghrib', 'Isha']

        for (let i = 0; i < sltAr.length; i++) {

            const nSl = slt[sltAr[i]];

            let Hdiff = moment(slt[sltAr[i]], 'HH:mm').add(1, 'hours').format('HH') - moment().format('HH');
            let Mdiff = moment(slt[sltAr[i]], 'HH:mm').format('mm') - moment().format('mm');


            if ((props.cc==='Ma'? moment(nSl, 'HH:mm').add(1, 'hours').format('HHmm'):moment(nSl, 'HH:mm').format('HHmm') ) > moment().format('HHmm')) {
                if (Mdiff < 0) {
                    Hdiff = Hdiff - 1;
                    Mdiff = 60 - Math.abs(Mdiff);
                }
                setHDiff(Hdiff);
                setMDiff(Mdiff);
                setNextis(sltAr[i]);
                // window.alert('if1')
                break;
            } else {

                Hdiff = (props.cc==='Ma'? moment(slt[sltAr[0]], 'HH:mm').add(1, 'hours').format('HH'): moment(slt[sltAr[0]], 'HH:mm').format('HH') ) - moment().format('HH');
                Mdiff = moment(slt[sltAr[0]], 'HH:mm').format('mm') - moment().format('mm');

                if (Mdiff < 0) {
                    Hdiff = Hdiff - 1;
                    Mdiff = 60 - Math.abs(Mdiff);
                }
                Hdiff = 24 - parseInt(moment().format('HH')) + (props.cc==='Ma'? parseInt(moment(slt[sltAr[0]], 'HH:mm').format('HH')): parseInt(moment(slt[sltAr[0]], 'HH:mm').add(1, 'hours').format('HH'))) ; // TODO: fix this
                setHDiff(Hdiff);
                setMDiff(Mdiff);
                setNextis(sltAr[0]);
                // window.alert('else')

            }

        }
    }


    useEffect(() => {


        let timerID = setInterval(() => {
            logTime();

        }, 1000)

        return () => {
            clearInterval(timerID)
        }


    })

    useEffect(() => {


        let timerID = setInterval(() => {

            calC()
            // console.log('step')            
        }, 1000)

        return () => {
            clearInterval(timerID)
            // console.log('clear')
        }



    });

    return (
        <div className="flex flex-col items-center content-center justify-center">
            <div className="flex justify-center py-10 group">
                <div className="relative z-10 flex flex-col items-center justify-start w-48 h-48 overflow-hidden bg-gray-900 rounded-full ">
                    <div className={"absolute w-1 origin-bottom bg-gradient-to-t from-white to-red-400 rounded-full h-2/5"} style={{ marginTop: '10%', transform: 'rotate(' + mAngle + 'deg)' }} />
                    <div className={"absolute w-1 origin-bottom bg-gradient-to-t from-white to-gray-300 rounded-full h-1/2"} style={{ transform: 'rotate(' + sAngle + 'deg)' }} />

                    <div className={'absolute h-1/2 w-1 origin-bottom rotate-[10deg] flex flex-col justify-end'} style={{ transform: 'rotate(' + hAngle + 'deg)' }} >
                        <div className="w-full rounded-full bg-gradient-to-t from-white to-blue-400 h-2/5" style={{ marginTop: '10%' }} />
                    </div>

                    <div className="absolute flex items-center justify-center flex-1 w-full h-full">
                        <div className="w-1 h-1 bg-white rounded-full" />
                    </div>
                </div>

            </div>
            <div className='flex flex-col space-y-2 items-center p-2'>
                <h1 className="font-bold text-lg">Next Salat : {nextis} <span className="font-extrabold"></span></h1>
                <h1 className=''>in: {Hdiff}h and {Mdiff}min </h1>
            </div>
        </div>
    );
}
export default Clock;
