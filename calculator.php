
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
     <link rel="stylesheet" href="kon.css">
</head>
<body >
    <div class="box"><form action="" method="GET">
        <label for="1">Angka 1</label>
        <input type="number" id="1" name="angka1">
        <label for="2">Angka 2</label>
        <input type="number" id="2" name="angka2">
        <select name="operator" id="">
            <option>Tidak Ada</option>  
            <option>Tambah</option>
            <option>Kurang</option>
            <option>Bagi</option>
            <option>Kali</option>
        </select>
        <button type="reset">Reset</button>
        <button type="submit" name="submit">Hasil</button>
    </form>
    <?php 
if(isset($_GET['submit'])){
    $result1 = $_GET['angka1'];
    $result2 = $_GET['angka2'];
    $operator = $_GET['operator'];
    switch($operator){
         case 'Tidak Ada':
        echo    "Isi Duls Ngab";
        break;
        case 'Tambah':
        echo    $result1 + $result2 ;
        break;
            case 'Kurang':
        echo    $result1 - $result2 ;
        break;
            case 'Bagi':
        echo    $result1 / $result2 ;
        break;
            case 'Kali':
        echo    $result1 * $result2 ;
        break;
    }
}




?></div>
</body>
</html>