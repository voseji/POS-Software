<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        return Stock::orderBy('created_at', 'desc')->get();
    }

    public function create(Request $request)
    {
        $stock = new Stock();
        $stock->stockCode = $request->stockCode;
        $stock->productCode = $request->productCode;
        $stock->batchNumber = $request->batchNumber;
        $stock->invoiceNumber = $request->invoiceNumber;
        $stock->manufacturerId = $request->manufacturerId;
        $stock->quantityReceived = $request->quantityReceived;
        $stock->quantitySold = $request->quantitySold;
        $stock->receivedBy = $request->receivedBy;
        $stock->save();
        return response()->json([
            "message" => "Stock has been successfully entered"
        ], 201);
    }


    public function show($id)
    {
        if ($stock = Stock::find($id))
        {
        return response()->json([
            "message" => "Sale found:",
            "data" => $stock
        ], 200);
        } else {
        return response()->json([
            "message" => "Sorry this Stock does not exist or wrong Stock Code supplied."
        ], 404);
    }
    }


    public function edit(Request $request, $id)
       {
        if (Stock::where('salesId', $id)->exists()) {
            $stock = Stock::find($id);
            $stock->stockCode = is_null($request->stockCode) ? $stock->stockCode : $request->stockCode;
            $stock->productCode = is_null($request->productCode) ? $stock->productCode : $request->productCode;
            $stock->batchNumber = is_null($request->batchNumber) ? $stock->batchNumber : $request->batchNumber;
            $stock->invoiceNumber = is_null($request->invoiceNumber) ? $stock->invoiceNumber : $request->invoiceNumber;
            $stock->manufacturerId = is_null($request->manufacturerId) ? $stock->manufacturerId : $request->manufacturerId;
            $stock->quantityReceived = is_null($request->quantityReceived) ? $stock->quantityReceived : $request->quantityReceived;
            $stock->quantitySold = is_null($request->quantitySold) ? $stock->quantitySold : $request->quantitySold;
            $stock->receivedBy = is_null($request->receivedBy) ? $stock->receivedBy : $request->receivedBy;
            $stock->save();

            return response()->json([
                "message" => "Stock updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Stock not found"
            ], 404);

        }
    }

    public function destroy(Request $request, $id)
    {
        if(Stock::where('stockCode', $id)->exists()) {
            $stock = Stock::find($id);
            $stock->delete();
  
            return response()->json([
              "message" => "This Stock has successfully deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Stock not found"
            ], 404);
          }    
        
    }
}
