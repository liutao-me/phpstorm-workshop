<?php
/**
 * 意图
 *
 * 让IDE根据上下文找出可能的操作并执行它们
 *
 * Alt+Enter (Windows/Linux/Mac OS X)
 */

namespace Editing5\JetBrains;

class Intentions {
    // 1. 翻转 '==' 意图. 将光标放在下面 if 表达式里的 $variable 上按 Alt+Enter键
    //    现在我们可以翻转 $variable == true 使它变成 true == $variable
    public function flipIntention() {
        $variable = true;
        if ($variable == true) {

        }
        echo 'This may be throwing an Exception. Riiiight!';
    }

    // 2. 创建文件意图。将光标放在 "nonexistingfile.php" 上并按 Alt+Enter
    //    就可以创建该文件了。
    public function createFileIntention($items) {
        include 'nonexistingfile.php';
    }

    // 3. 简化布尔表达式意图。将光标放在下面函数的最后一行
    //    按 Alt+Enter 让IDE简化该表达式
    public function simplifyIntention() {
        $a = 0;
        $b = 1;
        echo !($a && !$b);
    }
}
