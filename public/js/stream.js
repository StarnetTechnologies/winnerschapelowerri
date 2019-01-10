side = document.querySelector('[data-side]');
toggler = document.querySelector('#side-toggler');
vid_icon = toggler.innerHTML;
content = document.querySelector('#main');

window.addEventListener('resize',function(){
    showside();
});

function sideToggler(){
    if(side.getAttribute('data-side') == 'hide' ){
        showside();
    }else{
        hideside();
    }
}
function showside(){
    side.setAttribute('data-side','show');
    toggler.setAttribute('data-toggler','show');
    toggler.innerHTML = "&times";
   // main.setAttribute('class', 'col-sm-8')
}
function hideside(){
    side.setAttribute('data-side','hide');
    toggler.setAttribute('data-toggler','hide')
    toggler.innerHTML = vid_icon;
    //main.setAttribute('class', 'col');
}