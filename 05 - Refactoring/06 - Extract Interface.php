<?php
/**
 * 提取接口
 *
 * 从一个类里提取接口
 *
 * 使用菜单或者 "Refactor This" Popup菜单.
 */

namespace Refactoring6\JetBrains;

// 1. 使用 Refactor This菜单从 CustomerRepository 中提取一个接口。
//    将该接口命名为 IRepository 并保证它在 JetBrains\Contracts 命名空间下。
//    勾选 PHPDoc 选项为 Copy，并保证 get(), getAll(), save() and delete()函数被提取。
//    勾选"Replace Class references with interfaces if possible"(如果可能使用接口替换类的引用)
//    将会更新 CustomerController类。(看步骤2)
//
//    应用该重构

class CustomerController {
    // 2. 确认这里的PHPDoc块已经更新为 IRepository
    /** @var CustomerRepository */
    protected $_repository;

    function __construct()
    {
        $this->_repository = new CustomerRepository();
    }
}

class CustomerRepository {
    /** @var Db */
    protected $_db;

    function __construct()
    {
        $this->_db = new Db();
    }

    /**
     * Get by id.
     *
     * @param int $id ID
     * @return mixed Instance.
     */
    public function get($id) {
        return $this->_db->get($id);
    }

    public function getAll() {
        return $this->_db->getAll('SELECT * FROM customer', 15);
    }

    public function save($instance) {
        $this->_db->save($instance);
    }

    public function delete($id) {
        $this->_db->delete($id);
    }
}

class Db {
    public function getAll($query, $pageSize) {
        return array();
    }

    public function save($instance)
    {
    }

    public function delete($id)
    {
    }
}
