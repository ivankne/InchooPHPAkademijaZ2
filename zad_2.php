<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadaca 2</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="num">
    <input type="submit">
</form>

    <p><?php print_r($_POST['num']) ?></p>

<?php
$num = $_POST['num'];

$sep = explode (",", $num);
//print_r($num);

foreach ($sep as $n){
    if($n % 2 == 0){
        $array[] = $n;
        $ind[$n] = 1;
    }
}
sort($array);
echo "<pre>";
print_r($array);
echo "</pre>";

//onaci podebljano prvi veci parni broj od aritmetičke sredine svih primljenih brojeva
    $first = array_sum($sep)/count($sep);
   echo $first . "<br/>";

foreach ($array as $m){
    if($m > $first){
        echo "<b> ". $m ."</b>";
        break;
    }
}

$max = max($sep);
echo "<br/>" . $max;

$dim = round(sqrt($max)) + 1;

echo "<br/>" . $dim;
//Kreirati gihub repozitorij InchooPHPAkademijaZ2. Kreirati stranicu koja za putem $_POST parametra prima niz brojeva
//odvojenih zarezom (napraviti html stranicu s formom). Stranica ispisuje sve primljene parne brojeve od najmanjeg prema
//najvećem te označi podebljano prvi veći parni broj od aritmetičke sredine svih primljenih brojeva. Brojevi se ispisuju
//u kvadratnoj tablici koja je dimenzija drugog korijena najvećeg primljenog broja +1 na način da se prikažu samo oni
//brojevi koji odgovaraju kriterijima ispisa brojeva, ostale ćelije slijedno lijevo prema desno parametra gore prema
//dolje ostaju prazna. Stranicu postaviti na polazniknn.inchoo4u.net/Z2
//
//za ulazne parametre
//2,6,49,3,2,3,4,50,33,34,37,42,55,234,122
?>
</body>
</html>


