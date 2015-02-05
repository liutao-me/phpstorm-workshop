<?php
/**
 * 文件结构工具栏
 *
 * 显示文件的大纲：类，函数（图标展示了可见性）
 * 在HTML, JavaScript, CSS, ...等语法中也可以
 *
 * Alt+7 (Windows/Linux)
 * Command+7 s(Windows/Linux)
 *
 * Ctrl+F12 弹框 (Windows/Linux)
 * Command+F12 弹框 (Mac OS X)
 *
 * 1. 打开文件结构工具栏
 * 2. 使用方向键导航到 fourthFunction()
 *    按Enter导航到该函数
 * 3. 打开文件结构工具栏，切换到HTML标签（可以使用跟标签栏一样的快捷键 Alt+Left/Right移动）
 *    导航到第一个段落
 */

namespace Navigation6\JetBrains;

class Class1 {
    /** @var int */
    protected $_classVariable;

    public function firstFunction() {

    }

    private function secondFunction() {

    }

    protected function thirdFunction() {

    }

    static function fourthFunction() {

    }
}

class Class2 {
    public function firstFunction() {

    }
}

$standardVariable = 1;
function standardFunction() {

}
?>
<html>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deserunt ea expedita magni omnis quis temporibus
    velit vitae. Ex laboriosam nesciunt nisi obcaecati possimus quia repellendus sequi similique soluta voluptas?</p>
</body>
</html>
