<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marmelad&display=swap" rel="stylesheet">
    <link href="css/mainStyle.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
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
        }
        .kontakt {
            display: table;
            text-align: center;
            margin: 0 auto;
            position: relative;
            width: 50%;
            font-style: normal;
            color: white;
            line-height: 1.6;
            height: 300px;
            width: 40%;
        }

        .kontakt-header {
            font-family: 'Libre Baskerville', serif;
            text-align: center;
            font-size: 28px;
            color: #fff;
        }

        .kontakt-info {
            font-family: Lucida Calligraphy;
            text-align: center;
            font-size: 20px;
            color: #fff;
        }

        .drustvene {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>
    <main class="container my-5">
        <section class="kontakt">
            <header>
                <h1 class="kontakt-header">Kontaktirajte nas...</h1>
            </header>
            <br></br>
            <div class="contact-info">
                <p class="kontakt-info"><i class="fas fa-phone"></i> Ivan - 091 734-3298</p>
                <p class="kontakt-info"><i class="fas fa-phone"></i> Matija - 091 593-5846</p>
                <p class="kontakt-info"><i class="fas fa-at"></i> E-mail: ts.atase@gmail.com</p>
            </div>
            <br>
            <p class="kontakt-info">Potražite nas na društvenim mrežama</p>
            <br>
            <footer class="drustvene">
                <a href="https://www.facebook.com/Tamburaski.Sastav.Atase/?locale=hr_HR" target="_blank">
                    <i class="fab fa-facebook-square fa-3x"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.youtube.com/c/Tambura%C5%A1kisastavAta%C5%A1e" target="_blank">
                    <i class="fab fa-youtube fa-3x"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.instagram.com" target="_blank">
                    <i class="fab fa-instagram fa-3x"></i>
                </a>
            </footer>
        </section>
    </main>
    <footer class="text-white bg-dark py-2 d-flex flex-column align-items-center">
        <div class="container text-center">
            <p>&copy; 2025 TS Ataše | All Rights Reserved</p>
            <p id="date-time" class="mt-2"></p>
        </div>
    </footer>

    <script>
        function updateDateTime() {
            const now = new Date();
            const options = {
                weekday: 'long', year: 'numeric', month: 'long', day: 'numeric',
                hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false
            };
            const dateTimeString = now.toLocaleString('hr-HR', options);
            document.getElementById("date-time").innerText = dateTimeString;
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
</body>
</html>
