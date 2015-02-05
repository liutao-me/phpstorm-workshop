<?php
/**
 * 定位到实现
 *
 * 导航到类的实现
 *
 * Ctrl+Alt+B (Windows/Linux)
 * Alt+Command+B (Mac OS X)
 */

use Navigation4\JetBrains\Customers\Customer;
use Navigation4\JetBrains\Customers\SilverCustomer;
use Navigation4\JetBrains\Customers\GoldCustomer;
use Navigation4\JetBrains\Customers\ICustomer;

class GoToImplementation {
    public function pleaseGoThere() {
        // 1. 把光标放到 Customer 上并导航到实现
        //    选择 Customer, SilverCustomer 和 GoldCustomer.
        //    SilverCustomer 和 GoldCustomer 是间接实现，因为它们源自 Customer.
        $customer = new Customer('Maarten', 0);

        // 2. 把光标放在GoldCustomer并定位到实现
        $customer = new GoldCustomer('Maarten');
    }
}
