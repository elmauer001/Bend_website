<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blaž Lučić</title>
    <?php include_once 'header.php'; ?>
    <style>
        .img-responsive {
            width: 100%;
            height: auto;
            border-radius: 25px;
            box-shadow: 10px 10px 18px #888888;
        }
        .font-change {
            font-size: 1.6rem;
        }
        @media (min-width: 992px) {
            .font-change {
                font-size: 1.4rem;
            }
        }
        @media (max-width: 991px) {
            .font-change {
                font-size: 1rem;
            }
        }
        @media (max-width: 767px) {
            .font-change {
                font-size: 0.95rem;
            }
        }
        @media (max-width: 479px) {
            .font-change {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <?php include_once 'navbar.php'; ?>
    <main class="container my-5">
        <section class="row align-items-start">
            <div class="col-12 col-md-7 mb-4 d-flex align-items-start">
                <p class="font-change text-white ms-3 mt-3">
                    Blaž je glavni vokal sastava i prvi basprimaš. Može se reći da je glazba njegova najveća ljubav. Inače
                    pjeva i u zboru. Voli dobar humor i mada na prvi pogled tako ne izgleda, veliki je zaljubljenik u sport.
                    Inače je student automatike na elektrotehičkom fakultetu.
                </p>
            </div>
            <div class="col-12 col-md-5 mb-4 d-flex justify-content-center">
                <img class="img-responsive img-fluid rounded-3 shadow-sm" src="slike/blaz_opis.jpg" alt="Blaž_original">
            </div>
        </section>
    </main>
    <footer class="text-white bg-dark py-2 d-flex flex-column align-items-center">
        <div class="container text-center">
            <p>&copy; 2025 TS Ataše | All Rights Reserved</p>
            <p id="date-time" class="mt-2"></p>
        </div>
    </footer>
</body>
</html>
