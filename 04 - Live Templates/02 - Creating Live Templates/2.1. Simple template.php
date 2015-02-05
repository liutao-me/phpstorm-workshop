<?php
/**
 * 创建代码活动模板
 */

namespace LiveTemplates2\JetBrains;

/*
1. 打开 IDE 设置，Live Templates 并添加一个新的代码活动模板。命名为 "cls"

   模板的内容为:

class $CLASS_NAME$ {
    $END$
}

   设置执行环境为 PHP。
   启用 Reformat according to style （根据风格格式化代码）
   保存该模板

2. 使用 "cls" 测试我们新创建的代码活动模板
   这个 $CLASS_NAME$ 变量是一个热点。
   这个 $END$ 变量是一个特别的标记，是用来告诉 IDE 在扩展玩模板后将光标停在何处
*/

// cls <TAB>
