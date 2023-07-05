<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 14:59
 */

namespace keystore\contracts;

/**
 * Информация о заказе
 *
 * Class OrderDetailInterface
 * @package keystore\contract
 */
interface OrderDetailInterface extends ResultInterface
{
    /**
     * @return string
     */
    public function getLink();
}
