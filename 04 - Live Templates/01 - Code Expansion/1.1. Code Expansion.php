<?php
/**
 * 代码缩写(也叫snippet)
 *
 * 使用代码活动模板扩展文本.
 * 并可使用变量"热点"来扩展代码
 * 热点可能链接到一个宏，比如 “suggest type of variable”, “suggest name for variable”, “clipboard content”, “new GUID” 等等
 * 使用 Tab 键可以在热点之间移动
 * 模板可以定义光标结束的地方
 *
 * Tab (Windows/Linux/Mac OS X)
 */

namespace LiveTemplates1\JetBrains;

// 1. 打开 IDE 设置搜索 Live Templates 并检查各种已经存在的代码活动模板
//    我们可以看到已经存在的代码活动模板，也可以创建我们自己的
class CodeExpansion {
    // 2. 创建一个 protected function firstFunction()。
    //    输入 prof 并按 Tab。在第一个热点输入 firstFunction 并再按 Tab。
    //    这里可以接受参数也可以不定义任何形参。再次按下 Tab 将移动到方法体内

    // prof <TAB>

    // 3. 使用 pubsf 创建一个 public static function staticFunction1()

    // pubsf <TAB>

    protected function secondFunction(){
        $numbers = array(1,2,3,4,5,6,7,8,9);

        // 4. 循环 $numbers 数组，输入 fore 并按 Tab。
        //    在第一个热点，输入 $numbers 再按 Tab。
        //    在第二个热点，输入一个变量名并按 Tab 移动到循环体内

        // fore <TAB>
    }
}
