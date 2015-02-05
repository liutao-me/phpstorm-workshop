<?php
/**
 * 检查 - 高亮
 *
 * 在编辑器中高亮显示代码的问题
 */

namespace Inspections1\JetBrains;

class Highlights {
    // 1. 一个错误的高亮应该会显示在下面的方法中（missing semicolon：缺少分号）
    public function errorFunction() {
        echo 'First line'
        echo 'Second line';
    }

    // 2. 一个警告的高亮应该会显示在下面的方法中（使用布尔值foreach?）
    public function warningFunction1() {
        $variable = true;
        foreach ($variable as $item) {

        }
    }

    // 3. 在设置里搜索 "inspections"，找到 PHP 并启用 "Assignment in condition" 检查。(条件中赋值)
    //    现在下面将会警告我们下面的 if 声明中缺少一个 = 号.
    public function warningFunction2() {
        $variable = 1;
        if ($variable = 2) {

        }
    }

    // 4. 下面的函数里也应该会有一个警告高亮（missing break statement：缺少break） - 这实际上是一项建议
    public function warningFunction3() {
        $variable = 1;
        switch ($variable) {
            case 1:
                echo 'Number one';
            case 2:
                echo 'Number two';
        }
    }

    // 5. 死代码 (也叫僵尸代码，这里是未使用的变量).
    public function deadCodeFunction1() {
        $variable = true;
    }

    // 6. 死代码 (无法到达的代码).
    public function deadCodeFunction2() {
        return true;

        if (true) {
            return false;
        }
    }

    // 7. 一个typo警告高亮展示了 "$mispelled" 是一个拼写有误的变量
    //    Suppress the inspection for this statement only.
    public function spelling() {
        $mispelled = true;
    }
}
