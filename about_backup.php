<!DOCTYPE html>
<html lang="en">
<head>
    <title>O nama</title>
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
        #about {
            line-height: 1.6;
            position: relative;
        }
        .text-head {
            font-family: 'Chiller', cursive;
            text-align: center;
            color: white;
            font-size: 3rem;
        }
        .we-love-music {
            font-family: 'Lucida Calligraphy', cursive;
            text-align: center;
            color: white;
            font-size: 2rem;
        }
        .the-band-text {
            font-family: 'Libre Baskerville', serif;
            font-size: 1.4rem;
            margin-top: 12px;
            text-align: justify;
            color: white;
        }
        /* Responsive Typography */
        @media (max-width: 1200px) {
            .text-head {
                font-size: 3.5rem;
            }

            .we-love-music {
                font-size: 1.8rem;
            }

            .the-band-text {
                font-size: 1.4rem;
            }
        }
        @media (max-width: 992px) {
            .text-head {
                font-size: 3rem;
            }

            .we-love-music {
                font-size: 1.6rem;
            }

            .the-band-text {
                font-size: 1.3rem;
            }
        }
        @media (max-width: 768px) {
            .text-head {
                font-size: 2.5rem;
            }

            .we-love-music {
                font-size: 1.4rem;
            }

            .the-band-text {
                font-size: 1.2rem;
            }
        }
        @media (max-width: 576px) {
            .text-head {
                font-size: 2rem;
            }

            .we-love-music {
                font-size: 1.2rem;
            }

            .the-band-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>
    <main>
        <section id="about" class="container my-5">
            <div class="text-center">
                <h1 class="text-head">THE BAND</h1>
                <h3 class="we-love-music"><i>We love music...</i></h3>
            </div>
            <p class="the-band-text">
                "ATAŠE" je tamburaški sastav iz Sikirevaca, a osim iz Sikirevaca članovi sastava su i iz Kupine, 
                Novog Grada, Donjih Andrijevaca i Babine Grede. Osnovan je 2012.godine na zajedničku inicijativu nekoliko članova sadašnjeg sastava. 
                Osnovna ideja osnivanja je bila okupiti grupu dobrih prijatelja koji već imaju dugogodišnjeg iskustva u sviranju tambura. 
                Prvu postavu sastava je činilo 5 članova Ivan Majhen (prim), Danijel Mandura (1.basprim), Matija Babić (2.basprim), Ivan Šokčević (bas) i Igor Elmauer (kontra). 
                Nakon vrlo uspješnog rada u prvoj postavi sastava, 2015. godine bend napušta Danijel Mandura koji nakon završenog Strojarskog fakulteta odlazi na rad u Njemačku.
                Ataše-u se iste godine priključuje vrlo perspektivan basprimaš i izvrstan vokal Blaž Lučić koji dolazi iz Tamburaškog sastava Srce Slavonije.
                Nakon vrlo kratkog vremena Blaž preuzima ulogu glavnog vokala u sastavu i od tada pa sve do danas bez premca odrađuje tu ulogu. 
                Sastavu se 2016. godine pridružuje vrlo mlad harmonikaš Denis Kovačević koji tada sa samo 16. godina ostavlja jako dobar dojam i postaje stalan član sastava.
                Denis je svoje prve korake sviranja harmonike stakao kod profesora Igora Gregurića koji ga kvalitetno uvodi u svijet tamburaške glazbe.
                U repertuaru "Atašea" se mogu naći sve vrste tamburaške glazbe, zabavne, te pop-rock glazbe. Dolaskom harmonike u band svoj repertuar dodatno 
                proširujemo sa starogradskim pjesmama, sevdahom, pa sve do narodne muzike. Od osnivanja, pa sve do danas, sastav se može pohvaliti brojnim nastupima 
                diljem Slavonije i Hrvatske, a iza svih članova je i iskustvo nastupa u Austriji, Švicarskoj i Njemačkoj. 
            </p>
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
