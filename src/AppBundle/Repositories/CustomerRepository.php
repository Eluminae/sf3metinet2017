<?php

namespace AppBundle\Repositories;

use AppBundle\Models\Customer;

/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

interface CustomerRepository
{
    public function save(Customer $customer);
    public function findById($id);
}
