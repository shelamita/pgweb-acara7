<!DOCTYPE html>
<html>
<body>

<?php
# Comments 
// Ini Komen Pertama
# Ini Komen Kedua
/* Ini 
Komen Ketiga */


# PHP Variabel
// $nama = "Shelamita";    
// $umur = 19; 
// $tb = 1.61;
// echo $nama;
// echo "<br>";
// echo $umur;
// echo "<br>";
// echo $tb;


# PHP Echo
// $judul = "Belajar PHP Bersama Cinga";
// $isian = "W3Schools.com";

// echo "<h2>$judul</h2>";
// echo "<p>Belajar menggunakan $isian</p>";


# Strings Data Types
// $x = "Hello Cinga\ndan Bagaimana Kabarmu?\t";
// $y = 'Hello Cinga\ndan Bagaimana Kabarmu?\t';
// $z = 80;
// $a = 0.567;

// var_dump($x);
// echo "<br>";
// var_dump($y);
// echo "<br>";
// var_dump($z);
// echo "<br>";
// var_dump($a);


# Strings 
// $x = "Cinga";
// echo "Hello $x";


#PHP Numbers Data Types
// $a = 7;
// $b = 7.89;
// $c = "45";

// var_dump($a);
// echo "<br>";
// var_dump($b);
// echo "<br>";
// var_dump($c);


# PHP Casting (Cast To String)
// $a = 10;      // Integer
// $b = 10.4;    // Float
// $c = "hello"; // String
// $d = false;    // Boolean
// $e = NULL;    // NULL

// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (int) $d;
// $e = (string) $e;

// //To verify the type of any object in PHP, use the var_dump() function:
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);


# PHP Math SQRT
// echo(sqrt(64)."<br>");
// echo(sqrt(0)."<br>");
// echo(sqrt(1)."<br>");
// echo(sqrt(9));

# PHP Math Round 
// echo(round(0.69));
// echo(round(0.49));

# PHP Operator Aritmatik Additional
// $x = 20;  
// $y = 60;

// echo $x + $y;

# PHP Operator Aritmatik Substraction
// $x = 20;  
// $y = 5;

// echo $x - $y;

# PHP Operator Aritmatik Multiplication
// $x = 20;  
// $y = 4;

// echo $x * $y;

# PHP Operator Aritmatik Multiplication Division
// $x = 100;  
// $y = 25;

// echo $x / $y;

# PHP Operator Aritmatik Modulus
// $x = 80;  
// $y = 25;

// echo $x % $y;

# PHP Operator Aritmatik Exponentiation
// $x = 60;  
// $y = 3;

// echo $x ** $y;

# PHP Operator X=y
// $x = 200;
// echo $x;

# PHP Operator X += y
// $x = 73;  
// $x += 37;

// echo $x;

# PHP Operator X -= y
// $x = 73;
// $x -= 37;

// echo $x;

# PHP Operator X *= y
// $x = 11;
// $x *= 18;

// echo $x;

# PHP Operator X /= y
// $x = 100;
// $x /= 4;

// echo $x;

# PHP Operator X %= y
// $x = 106;
// $x %= 4;

// echo $x;

# PHP Comparison Equal
// $x = 9;
// $y = 9.0;

// if($x == $y){
// echo "Nilai true <br>";
// }

// echo  "Finish"

# PHP Operator Identical ===
// $x = 9;
// $y = 9.0;

// if($x === $y){
// echo "Nilai true <br>";
// }

// echo  "Finish"


# Fungsi Percabangan
// $t = 15;

// if ($t < 20){
//     echo "Have a Great Day!";
// }

# Fungsi Percabangan False Tidak TerPrint
// $t = 105;

// if ($t < 20){
//     echo "Have a Great Day!";
// } 

# Fungsi Percabangan False TerPrint
// $t = 105;

// if ($t < 20){
//     echo "Nilai Benar!";
// }
// else{
//     echo "Nilai Salah!";
// }


# Fungsi Switch Case
// $favcolor = "DBSMB";

// switch ($favcolor){
//     case "DTEDI";
//     echo "Kamu Berasal dari Departemen Teknik Elektro dan Infromatika ";
//     break;
//     case "DTK";
//     echo "Kamu Berasal dari Departemen Teknologi Kebumian";
//     break;
//     case "DTS";
//     echo "Kamu Berasal dari Departemen Teknik Sipil";
//     break;
//     case "DTM";
//     echo "Kamu Berasal dari Departemen Teknik Mesin";
//     break;
//     default:
//     echo "Kamu Berasal dari Departemen selain DTEDI/DTK/DTS/DTM";
// }


# Array
// $prodi = array("SIG", "TSPD", "KPJ");
// echo $prodi[0];


# Loop
// for ($x = 0; $x <= 5; $x++) {
//     echo "The number is: $x <br>";
// }


# Functions
// function familyName($fname, $year) {
//     echo "$fname Wibowo. Born in $year <br>";
// }

// familyName("Shelamita Amanah", "2005");
// familyName("Nurmia Endah", "1999");
// familyName("Umiyatun", "1975");
// familyName("Priyo Ari", "1970");

# Tabel
$nama = array("Shelamita", "Sowon", "Yerin", "Eunha", "Yuju", "SinB", "Umji");
$nim = array("517749", "513333", "515555", "517777", "519999", "510000", "514444");
$alamat = array("Piyungan", "Kotagede", "Madiun", "Giwangan", "Turi",  "Temanggung", "Rembang");

echo "<table border='1'>";
for($i=0; $i<=6; $i++) {
    echo"<tr><td> $nama[$i] </td><td> $nim[$i] </td><td> $alamat[$i] </td></tr>";
}
echo "</table>";

?>
<!-- <pre>
    <p>Ini Notes</p>
</pre> -->

</body>
</html>