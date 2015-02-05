<?php
/**
 * 检查 - 快速修复
 *
 * 高亮提供了一个快速修复的操作来帮助移除警告
 *
 * Alt+Enter (Windows/Linux/Mac OS X)
 */

namespace Inspections2\JetBrains;

class QuickFixes {
    // 1. 一个typo警告高亮展示了 "$mispelled" 是一个拼写有误的变量
    //    将光标放到变量上面并按 Alt+Enter 修正该错字
    public function spelling() {
        $mispelled = true;
    }

    // 2. 下面的函数里应该会显示一个警告高亮，因为类 Person 是未知的
    //    将光标放到 Person 上并按 Alt + Enter 就可以导入该类了
    public function importClass() {
        $person = new Person();
    }

    // 3. 使用了一个未定义的变量 $this->_variable。
    //    将光标放到 "_variable" 并按 Alt+Enter就可以在我们的类里生成一个字段
    public function undefinedVariable() {
        $this->_variable = 'test';
    }
}
