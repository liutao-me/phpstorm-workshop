<?php
/**
 * 高亮文件中的引用（usages）
 *
 * Highlight usages of a given symbol in the current file.
 * 高亮当前文件中所给的标识符的引用
 *
 * Ctrl+Shift+F7 (Windows/Linux)
 * Shift+Command+F7 (Mac OS X)
 */

namespace Navigation5\JetBrains;

class HighlightUsagesInFile {
    const MIN_VALUE = -3.5;
    const MAX_VALUE = 3.5;

    // 1. 将光标放到 $newValue 你会看到引用自动的加了下划线
    //    注意读和写的引用高亮颜色是不相同的，且在不同的代码样式风格里可能不是下划线展示
    //
    //
    // 2. 将光标放到 $newValue 并使用快捷键让它在文件里高亮.
    //    注意读和写的引用高亮颜色是不相同的
    //    注意编辑器右边的边栏上的条纹
    //    Escape (Esc)键取消高亮
    public function adjust($original, $delta) {
        $newValue = $original + $delta;

        if ($newValue < self::MIN_VALUE) {
            $newValue = self::MAX_VALUE;
        }
        if ($newValue > self::MIN_VALUE) {
            $newValue = self::MAX_VALUE;
        }

        return $newValue;
    }
}
