<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 14:59
 */

namespace keystore\contracts;

use keystore\entities\CategoryItem;

/**
 * Список категорий
 *
 * Class CategoryListInterface
 * @package keystore\contract
 */
interface CategoryListInterface extends PaginationInterface, ResultInterface
{
    /**
     * Элементы
     *
     * @return CategoryItem[]
     */
    public function getItems();
}
