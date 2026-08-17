
document.addEventListener('DOMContentLoaded', function () {

    const menuButton = document.getElementById('menu-button');
    const sidebar = document.getElementById('sidebar');
    const closeSidebar = document.getElementById('close-sidebar');
    const overlay = document.getElementById('sidebar-overlay');

    function abrirMenu() {
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');

        overlay.classList.remove('hidden');

        document.body.classList.add('overflow-hidden');
    }

    function fecharMenu() {
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('-translate-x-full');

        overlay.classList.add('hidden');

        document.body.classList.remove('overflow-hidden');
    }

    menuButton.addEventListener('click', abrirMenu);

    closeSidebar.addEventListener('click', fecharMenu);

    overlay.addEventListener('click', fecharMenu);

});
