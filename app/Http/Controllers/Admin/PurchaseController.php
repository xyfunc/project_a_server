<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/2/22
 * Time: 15:01
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\ProductRecordService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{

    public function index()
    {
        $data = [
            'user' => Auth::user(),
            'list' => $this->getListData(),
        ];
        return view('index', compact('data'));
    }

    private function getListData()
    {

        $product_records = ProductRecordService::getList();
        $data = [];
        foreach ($product_records as $product_record){
            $tmp = [
                'product_name' => $product_record->product->name,
                'date' => $product_record->product_time,
                'name' => $product_record->producter->name,
                'unit_name' => $product_record->unit->name,
                'number' => $product_record->number,
                'unit_price' => $product_record->unit_price,
                'total_price' => $product_record->total_price,
                'desc' => $product_record->desc ? $product_record->desc : "",
            ];
            $data[] = $tmp;
        }
        return $data;
    }

}