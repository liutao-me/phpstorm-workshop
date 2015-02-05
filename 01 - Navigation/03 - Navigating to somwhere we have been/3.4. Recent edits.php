<?php
/**
 * 导航到上一个编辑位置
 *
 * 导航到上一个被编辑的代码
 *
 * Ctrl+Shift+Backspace (Windows/Linux)
 * Shift+Command+Delete (Mac OS X)
 */

namespace Navigation3\JetBrains;

class NavigateRecent {
    public function startingPoint() {
        // 1. 导航到 step1().
        $this->step1();
    }

    public function step1() {
        // 2. 取消下面行的注释
        // echo 'In step 1.';

        // 3. 导航到 step2()
        $this->step2();
    }

    public function step2() {
        // 4. 使用快捷键导航到我们上一个编辑位置，即步骤 2的地方
    }
}
