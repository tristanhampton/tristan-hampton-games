window.addEventListener('load', e=>{
    const menuButton = document.querySelector('.mobile-nav div>p');
    const menu = document.querySelector('.mobile-nav div>ul');

    menuButton.addEventListener('click', evt => {
        if(menu.classList.contains('hidden')){
            menuButton.innerHTML = 'X';
            menu.classList.remove('hidden');
        } else if(!menu.classList.contains('hidden')){
            menuButton.innerHTML = 'MENU';
            menu.classList.add('hidden');
        }

    });
});