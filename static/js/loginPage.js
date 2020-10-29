function loginPage(){
    let logPage = document.querySelector(".login-page");
    document.querySelector(".login-page").style.animation = "slide-width-fwd 0.45s";
    logPage.style.display = "flex";
}

window.addEventListener("mousedown", onMouseDown);

function onMouseDown(e) {
    isScrollbarClicked = false;
  if (e.offsetX > e.target.clientWidth || e.offsetY > e.target.clientHeight) 
  {
    isScrollbarClicked = true;
   }
}

$(document).mouseup(function (e) { 
  if (($(e.target).closest(".login-page").length === 0) && ($(e.target).closest("#loginBut").length === 0) &&  !isScrollbarClicked ) { 
    document.querySelector(".login-page").style.animation = "slide-width-bwd 0.45s";
    //document.querySelector(".login-page").style.display = "none";
    setTimeout(function(){ document.querySelector(".login-page").style.display = "none"; }, 200);
  } 
}); 


