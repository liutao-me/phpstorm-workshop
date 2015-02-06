<?php
/**
 * 创建代码活动模板 - 包围模版
 *
 * 使用模版包围代码。包围模版与普通模版不同的地方就是定义了 $SELECTION$ 变量
 *
 * Ctrl+Alt+T or Ctrl+Alt+J (Windows/Linux)
 * Alt+Command+T or Alt+Command+J (Mac OS X)
 */

namespace LiveTemplates3\JetBrains;

/*
1. 打开 IDE 设置 | Live Templates 并添加一个新的模板名为 "trycatch"

   设置模板的文本为：

try {
    $SELECTION$
} catch ($TYPE$ $$$VARIABLENAME$) {
    $END$
}

   设置执行环境为 PHP。
   启用 Reformat according to style （根据风格格式化代码）

   在编辑变量对话框，将 TYPE 排到第一个。设置表达式为 complete()。
   为 VARIABLENAME 设置默认值为 "exception" (包含引号)

   保存该模板

2. 测试我们新创建的模板。选择下面这行代码并按下快捷键
*/

echo "This will throw an exception";
