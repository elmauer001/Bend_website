<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medija</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Marmelad&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/mainStyle.css" rel="stylesheet">

    <!-- Bootstrap 5 JS (including Popper.js) -->
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
            margin-top: 50px; 
        }
    </style>
</head>
<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>
    <main>
        <section id="media-content" class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 mb-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/e7bt4QIWxOc" frameborder="0"
                        allow="encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/aKMgLNo0VM8" frameborder="0"
                        allow="encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/ntbjDZePQ-g" frameborder="0"
                        allow="encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/Thnu22ztPVo" frameborder="0"
                        allow="encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/Doc8RmkOloI" frameborder="0"
                        allow="encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/165O8DuITMw" frameborder="0"
                        allow="encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
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
