<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 17:18
 */

namespace keystore\http;

use keystore\contracts\GroupListInterface;
use keystore\entities\GroupItem;

/**
 * @inheritDoc
 *
 * Class GroupListResponse
 * @package keystore\http
 */
class GroupListResponse extends AbstractHttpPaginationResponse implements GroupListInterface
{
    /**
     * @var GroupItem[]
     */
    protected $items;

    /**
     * @inheritDoc
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $data
     * @return void
     */
    protected function setItems(array $data)
    {
        $this->items = array_map(static function (array $item) {
            return GroupItem::fromArray($item);
        }, $data);
    }
}
