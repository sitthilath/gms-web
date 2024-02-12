function changeBgNavbarScorll(){
    const navbar = document.getElementById('navbar');
    const scrollvalue = window.scrollY;
    if(scrollvalue < 150){
        navbar.classList.remove('bgcolor');
    }else{
        navbar.classList.add('bgcolor');
    }
}
window.addEventListener('scroll',changeBgNavbarScorll);