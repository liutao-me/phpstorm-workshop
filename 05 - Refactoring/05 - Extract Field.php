<?php
/**
 * 提取字段
 *
 * 提取一个表达式变成字段
 *
 * Ctrl+Alt+F (Windows/Linux)
 * Alt+Command+F (Mac OS X)
 */

namespace Refactoring5\JetBrains;

class Greeter {
    public function greet($name) {
        // 1. 提取字符串 'Hello' 到字段名为 $_greeting，这样我们就可以对 greeting 进行定制了
        //    使用 "Initialize in class constructor" （在类的构造函数中初始化） 选项生成构造函数。
        //    要把它声明为 protected
        return 'Hello' . ', '  . $name;
    }
}
