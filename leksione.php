<?php

session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['delete_session']){
        if(isset($_SESSION['counter'])){
        unset($_SESSION['counter']);
        session_destroy();
        header('Location: index.php');
        }
    }
}

echo "<pre>";
var_dump($_GET);
echo"</pre>";
var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php
require_once 'head.php';
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ushtrime php</title>
</head>

<body>
<?php 

require_once 'navbar.php';

// phpinfo();

//KONSTANTET


define('MY_SITE', "Web 2020");

echo MY_SITE;
//echo constant('MY_SITE');

# VARIABLAT

$numer = 89; //int
$numer_float = 89.98; //float
$str = "Ky eshte nje string"; //string
$numer_double = 89.99008; //double
$vlere_null = null; //pavlere

$is_true = true; //boolean
$arr = [1,3,5]; //array

echo "<pre>";
var_dump($arr);
echo "</pre>";

// echo "<pre>";
// print_r($arr);
// echo "</pre>";


#STRINGS

$str = "Hello World!";
echo strlen($str); //nxjerr numrin e karaktereve
echo "<br>";
echo str_word_count($str); //kthen numrin e fjaleve, dallohen nga space

echo "<br>";

echo str_replace('Hello','Morning', $str);
//zevendeson fjalen ne string, nese s'e gjen s'e ndryshon.


//KONKATENIMI=> BEHET ME PIKE
//thonjezat dyshe jane tolerante, ska nevoje per konkatenim



$emri = 'John';
echo "<br>";

echo 'Emri im eshte $emri '.$emri.'.';
echo "<br>";
echo "Emri im eshte $emri";

//if else 

$a = 6;
$b = 8;

//Me duhet te afishoj numrin me te madh 
echo '<hr/>';
echo '<br/>';


if($a > $b)
    echo "Numri me i madh eshte $a.";
    
else if($a < $b)
echo "Numri me i madh eshte $b.";
else 
echo "Numrat jane te barabarte";

//ciklet: for, while, foreach

$i = 1;

while($i<=10){
    echo '<br/>';
    echo $i;
    $i++;
}



//gjej shumen e gjithe numrave qe plotpjestohen me 3, nga 1 ne 100


$i = 1;
$sum = 0;
$count = 0;


while($i<=100){
    if($i % 3 == 0){
        $sum += $i;
        $count += 1;
        if($count == 20){
            echo '<br/>';
            echo  $i;
        }
    }
    $i++;
}



echo '<br/>';

echo "Shuma eshte : $sum";
echo '<br/>';
 
echo "Gjenden $count shumefisha te 3.";
echo '<br/>';



//CIKLI FOREACH

$numrat = [2,3,7,10];
$numrat2 = [12,63,76,10];

foreach ($numrat2 as $celesi=>$numri){

    $hapi = $celesi + 1;
    echo "$celesi : $numri. Hapi i  $hapi<br>";



}










?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo MY_SITE;?></title>
</head>
<body>
    

    <?php 
    
    echo "<h1>Pershendetje!</h1>";
    
    
    ?>




<table id="t01">
  <tr>
    <th>Nr</th>
    <th>Note</th>
   
  </tr>

<?php 



for($i = 1; $i<=10; $i++){

    echo "<tr>";
    echo "<td> $i</td>";
    echo "<td>";

    if($i%5 == 0){
        echo "=> shumefish.";
    }
    echo "</td>";

    echo "</tr>";

}





// $text = '';

// for($i = 1; $i<=10; $i++){

//     $text  .= 
//     "<tr>
//     <td> $i</td>
//     <td>";

//     if($i%5 == 0){
//         $text = $text ."=> shumefish.";
//     }
//     $text  .=  "</td>";

//     $text  .=  "</tr>";

// }

// echo $text;


//Ushtrim: Mbush nje array me numrat 5-1



?>


  
</table>


<?php 
$arr_2 = [];

for($i=0; $i<5; $i++){

    $arr_2[$i] = 5 - $i;

}
echo "<pre>";
// var_dump($arr_2);
print_r($arr_2);
echo "<pre>";


$assoc = array(
    "Peter" => 28,
    "Ann" => 18,
    "John" => 26
);
echo "<pre>";
print_r($assoc);
echo "<pre>";

foreach($assoc as $name => $age){
    echo "$name is $age years old <br>";
}


$colors = array(
    "Red" => "#ff0000",
    "Green" => "#00ff00",
    "Blue" => "#0000ff"
);

echo "<br>";
foreach($colors as $k => $v){
    echo "<span style='color:$v'>$k </span>'s code is <span style='color:$k'>$v.</span> <br>";
}


#USHTRIME ARRAYS

//1. Jepet nje array, fshi nje element nga array dhe me pas afisho array-in me celesa te normalizuar.
// a) Kur eshte array numerike
// b) Kur eshte associative array

$numeric_array =[3,18,23,6];

echo "<pre>";
var_dump($numeric_array);
echo "<pre>";

//unset(array_name[index])

unset($numeric_array[2]);
unset($colors['Red']);


echo "<pre>";
var_dump($numeric_array);
echo "<pre>";

echo "<pre>";
print_r($colors);
echo "<pre>";

//array_values(array_name)

$x = array_values($numeric_array);
$y = array_values($colors);

echo "<pre>";
var_dump($x);
echo "<pre>";

echo "<pre>";
print_r($y);
echo "<pre>";

// 2.Afisho vleren e pare te nje associative array

//reset

echo reset($colors);

//3.rendit array:

//a) Rendit rrites sipas vleres
//b) Rendit rrites sipas celesit
//c) Rendit zbrites sipas vleres
//d) Rendit zbrites sipas celesit


echo "<pre>";
print_r ($assoc);
echo "<pre>";


asort ($assoc);
echo "Rend rrites sipas vleres";

echo "<pre>";
print_r ($assoc);
echo "<pre>";

ksort ($assoc);
echo "Rend rrites sipas celsit";

echo "<pre>";
print_r ($assoc);
echo "<pre>";

arsort ($assoc);
echo "Rend rzbrites sipas vleres";

echo "<pre>";
print_r ($assoc);
echo "<pre>";

krsort ($assoc);
echo "Rend zbrites sipas celsit";

echo "<pre>";
print_r ($assoc);
echo "<pre>";

// 4. llogarit temp mes, 5 me te ultat dhe 5 me te lartat ne STRING

$temp_str = "28,31,-2,-16,19,19,43,12,14,16,-4,-10,12,28,36";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   

//explade(delimeter/string)

$temp_array = explode(',', $temp_str);
echo "<pre>";
print_r($temp_array);
echo "<pre>";

$temp_total = 0.0;
$temp_size =count($temp_array);

foreach($temp_array as $v){
    $temp_total += $v;
}

$avg_temp = $temp_total/$temp_size;

print_r($avg_temp);

asort($temp_array);
echo "<pre>";
print_r($temp_array);
echo"<pre>";
$temp_array = array_values($temp_array);
echo"<pre>";
print_r($temp_array);
echo"<pre>";

echo "5 temperaturat me te uleta: <br>";
for($i=0; $i<5; $i++){
    echo $temp_array[$i]."<br>";
}

echo "5 temperaturat me te larta: <br>";
for($i=$temp_size-1; $i>$temp_size-6; $i--){
    echo $temp_array[$i]."<br>";
}

#FUNKSIONET 

function sum($a, $b, $c=0){
    return $a+$b+$c;


}


echo "<br> Shuma e numrave eshte: <br>";
echo sum(12,1,3);
echo "<br> Shuma e numrave eshte: <br>";
echo sum(12,1);



#ushtrim: gjej me te madhin e 4 numrave 

$a = 6;
$b = 4;
$c = 88;
$d = 16;



function max_1($a, $b){

    if($a > $b){
        return $a;
    } else return $b;
}

$max1 = max_1($a,$b);
$max2 = max_1($max1, $c);
$max3 = max_1($max2, $d);

echo "<br> Numri me i madh eshte: <br>";

echo $max3."<br>";


// gjej shmen e numrave ne nje range

function gjejShuma($a, $b){
    $shuma = 0;
    if ($a>$b){
        for($i=$b; $i<=$a; $i++){
        $shuma = $shuma + $i;
    }
    
    }
    else {
        for($i=$a; $i<=$b; $i++){
            $shuma = $shuma + $i;
        }
    
        
    }
    return $shuma;
}

$s = gjejShuma(8, 10);
echo "Shuma e nr nga 8 - 10 eshte: $s <br>";



##DATE##

//date(format,timestamp) -> kthen string

//Y - year
//y - year yy
//m - month (01-12)
//d - day (01-31)
//F - emri i muajit 
//M - emri i muajit
//D - diten e javes
//l (lowercase 'L') - Represents the day of the week

//H - 24-hour format of an hour (00 to 23)
//h - 12-hour format of an hour with leading zeros (01 to 12)
//i - Minutes with leading zeros (00 to 59)
//s - Seconds with leading zeros (00 to 59)
//a - Lowercase Ante meridiem and Post meridiem (am or pm)
//A - Upercase Ante meridiem and Post meridiem (AM or PM)

//$today = date('d/m/y');
$today = date('D, F d, Y');
echo 'Dita e sotme eshte '. $today;

//time() -> kthen kohen ne formatin Unix gjith sekondat nga Unix epoch (1 Janar 1970), kthen timestamp 
$time = time();
echo "<br>" .$time. "<br>";

echo date('F d, Y h:i:s', $time);

//mkdate(hour, minutes, seconds, month, day, year) -> kthen nje timestamp ne baze te parametrave
$timestamp = mktime(15,35,23,12,23,2014);
var_dump($timestamp); // -> kthen si timestamp daten sipas parametrave siper

echo date('l', $timestamp);  // -> gjen ca dite ka qene data $timestamp


$timestamp_2 = mktime(0,0,0, date('m')+20, date('d'), date('Y'));
echo "<br>".date('l', $timestamp_2);


// D.SH gjej edhe sa dite kane mbetur nga ditelindja
$timestamp_1 = mktime(0,0,0,12,31,2021);
$timestamp_3 = time();

$newtime = $timestamp_1 - $timestamp_3;
$newtime = $newtime/86400;

echo "<br> <br>".$newtime." dite";
$days_left = (int)$newtime;
echo "<br>".$days_left." dite <br>";
echo (round($newtime). " dite");


// ushtrim -> kontrollo nese dita e javes se dates se dhene eshte fundjave (e premte, e shtune, e diel)

$timestamp_4 = mktime(0,0,0,12,31,2021);
$dita = date('l', $timestamp_4);
if($dita =='Saturday' || $dita == 'Sunday'){
    echo '<br><br>Fundjave';
}
else echo '<br><br>Dite jave';

$lll = date('d')+3;
echo $lll;


?>
</body>
</html>



</body>
</html>