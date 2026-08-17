<?php
// require_once "config/app.php";

$pageTitle = "Dashboard";
$currentPage = "dashboard";

SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div id="root">
        <div class="min-h-screen bg-slate-50 flex">
            <?php include 'app/components/layout.php' ?>

            <div class="flex-1 flex flex-col min-w-0">
                <?php include 'app/components/nav.php' ?>

            </div>
        </div>
    </div>

    <script src="assets/js/submenu.js"></script>
</body>
</html>