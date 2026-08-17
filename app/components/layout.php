

<aside id="sidebar" class="-translate-x-full lg:translate-x-0 fixed lg:sticky top-0 left-0 z-50 w-64 h-screen bg-slate-900 text-slate-300 flex flex-col transition-transform duration-300 shrink-0">
  <div class="h-16 flex items-center gap-3 px-5 border-b border-slate-800">
    <div class="rounded-lg flex items-center justify-center">
      <img class="w-13" src="assets/img/favicon.png">
    </div>
    <div>
      <h1 class="text-sm font-bold text-white tracking-tight">TAH Tecnologia</h1>
      <p class="text-[10px] text-blue-400 uppercase tracking-wider">CRM Comercial</p>
    </div>
    <button id="close-sidebar" class="lg:hidden ml-auto text-slate-400 hover:text-white">
      <svg xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="lucide lucide-x w-5 h-5">
        <path d="M18 6 6 18"></path>
        <path d="m6 6 12 12"></path>
      </svg>
    </button>
  </div>
  <nav class="flex-1 overflow-y-auto scrollbar-thin py-4 px-3">
    <div class="mb-4">
      <p class="text-[10px] font-semibold text-slate-500 uppercase tracking-wider px-3 mb-2">Principal</p>
      <div class="space-y-0.5">
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'dashboard' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="grid-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Dashboard</span>
        </button>
      </div>
    </div>
    <div class="mb-4">
      <p class="text-[10px] font-semibold text-slate-500 uppercase tracking-wider px-3 mb-2">CRM</p>
      <div class="space-y-0.5">
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'leads' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="person-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Leads</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'empresas' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="business-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Empresas</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'contatos' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="person-circle-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Contatos</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'oportunidades' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="ribbon" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Oportunidades</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'funil' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="trophy-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Funil</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'atividades' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="calendar-clear-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Atividades</span>
        </button>
      </div>
    </div>
    <div class="mb-4">
      <p class="text-[10px] font-semibold text-slate-500 uppercase tracking-wider px-3 mb-2">Comercial</p>
      <div class="space-y-0.5">
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'propostas' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="document-text-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Propostas</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'contratos' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="document-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Contratos</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'vendas' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="cart-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Vendas</span>
        </button>
      </div>
    </div>
    <div class="mb-4">
      <p class="text-[10px] font-semibold text-slate-500 uppercase tracking-wider px-3 mb-2">Financeiro</p>
      <div class="space-y-0.5">
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'comissoes' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="cash-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Comissões</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'metas' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="trending-up-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Metas</span>
        </button>
      </div>
    </div>
    <div class="mb-4">
      <p class="text-[10px] font-semibold text-slate-500 uppercase tracking-wider px-3 mb-2">Análise</p>
      <div class="space-y-0.5">
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'relatorios' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="bar-chart-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Relatórios</span>
        </button>
        <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition <?php echo $currentPage === 'documentos' ? 'bg-blue-600 text-white font-medium shadow-md shadow-blue-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white'; ?>">
          <ion-icon name="folder-open-outline" class="text-[1.1rem]"></ion-icon>
          <span class="truncate">Documentos</span>
        </button>
      </div>
    </div>
  </nav>
  <div class="border-t border-slate-800 p-3">
    <div class="flex items-center gap-3 px-2 py-2">
      <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center text-white text-xs font-bold"><?php echo substr($_SESSION["usuario_nome"], 0, 1); ?></div>
      <div class="flex-1 min-w-0">
        <p class="text-sm font-medium text-white truncate"><?php echo htmlspecialchars($_SESSION["usuario_nome"]); ?></p>
        <p class="text-xs text-slate-500 capitalize"><?php echo htmlspecialchars($_SESSION["usuario_tipo"]); ?></p>
      </div>
      <a class="text-slate-400 hover:text-red-400 transition" title="Sair" href="app/auth/sair.php">
        <ion-icon name="log-in-outline" class="text-[1.4rem]"></ion-icon>
      </a>
    </div>
  </div>
</aside>

<div
  id="sidebar-overlay"
  class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"
></div>