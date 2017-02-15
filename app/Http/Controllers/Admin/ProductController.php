<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/13
 * Time: 21:16
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        return view('product.index');
    }

}