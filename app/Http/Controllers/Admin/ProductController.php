<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/13
 * Time: 21:16
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\ProductRecord;
use App\Services\ProductRecordService;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        $data = [
            'user' => Auth::user(),
            'data' => $this->getList(),
        ];
        return view('product.index', compact('data'));
    }

    public function getList()
    {
        $data = ProductRecordService::getList();

        return $data;
    }

}