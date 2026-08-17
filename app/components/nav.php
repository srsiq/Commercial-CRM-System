<header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between gap-4 px-4 sm:px-6 sticky top-0 z-30">
    <div class="flex items-center w-[70%]">
        <button id="menu-button" class="lg:hidden text-slate-600">
            <ion-icon name="menu-outline" class="text-2xl"></ion-icon>
        </button>
        <form class="flex-1 max-w-md relative">
            <ion-icon name="search-outline" class="lucide lucide-search absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"></ion-icon>
            <input type="text" placeholder="Buscar empresas, leads, contatos, CNPJ..." class="w-full bg-slate-100 border border-transparent rounded-lg pl-10 pr-4 py-2 text-sm focus:outline-none focus:bg-white focus:border-blue-300 transition" value="">
        </form>
    </div>
    <div class="flex items-center gap-6">
        <div class="relative">
            <button class="flex items-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-3 py-2 rounded-lg transition shadow-sm">
                <ion-icon name="add-outline" class="text-[1.25rem]"></ion-icon>
                <span class="hidden sm:inline">Novo</span>
                <ion-icon name="chevron-down-outline" class="text-[1rem]"></ion-icon>
            </button>
        </div>
        <button class="relative p-2 text-slate-500 hover:text-slate-700 hover:bg-slate-100 rounded-lg transition">
            <ion-icon name="notifications-outline" class="lucide lucide-bell w-5 h-5"></ion-icon>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
        </button>
        <button class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center text-white text-xs font-bold hover:ring-2 hover:ring-blue-300 transition">
            <?php echo substr($_SESSION["usuario_nome"], 0, 1); ?>
        </button>
    </div>
</header>