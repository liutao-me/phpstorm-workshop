<?php
/**
 * 列选择
 *
 * 切换列选择模式。允许一次编辑多行
 *
 * Alt+Shift+Insert (Windows/Linux)
 * Shift+Command+8 (Mac OS X)
 */

namespace Editing2\JetBrains;

class ColumnSelection {
    // 1. 快捷键启用列模式
    // 2. 画一个包含所有 $someVariable 变量列的选区
    // 3. 重命名变量为 $foo.
    // 2. 禁用列模式
    public function columnSelection() {
        $someVariable = 3;
        $someVariable = 6;
        $someVariable = 9;
        $someVariable = 'a';
        $someVariable = 'b';
        $someVariable = 'c';
    }
}
