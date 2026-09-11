<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h2>Bài 1: </h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i ;
        }
    }
    ?>

    <h2>Bài 2:</h2>
    <?php
    $n = 69;
    $laSoNguyenTo = true;

    if ($n < 2) {
        $laSoNguyenTo = false;
    } else {
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $laSoNguyenTo = false;
            break;
        }
    }
    }   

    if ($laSoNguyenTo == true) {
        echo "$n la so nguyen to";
    } else {
        echo "$n khong phai la so nguyen to";
    }
?>


    <h2>Bài 3</h2>
    <?php
    function inHinhChuNhat($chieuRong, $chieuCao) { 
        for ($i = 1; $i <= $chieuCao; $i++) { 
            for ($j = 1; $j <= $chieuRong; $j++) { 
                echo "* "; 
            } 
            echo "<br>"; 
        } 
    } 
    inHinhChuNhat(6, 3);
    ?>




</body>
</html>