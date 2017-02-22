<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/13
 * Time: 22:37
 */

namespace App\Services;


use App\Models\Product;

class ProductService implements BaseInterface
{

    public static function getList($where = null)
    {
        if( $where ){
            return Product::where($where)->get();
        }else{
            return Product::get();
        }
    }

    public static function get($id)
    {
        if( !is_integer($id) ){
            return null;
        }else{
            return Product::find($id);
        }
    }

    public static function create($data)
    {
        return Product::create($data);
    }

    public static function update($id, $data)
    {
        $product = self::get($id);
        if( $product ){
            $product->fill($data);
            $product->save();
            return $product;
        }else{
            return null;
        }
    }

    public static function delete($id, $soft = false)
    {
        if( $soft ){
            return Product::destroy($id);
        }else{
            $product = self::get($id);
            if( !$product ){
                return false;
            }else{
                $product->is_deleted = 1;
                return $product->save();
            }
        }
    }


}