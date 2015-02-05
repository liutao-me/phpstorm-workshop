<?php
/**
 * 类型暗示
 *
 * 暗示给PhpStorm你在使用的类型。
 */

namespace Editing1\JetBrains;

use Debugging\JetBrains\Person;

$people = array();
$people[] = new Person('Maarten');

foreach ($people as $person) {
    // 1. $person上将不会出现任何有关 Person 类的自动完成。
    //    输入 $person-> 看一下。

    // $person->

    // 2. 我们可以解决这个问题。
    //    找到 $people = array(); 并且添加一个 PHPDoc 注释: /** @var $people Person[] */ -
    //    这将会告诉 PHPDoc 这个数组包含 Person 的对象。
    //
    //    输入 $person-> 你将会看到现在我们有了自动完成提示。

    // $person->

    // 3. 将光标放到 $person 上并敲一下 Ctrl+Q(F1)。 查看这个变量的快速文档。
    // 4. 将光标放到 Person 上并敲一下 Ctrl+Q(F1)。查看这个类型的快速文档。
    // 5. 导航到 Person 类并在类上添加 PHPDoc。添加几个 @property 注解标签,例如:
    //    @property string Address 这个人的地址
    //    @property string Country 该个人的国家
    //    虽然这些属性并不实际存在， PhpStorm 会在使用 Person 类的时候解析这些注解并提供 Address 和 Country
    //    在这里试一下, 输入: $person->A
    //
    //    注意 PhpStorm 也支持 @method, @type, @property, @deprecated, @global, @name, @param, @static, @since, @link, @mixin, ...
    //    (译者著：@mixin是什么标签, @link 已经被标准废弃了)

    // $person->A
}
