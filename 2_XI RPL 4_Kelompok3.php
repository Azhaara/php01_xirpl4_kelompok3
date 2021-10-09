<!DOCTYPE html>
<html lang="en">
<head>
    <title>Belajar PHP 2</title>
</head>
<body>
    <?php
    $text = "Perulangan";
    echo "<h1>" . $text . "<h1/>";
    echo date('l, d-m-Y / H:i:s') . "<br/>";

    $start=6;
	for($a=1; $a<=$start; $a++){
	for($c=$start; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
    ?>
</body>
</html>