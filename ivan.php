<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ivan Šokčević</title>
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
            text-align: justify;
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
        .text-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .text-container .col-md-7 {
            flex: 1;
            margin-right: 20px;
        }

        .text-container .col-md-5 {
            flex: 0 0 35%;
        }
    </style>
</head>

<body>
    <?php include_once 'navbar.php'; ?>
    <main class="container my-5">
        <section class="row text-container">
            <div class="col-12 col-md-7 mb-4">
                <p class="font-change text-white ms-3 mt-3">
                    Ivan u sastavu svira bas, te u pojedinim žanrovima i bass gitaru. Inače je magistar informatike i
		            odličan je programer, sretno oženjen. U slobodno vrijeme voli zaigrati nogomet sa ekipom. Odličan
		            je prateći vokal i svojim znanjem opravdava svoje glazbeno obrazovanje u glazbenoj školi. Uvijek
		            raspoložen, nasmijan i spreman na pošalice. Najstariji je član sastava, iako bi ga većina svrstala u
		            mlađi dio ekipe. 
                </p>
            </div>
            <div class="col-12 col-md-5 mb-4 d-flex justify-content-center">
                <img class="img-responsive img-fluid rounded-3 shadow-sm" src="slike/ivan_opis.jpg" alt="Ivan_opis">
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
