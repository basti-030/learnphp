<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deine Lottozahlen</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<?php 

$header = true;
while ($header) {
   echo "<h1 id=header > Deine Glückszahlen<br></h1>";
   $header = false;
}

$Lotto=range(1,49);
Shuffle($Lotto);

for($x=1;$x<=6;$x++)
{
    //Ich verstehe nicht und habe nicht rausgefunden wie ich die zahlen die er auswirft einzeln sprechen kann
    echo "<div>
    <p> $Lotto[$x] </p>
    </div>
   "; 
}
?>

</body>
</html>

