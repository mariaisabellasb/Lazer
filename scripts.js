function toggleMenu(event) {
    event.stopPropagation(); 
    var sidebar = document.getElementById("sidebar");
    if (sidebar.style.transform === "translateX(0%)") {
        sidebar.style.transform = "translateX(-100%)";
    } else {
        sidebar.style.transform = "translateX(0%)";
    }
}

document.addEventListener('click', function(event) {
    var sidebar = document.getElementById("sidebar");
    var menuButton = document.querySelector('.menu-button');
    if (sidebar.style.transform === "translateX(0%)" && !sidebar.contains(event.target) && !menuButton.contains(event.target)) {
        sidebar.style.transform = "translateX(-100%)";
    }
    function toggleMenu(event) {
        const menu = document.querySelector('#menu'); // Certifique-se de que seu menu tem o ID 'menu'
        menu.classList.toggle('show'); // Adiciona ou remove a classe 'show' para mostrar/ocultar o menu
    
        event.preventDefault(); // Impede o comportamento padrão do botão
    }    
});
