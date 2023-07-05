<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 15:54
 */

namespace keystore;

use keystore\contracts\AuthCredentialsInterface;

/**
 * Авторизация по ключу API
 *
 * Class AuthApiKey
 * @package keystore
 */
class AuthApiKey implements AuthCredentialsInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @inheritDoc
     */
    public function getAuthKey()
    {
        return $this->apiKey;
    }
}