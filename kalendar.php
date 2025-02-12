<?php  
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login_register.php");
}
/* Povezivanje na bazu i prikupljanje podataka o unesenim svirkama. */
$connect = mysqli_connect('sql200.infinityfree.com', 'if0_38183638', 'tsatase1', 'if0_38183638_bendapp');
$query = "SELECT * FROM svirke ORDER BY datum ASC";  
$result = mysqli_query($connect, $query);  
?> 

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <title>Kalendar tamburaškog sastava ATAŠE</title>
    <?php require_once('header.php'); ?>
    <style>
        #creditials {
            text-transform: uppercase;
            color: white;
        }
        main {
            flex-grow: 1;
        }
        .container {
            width: 100%;
            margin: 40px auto;
            padding: 0;
            max-width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-family: 'Comic Sans MS';
            font-size: 1.5rem;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .form-container {
            background-color: #f7f7f7;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 30px;
            width: 80%;
            max-width: 500px;
            margin: 0 auto;
        }

        #order_table {
            margin-top: 30px;
            margin-bottom: 30px;
            justify-content: center;
            align-items: center;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        td {
            font-family: 'Libre Baskerville', serif;
            color: white;
            text-align: center;
            vertical-align: middle;
        }
        th {
            font-weight: bold;
            background-color: #426DFB;
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>  
<body>  
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">TS "ATAŠE"</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <p class="navbar-text">Prijavljeni ste kao</p>
                    </li>
                    <li class="nav-item">
                        <p class="navbar-text" id="creditials">
                            <?php 
                            if (isset($_SESSION['username']) && isset($_SESSION['surname'])) {
                                echo $_SESSION['username'] . " " . $_SESSION['surname'];
                            } else {
                                echo "Niste prijavljeni";
                            }
                            ?>
                        </p>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a class="btn btn-outline-light me-2" href="logout.php?logout">Odjava</a>
                </div>
            </div>
        </div>
    </nav>
    </header>
    <main class="container" style="margin-top: 80px;">
        <div class="header-container">
            <h1 align="center">Kalendar tamburaškog sastava ATAŠE</h1>
        </div>
        <br>
        <div class="form-container d-flex justify-content-between">
            <input type="text" name="from_date" id="from_date" class="form-control w-25" placeholder="From Date" />
            <input type="text" name="to_date" id="to_date" class="form-control w-25" placeholder="To Date" />
            <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
        </div>  
        <div id="order_table">
            <table class="table table-bordered">
                <thead>
                    <tr>  
                        <th width="30%">Datum</th>  
                        <th width="40%">Lokacija</th>    
                        <th width="30%">Vrsta</th>  
                    </tr>  
                </thead>
                <tbody>
                <?php  
                while($row = mysqli_fetch_array($result)) {  
                ?>  
                    <tr>  
                        <td><?php echo date('d/m/Y', strtotime($row["datum"])); ?></td>  
                        <td><?php echo $row["lokacija"]; ?></td>   
                        <td><?php echo $row["type"]; ?></td>  
                    </tr> 
                <?php  
                }  
                ?>  
                </tbody>
            </table>  
        </div>
    </main>
    <footer class="text-white bg-dark">
        <div class="container text-center">
            <p>&copy; 2025 TS Ataše | All Rights Reserved</p>
            <p id="date-time" class="mt-2"></p>
        </div>
    </footer>
</body>  
</html>
