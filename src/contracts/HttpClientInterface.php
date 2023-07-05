<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 14:52
 */

namespace keystore\contracts;


use keystore\commands\AbstractRequestParams;

/**
 * HTTP клиент
 *
 * Class HttpClientInterface
 * @package keystore\clients
 */
interface HttpClientInterface
{
    /**
     * Установка данных авторизации
     *
     * @param AuthCredentialsInterface $credentials
     * @return void
     */
    public function setAuth(AuthCredentialsInterface $credentials);

    /**
     * Отправка GET запроса
     *
     * @param $uri
     * @param AbstractRequestParams|array|null $params
     * @return array
     */
    public function sendData($uri, $params = null);
}
