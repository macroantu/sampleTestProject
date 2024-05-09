const hamburgerIcon = document.querySelector('.hamburger-icon-wrapper');
const hamburgerContent = document.querySelector('#hamburger-menu');
const closeBtn = document.querySelectorAll('.close-btn');
var isOpened = false;
hamburgerIcon.addEventListener('click',function(){
    console.log(hamburgerContent);
    if(!isOpened){
        document.body.style.overflowY='hidden';
        console.log(isOpened)
        hamburgerContent.classList.add('hamburger-opened');
        isOpened=true;
    }
})

for(let i = 0 ;i<closeBtn.length;i++){
    closeBtn[i].addEventListener('click',function (){
        if(isOpened){
            document.body.style.overflowY='scroll';
            hamburgerContent.classList.remove('hamburger-opened');
            isOpened=false;
        }
    })
}
