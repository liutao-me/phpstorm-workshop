<?php
/**
 * 检查 - 查找问题
 *
 * 快速修复菜单允许查找所有相同的问题
 */

namespace Inspections6\JetBrains;

class FindIssues {
    // 1. 一个警告的高亮应该会显示在下面的方法中（使用布尔值foreach?）
    //    使用快速修复(Alt+Enter)并在整个项目上运行该检查。
    //    你将会看见一个工具栏展示了整个项目中的相同错误
    public function warningFunction() {
        $variable = true;
        foreach ($variable as $item) {

        }
    }

    // 2. 死代码 (未使用变量). 在打开的文件里执行该检查
    public function deadCodeFunction() {
        $variable = true;
    }
}
