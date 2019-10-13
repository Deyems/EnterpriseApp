let network = document.querySelectorAll('.accord');
let value = document.querySelectorAll('.accord_hide');
// Variable for the submit input to echo success
let allSub = document.querySelectorAll('.subbtn');

let navControl = document.querySelector('.nav_buttons');
let navControl2 = document.querySelector('.nav_buttons2');
let navList = document.querySelector('.tray');
let menulinks = document.querySelectorAll('nav ul li a');


// SCRIPT FOR STICKY BAR
window.onscroll = function() {myFunction()};

let navbar = document.querySelector("nav");
let sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

/*FOR THE CLICK OFF BUTTON TO BRIND MENU_TRAY */

navControl.addEventListener("click",function(){
    navList.style.display = "block";
    navControl.style.display = "none";
    navControl2.style.display = "block";
});

navControl2.addEventListener("click",function(){
    navList.style.display = "none";
    navControl.style.display = "block";
    navControl2.style.display = "none";
});

//Variables for Progress Bar
//let 
    for(j = 0; j < menulinks.length; j++){
        menulinks[j].addEventListener("click",function(){
            this.classList.add("active");
        });
    }

    for(let i=0; i < network.length; i++){
        network[i].addEventListener("click",function(){
        //value[i].style.display = 'block';
        this.classList.toggle("active");

        let panel = this.nextElementSibling;
        if(panel.style.display === "block"){
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }

        
        /*
        if(value[i].style.display = 'block'){
            value[i].style.display = 'none';
        } else{
            value[i].style.display = 'block';
        }
            //this.nextSibling.style.display = 'block';
        //alert("I should work");
        */

        });
    }

    //SCRIPT FOR POP OUT SUCCESSFUL RECHARGE
    for(let i = 0; i < allSub.length; i++){
        allSub[i].addEventListener("submit",function(){
            //alert("Gone too soon!");
            document.getElementById("cone").style.display = "block";
        });
    }

    function count(){
        let elem = document.getElementById("innerBar");
        let width = 1;
        let id = setInterval(frame, 10);
        function frame(){
            if(width >= 100){
                clearInterval(id);
            } else{
                width++;
                elem.style.width = width + '%';
                elem.innerHTML = width * 1 + '%';
            }
        }

    }