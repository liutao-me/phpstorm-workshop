<?php
/**
 * 提取常量
 *
 * 提取到一个常量使代码更清洁，更易于维护。
 *
 * Ctrl+Alt+C (Windows/Linux)
 * Alt+Command+C (Mac OS X)
 */

namespace Refactoring4\JetBrains;

// 1. 提取 "----------------------\r\n" 到命名为 HORIZONTAL_LINE 的常量.
echo "----------------------\r\n";
echo "Extracting Constants\r\n";
echo "----------------------\r\n";

// 2. 在下面的类里，提取 15 到一个命名为 PAGESIZE 的常量。
//    注意 IDE 很聪明的猜到常量将会命名为上面
class CustomerRepository {
    public function getAll() {
        $db = new Db();
        return $db->getAll('SELECT * FROM customer', 15);
    }

    public function getAllActive() {
        return $db->getAll('SELECT * FROM customer WHERE active = 1', 15);
    }
}

class Db {
    public function getAll($query, $pageSize) {
        return array();
    }
}
