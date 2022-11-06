document.querySelector("#show_1").addEventListener("click",function(){
    document.querySelector(".popup_1").classList.add("active");
 });
 document.querySelector(".popup_1 .btn_1").addEventListener("click",function(){
    document.querySelector(".popup_1").classList.remove("active");
 });