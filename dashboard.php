<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login_register.php");
    exit;
}

// Povezivanje na bazu.
$connect = mysqli_connect('sql200.infinityfree.com', 'if0_38183638', 'tsatase1', 'if0_38183638_bendapp');

// Pregled jeli povezivanje uspješno.
if ($connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Query za svirke.
$query = "SELECT * FROM svirke ORDER BY datum ASC";
$result = mysqli_query($connect, $query);

// Pregled jeli query uredu.
if ($result === false) {
    die("ERROR: Could not execute query: $query. " . mysqli_error($connect));
}

// Unos podataka u bazu. 
if (isset($_POST['submit'])) {
    if (isset($_POST['datum'], $_POST['lokacija'], $_POST['kontakt'], $_POST['cijena'], $_POST['opis'], $_POST['type'])) {
        $stmt = $connect->prepare("INSERT INTO svirke (datum, lokacija, kontakt, cijena, opis, type, autor) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $datum = $_POST['datum'];
        $lokacija = $_POST['lokacija'];
        $kontakt = $_POST['kontakt'];
        $cijena = $_POST['cijena'];
        $opis = $_POST['opis'];
        $type = $_POST['type'];
        $autor = $_SESSION['username'] . " " . $_SESSION['surname'];
        $stmt->bind_param("sssssss", $datum, $lokacija, $kontakt, $cijena, $opis, $type, $autor);
        if ($stmt->execute()) {
            echo "Records added successfully.";
            header('location: dashboard.php');
            exit;
        } else {
            echo "ERROR: Could not execute query. " . $stmt->error;
        }
        $stmt->close();
    }
}

// Brisanje evenata
foreach ($_POST as $key => $value) {
    if (strpos($key, 'delete_') === 0) {
        $id = str_replace('delete_', '', $key);
        $stmt = $connect->prepare("DELETE FROM svirke WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Record deleted successfully.";
            header('Location: dashboard.php');
            exit;
        } else {
            echo "ERROR: Could not execute query. " . $stmt->error;
        }
        $stmt->close();
    }
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <?php require_once('header.php'); ?>
    <style>
        #event-section {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        h1,h2 {
            font-family: 'Comic Sans MS';
            font-size: 32px;
            color: white;
        }

        .form-label {
            color: white;
        }

        .btn {
            margin-left: 10px;
            margin-bottom: 15px;
            margin-top: 10px;
        }
        #creditials {
            text-transform: uppercase;
            color: white;
        }
        td {
            font-family: 'Libre Baskerville', serif;
            color: white;
            text-align: center;
            vertical-align: middle;
            font-size: 14px;
            padding: 5px;
        }
        th {
            font-weight: bold;
            background-color: #426DFB;
            text-align: center;
            vertical-align: middle;
            font-size: 14px;
            padding: 8px;
        }
        .table {
            width: 100%;
            font-size: 14px;
            margin-bottom: 40px;
        }
        .table th, .table td {
            padding: 8px;
        }
        .table-responsive {
            overflow-x: auto;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        input[type="submit"]:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        input[type="submit"]:active {
            background-color: #004085;
            transform: translateY(0);
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
    <main class="container">
        <section id="event-section" class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Dodaj događaj</h2>
                <form method="post">
                    <div class="mb-3">
                        <label for="datum" class="form-label">Datum</label>
                        <input type="date" name="datum" class="form-control" id="datum" required />
                    </div>
                    <div class="mb-3">
                        <label for="lokacija" class="form-label">Lokacija</label>
                        <input type="text" name="lokacija" class="form-control" id="lokacija" maxlength="50" required />
                    </div>
                    <div class="mb-3">
                        <label for="kontakt" class="form-label">Kontakt</label>
                        <input type="text" name="kontakt" class="form-control" id="kontakt" maxlength="50" required />
                    </div>
                    <div class="mb-3">
                        <label for="cijena" class="form-label">Cijena</label>
                        <input type="text" name="cijena" class="form-control" id="cijena" maxlength="50" required />
                    </div>
                    <div class="mb-3">
                        <label for="opis" class="form-label">Opis</label>
                        <input type="text" name="opis" class="form-control" id="opis" maxlength="50" required />
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Odaberi tip svirke</label>
                        <select class="form-select" id="type" name="type">
                            <option>Javni nastup</option>
                            <option>Privatna svirka</option>
                            <option>Svadba</option>
                            <option>Ostalo</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Dodaj događaj</button>
                </form>
            </div>
        </section>
        <br>
        <section>
            <h1 class="text-center mb-4">Upisane svirke</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Datum</th>
                            <th>Lokacija</th>
                            <th>Kontakt</th>
                            <th>Cijena</th>
                            <th>Opis</th>
                            <th>Autor</th>
                            <th>Akcija</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo '
                            <tr>
                                <td>' . htmlspecialchars($row["datum"]) . '</td>
                                <td>' . htmlspecialchars($row["lokacija"]) . '</td>
                                <td>' . htmlspecialchars($row["kontakt"]) . '</td>
                                <td>' . htmlspecialchars($row["cijena"]) . '</td>
                                <td>' . htmlspecialchars($row["opis"]) . '</td>
                                <td>' . htmlspecialchars($row["autor"]) . '</td>
                                <td>
                                    <form method="POST" action="">
                                        <button type="submit" name="delete_' . $row['id'] . '" class="btn btn-danger">Obriši</button>
                                    </form>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
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
