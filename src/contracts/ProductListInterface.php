<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 14:59
 */

namespace keystore\contracts;

use keystore\entities\ProductItem;

/**
 * Список товаров
 *
 * Class ProductListInterface
 * @package keystore\contract
 */
interface ProductListInterface extends PaginationInterface, ResultInterface
{
    /**
     * Элементы
     *
     * @return ProductItem[]
     */
    public function getItems();
}
