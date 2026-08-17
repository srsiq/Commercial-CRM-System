<?php
require_once "app/config/app.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - <?php echo SITE_NAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div id="root">
        <div class="min-h-screen flex bg-slate-950">
            <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900">
                <div class="absolute inset-0 opacity-20">
                    <div class="absolute top-20 left-20 w-72 h-72 bg-blue-500 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-20 right-20 w-96 h-96 bg-cyan-500 rounded-full blur-3xl"></div>
                </div>
                <div class="relative z-10 flex flex-col justify-between p-12 text-white">
                    <div class="flex items-center gap-3">
                        <div class="rounded-xl flex items-center justify-center">
                            <img class="w-13" src="assets/img/favicon.png">
                        </div>
                        <div>
                            <h1 class="text-xl font-bold tracking-tight"><?php echo SITE_NAME; ?></h1>
                            <p class="text-xs text-blue-300">CRM Comercial</p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h2 class="text-4xl font-bold leading-tight">Gerencie toda sua<br>operação comercial<br>em um só lugar.</h2>
                        <p class="text-blue-200 text-lg max-w-md">Do primeiro contato à comissão paga. Leads, oportunidades, propostas, contratos e finanças - integrados.</p>
                        <div class="grid grid-cols-2 gap-4 max-w-md">
                            <div class="flex items-center gap-2 text-sm text-blue-200">
                                <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full"></div>Leads &amp; Oportunidades
                            </div>
                            <div class="flex items-center gap-2 text-sm text-blue-200">
                                <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full"></div>Funil Kanban
                            </div>
                                <div class="flex items-center gap-2 text-sm text-blue-200">
                                    <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full"></div>Propostas &amp; Contratos
                                </div>
                                <div class="flex items-center gap-2 text-sm text-blue-200">
                                    <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full"></div>Comissões &amp; Metas
                                </div>
                            </div>
                        </div>
                        <p class="text-xs text-blue-400">© 2026 TAH Tecnologia. Todos os direitos reservados.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-12">
                    <div class="w-full max-w-md">
                        <div class="lg:hidden flex items-center gap-3 mb-8">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-5 h-5 text-white">
                                    <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-lg font-bold text-white">TAH Tecnologia</h1>
                                <p class="text-xs text-blue-400">CRM Comercial</p>
                            </div>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-1">Bem-vindo de volta</h2>
                        <p class="text-slate-400 mb-8 text-sm">Acesse o painel comercial da TAH Tecnologia.</p>
                        <form class="space-y-4" action="app/auth/entrar.php" method="POST">
                            <div>
                                <label class="text-sm font-medium text-slate-300 mb-1.5 block">
                                    E-mail
                                </label>

                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-mail absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500">

                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>

                                    <input
                                        type="email"
                                        name="email"
                                        required
                                        class="w-full bg-slate-900 border border-slate-700 rounded-lg pl-10 pr-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                                        placeholder="voce@empresa.com"
                                    >
                                </div>
                            </div>

                            <div>
                                <label class="text-sm font-medium text-slate-300 mb-1.5 block">
                                    Senha
                                </label>

                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-lock absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500">

                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>

                                    <input
                                        type="password"
                                        name="senha"
                                        required
                                        minlength="6"
                                        class="w-full bg-slate-900 border border-slate-700 rounded-lg pl-10 pr-4 py-2.5 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                                        placeholder="••••••••"
                                    >
                                </div>
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-semibold rounded-lg py-2.5 transition flex items-center justify-center gap-2 shadow-lg shadow-blue-500/20"
                            >
                                Entrar

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">

                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </button>
                        </form>
                        <p class="text-center text-sm text-slate-400 mt-6">
                            Não tem uma conta? <button class="text-blue-400 hover:text-blue-300 font-medium">Criar conta</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="fixed top-4 right-4 z-[100] flex flex-col gap-2 max-w-sm"></div>
        </div>
  
        <div style="position: fixed; bottom: 1rem; right: 1rem; z-index: 2147483647;"></div>
    </body>
</html>