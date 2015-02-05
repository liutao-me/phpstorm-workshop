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
    // 3. The most frequently used item is usually pre-selected e.g. $this->Age might be the most used.
    // 4. Dismiss the window with Esc.
    // 5. Space, tab and enter accept the choice.
    // 6. Type: $this->r
    //    Complete the statement using the keyboard shortcut.
    // 7. Type: if (true
    //    Complete the statement using the keyboard shortcut.
    public function basicCompletion() {
        // $this->

         $value =

        // if (true

        // 8. Place the caret right after "say". Use basic completion and select sayGoodbye().
        //    Tab replaces the statement, enter prepends the statement.
        $this->sayHello();

        // 9. Use CamelHumps to invoke veryLongFunctionName().
        //    Type: $this->
        //    Use "vlfn" to find the correct function.
        // $this->

        // 10. Try path completion. Include the "01 - Simple Breakpoint.php" file by placing the caret inside the quotes
        //     and use he keyboard shortcut.
        require_once '';
    }

    /** @var string */ public $Name;
    /** @var int */ public $Age;
    public function run() { }
    public function sayHello() { }
    public function sayGoodbye() { }
    public function veryLongFunctionName() { }
}
