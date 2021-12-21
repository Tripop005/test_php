<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST-PHP</title>
    <style>
    h1 {
        text-align: center;
    }
    </style>
</head>

<body>
    <h1> PHP BASIC </h1>
    <?php
   print " ยินดีต้อนรับ<br /> ";
   print 2+3;
   $a = 3;              $b = 5;
   print "<br />";
   print $a + $b;
   print "<br />";
   printf ("$a x $b = %d" , $a*$b);
   print "<br />";
   printf ("$a / $b = %.2f" , $a/$b);



    ?>
</body>

</html>