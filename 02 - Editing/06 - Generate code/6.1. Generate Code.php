<?php
/**
 * 生成代码
 *
 * 生成代码, 例如： 类成员，构造函数，文档注释，字段，。。。
 *
 * Alt+Insert (Windows/Linux)
 * Command+N (Mac OS X)
 */

namespace Editing6\JetBrains;

// 1. 把光标放到 Person 类的某个地方
// 2. 使用 overriding method(覆盖方法) 生成 setId()
// 3  生成一个构造函数.
// 4. 生成 getter 和 setter(存取器).
// 5. 生成 PHPDoc 文档.
// 6. 使用 implementing method(实现函数) 生成 __toString 方法
// 7. 将光标放在 isTeenager() 方法里使用的 _age属性上面，使用 Alt+Enter生成一个 private 字段 $_age。
class Person extends Entity {
    protected $_firstName;
    protected $_lastName;

    public function isTeenager() {
        return $this->_age > 10;
    }

    // 这里是一个开始练习的好位置
}

class Entity {
    /** @var int */
    protected $_id;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }
}
