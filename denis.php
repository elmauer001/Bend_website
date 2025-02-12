<!DOCTYPE html>
<html lang="en">

<head>
    <title>Denis Kovačević</title>
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
                    Denis je naš harmonikaš i najmlađi član sastava koji još od malih nogu (iako je sada već poprilično velik)
                    prebire prste po crno-bijelim tipkama. Voli kada na svirci dođe „na svoje“. Pažljivo brine da naša oprema
                    sigurno stigne na pravo odredište. 
                </p>
            </div>
            <div class="col-12 col-md-5 mb-4 d-flex justify-content-center">
                <img class="img-responsive img-fluid rounded-3 shadow-sm" src="slike/denis_original.jpg" alt="Denis_original">
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
