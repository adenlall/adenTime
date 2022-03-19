import { Routes, Route, Router, NavLink } from 'react-router-dom'
import SalatsDay from "./SalatsDay";
import ChSal from './ChSal';
import Ttst from './Ttst';

function NextSalat(props) {
    // if (useLocation().pathname==="/") { // TODO: Error here
        // document.getElementById("clos").style.display = "none"; // TODO: Error here
    // }else{
        // document.getElementById("clos").style.display = "block"; // TODO: Error here

    // }
 
    return ( 
        
        <>
        

        <div className="lg:w-1/2 w-full shadow-xl flex md:flex-row flex-col  justify-between items-center p-4 rounded-lg bg-slate-100 dark:bg-gray-800 dark:text-slate-100 text-gray-800">
            <SalatsDay cc={props.cc} query={props.query} />

            <div className='w-full flex flex-col items-center'>
            <Routes>
                    <Route index               element={ <ChSal    query={props.query} cc={props.cc} /> } />
                    <Route path='/salat/fajr'     element={ <Ttst     query={props.query}  cc={props.cc} ynt="Fajr" /> } />
                    <Route path='/salat/sunrise'  element={ <Ttst     query={props.query}  cc={props.cc} ynt="Sunrise" /> } />
                    <Route path='/salat/dhuhr'    element={ <Ttst     query={props.query}  cc={props.cc} ynt="Dhuhr" /> } />
                    <Route path='/salat/asr'      element={ <Ttst     query={props.query}  cc={props.cc} ynt="Asr" /> } />
                    <Route path='/salat/maghrib'  element={ <Ttst     query={props.query}  cc={props.cc} ynt="Maghrib" /> } />
                    <Route path='/salat/isha'     element={ <Ttst     query={props.query}  cc={props.cc} ynt="Isha" /> } />
            </Routes>
                <NavLink id='clos'  to='/'><button className='btn btn-sm btn-info'>Clock</button></NavLink>
            </div>

        </div>

        </>
        
     );
    
}

export default NextSalat;