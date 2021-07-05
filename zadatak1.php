/* 
Stranica ispisuje Vaše ime i prezime iz PHP-a
stranicu dodati u izbornik
Stranica prima GET parametar boja i u odnosu na primljenu boju 
(npr: blue, red, yellow,..) boja pozadine stranice je 
jednaka primljenoj boji
*/.

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zadatak 1</title>
<link rel="stylesheet" href="assets/css/foundation.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="grid-container">

<div class="grid-x grid-padding-x">
<div class="large-6 cell" >
        <pre>
            echo "Filip Janješić";
        </pre>
</div>
<div class="large-6 cell">
        <?php
           echo "Filip Janješić";
        ?>
</div>
</div>
</div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>