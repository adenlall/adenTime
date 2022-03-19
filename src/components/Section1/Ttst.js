import React, { useState, useEffect } from 'react';
import moment from 'moment'
import axios from 'axios';


function Ttst(props) {



    const [state, setState] = useState(true);
    const [week, setWeek] = useState(0);


    const fetchDatta = async () => {

        axios.get(`https://api.pray.zone/v2/times/this_week.json?ip=${props.query}`).then(res => {
            setWeek(res.data.results.datetime); setState(false);
        }).catch(err => window.alert('Ttst' +err))

    }

    useEffect(() => {
        fetchDatta()
    }, [state])


    const newArr = [];
    for (let i = 0; i < week.length; i++) {
        var diff = moment(week[i]['times'][props.ynt], 'HHmm').format('mm') - moment(week[0]['times'][props.ynt], 'HHmm').format('mm');
        if (moment(week[i]['times'][props.ynt], 'HHmm').format('HH') - moment(week[0]['times'][props.ynt], 'HHmm').format('HH') !== 0) {
                diff = 60 + diff
        }
        newArr.push(
            <div className='flex space-x-2 justify-between'>
                <p className='italic'>{moment(week[i]['date']['gregorian']).format('dddd')} {moment(week[i]['date']['gregorian']).format("MM-D")} :</p>
                <div className='flex justify-between w-1/3 space-x-2'>
                    <p className='px-2 pt-1 rounded-lg bg-slate-200 dark:bg-gray-700 dark:text-slate-100 text-gray-800' key={i}>{props.cc === 'MA' ? moment(moment(week[i]['times'][props.ynt], 'HH:mm').format()).add(1, 'hours').format('HH:mm') : week[i]['times'][props.ynt]}</p>
                    <p className={((diff > 0) ? 'text-green-500' : (diff < 0) ? 'text-red-500' : 'text-gray-400') + ' font-bold w-full'}>{((diff > 0) ? '+' : '')}{diff}<span className='text-xs'>min</span></p>
                </div>
            </div>
        )
    }

    if (state === true) {
        return 'Loadng ...'
    } if (state === false) {
        return (
            <>
                <div className='flex flex-col space-y-2 p-8 w-full'>
                    <h1 className='text-xl font-bold'>week times of {props.ynt} :</h1>
                    <div className='flex flex-col space-y-3 py-8 px-2'>{newArr}</div>
                    <h1>done!</h1>
                </div>
            </>
        );
    }
}

export default Ttst;