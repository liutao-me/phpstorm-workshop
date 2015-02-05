<?php
/**
 * 重新排列/重新格式化代码
 *
 * 根据设置重新排列代码入口。根据 Code Style(代码风格设置)格式化代码
 *
 * Ctrl+Alt+L (Windows/Linux)
 * Alt+Command+L (Mac OS X)
 */

namespace Editing7\JetBrains;

use Editing2;
use Editing6;
use Navigation4\JetBrains\Customers\Customer;// (上面的没有效果，译者加)

// 1. 下面的类代码风格是混乱的
//    - Public/protected/static 成员均是混合在一起的。
//    - 大括号也是不一致的。
//    - 缩进也不一致。
// 2. 使用 Code | Rearrange Code 菜单重组下面的类
// 3. 使用撤销，撤销重组代码操作
// 4. 这里也有几个未使用的导入（颜色样式不同）。菜单 Code | Optimize Imports 可以解决这个
// 3. 使用撤销，撤销之前所有的操作
// 6. 使用键盘快捷键，运行格式化代码并同时一次性勾选重组和优化导入操作
//    如果你想，可以一次性在整个项目上运行格式化代码
// 7. 打开设置搜索 "Code Style" 并找到 PHP | Arrangement。（注：最新版与8.0.1菜单结构不同，所以直接搜索）
//    修改设置让字段根据 可见性-名称。再次重新运行重新排列代码来测试我们的设置
class Rearrange {
    protected $_firstProperty;
    public $_secondProperty;
    public static $_thirdProperty;
    protected $_fourthProperty;

    public function firstFunction() {
        for ($i = 0; $i < 10; $i ++)
                    {
            echo 'Test';
        }
    }

    public function setFirstProperty($firstProperty) {
            $this->_firstProperty = $firstProperty;
    }

    public function getFirstProperty()
    {
                    return $this->_firstProperty;
    }

    public function setSecondProperty($secondProperty)
    {
        $this->_secondProperty = $secondProperty;
    }

    public function getSecondProperty()
    {
        return $this->_secondProperty;
    }

    public static function setThirdProperty($thirdProperty)
    {
        self::$_thirdProperty = $thirdProperty;
    }

    public static function getThirdProperty()
    {
        return self::$_thirdProperty;
    }

    public function setFourthProperty($fourthProperty)
    {
        $this->_fourthProperty = $fourthProperty;
    }

    public function getFourthProperty()
    {
        return $this->_fourthProperty;
    }
}
