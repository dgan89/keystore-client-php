<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 15:05
 */

namespace keystore\contracts;

use keystore\entities\PaginationLinks;
use keystore\entities\PaginationMeta;

/**
 * Пагинация
 *
 * Class PaginationInterface
 * @package keystore\contract
 */
interface PaginationInterface
{
    /**
     * Ссылки пагинации
     *
     * @return PaginationLinks
     */
    public function getLinks();

    /**
     * Мета-данные пагинации
     *
     * @return PaginationMeta
     */
    public function getMeta();
}