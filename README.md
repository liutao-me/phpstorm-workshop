# PhpStorm Workshop

在这些资料中, 你将会学习到有关于 [PhpStorm](http://www.jetbrains.com/phpstorm) IDE中高效的工具和许多特性 . 比如导航，编辑，
检查，代码模版，重构。还有工具 composer, REST客户端，其他还有很多。 当然这里不可能覆盖了PhpStorm里所有的选项和特性。但是我们提
供了一些实用的练习来告诉我们PHP开发者如何在PhpStorm里做一些日常工作。

我们也会覆盖大量的快捷键来是PhpStorm更高效。其他基于 IntelliJ IDEA的IDE也使用相同的快捷键，所以如果你知道怎么样使用PhpStorm工作，
你也会使用WebStorm, RubyMine, PyCharm, IntelliJ IDEA等等工作。目录下的 PhpStorm Reference Card.pdf 包含了默认的快捷键列表

这是一个自学的实习，这意味着你无论何时何地都可以用你自己的方式通过幻灯片和练习。该练习集合是一个PhpStorm项目并且每一个新的练习都
可能包含代码和提示如何去做的注释

## Getting the project
这里有几种方式可以开始使用 PhpStorm实习开始练习:

* 使用Composer创建一个项目. 当然你也可以用PhpStorm创建一个Composer项目，并搜索"jetbrains/phpstorm-workshop"依赖

    ``php composer.phar create-project jetbrains/phpstorm-workshop -s dev``

* 通过 GitHub 克隆

    ``git clone https://github.com/JetBrains/phpstorm-workshop.git``

* 下载ZIP

    ``wget https://github.com/JetBrains/phpstorm-workshop/archive/master.zip``

## 如何开始

这里有一些该项目的须知:

* 这个项目要在PhpStorm中打开，该项目里没有包含设置目录，因为后面的练习才会提示你如何去配置
* 所有数字编号的目录里包含练习。只是一个一个的打开编号的文件并跟随里面的注释就可以了。有的练习之间可能会有依赖。
* 目录下还有提供的的 PhpStorm Workshop.pptx / PhpStorm Workshop.pdf，来配合练习
* PhpStorm Reference Card.pdf文件是 PhpStorm的快捷键列表. IDE自带可以通过 Help->Default Keymap Reference 找到
