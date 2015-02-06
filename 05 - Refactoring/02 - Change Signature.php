<?php
/**
 * 修改函数签名，因为对下面第3步和第5,6步觉得有点相同分不清，所以暂时没有翻译
 *
 * 你可以使用该重构做以下事情：
 *  - 改变函数的名字.
 *  - 添加或删除参数.
 *  - 为参数赋值默认值.
 *  - 给参数排序.
 *  - 改变参数的名字.
 *  - 为调用的地方指定传新的参数.
 *
 * Ctrl+F6 (Windows/Linux)
 * Command+F6 (Mac OS X)
 */

namespace Refactoring2\JetBrains;

// 1. 使用 修改函数签名(Change Signature) 修改函数名为 "add"
function addTwoNumbers($a, $b) {
    return $a + $b;
}

// 2. 注意下面的有影响的代码已被更新
$four = addTwoNumbers(2, 2);

// 3. Change the function signature: rename the $name parameter to $firstName add a $lastName parameter.
//    Specify a default value for the $lastName variable, we want our code to compile.
//    E.g. use '' to set an empty string everywhere sayHello is called.
//
//    We can also propagate parameters. The usingSayHello() below uses $name as well, we may want to propagate
//    the new $lastName variable. Do this from the refactor window's toolbar on the right.
//
//    Preview the refactoring and apply it when satisfied.
function sayHello($name) {
    // 4. Uncomment the following line:
    // $name = $firstName . ' ' . $lastName;
    return "Hello, $name";
}
sayHello('Maarten');


class UsingSayHelloClass {
    // 5. After the previous refactoring, reorder the $firstName and $lastName parameters using Change Signature.
    // 6. Change Signature and specify a default value for the $firstName variable, e.g. ''.
    //    Important: Do not put this in the Default Value column: that column is used to update all calls to the function.
    //               Instead, rename $firstName to $firstName = ''.
    //
    //    Preview the refactoring and apply it when satisfied.
    public static function usingSayHello($name) {
        sayHello($name);
    }
}
UsingSayHelloClass::usingSayHello('Maarten');
