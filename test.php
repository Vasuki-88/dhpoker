<!DOCTYPE html>
<html lang="en">
<head>
    <title>DH Texas Hold'em Poker Chips Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
    </style>

    <script type="text/javascript">

      function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/index.php";
      }

    </script>

</head>

<body>


<?php include 'menu.php'; ?>


<div class="container shadow-lg py-3 pb-4" style="width:90%;">

    <div class="form-group">
        <h3 class="text-center"><b>How much you want to buy?</b></h3>
    </div>

    <?php include 'widgets/dhcalculator.js'; ?>
    
</div>



<div class="container shadow-lg my-5 py-3 pb-4" style="width:90%;">
      <a class="text-center" href="services.php"><h2><b>Our Services</b></h2></a>
      <h5 class="pb-2" align="justify">We sell the DH Texas Poker Chips according to the following price list. We have mentioned some common countries currencies for helping you to buy chips according to your suitable currencies.</h5>

    <?php include 'widgets/dhchipsratetable.js'; ?>

</div>

<br>
    <footer>
        <p class="p-3 bg-dark text-white text-center">Vasuki88 DH Poker Chips Seller</p>
    </footer>

  <script src="scripts/jquery.min.js"></script>  
  <script src="scripts/bootstrap.min.js"></script>


</body>
</html>