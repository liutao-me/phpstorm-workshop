<?php
/**
 * 移动代码
 *
 * 上下移动代码或者整个代码块
 *
 * 上/下移动行:
 * Shift+Alt+Up / Down (Windows/Linux/Mac OS X)
 *
 * 上下移动代码块:
 * Shift+Ctrl+Up / Down (Windows/Linux)
 * Shift+Command+Up / Down (Mac OS X)
 */

namespace Editing3\JetBrains;

class MovingCode {
    // 1. 使用上下移动行对下面的数字变量声明排序
    public function moveLine() {
        $numberFive = 5;
        $numberOne = 1;
        $numberThree = 3;
        $numberTwo = 2;
        $numberFour = 4;
    }

    // 2. 使用上下代码块移动对下面的 if 结构进行排序（鼠标放在控制结构上非控制结构体内的位置即可移动整块）
    public function moveStatement() {
        if (2 == 2) {
            // ...
            echo 'Number two';
        }
        if (1 == 1) {
            // ...
            echo 'Number one';
        }
        if (3 == 3) {
            // ...
            echo 'Number three';
        }
    }
}
