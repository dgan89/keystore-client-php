<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 17:18
 */

namespace keystore\http;

use keystore\contracts\PaginationInterface;
use keystore\entities\PaginationLinks;
use keystore\entities\PaginationMeta;

/**
 * Базовый класс ответа с пагинацией
 *
 * Class AbstractHttpPaginationResponse
 * @package keystore\http
 */
abstract class AbstractHttpPaginationResponse extends AbstractHttpResponse implements PaginationInterface
{
    /**
     * @var array
     */
    protected $links;

    /**
     * @var array
     */
    protected $meta;

    /**
     * @inheritDoc
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @inheritDoc
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param array $data
     * @return void
     */
    protected function setLinks(array $data)
    {
        $this->links = new PaginationLinks($data);
    }

    /**
     * @param array $data
     * @return void
     */
    protected function setMeta(array $data)
    {
        $this->meta = new PaginationMeta($data);
    }
}
