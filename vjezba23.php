<?php


$current_date = Date('d.m.Y');
$age = 25;
$name = 'John';

$current_time = Date('H');
$time_message = $user_message = "";
$gender = 'm';


#varijanta ali nevalja puno koristiti else bolji drugi primjer
if($current_time >= 0 && $current_time <= 12){
    $time_message = 'morning';
}else if($current_time > 12 && $current_time <= 18){
    $time_message = 'afternoon';
}else if($current_time > 18 && $current_time < 0){
    $time_message = "evning";
}else{
    $time_message="day";
}

#drugi pimjer - bolja varijanta

switch($gender){
    case 'm':
        $user_message = ( ($age < 18) ? 'boy' : 'man');

    break;
    case 'f':
        $user_message = ( ($age < 18) ? 'girl' : 'women');
    break;
    default:
        $user_message = 'someone';
    break;
}

echo "Good {$time_message} {$user_message} " . $name . ". Welcome to our site! <br>";
echo "Your age is " . $age . ".<br>";
echo "Current date: " . $current_date . "<br>"; 

//Ternarni operator
/**
 * Provjera uslova (a)
 * uslov tacan - izvrsen (b)
 * Uslov nije tacan (c)
 * (a > 5) ? echo "a je vece od pet"; : echo "A nije vece od pet";
 */
?>