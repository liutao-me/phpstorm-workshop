<?php
/**
 * PHP文件中的选择多处（多个光标）
 *
 * 在文件的多个位置放置光标并同时在所有这些位置输入代码
 *
 * 按住 Alt 并使用鼠标选择多个想要放置光标的位置
 * Escape 返回到单个光标. (Windows/Linux/Mac OS X)
 *
 * 选择下一个出现位置
 *   - Alt+J (Windows/Linux)
 *   - Ctrl-G (Mac OS X)
 */

// 1. 检查下面. 这都是纯文本, 我们要将这些资源添加到一个数组
//    删除第一行和下面的空行只剩下实际的资源
// 2. 将光标放到第一个 * 号后面。按住 Alt 并使用光标选择每一个 * 号后面的位置(注：可以直接按住左键并拖动鼠标完成)
// 3. 放开 Alt 并开始输入。文本将会出现在每一个光标的位置。使用会删删除所有的 * 号。
//    在每行的开头添加 ' 号。移动光标到行尾(End)，并添加 ', 两个字符。
// 4. 按 Escape 取消为单个光标。选择第一行的 |。使用选择下一个出现位置的快捷键
//    选择所有的 | 。删除该字符并替换为 ', ' 三个字符。
//    移动光标到行尾，并按下 Delete 键。这将会把所有资源合并为一行
// 5. 按 Escape 取消为单个光标。并添加 array( 在行开头的地方并以 ); 结束(可以使用自动完成哦)。我们现在就有了一个完整的数组了。
// 6. 按住 Alt 并拖动鼠标从数字6到 // 1. 的前面。现在我们选择了一整块文本都可以编辑

PhpStorm Resources

* Blog | http://blog.jetbrains.com/phpstorm
* Twitter | http://twitter.com/phpstorm
* Video tutorials | http://www.jetbrains.com/phpstorm/documentation/phpstorm-video-tutorials.jsp
* Tutorials | http://confluence.jetbrains.com/display/PhpStorm/Tutorials
