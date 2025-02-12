<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tamburaški sastav ATAŠE</title>
    <?php include('header.php'); ?>
    <style>
    html, body {
        height: 100%;
    }
    body {
        display: flex;
        flex-direction: column;
    }
    main {
        flex: 1;
        margin-top: 60px;
    }
</style>
</head>
<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>
    <main>
        <div class="welcome-message">
            <h1>Dobrodošli na stranicu benda!</h1>
            <p>Drago nam je da ste ovdje.</p>
        </div>
    </main>
    <footer class="text-white bg-dark py-2 d-flex flex-column align-items-center">
        <div class="container text-center">
            <p>&copy; 2025 TS Ataše | All Rights Reserved</p>
            <p id="date-time" class="mt-2"></p>
        </div>
    </footer>
</body>
</html>
