<?php
/**
 * 修改函数签名(Change Signature)，因为对下面第3步和第5,6步觉得有点相同分不清，所以暂时没有翻译
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

// 3. 修改函数的签名：重命名$name参数为$firstName并添加$lastName参数。
//    给$lastName变量指定一个默认值，我们要让我们的代码能够通过变异。
//    例如使用 '' 来给sayHello的任何调用该参数的地方设置为空字符串。
//
//    我们也能传递参数。下面得usingSayHello()使用$name没有问题。但是我们想让它也传递一个$lastName的参数。可以在重构窗口右边的工具栏上
//    点击传递图标来实现。
//
//    预览重构并在满意后应用该重构。
function sayHello($name) {
    // 4. Uncomment the following line:
    // $name = $firstName . ' ' . $lastName;
    return "Hello, $name";
}
sayHello('Maarten');


class UsingSayHelloClass {
    // 5. 待上面的重构完成后，使用Change Signature功能重新排序$firstName和$lastName参数。
    // 6. 修改签名为$firstName变量指定一个默认值，比如''。
    //    注意：不要在Default Value那一列添加''，那一列是指定更新调用处的默认值。相反，在第一列填入完整的 $firstName = ''。
    //
    //    先预览，满意后再应用。
    public static function usingSayHello($name) {
        sayHello($name);
    }
}
UsingSayHelloClass::usingSayHello('Maarten');
