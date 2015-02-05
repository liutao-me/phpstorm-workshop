<?php
/**
 * 基本代码完成
 *
 * 类，方法或变量等代码的基本自动完成
 *
 * Ctrl+Space (Windows/Linux/Mac OS X)
 *
 * Ctrl+Shift+Enter 完成声明 (Windows/Linux)
 * Shift+Command+Enter 完成声明 (Mac OS X)
 */

namespace Editing1\JetBrains;

class BasicCompletion {
    // 1. 输入: $this->
    //    基本完成会暂时当前上下文环境中的代码完成选项
    //    当前类型的成员将会显示为粗体
    //    再次按下基本完成的快捷键来显示更多的符号
    // 2. 输入: $value =
    //    Use the Basic Completion keyboard shortcut. After the equals sign, Basic Completion shows the locally scoped
    //      Basic completion options followed by the wider scope of Basic Completion items.
    // 3. 最常用的将会被预选，比如: $this->Age
    // 4. 使用 Esc 关闭提示窗口
    // 5. 空格,tab和Enter将会确认选择
    // 6. 输入: $this->r
    //    使用快捷键完成代码
    // 7. 输入: if (true
    //    使用完成声明快捷键完成代码
    public function basicCompletion() {
        // $this->

        // $value =

        // if (true

        // 8. 把光标放到"say"的右边。使用基本完成选择 sayGoodbye()
        //    Tab键替换该声明，回车从前面增加声明
        $this->sayHello();

        // 9. 使用驼峰调用 veryLongFunctionName()
        //    输入: $this->
        //    使用 "vlfn" 找到正确的函数
        // $this->

        // 10. 尝试路径完成。将光标放在引号内，并尝试使用快捷键完成 "01 - Simple Breakpoint.php"文件
        require_once '';
    }

    /** @var string */ public $Name;
    /** @var int */ public $Age;
    public function run() { }
    public function sayHello() { }
    public function sayGoodbye() { }
    public function veryLongFunctionName() { }
}
