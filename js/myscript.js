let navControl = document.querySelector('.nav_buttons');
let navList = document.querySelector('.navListlinks');

/*
document.addEventListener("DOMContentloaded",function(){
    setTimeout(function(){
        let navCount = document.querySelectorAll('.numbers');
        for(let i= 0; navCount.length; i++){
            navCount[i].className.add("active");
        }
        //alert("a goal is");
    },500);
});
*/

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("nav").style.top = "0";
  } else {
    document.querySelector("nav").style.top = "-150px";
  }
  prevScrollpos = currentScrollPos;

  // TO MAKE THIS PORTION COUNT OR ANIMATE
  let Counter = document.querySelectorAll(".numbers");
    for( let a = 0; a < Counter.length; a++){
    var sticky = Counter[a].offsetTop;   
}

if (window.pageYOffset == sticky) {
    //navbar.classList.add("sticky");
    //console.log("This height is "+sticky+ "px");
    for(let c = 0; c < Counter.length; c++){
        //value = Counter[c].innerHTML;
        //console.log(value);
    }
  } else {
    //navbar.classList.remove("sticky");
  }

}

document.addEventListener("load",function(){
    setTimeout(function(){
        let banner = document.querySelector("header");
        banner.className = "visible";
    },1000);
});

navControl.addEventListener("click",function(){
    //alert("I am working...");
    let value = navList.classList.contains("collapse");
    if(value){
        navList.classList.remove("collapse");
    }
    else{
        navList.classList.add("collapse");
    }
});

//let countNum = [];
//var count = document.getElementsByClassName("numbers")[0].innerHTML;
/*
for(i=0; i<navCount.length;i++){
navCount[i].addEventListener("click",function(){
    //alert("You are working");
    //alert("yOU are still the same");
    //let valu;2se
    //navCount[i].style.color = 'red';
    //console.log(valu[i]);
});
}
*/
