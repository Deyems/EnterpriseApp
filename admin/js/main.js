let close = document.querySelector('.buttons');
let open = document.querySelector('.hiddenbut');

let sideBar = document.querySelector("aside");

close.addEventListener("click",function(){
    let hide = -350;
    
    sideBar.style.marginLeft = hide +"px";
    sideBar.style.opacity = '0.5';
    sideBar.style.transition = "ease-out 1s";
    
    close.style.opacity = '0';
    close.style.display = "none";
    close.style.transition = "ease-out 1s";

    open.style.display = "block";
    open.style.opacity = '1';
    open.style.transition = "ease-out 1s";
});

open.addEventListener("click",function(){
    sideBar.style.marginLeft = 0 +"px";
    sideBar.style.opacity = '1';
    sideBar.style.transition = "ease-out 1s";

    close.style.opacity = '1';
    close.style.display = "block";
    close.style.transition = "ease-out 1s";

    open.style.display = "none";
    open.style.opacity = '0';
    open.style.transition = "ease-out 1s";

});


let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("header").style.top = "0";
  } else {
    document.querySelector("header").style.top = "-150px";
  }
  prevScrollpos = currentScrollPos;
}