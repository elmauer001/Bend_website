<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sastav</title>
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
        }
        img {
            width: 50%;
            height: auto;
            max-width: 50%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 15px;
        }
        img:hover {
            transform: scale(1.1); 
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
        }
        @media screen and (max-width: 767px) {
            img {
                width: 50%;
            }
        }
        .member {
            font-family: 'Libre Baskerville', serif;
            color: white;
            margin-top: 10px;
            font-size: 1.2rem
        }
        @media screen and (max-width: 1200px) {
            .member {
                font-size: 1.1rem;
            }
        }
        @media screen and (max-width: 992px) {
            .member {
                font-size: 1rem;
            }
        }
        @media screen and (max-width: 768px) {
            .member {
                font-size: 0.95rem;
            }
        }

        @media screen and (max-width: 576px) {
            .member {
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>
    <main>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center mb-4">
                    <a href="igor.php"><img src="/slike/igor_icon.jpg" class="img-fluid rounded-circle shadow-sm" alt="Igor Elmauer"></a>
                    <p class="member mt-2">Igor Elmauer</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <a href="blaz.php"><img src="/slike/blaz_icon.jpg" class="img-fluid rounded-circle shadow-sm" alt="Blaž Lučić"></a>
                    <p class="member mt-2">Blaž Lučić</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <a href="matija.php"><img src="/slike/matija_icon.jpg" class="img-fluid rounded-circle shadow-sm" alt="Matija Babić"></a>
                    <p class="member mt-2">Matija Babić</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <a href="denis.php"><img src="/slike/denis_icon.jpg" class="img-fluid rounded-circle shadow-sm" alt="Denis Kovačević"></a>
                    <p class="member mt-2">Denis Kovačević</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <a href="ivan.php"><img src="/slike/ivan_icon.jpg" class="img-fluid rounded-circle shadow-sm" alt="Ivan Šokčević"></a>
                    <p class="member mt-2">Ivan Šokčević</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <a href="majhen.php"><img src="/slike/majhen_icon.jpg" class="img-fluid rounded-circle shadow-sm" alt="Ivan Majhen"></a>
                    <p class="member mt-2">Ivan Majhen</p>
                </div>
            </div>
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
