<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Counting Numbers on Page Scroll</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body onload="/*incrementCount(10)*/">
        <div>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
        </div>
        <div>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
        </div>
        <div>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
        </div>
        
        <div class="main_container" id="id_main_container">
            <div class="container_inner" id="display_div_id">
            </div>
        </div>

        <div>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
        </div>
        <div>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
            <h2>Ade is fine</h2>
        </div>

    </body>
    <style>
        .main_container{
        /*
        height: 46px;
        width: auto;
        padding: 3px;
        margin: 2px;
        max-width: 300px;
        background-color: #555555;
        align-content: center;
        border: 4px solid;
        transition: all 2s;*/
        }
        .container_inner{
            height: auto;
            border: none;
            background-color: brown;
            max-width: 290px;
            vertical-align: center;
            padding-top: 12px;
            padding-left: 10px;
            align-content: center;
        }

        .num_tiles {
        width:30px;
        height: 30px;
        background-color: #888888;
        color: #ffffff;
        font-size: 22px;
        text-align: center;
        line-height: 20px;
        padding: 3px;
        margin: 1.5px;
        font-family: verdana;
        vertical-align: center;
        }
        
        .none{
            animation-name: toggle_on_off;
            animation-duration: 5s;
            height: 46px;
            width: auto;
            padding: 3px;
            margin: 2px;
            max-width: 300px;
            background-color: #555555;
            align-content: center;
            border: 4px solid;
        }
        /*
        .show{
            opacity: 1;

        }
        */
        @keyframes toggle_on_off{
            from{
                opacity:0;
                display: none;
            }
            to{
                opacity: 1;
                display: block;
            }
        }
    </style>
    <script>
        let counter_list = [0, 0, 0];
        let str_counter_0 = counter_list[0];
        let str_counter_1 = counter_list[1];
        let str_counter_2 = counter_list[2];
        let display_str = "";
        let display_div = document.getElementById("display_div_id");
        /*
        function incrementCount(current_count){
            setInterval(function(){
                while (display_div.hasChildNodes()){
                    display_div.removeChild(display_div.lastChild);
                }
                str_counter_0++;
                if(str_counter_0 > 19){
                    str_counter_0 = 10;
                    str_counter_1++;
                }
                if(str_counter_1 > 99999){
                    str_counter_2++;
                }
                display_str = str_counter_2.toString() + " " + 
                str_counter_1.toString()+ " " + str_counter_0.toString();
                for(let i=0; i < display_str.length; i++){
                    let new_span = document.createElement('span');
                    new_span.className = 'num_tiles';
                    new_span.innerText = display_str[i];
                    display_div.appendChild(new_span);
                }
            }, 200);
        }
        
        setInterval(function(){
        window.scrollBy(200, 200);
        console.log(window.pageXOffset + window.pageYOffset);
        },1000);

        */
        let value = window.pageYoffset;
        let divheight = document.querySelector(".main_container");
        divScroll = divheight.offsetTop;
        //let settings = setInterval(slidein, 5000);
        //
            if(value<divScroll){
                clearinterval(settings);
                alert(value+ "is the windows"+ divScroll+ "is for the div");
            } else{
                let settings = setInterval(slidein, 5000);
                function slidein() {
                    let box = document.querySelector(".main_container");
                    box.className = "none";
                }
            }
            /*if(box.className = "none"){
                box.className = "show";
            }*/
            //box.style.transition = "ease-out 1s";
            //box.style.opacity = "0";
        
       
    </script>
</html>