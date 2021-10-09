<!DOCTYPE html>
<head>
    <title>Belajar PHP 6</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['nama'] = "Hamid Sabirin";
        echo "<a href='session02.php'>Menuju ke halaman kedua</a>";
    ?>
</body>
</html>