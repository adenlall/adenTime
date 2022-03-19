import Clock from "./Clock";

function ChSal(props) {
    return ( 
        <div className="flex w-full items-center content-center justify-center">
            
                <Clock cc={props.cc} query={props.query}/>
            </div>
     );
}

export default ChSal;