const View_btn = document.querySelectorAll('#view');
const container = document.querySelector('#container');


View_btn.forEach((btn,idx) =>{
    btn.addEventListener("click",()=>{
       container.classList.add("active");
    })
})