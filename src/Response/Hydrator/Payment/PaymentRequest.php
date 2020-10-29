<?php

namespace Electrum\Response\Hydrator\Payment;

use Zend\Hydrator\NamingStrategy\MapNamingStrategy;
use Zend\Hydrator\Reflection;

/**
 * @author Pascal Krason <p.krason@padr.io>
 */
class PaymentRequest extends Reflection
{

    public function __construct()
    {
        parent::__construct();

        $namingStrategy = new MapNamingStrategy([
            'id' => 'id',
            'status_str' => 'status',
            'message' => 'memo',
            'address' => 'address',
            'URI' => 'uri',
            'expiration' => 'expires',
            'time' => 'time',
            'confirmations' => 'confirmations',
        ]);

        $this->setNamingStrategy($namingStrategy);
    }
}
