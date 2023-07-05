<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 04.07.2023
 * Time: 17:57
 */

namespace keystore\commands;


/**
 * Параметры запроса
 *
 * Class AbstractRequestParams
 * @package keystore\commands
 */
abstract class AbstractRequestParams
{
    /**
     * @return array
     */
    public function toArray()
    {
        $result = [];
        $vars = get_object_vars($this);

        array_walk($vars, static function ($value, $key) use (&$result) {
            $key = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key));
            $result[$key] = $value;
        });

        return array_filter($result);
    }
}
