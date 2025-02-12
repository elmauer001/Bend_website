<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registracija uspješna!</title>
    <?php include('header.php'); ?>
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<style>
    .container {
      text-align: center;
      align-items: center;
      justify-content: center;
    }

    #typedtext {	
      font-size: 30px;
      font-family: 'Merienda', cursive, sans-serif;
      color: #e0e0d1;
    }
</style>
</head>
<body>
    <head>
        <?php include_once 'navbar.php'; ?>
    </head>
    <main class="container d-flex justify-content-center"
        <div id="typedtext"></div>
    </main>
    <footer class="text-white bg-dark py-2 d-flex flex-column align-items-center">
        <div class="container text-center">
            <p>&copy; 2025 TS Ataše | All Rights Reserved</p>
            <p id="date-time" class="mt-2"></p>
        </div>
    </footer>
    <script>   
        var aText = new Array(
        "Hvala Vam!",
        "Uspješno ste se registrirali na stranicu tamburaškog sastava ATAŠE.", 
        "Klikom na prijavu uđite u izbornik.",
        ":)"
        );
        var iSpeed = 100;
        var iIndex = 0;
        var iArrLength = aText[0].length;
        var iScrollAt = 20;

        var iTextPos = 0;
        var sContents = '';
        var iRow;

        function typewriter()
        {
         sContents =  ' ';
         iRow = Math.max(0, iIndex-iScrollAt);
         var destination = document.getElementById("typedtext");

         while ( iRow < iIndex ) {
          sContents += aText[iRow++] + '<br />';
         }
         destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos);
         if ( iTextPos++ == iArrLength ) {
          iTextPos = 0;
          iIndex++;
          if ( iIndex != aText.length ) {
           iArrLength = aText[iIndex].length;
           setTimeout(typewriter, 500);
          }
         } else {
            setTimeout(typewriter, iSpeed);
         }
        }
        typewriter();
    </script>
</body>
</html>
