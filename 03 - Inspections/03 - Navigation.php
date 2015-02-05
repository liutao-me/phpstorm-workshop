<?php
/**
 * 检查 - 导航
 *
 * 向前或向后导航代码问题
 *
 * F2 / Shift+F2 (Windows/Linux/Mac OS X)
 */

namespace Inspections3\JetBrains;

// 1. 使用键盘快捷键在各个代码问题间导航(向下好像需要修正当前的问题才能继续)
class Navigation {
    public function errorFunction() {
        echo 'First line'
        echo 'Second line';
    }

    public function warningFunction1() {
        $variable = true;
        foreach ($variable as $item) {

        }
    }

    public function warningFunction2() {
        $variable = 1;
        if ($variable = 2) {

        }
    }

    public function warningFunction3() {
        $variable = 1;
        switch ($variable) {
            case 1:
                echo 'Number one';
            case 2:
                echo 'Number two';
        }
    }

    public function deadCodeFunction1() {
        $variable = true;
    }

    public function deadCodeFunction2() {
        return true;

        if (true) {
            return false;
        }
    }

    //    Suppress the inspection for this statement only.
    public function spelling() {
        $mispelled = true;
    }
}
