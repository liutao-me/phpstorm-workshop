<?php
/**
 * 检查 - 设置
 *
 * 启用/禁用检查，查看该检查的示例和文档
 *
 * Ctrl+Alt+S (Windows/Linux)
 * Command+, (Mac OS X)
 */

// 1. 在设置里搜索 "inspection"(或者直接搜下面的这个词组)。
// 2. 找到 "Expression Result Unused" (表达式结果未使用)并查看为什么这可能是个代码BUG。
// 3. 找到 "Silence Operator"（抑制错误符@）检查，启用它并选择错误级别为 Warning（原文为 Error）。下面的代码现在将会展示一个警告
// 4. 找到 "Missing Break Statement" 检查并修改为错误。
// 5. 禁用 "Inconsistent Return Points"（不一致的返回）检查。

namespace Inspections5\JetBrains;

@phpinfo();
