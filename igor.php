<!DOCTYPE html>
<html lang="en">

<head>
    <title>Igor Elmauer</title>
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
                    Igor je rođen 1991. godine, a u sastavu svira kontru (jer ne zna drugačije nego kontra svega!). 
                    U sastavu je od samih početaka te jedan od osnivača prve postave ATAŠE-a. Svoje prve tamburaške korake počinje 2004. godine u 
                    četvrtom razredu osnovne škole kao basprimaš u orkestru čika Šime Seletkovića. Ubrzo prelazi na kontru jer mu je oduvijek to bio 
                    najdraži instrument. Sa prijateljima iz orkestra osniva svoj prvi sastav po imenu "Cager band" koji je vodio učitelj Damir Čondić. 
                    Nakon nekoliko uspješnih godina sviranja članovi sastava prelaze u kvalitetnije bendove, a Igor sudjeluje u osnivanju novog benda 
                    TS "Sinovi Slavonije". U Sinovima Slavonije preuzima odgovornost glavnog vokala. Nakon uspješne sviračke karijere u Sinovima Slavonije 
                    2012. godine prelazi u Tamburaški sastav "Ataše". Ostaje glavni vokal u dobrom dijelu repertoara, ali glavnu pjevačku ulogu od odlaska
                    Danijela Mandure do danas prepušta Blažu Lučiću. Igor se brine da sastav na live svirkama zvuči odlično pa preuzima odgovornost 
                    glavnog tonca. Najbolje petlja prstima oko miksete, a to područje mu spada i pod jednu vrstu hobija, jer se bavi održavanjem i 
                    popravkom računala i računalne opreme. Izrazito voli adrenalin, a skok s padobranom samo je jedan od njegovih doživljaja 
                    (to što uzgaja tarantule uopće nije bitno). Glavni je za razno razne provale u ekipi, podizanje atmosfere, a uvijek je vesel i 
                    nasmijan. U slobodno vrijeme Igor je student Informatike.
                    <br><br>
                    Kao životni moto odabire citat: <br><br>
                    <i>"Hakuna Matata!"</i>
                </p>
            </div>
            <div class="col-12 col-md-5 mb-4 d-flex justify-content-center">
                <img class="img-responsive img-fluid rounded-3 shadow-sm" src="slike/igor_original.jpg" alt="Igor Original">
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
