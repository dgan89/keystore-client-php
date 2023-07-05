<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 03.07.2023
 * Time: 14:45
 */

namespace keystore\contracts;

/**
 * Сериализация массива
 *
 * Class ArraySerializer
 * @package keystore\contract
 */
interface ArraySerializer
{
    /**
     * Сериализация данных массива в объект
     *
     * @param array $data
     * @return static
     */
    public static function fromArray(array $data);
//    /**
//     * Сериализация данных объекта в массив
//     *
//     * @return array
//     */
//    public function toArray();
}
