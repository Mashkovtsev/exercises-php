<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

$str1 = 'A';
$str2 = 'HELLO';
$str3 = 'HELLO!';

$shoutStr1 = 'A';
$shoutStr2 = 'HELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLOHELLO';
$shoutStr3 = 'HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!HELLO!';

Assert::that(shouter($str1))->eq($shoutStr1);
Assert::that(shouter($str2))->eq($shoutStr2);
Assert::that(shouter($str3))->eq($shoutStr3);
