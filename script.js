const bar = document.getElementById('bar')
const nav = document.getElementById('navbar')
const close = document.getElementById('close')
if(bar){
    bar.addEventListener('click',()=>{
        nav.classList.add('active');
    })
}
if(close){
    close.addEventListener('click',()=>{
        nav.classList.remove('active');
    })
}

var mainimg =document.getElementById('mainimg');
var smallimg =document.getElementsByClassName('small-img');

smallimg[0].onclick=function(){
    mainimg.src= smallimg[0].src;
}
smallimg[1].onclick=function(){
    mainimg.src= smallimg[1].src;
}
smallimg[2].onclick=function(){
    mainimg.src= smallimg[2].src;
}
smallimg[3].onclick=function(){
    mainimg.src= smallimg[3].src;
}
function submitForm() {
    document.getElementById("myForm").submit();
}

// function myFunction() {
//     alert("Your order have been placed successfully!");
//   }

function myFunction() {
    var txt;
    if (confirm("Press Ok to confimr your order!")) {
      txt = "Order has been placed successfully!";
    } else {
      txt = "You cancel your order!";
    }
    document.getElementById("demo").innerHTML = txt;
  }