<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/22
 * Time: 15:03
 */

namespace App\Services;


use App\Models\ProductRecord;

class ProductRecordService
{

    public static function getList()
    {
        return ProductRecord::orderBy('created_at', 'desc')->get();
    }

}