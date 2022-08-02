<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="zadanie.php" method="get">
    Message: <input type ="text" name="message">
    <input type ="submit">
    <br/>
    Numbers: <input type ="int" name="numbers">
    <input type ="submit">
    </form>
<?php
class PhoneKeyboardConverter {



};
$string = $_GET["message"];
$number =$_GET["numbers"];
$ReplacementPattern = [
    'a' => '2,',
    'b' => '22,',
    'c' => '222,',
    'ą' => '2222,',
    'ć' => '22222,',
    'd' => '3,',
    'e' => '33,',
    'f' => '333,',
    'ę' => '3333,',
    'g' => '4,',
    'h' => '44,',
    'i' => '444,',
    'j' => '5,',
    'k' => '55,',
    'l' => '555,',
    'ł' => '5555,',
    'm' => '6,',
    'n' => '66,',
    'o' => '666,',
    'ó' => '666,',
    'p' => '7,',
    'q' => '77,',
    'r' => '777,',
    's' => '7777,',
    't' => '8,',
    'u' => '88,',
    'v' => '888,',
    'w' => '9,',
    'x' => '99,',
    'y' => '999,',
    'z' => '9999,',
    'ż' => '99999,',
];
$ReverseReplacment = [
    '22222,'&'22222'=>'ć',
    '2222,'&'2222' =>'ą',
    '222,'&'222'  =>'c',
    '22,'&'22'   =>'b',
    '2,'  &'2'  =>'a',
    '3333,'&'3333'   =>'ę',
    '333,'&'333'  =>'f',
    '33,'&'33'   =>'e',
    '3,'&'3'    =>'d',
    '444,'&'444'  =>'i',
    '44,'&'44'   =>'h',
    '4,' &'4'   =>'g',
    '5555,'&'5555' =>'ł',
    '555,'&'555'  =>'l',
    '55,'&'55'   =>'k',
    '5,'&'5'    =>'j',
    '6666,'&'6666'  =>'ó',
    '666,' &'666' =>'o',
    '66,' &'66'  =>'n',
    '6,'  &'6'  =>'m',
    '7777,'&'7777' =>'s',
    '777,' &'777' =>'r',
    '77,' &'77'  =>'q',
    '7,'  &'7'  =>'p',
    '888,'&'888'  =>'v',
    '88,' &'88'  =>'u',
    '8,'  &'8'  =>'t',
    '99999,'&'99999'=>'ż',
    '9999,'&'9999' =>'z',
    '999,' &'999' =>'y',
    '99,'  &'99' =>'x',
    '9,'  &'9'  =>'w',
    ',' => "",
];
echo str_ireplace(array_keys($ReplacementPattern), array_values($ReplacementPattern), $string);
echo str_replace(array_keys($ReverseReplacment), array_values($ReverseReplacment), $number);
?>

</body>
</html>