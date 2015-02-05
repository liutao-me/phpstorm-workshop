<?php
/**
 * 完成导入
 *
 * 当使用来自于其他命名空间的类或函数时的基本自动完成
 * 选择之后将自动完成导入代码
 *
 * 译者注：默认如果不给文件加命名空间是不会触发自动导入的。搜索设置 "Auto Import"，勾选 "Enable auto-import in file scope".
 *
 * Ctrl+Space (Windows/Linux/Mac OS X)
 *
 * Ctrl+Shift+Enter 完成声明 (Windows/Linux)
 * Shift+Command+Enter 完成声明 (Mac OS X)
 */

namespace Editing1\JetBrains;

// 1. 完成 ICustomer. 使用完成导入功能将会添加: use Navigation4\JetBrains\Customers\ICustomer;

class ImportCompletion
    implements // ICustomer {
}
