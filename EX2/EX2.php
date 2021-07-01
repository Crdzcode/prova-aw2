<?php
$N = $_POST['txt'];
$K = $_POST['txtK'];
$X = 1;
$Z = 2;
$vetor = array();

for ($X = 0;$X < $K;$X++)
{

    $vetor[] = $Z * $N;
    $Z = $Z + 1;

}
print_r($vetor);
?>
