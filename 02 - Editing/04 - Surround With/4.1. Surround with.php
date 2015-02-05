<?php
/**
 * 环绕
 *
 * 使用新的内容（结构）包含选择的文本，比如 try/catch 或者 if 结构
 *
 * Ctrl+Alt+T (Windows/Linux)
 * Alt+Command+T (Mac OS X)
 * Alt+Enter
 */

namespace Editing4\JetBrains;

class SurroundWith {
    // 1. 使用 try/catch 块包含下面函数里的内容
    public function surroundWithTryCatch() {
        echo 'This may be throwing an Exception. Riiiight!';
    }

    // 2. 将光标放在 $items[0] 元素上，按 Alt+Enter 选择 if(empty(....))
    public function division($items) {
        return $items[0] / $items[1];
    }
}
