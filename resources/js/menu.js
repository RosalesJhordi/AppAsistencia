const open = document.getElementById('menu');
const menu = document.getElementById('aside');
const close = document.getElementById('close-menu');


open.addEventListener('click',function(){
    menu.style.transform = 'translateX(0)';
})

close.addEventListener('click',function(){
    menu.style.transform = 'translateX(-800px)'
})