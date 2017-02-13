<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/13
 * Time: 22:38
 */

namespace App\Services;


interface BaseInterface
{
    public static function getList( $where = null);
    public static function get( $id );
    public static function create( $data );
    public static function update( $id, $data );
    public static function delete( $id, $soft = false);
}