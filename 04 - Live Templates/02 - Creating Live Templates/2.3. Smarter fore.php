<?php
/**
 * 创建模板 - 进阶
 */

namespace LiveTemplates2\JetBrains;

/*
1. 打开 IDE 设置，Live Templates 并添加一个新的代码活动模板。命名为 "cls"

   模板的内容为:

foreach ($ITEMS$ as $ITEM$) {
    $END$
}

   设置执行环境为 PHP。
   启用 Reformat according to style （根据风格格式化代码）

   点击 "Edit Variables" 按键。我们可以为模板热点指定一个默认值或者是表达式
   为 ITEMS 设置表达式为: complete().
   为 ITEMS 设置默认值为 "$item" (包含引号)

   保存该模板

2. 测试新创建的模板。注意我们利用了 IDE 的自动完成特性是模板更聪明
*/

$numbers = array(1,2,3,4,5,6,7,8,9);

// fe <TAB>
