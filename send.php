<?php
$files  = scandir("C:/Users/artin/Desktop/kargah/w8");
$counter =1;
foreach($files as $file) {
    if($file==$counter.".txt") {
        $counter++;
    }
}
$result = fopen("C:/Users/artin/Desktop/kargah/w8/".$counter.".txt" , "w");
$firstname=$_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
fwrite($result , 
"firstname : " . $firstname."\n".
"lastname : " . $lastname."\n".
"email : " . $email."\n".
"form successfuly send!!"
);
print "form successfuly send";
fclose($result);
?>