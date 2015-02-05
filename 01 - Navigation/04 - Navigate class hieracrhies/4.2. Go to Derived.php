<?php
/**
 * 跳转到衍生实现
 *
 * 使用左边槽上的图标来定位到接口和类或者它们的成员的实现
 */
namespace Navigation4\JetBrains\Customers;

// 1. 导航到 Customer 类并返回
interface ICustomer
{
    /**
     * @return double
     */
    public function getDiscount();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param double $discount
     */
    public function setDiscount($discount);

    /**
     * @param string $name
     */
    public function setName($name);
}
