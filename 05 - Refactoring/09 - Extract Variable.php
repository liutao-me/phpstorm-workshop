<?php
/**
 * 提取变量
 *
 * 提取表达式的结果到一个变量。原来的表达式被替换为新的变量。
 *
 * Ctrl+Alt+V (Windows/Linux)
 * Alt+Command+V (Mac OS X)
 */

namespace Refactoring\JetBrains;

class Blog {
    protected $_blogName = 'My Blog';
    protected $_blogSubtitle = 'Just another blog';

    public function renderHeader() {
        // 1. 将光标放在 _blogSubtitle上。
        //    提取 "{$this->_blogName} - {$this->_blogSubtitle}" 这段字符串到一个叫 $title的变量。
        //    注意IDE会询问我们要提取哪个表达式。选择全部字符串。还有，勾选"Replace all occurrences"来替换第二段相同的字符串。
        echo '<title>';
        echo "{$this->_blogName} - {$this->_blogSubtitle}";
        echo '</title>';

        echo '<h1>';
        echo "{$this->_blogName} - {$this->_blogSubtitle}";
        echo '</h1>';
    }
}
