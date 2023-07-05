<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 17:18
 */

namespace keystore\http;

use keystore\contracts\OrderDetailInterface;

/**
 * @inheritDoc
 *
 * Class OrderDetailResponse
 * @package keystore\http
 */
class OrderDetailResponse extends AbstractHttpResponse implements OrderDetailInterface
{
    /**
     * @var string
     */
    protected $link;

    /**
     * @inheritDoc
     */
    public function getLink()
    {
        return $this->link;
    }
}
