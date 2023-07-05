<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 17:18
 */

namespace keystore\http;

use keystore\contracts\UserBalanceInterface;

/**
 * @inheritDoc
 *
 * Class UserBalanceResponse
 * @package keystore\http
 */
class UserBalanceResponse extends AbstractHttpResponse implements UserBalanceInterface
{
    /**
     * @var float
     */
    protected $balance;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @inheritDoc
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
