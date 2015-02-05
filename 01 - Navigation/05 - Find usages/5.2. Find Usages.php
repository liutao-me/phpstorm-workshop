<?php
/**
 * 查找引用
 *
 * 在当前项目里查找引用
 *
 * Alt+F7 (Windows/Linux/Mac OS X)
 *
 * Ctrl+Alt+F7 通过 popup 弹窗显示 (Windows/Linux)
 * Alt+Command+F7 通过 popup 弹窗显示 (Mac OS X)
 */

namespace Navigation5\JetBrains;

class FindUsages {
    const MIN_VALUE = -3.5;
    const MAX_VALUE = 3.5;

    // 1. 将光标放到 adjust() 上并查找引用
    //    要上下移动条目使用(Ctrl + Alt + Up/Down)
    //    注意一个工具栏打开了。我们可以通过工具栏导航到所有的引用
    //    工具栏里还可以过滤
    //
    // 2. 将光标放到 adjust() 并使用弹窗查看引用
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
