<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 19:37
 */

namespace keystore\commands;

use keystore\helpers\Assert;

/**
 * Параметры пагинации
 *
 * Class PaginationParams
 * @package keystore\commands
 */
class PaginationParams extends AbstractRequestParams
{
    /**
     * @var int|null
     */
    private $perPage;

    /**
     * @param int|null $perPage
     * @return PaginationParams
     */
    public function setPerPage($perPage)
    {
        if ($perPage !== null) {
            self::validatePerPage($perPage);
        }
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        if ($this->perPage !== null) {
            return array_merge(parent::toArray(), [
                'per-page' => $this->perPage,
            ]);
        }

        return parent::toArray();
    }

    /**
     * Валидация пагинации
     *
     * @param $perPage
     * @return void
     */
    private static function validatePerPage($perPage)
    {
        Assert::integer("Per Page", $perPage);
        Assert::range("Per Page", $perPage, 1, 1000);
    }
}