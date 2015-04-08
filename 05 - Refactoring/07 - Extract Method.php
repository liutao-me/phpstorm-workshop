<?php
/**
 * 提取方法(Extract Method)
 *
 * 提取一块代码到方法中，并且会检测变量
 *
 * Ctrl+Alt+M (Windows/Linux)
 * Alt+Command+M (Mac OS X)
 */

namespace Refactoring7\JetBrains;

$name = 'Maarten';
// 1. 选择后面这些行的代码并使用Extract Method
//    执行提取方法重构病命名为"reverseString"。参数 $name可以命名为 $stringToReverse (这两句对原文的位置有所更改)
$nameBackwards = '';
for ($i = 0; $i < strlen($name); $i++) {
    $nameBackwards = substr($name, $i, 1) . $nameBackwards;
}

class Bootstrap {
    public function run() {
        // 2. 选择后面这些行的代码，并且提取它们到一个叫做 initialize()的方法中。将它设置为 public 方法。
        //    注意IDE检测到 $databaseName和 $database变量是必须的。并且是从那个方法里返回来的。

        // Initialize settings
        $databaseName = 'sample';
        $database = mysqli_connect('localhost', 'root', '');

        // 3. 选择后面这些行的代码并提取他们到一个叫 createDatabase() 的方法中。设置为 protected。
        //    注意IDE检测到 $databaseName和 $database变量是必须的。并且是作为参数添加到这个方法里的。

        // Create database
        $query = "CREATE DATABASE $databaseName";
        mysqli_query($database, $query);

        // 4. 选择后面的代码并提取到一个叫做 sendEmail()的方法中。设置为 protected。
        //    注意IDE检测到 $databaseName变量是必须的。并且是从方法里返回。

        // Send out e-mail
        $body = 'The database ' . $databaseName . ' has been created!';
        $to = 'maarten.balliauw@jetbrains.com';
        mail($to, 'Database created', $body);
    }
}
