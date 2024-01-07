<?php

$senstiveData = "Nabeel";
$salt = bin2hex(random_bytes(16)); // Generate random salt
$pepper = "BhaiSecretPapperStrington";

echo "<br>" . $salt;

$dataToHash = $senstiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;