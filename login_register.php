<?php include_once 'login_register_logic.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tamburaški sastav ATAŠE</title>
    <?php include_once 'header.php'; ?>
    <link href="css/loginStyle.css" rel="stylesheet">
    <link href="css/loginAnimate.css" rel="stylesheet">
    <style>
    main {
        margin-bottom: 150px;
    }
    </style>
</head>
<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>
    <main>
        <div class="container py-5">
            <section>
                <div id="container_form">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    
                    <div id="wrapper">
                        <!-- Login Form -->
                        <div id="login" class="animate form">
                            <?php if (isset($errMSG)) { ?>
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                                <h1 class="h3 mb-3 font-weight-normal">Prijavi se</h1>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Korisničko ime</label>
                                    <input id="username" name="username" required="required" type="text" class="form-control" placeholder="myusername"/>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Lozinka</label>
                                    <input id="password" name="password" required="required" type="password" class="form-control" placeholder="eg. X8df!90EO" />
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="btn-login" class="btn btn-primary w-100">Prijava</button>
                                </div>

                                <p class="text-center">
                                    Niste još član? <a href="#toregister" class="to_register">Registriraj se...</a>
                                </p>
                            </form>
                        </div>

                        <!-- Register Form -->
                        <div id="register" class="animate form">
                            <?php if (isset($errMSG)) { ?>
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                                <h1 class="h3 mb-3 font-weight-normal">Registriraj se</h1>

                                <div class="mb-3">
                                    <label for="namesignup" class="form-label">Ime</label>
                                    <input id="nemesignup" name="ime" required="required" type="text" class="form-control" placeholder="myname" />
                                </div>

                                <div class="mb-3">
                                    <label for="surnamesignup" class="form-label">Prezime</label>
                                    <input id="surnamesignup" name="prezime" required="required" type="text" class="form-control" placeholder="mysurname" />
                                </div>

                                <div class="mb-3">
                                    <label for="emailsignup" class="form-label">E-mail</label>
                                    <input id="emailsignup" name="email" required="required" type="email" class="form-control" placeholder="mymail@mail.com"/>
                                </div>

                                <div class="mb-3">
                                    <label for="usernamesignup" class="form-label">Korisničko ime</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" class="form-control" placeholder="myusername" />
                                </div>

                                <div class="mb-3">
                                    <label for="passwordsignup" class="form-label">Lozinka</label>
                                    <input id="passwordsignup" name="password_1" required="required" type="password" class="form-control" placeholder="eg. X8df!90EO"/>
                                </div>

                                <div class="mb-3">
                                    <label for="passwordsignup_confirm" class="form-label">Molimo potvrdite lozinku</label>
                                    <input id="passwordsignup_confirm" name="password_2" required="required" type="password" class="form-control" placeholder="eg. X8df!90EO"/>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="reg_user" class="btn btn-primary w-100">Registriraj</button>
                                </div>

                                <p class="text-center">
                                    Već ste član? <a href="#tologin" class="to_register">Prijavi se...</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
