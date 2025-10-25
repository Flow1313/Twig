<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketFlow - PHP/Twig</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h1 class="logo">í¾« TicketFlow</h1>
                <p class="subtitle">PHP/Twig Ticket Management System</p>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <?php if ($session->getFlash('success')): ?>
                <div class="alert alert-success">
                    <?= $session->getFlash('success') ?>
                </div>
            <?php endif; ?>

            <?php if ($session->getFlash('error')): ?>
                <div class="alert alert-error">
                    <?= $session->getFlash('error') ?>
                </div>
            <?php endif; ?>

            <?php echo $content; ?>
        </div>
    </main>

    <script src="/js/app.js"></script>
</body>
</html>
