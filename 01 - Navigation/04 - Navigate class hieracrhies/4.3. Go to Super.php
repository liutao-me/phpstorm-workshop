<?php
/**
 * 跳转到超类（基类，父类）或超方法（被覆盖的超类方法）
 *
 * Ctrl+U (Windows/Linux)
 * Command+U (Mac OS X)
 *
 * Ctrl+H显示继承工具栏 (Windows/Linux/Mac OS X)
 */
namespace Navigation4\JetBrains\Customers;

// 1. 将光标放到 Customer类的任何空地方并使用快捷键导航到上级层次结构
class GoldCustomer extends Customer
{
    // 2. 将光标放到 __construct 并使用快捷键导航到它的超方法
    // 你也可以用继承工具栏导航过去
    /**
     * @param string $name
     */
    function __construct($name)
    {
        parent::__construct($name, 0.25);
    }
}
