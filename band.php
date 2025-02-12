<!DOCTYPE html>
<html lang="en">
<head>
    <title>O nama i Sastav</title>
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
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            color: white;
            padding: 30px;
        }
        .text-head {
            font-family: 'Chiller', cursive;
            text-align: center;
            font-size: 3rem;
        }
        .we-love-music {
            font-family: 'Lucida Calligraphy', cursive;
            text-align: center;
            font-size: 2rem;
        }
        .the-band-text {
            font-family: 'Libre Baskerville', serif;
            font-size: 1.4rem;
            margin-top: 12px;
            text-align: justify;
        }
        #members {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            color: white;
            padding: 30px;
        }
        .member {
            font-family: 'Libre Baskerville', serif;
            color: white;
            margin-top: 10px;
            font-size: 1.2rem;
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
    </style>
</head>
<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>
    <nav class="d-flex justify-content-center pt-5">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#about">O Nama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#members">Sastav</a>
            </li>
        </ul>
    </nav>
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
        <section id="members" class="container my-5">
            <h2 class="text-center">Članovi Sastava</h2>
            <br>
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
