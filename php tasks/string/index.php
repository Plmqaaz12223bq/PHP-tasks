<?php

echo strtoupper("ghufran almomani");
echo "<br>";

echo strtolower("ghufran almomani");
echo "<br>";

echo ucfirst("ghufran almomani");
echo "<br>";

print ucwords("ghufran almomani");
echo "<hr>";
?>


<?php
$string1= '085119'; 
echo substr(chunk_split($string1, 2, ':'), 0, -1);

echo "<hr>";
?>



<?php
$str1 = 'I am a full stack developer at orange coding academy’';
if (strpos($str1,'orange') !== false) 
 {
    echo 'Word Found!';
 }
else
 {
    echo "the word doesn't exist";
 }
 echo "<hr>";
?>


<?php

$url='www.example.com/public_html/index.php';
$fileName=substr(strrchr($url,"/"),1);
echo $fileName;
echo "<hr>";
?>


<?php
$email="info@orange.com";
$user=strstr($email,'@',true);
echo $user;
echo "<hr>";
?>

<?php
$com=substr(strrchr($email,"."),-3);
echo $com;
echo "<hr>";
?>


<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
echo "<hr>";
?>

<?php
$str4="That new trainee is so genius";
echo preg_replace("/the/","That",$str4,1);
echo "<hr>";
?>

<?php
$string1 = 'dragonball';
$string2 = 'dragonboll';
$pos = strspn($string1 ^ $string2, "\0");

printf(
    'First difference between two strings at position  %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);
echo "<hr>";
?>

<?php
$print1="Twinkle,\n twinkle,\n little star.";
$arrayTest=explode("\n",$print1);

var_dump($arrayTest);
echo "<hr>";
?>

<?php
$char='a';
echo '' .$char;
echo '<br><br>';
$nextChar=++$char;
echo '' .$nextChar;
echo "<hr>";
?>


<?php
$first="The quick brown fox";
$arrayTest=explode(' ',trim($first));
echo $arrayTest[0] ;
echo "<hr>";
?>


<?php
$num15="0000657022.24";
$numTest=ltrim($num15,'0');
echo $numTest;
echo "<hr>";
?>

<?php
$str16='The quick brown fox jumps over the lazy dog';
echo str_replace("fox"," ",$str16);
echo "<hr>";
?>


<?php
$str17="The quick brown fox jumps over the lazy dog///";
$str17Test=rtrim($str17,"/");
echo $str17Test;
echo "<hr>";
?>


<?php
$str19='"\1+2/32:2-3/43';
$str19Arrey=array('"','\\','/',':','-','+');
$full19=str_replace($str19Arrey," ",$str19);
echo $full19;
echo "<hr>";
?>


<?php
$str20="The quick brown fox jumps over the lazy dog";
$str20Test=explode(" ",$str20);
$str20array=array_splice($str20Test,0,5);
$str20updated=implode($str20array," ");
echo $str20updated;
echo "<hr>";
?>


<?php
$str21="2,543.12";
$str21Test=str_replace(",","",$str21);
echo $str21Test;
echo "<hr>";
?>


<?php
for ($i= ord('a'); $i<= ord('z'); $i++) 
echo chr($i).' ';
echo "<hr>";
?>

























