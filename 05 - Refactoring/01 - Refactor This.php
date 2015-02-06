<?php
/**
 * 重构
 *
 * 在项目视图，结构工具栏，编辑区和UML类图上重构代码
 *
 * Ctrl+Shift+Alt+T (Windows/Linux)
 * Ctrl+T (Mac OS X)
 */

namespace Refactoring1\JetBrains;

// 1. 使用 Refactor This 的快捷键的 Rename. 把 $name 改成 $firstName
//    注意 IDE 也可以在 评论或字符串里搜索引用（貌似不太好用，一搜就是搜全局，很多不相关的。然后再选范围后， Do factory 按钮又不见了）
$name = 'Maarten';

// 2. 会看到该重命名重构动作已经更新了当前所有作用域内出现的该变量
echo $name . ' was here.'; // 检查: 看这个 $name 的名字命名是否更改过来了？

// 3. 使用 Refactor This 菜单还可以重构整块代码。选择下面几行代码并使用 Refactor This
//    使用 Extract Method 重构，命名函数为 "reverseString"。$firstName 参数命名为 $stringToReverse。
$nameBackwards = '';
for ($i = 0; $i < strlen($name); $i++) {
    $nameBackwards = substr($name, $i, 1) . $nameBackwards;
}

// 4. Extract Method 重构操作不会更新下面的代码
echo 'Name backwards: ' . $nameBackwards;

// 5. 从项目窗口选择当前文件。使用 Refactor This 选重命名并输入 "01 - Refactor This - done.php"
//    不要使用 Refactor 按钮，点 Preview 来看看该操作哪些文件将受到影响
//    提示：Code.php 将会被更新。
//    从 Preview　的工具栏点击 Do Refactor 继续重构操作。
