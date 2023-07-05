<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 17:18
 */

namespace keystore\http;

use keystore\contracts\ArraySerializer;
use keystore\contracts\ResultInterface;
use keystore\entities\AbstractObject;

/**
 * Базовый класс ответа
 *
 * Class AbstractHttpResponse
 * @package keystore\http
 */
abstract class AbstractHttpResponse extends AbstractObject implements ResultInterface, ArraySerializer
{
    /**
     * @var bool
     */
    protected $success;

    /**
     * @inheritDoc
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $data)
    {
        $data = array_filter($data, static function ($value) {
            return $value !== null;
        });

        return new static($data);
    }
}
