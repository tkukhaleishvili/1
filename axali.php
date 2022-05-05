
<?php
function hello_world (){

    return "hello_world";
}
echo '<p>' . hello_world () . '</p>' ;


 ?>
<p><?php hello_world(); ?> <p/>


<?php
function is_bigger(){
    return 10>=5;
}

$bigger = is_bigger();
if ($bigger) {
    echo "the fun returned true.";
}else {
    echo "the fun returned false.";
}

 ?>

 <?php
echo  date( 'F d, Y');

  ?>


<?php
function is_palindrome($string ){
    $string = strtolower($string);
    $string = str_replace(' ' , '', $string);
//converts string to lowercase and remove spaces


//check string against that same string reversed.
    $pal_check = ($string ==strrev($string));
    return $pal_check;

}

$check_string = 'data';
if (is_palindrome($check_string)) {
    echo "<p>$check_string is a polindrome</p>";
}else{
     echo "<p>$check_string is not a polindrome</p>";
}



 ?>

 <?php

function double ($a){
   return $a * 2;
}

function triple (&$a){
    $a *= 3;


}
$a =5;
echo double ($a);
echo "<p>$a<p/>";
triple ($a);
echo "<p>$a<p/>";

$b = 10;
$c = & $b;
$c =7;
echo $b;


$numbers =array(1,2,3,);
foreach ($numbers as &$num ) {
    triple ($num);

}
print_r($numbers);



?>

<?php
$names =array('toko','misho','vaska','kobera');
usort($names, function($a, $b){
   return $a[1] <=> $b[1];
} );
 ?>

 <pre>
    <?php print_r($names);?>
 </pre>
