<?php

$nama = "Hasna";

// PERULANGAN

/*
for ($i=0; $i<5; $i++) {
    echo $nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

echo $data[5];

foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN

/*
if ($nama == "Hasna") {
    echo $nama." adalah seorang Mahasiswa";
} else if($nama == "Almira") {
    echo $nama." adalah seorang Siswa SD";
} else {
    echo $nama." siapakah dia?";
}
*/

/*
switch($nama) {
    case "Hasna":
        $pesan = $nama." adalah seorang Mahasiswa";
    break;
    case "Almira":
        $pesan = $nama." adalah seorang Siswa SD";
    break;
    default: 
    $pesan = $nama." siapakah dia?";
}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama and Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "Hasna":
                $pesan = $_POST['nama']." adalah seorang Mahasiswa";
            break;
            case "Almira":
                $pesan = $_POST['nama']." adalah seorang Siswa SD";
            break;
            default: 
            $pesan = $_POST['nama']." siapakah dia?";
        }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }

    } else {
        echo "Anda belum input nama dan jumlah";
    }

    ?>
</body>
</html>