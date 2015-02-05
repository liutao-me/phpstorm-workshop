<?php
/**
 * 向后 / 向前
 *
 * 返回到上一个导航点
 *
 * Ctrl+Alt+Left / Right (Windows/Linux)
 * Alt+Command+Left / Right (Mac OS X)
 */

namespace Navigation3\JetBrains;

class NavigateBack {
    public function startingPoint() {
        $navigateTo = new NavigateTo();

        // 注意顺序:
        // 1. 导航到 destination().
        // 3. 使用快捷键向前（Right）导航（将再次跳转到 destination()）
        $navigateTo->destination();
    }
}

class NavigateTo {
    public function destination() {
        // 2. 现在使用快捷键向后（Left）导航回到上面调用的地方
    }
}
