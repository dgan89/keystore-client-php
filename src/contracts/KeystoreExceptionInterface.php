<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 04.07.2023
 * Time: 16:44
 */

namespace keystore\contracts;


/**
 * Общий интерфейс исключений
 *
 * Class KeystoreExceptionInterface
 * @package keystore\contracts
 */
interface KeystoreExceptionInterface
{
    /**
     * @return string|null
     */
    public function getName();

    /**
     * @return int
     */
    public function getStatus();
}