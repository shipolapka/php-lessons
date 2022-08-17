<?php

//1

print_r('Hello, World!');

//2

print_r('King in the North!');

//3

//You know nothing, Jon Snow!

//4

print_r('Robert');
print_r('Stannis');
print_r('Renly');

//5

print_r (9780262531962);

//6

print_r('What Is Dead May Never Die');

//7

print_r(81 / 9);

//8

print_r(6 - -81);

//9

print_r(3 ** 5);
print_r(-8 / -4);

//10

print_r(8 / 2 + 5 - -3 / 2);

//11

print_r(70 * (3 + 4) / (8 + 2));

//12

print_r((5 ** 2) - (3 * 7));

//13

print_r('"Khal Drogo\'s favorite word is "athjahakar""');

//14

print_r("- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".");

//15

print_r('Winter ' . 'came ' . 'for ' . 'the ' . 'House ' . 'of ' . 'Frey.');

//16

print_r(chr(126));
print_r(chr(94));
print_r(chr(37));

//17

print_r(-0.304);

//18

print_r('7' - (-8 - -2));

//19

print_r(((int)2.9) . ' times');

//20

$motto = 'What Is Dead May Never Die!';
print_r($motto);

//21

$name = 'Brienna';
$name = 'anneirB';

print_r($name);

//22

$myBrothers = 2;
print_r($myBrothers);

//23

$family = 'Targaryen';
$pet = 'Dragon';

print_r($family);
print_r(' and ');
print_r($pet);

//24

$eurosCount = 100;
$dollarsCount = 1.25 * $eurosCount;

print_r($dollarsCount);
print_r("\n");

$rublesCount = $dollarsCount * 60;

print_r($rublesCount);

//25

$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r($greeting . ', ' . $firstName . '!');
print_r($intro . "\n" . $info);

//26

$firstNumber = 1.10;
$secondNumber = -100;
print_r($firstNumber * $secondNumber);

//27

$king = 'King Balon the 6th';

$countOfCastles = 6;
$countOfRooms = 17;

print_r($king . ' has ' . ($countOfCastles * $countOfRooms) . ' rooms.');

//28

const DRAGONS_BORN_COUNT = 3;

//29

print_r(__DIR__);

//30

$stark = 'Arya';

print_r("Do you want to eat, {$stark}?");

//31

$one = 'Naharis';
$two = 'Mormont';
$three = 'Sand';

print_r("{$one[2]}{$two[1]}{$three[3]}{$two[4]}{$two[2]}");

//32

$str = <<<EOT
Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
EOT;

print_r($str);

//33

$company1 = 'Apple';
$company2 = 'Samsung';

$result = strlen($company1) + strlen($company2);
print_r($result);

//34

$text = 'mount';

print_r(ucfirst($text));

//35

$number = 10.1234;

print_r(round($number, 2));

//36

$text = 'Never forget what you are, for surely the world will not';

print_r("First: {$text[0]}\nLast: {$text[strlen($text)-1]}");

//37

print_r(min(3, 10, 22, -3, 0));

//38

print_r(rand(1, 6));

//39

$motto = 'Family, Duty, Honor';

print_r(gettype($motto));

//40

namespace HexletBasics\DefineFunctions\Define;

function printMotto()
{
    print_r('Winter is coming');
}

//41

namespace HexletBasics\DefineFunctions\ReturnInstruction;

function sayHurrayThreeTimes()
{
    $text = 'hurray!';
    return $text . ' ' . $text . ' ' . $text;
}

//42

namespace HexletBasics\DefineFunctions\Parameters;

function truncate($str, $num)
{
    $result = substr($str, 0, $num);
    return $result . '...';
}

//43

namespace HexletBasics\DefineFunctions\DefaultArguments;

function getHiddenCard($numberCard, $stars = 4)
{
    $trimNumber = substr($numberCard, 12, 4);
    $hiddenNumber = str_repeat('*', $stars);
    return $hiddenNumber . $trimNumber;
}

//44

namespace HexletBasics\DefineFunctions\ReadingDocumentation;

function getAge($age)
{
    return floor($age);
}

//45

namespace HexletBasics\Logic\BoolType;

function isPensioner($age)
{
    return $age >= 60;
}

//46

namespace HexletBasics\Logic\Predicates;

function isMister($str)
{
    return $str == 'Mister';
}

//47

namespace HexletBasics\Logic\CombineExpressions;

function isInternationalPhone($str)
{
    $firstSymbol = $str[0];
    $isPlus = $firstSymbol === '+';
    return $isPlus;
}

//48

namespace HexletBasics\Logic\LogicalOperators;

function isLeapYear($year)
{
    return $year % 400 === 0 || ($year % 4 === 0 && $year %100 !== 0);
}

//49

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

function isPalindrome($str)
{
    $palindrome = strtolower($str);
    return $palindrome === strrev($palindrome);

}

function isNotPalindrome($str)
{
    return !isPalindrome($str);
}

//50

namespace HexletBasics\Logic\LogicalOperators2;

function isNeutralSoldier($armorColor, $shieldColor)
{
    return $armorColor !== 'red' && $shieldColor === 'black';
}

//51

namespace HexletBasics\Logic\WeakTyping;

function isFalsy($var)
{
    return $var == false;
}

//52

namespace HexletBasics\Conditionals\IfStatement;

function guessNumber($num)
{
    if ($num === 42) {
        return ('You win!');
    }

    return ('Try again!');
}

//53

namespace HexletBasics\Conditionals\IfElse;

function normalizeUrl($url)
{
    if (substr($url, 0, 7) === 'http://') {
        $url = substr($url, 0, 4) . 's' . substr($url, 4);
    } else {
        $url = 'https://' . $url;
    }
    return $url;
}

//54

namespace HexletBasics\Conditionals\ElseIfStatement;

function whoIsThisHouseToStarks($family)
{
    if ($family === 'Karstark' || $family === 'Tully') {
        return ('friend');
    } elseif ($family === 'Lannister' || $family === 'Frey') {
        return ('enemy');
    } else {
        return ('neutral');
    }
}

//55

namespace HexletBasics\Logic\TernaryOperator;

function flipFlop($str)
{
    return ($str === 'flip') ? 'flop' : 'flip';
}
// Через if/else:

/*function flipFlop($str)
{
    if ($str === 'flip') {
        return 'flop';
    }

    return 'flip';
}*/

//56

namespace HexletBasics\Conditionals\SwitchStatement;

function getNumberExplanation($num)
{
    switch($num) {
        case 666:
            return 'devil number';
        case 42:
            return 'answer for everything';
        case 7:
            return 'prime number';
        default:
            return null;
    }
}

//57

namespace HexletBasics\Conditionals\Elvis;

function generateAmount($countItems, $priceAudit)
{
    return $countItems ?: $priceAudit * 3;
}

//58

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    $i = $firstNumber;
    while ($i >= 1) {
        print_r($i);
        print_r("\n");
        $i = $i -1;
    }
    print_r('finished!');
}

//59

function multiplyNumbersFromRange($min, $max)
{
    $res = 1;
    $i = $min;

    while ($i <= $max) {
        $res = $res * $i;
        $i = $i + 1;
    }

    return $res;
}

//60

namespace HexletBasics\Loops\AgregationString;

function joinNumbersFromRange($min, $max)
{
    $i = $min;
    $res = '';

    while ($i <= $max) {
        $res = $res . $i;
        $i = $i + 1;
    }

    return $res;
}

//61

namespace HexletBasics\Loops\IterationOverString;

function printReversedWordBySymbol($str)
{
    $i = strlen($str) - 1;
    while ($i >= 0) {
        print_r("$str[$i]\n");
        $i = $i - 1;
    }
}

//62

namespace HexletBasics\Loops\ConditionsInsideLoops;

function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    $strLower = strtolower($str);
    $charLower = strtolower($char);

    while ($i < strlen($strLower)) {
        if ($strLower[$i] === $charLower) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }

    return $count;
}

//63

namespace HexletBasics\Loops\ReverseString;

function mysubstr($str, $len)
{
    $i = 0;
    $res = '';

    while ($i < $len) {
        $res = $res . $str[$i];
        $i = $i + 1;
    }

    return $res;
}

//64

namespace HexletBasics\Loops\EdgeCases;

function isArgumentsForSubstrCorrect($str, $offset, $len)
{
    if ($len < 0 || $offset < 0 || $offset > (strlen($str) - 1) || ($len + $offset) > strlen($str)) {
        return false;
    } else {
        return true;
    }
}

//65

namespace HexletBasics\Loops\SyntaxSugar;

function filterString($str, $char)
{
    $i = 0;
    $res = '';

    while ($i < strlen($str)) {
        $currenChar = $str[$i];

        if ($currenChar !== $char) {
            $res = $res . $currenChar;
        }
        $i += 1;
    }

    return $res;
}

//66

namespace HexletBasics\Loops\Mutators;

function makeItFunny($str, $num)
{
    $i = 0;
    $res = '';

    while ($i < strlen($str)) {
        $currentChar = $str[$i];
        if (($i + 1) % $num === 0 ) {
            $upperChar = strtoupper($currentChar);
            $res = $res . $upperChar;
        } else {
            $res = $res . $currentChar;
        }
        $i++;

    }

    return $res;
}

//67

namespace HexletBasics\Loops\ReturnFromLoop;

function hasChar($str, $char)
{
    $i = 0;

    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            return true;
        }
        $i++;
    }

    return false;
}

//68

namespace HexletBasics\Loops\ForLoop;

function sumOfSeries($min, $max)
{
    $sum = 0;

    for ($i = $min; $i <= $max; $i += 1) {
        $sum = $sum + $i;
    }

    return $sum;
}

//69

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($text)
{
    $res = '';
    for ($i = 0; $i < mb_strlen($text); $i += 1) {
        if (mb_substr($text, $i, 1) === mb_strtoupper(mb_substr($text, $i, 1))) {
            $res = $res . mb_strtolower(mb_substr($text, $i, 1));
        } elseif (mb_substr($text, $i, 1) === mb_strtolower(mb_substr($text, $i, 1))) {
            $res = $res . mb_strtoupper(mb_substr($text, $i, 1));
        }
    }

    return $res;
}

//70

print_r(setlocale(LC_CTYPE, 0));

//71

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    if (mb_strpos($text, $substr) === 0) {
        return true;
    } else {
        return false;
    }
}

//72

namespace HexletBasics\Dates\Timestamp;

const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp)
{
    $currentYear = floor($timestamp / SECONDS_IN_YEAR) + 1970;
    return (int)$currentYear;
}

//73

namespace HexletBasics\Dates\DateFunction;

function getCustomDate($timestamp)
{
    return date('d/m/Y', $timestamp);
}

//74

namespace HexletBasics\Dates\Mkdtime;

function getHexletBirthday()
{
    return mktime(0, 0, 0, 1, 1, 2012);
}

//75

print_r(date_default_timezone_get());