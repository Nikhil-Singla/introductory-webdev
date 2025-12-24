<?php

$email    = $_POST["email"];
$password = $_POST["password"];
$char      = $_POST["char"];
$blast     = $_POST["blast"];
$vena = $_POST["vena"];

$charCost       = 100.00;
$blastCost      = 120.00;
$venaCost       = 80.00;

$charTotal      = $char * $charCost;
$blastTotal     = $blast * $blastCost;
$venaTotal      = $vena * $venaCost;

$shipping     = $_POST["shipping"];
$shippingCost = 0;

if ($shipping == 'Free')
  {
    $shippingCost = 0;
  }
else if ($shipping == 'Standard')
  {
    $shippingCost = 5;
  }
else if ($shipping == 'Overnight')
  {
    $shippingCost = 50;
  }

$totalPrice = $charTotal + $blastTotal + $venaTotal + $shippingCost;
?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Total</title>
    </head>
    <body>
        <h2>Thank you for your visit</h2>
        <br>

        <p>
            <div class='box'>Entered Password is: <?php echo $password;?></div>
        </p>
        <br>

        <h3>Your Recipt</h3>
        <br>

        <table>
            <tbody>
            <tr>
                <td>Items</td>
                <td>Quantity</td>
                <td>Cost</td>
                <td>Sub total</td>
            </tr>

            <tr>
                <td>
                    <div>
                        Charizard Card
                    </div>
                </td>

                <td>
                    <p> <?php echo $char; ?> </p>
                </td>

                <td><?php echo $charCost; ?></td>

                <td><?php echo $charTotal; ?></td>

            </tr>

            <tr>
                <td>
                    <div>
                        Blastoise Card
                    </div>
                </td>

                <td>
                    <p><?php echo $blast; ?></p>
                </td>

                <td><?php echo $blastCost; ?></td>
                
                <td><?php echo $blastTotal; ?></td>

            </tr>

            <tr>
                <td>
                    <div>
                        Venasaur Card
                    </div>
                </td>

                <td>
                    <p><?php echo $vena; ?></p>
                </td>

                <td><?php echo $venaCost; ?></td>

                <td><?php echo $venaTotal; ?></td>

            </tr>

            <tr>
                <td>
                    <div>
                        Shipping
                    </div>
                </td>

                <td><?php echo $shipping; ?></td>

                <td></td>

                <td><?php echo $shippingCost; ?></td>

            </tr>

            <tr>
                <td>Total:</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php echo $totalPrice; ?></td>
            </tr>

            </tbody>
        </table>
    </body>
</html>
