<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 14:59
 */

namespace keystore\contracts;

use keystore\entities\GroupItem;

/**
 * Список групп
 *
 * Class GroupListInterface
 * @package keystore\contract
 */
interface GroupListInterface extends PaginationInterface, ResultInterface
{
    /**
     * Элементы
     *
     * @return GroupItem[]
     */
    public function getItems();
}
