<?php

$senstiveData = "Nabeel";
$salt = bin2hex(random_bytes(16)); // Generate random salt
$pepper = "BhaiSecretPapperStrington";

echo "<br>" . $salt;

$dataToHash = $senstiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;

/*  Recreate hashing and check the data*/

$senstiveData = "Nabeel";
$storedSalt = $salt;
$storedHash = $hash;
$pepper = "BhaiSecretPapperStrington";

$dataToHash = $senstiveData . $storedSalt . $pepper;

$verification = hash("sha256", $dataToHash);

//Now let's check by if-else block

if($storedHash === $verification){
    echo "<br>The data are the same"; 
    echo "<br>"; 
    echo $storedHash;
    echo "<br>"; 
    echo $verification;
} else{
    echo "<br>The data are not the same"; 
}
