<?php
include "db.php";
?>

<?php
function product($num1,$num2,$num3=5){
    $answer=$num1*$num2*$num3;
    return $answer;
}
echo product(6,7);  

?>