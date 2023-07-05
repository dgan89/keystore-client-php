<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 14:59
 */

namespace keystore\contracts;


/**
 * Просмотр баланса
 *
 * Class UserBalanceInterface
 * @package keystore\contract
 */
interface UserBalanceInterface extends ResultInterface
{
    /**
     * Баланс пользователя
     *
     * @return float
     */
    public function getBalance();

    /**
     * Валюта
     *
     * @return string
     */
    public function getCurrency();
}
