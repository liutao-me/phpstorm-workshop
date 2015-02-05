<?php
/**
 * 创建活动模板-进阶
 */

namespace LiveTemplates2\JetBrains;

/*
1. 打开 IDE 设置 | Live Templates 并添加一个新的模板叫 "prop"。

   使用 AdvancedTemplate.txt 中的代码作为模板内容。注意变量使用（$$ 是用来转义PHP 的 $符号）

   设置执行环境为 PHP。
   启用 Reformat according to style （根据风格格式化代码）

   点击 "Edit Variables" 按键。我们可以为模板热点指定一个默认值或者是表达式
   为 PROPERTY_NAME 设置一个表达式: capitalize(FIELD_NAME)。
   这将自动使用 FIELD_NAME 的内容填充 PROPERTY_NAME 变量

   还有一些其他的变量可以用。比如当前的计算机用户名，日期，时间。我们也可以让它调用自动完成

   保存该模板

2. 使用 "prop" 测试新创建的模板。
   $CLASS_NAME$$ 变量是一个热点
   这个 $END$ 变量是一个特别的标记，是用来告诉 IDE 在扩展玩模板后将光标停在何处
*/

class LiveTemplates {

    // prop <TAB>

}
