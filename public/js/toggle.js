function toggle(content){
    if(content.style.display == '' || content.style.display == 'none'){
        content.style.display = 'block';//show the confirmation dialog
    }else{
        content.style.display = 'none';//hide the confirmation dialog
    }
}
