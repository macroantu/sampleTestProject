var inputs = document.getElementsByClassName('input-wrapper');
var labels = document.getElementsByClassName('label');
console.log(inputs[0].children[0].children[0].nodeName.toLowerCase());



for(let i = 0; i < inputs.length; i++){

    inputs[i].addEventListener('focusin',function(e){
        // console.log();
        labels[i].parentElement.parentElement.classList.remove('has_value');
        labels[i].style.transformOrigin="left";
        labels[i].style.left="15px";
        labels[i].style.top="18px";
        labels[i].style.transform="scale(0.75) translateY(calc(-100%))";
        labels[i].style.color="#3cb4ff";
        if("textarea" === e.target.nodeName.toLowerCase()){
            labels[i].style.left="16px";
            labels[i].style.top="18px";
        }
    })

    inputs[i].addEventListener('focusout',function(e){
      console.log('focus out')
        // if not empty
        console.log(e.target.nodeName + "focusout");

        if(e.target.value.length !== 0 ){
            labels[i].style.transformOrigin="left";


        }
        else{
            labels[i].style.transformOrigin="left";
            labels[i].style.left="15px";
            labels[i].style.top="50%";
            labels[i].style.transform="scale(1) translateY(-50%)";
            labels[i].style.color="#7C7C7C";
            if("textarea" === e.target.nodeName.toLowerCase()){
                labels[i].style.left="16px";
                labels[i].style.top="20px";
            }
        }
    })
}


