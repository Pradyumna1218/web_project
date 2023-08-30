<?php
// $name = 'poem maharjan';
// $email='poembsccsit2020@prime.edu.np';
// $email1='     poembsccsit2020@prime.edu.np           ';



// echo "<pre>" ;
// echo $email1;
// echo $email;
// $email1= trim($email1);
// echo $name;
// echo $name[6];

// echo strpos($name,'a');
// echo ucfirst($name);
// echo lcfirst($name);
// echo strcasecmp($email,$email1);
// echo strcmp($email1,$email);
// echo substr($name,3); 
// echo substr($name,-3); 
// echo substr($name,3,6); 
// echo strrev($name);
// echo str_replace('poem','popo',$name);
// $num =11;
// if($num%2==0){
//     echo "The number $num is even";
// }
// else{
//     echo 'the number '.$num.' is odd';
// }

// for($i=1;$i<=10;$i++){
//     // echo "$i<br>";
//     echo $i.' ';
// }

$name="Niva";
for($i=strlen($name)-1;$i>=0;$i--){
    echo $name[$i];
}
?>
