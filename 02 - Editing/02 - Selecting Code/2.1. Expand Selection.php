<?php
/**
 * 选择代码
 *
 * 选择代码的各种方式
 *
 * Ctrl+W / Ctrl+Shift+W (Windows/Linux)
 * Alt+Up / Alt+Down (Mac OS X)
 */

namespace Editing2\JetBrains;

use Exception;

class SelectingCode {
    // 1. 将光标放到 $importantValue 中间并使用快捷键扩大它的选区
    //    再次触发选择整个声明不带分号
    //    再次触发选择整行
    //    再次触发选择整个方法体
    //    再次触发选择整个方法
    //    再次触发选择整个类
    //    再次触发选择整个命名空间
    //    再次触发选择整个文件
    // 2. 收缩选区知道 extendAndShrinkSelection() 函数被选择
    public function extendAndShrinkSelection() {
        $importantValue = 32;
        if ($importantValue > 42) {
            try {
                echo 'More important than 42?';
            } catch (Exception $ex) {
                // 3. Place the cursor on the $ex variable. Play with extend/shrink selection.
                echo $ex->getMessage();
            }
        }
    }

    /** @var string */ public $Name;
    /** @var int */ public $Age;
    public function run() { }
    public function sayHello() { }
    public function sayGoodbye() { }
    public function veryLongFunctionName() { }
}
