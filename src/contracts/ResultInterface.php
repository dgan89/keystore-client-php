<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 15:05
 */

namespace keystore\contracts;

/**
 * Результат команды
 *
 * Class ResultInterface
 * @package keystore\contract
 */
interface ResultInterface
{
    /**
     * Результат запроса
     *
     * @return bool
     */
    public function getSuccess();
}