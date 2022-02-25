// burger



if (window.matchMedia("(max-width: 1024px)").matches) {
    var btn = document.querySelector('.toggle_btn');
var nav = document.querySelector('.nav');
var ouvert = false;
var blur = document.getElementById("blur");

btn.onclick = function(){
    nav.classList.toggle('nav_open');
        if (ouvert) {
                    ouvert = false;
                    blur.style.filter= "blur(0px)";
                    }
        else {
            ouvert = true;
            blur.style.filter= "blur(4px)";
            }
}
  } 

else {}
  



