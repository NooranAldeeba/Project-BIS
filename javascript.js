window.alert ("Welcome to my website!\n Enjoy!");  

 function popup1(){
    swal("Oh No!", "Something went wrong!", "error");
 }    

 const toTop = document.querySelector(".to-top");

 window.addEventListener("scroll", () =>{
    if(window.pageYOffset > 100){
        toTop.classList.add("active");
    }
    else{
        toTop.classList.remove("active");
    }
 })