<?php
/**
 * 跳转到定义
 *
 * 导航到标识符的定义
 *
 * Ctrl+Click 或者 Ctrl+B (Windows/Linux)
 * Command+Click 或者 Command+B (Mac OS X)
 */

namespace Navigation2\JetBrains;

use ArrayIterator;
use Navigation1\JetBrains\Customers\Customer;

$name = 'Hadi';
$age = 53;

// 1. 在Customer上使用 Ctrl+Click (在Mac上Command+Click)
// 2. 使用键盘快捷键
// 3. 导航到下面传递给构造函数的 $age 变量的定义
$person = new Customer($name, $age);

// 4. 导航到 celebrateBirthday() 函数
// 5. 导航到 $person 变量的定义
$person->celebrateBirthday();

// 6. 导航到 ArrayIterator 这个PHP标准库类的定义
$myArray = array();
$myArrayIterator  = new \ArrayIterator($myArray);
