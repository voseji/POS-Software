<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class SalesController extends Controller
{

    public function index()
    {
        return Sales::orderBy('created_at', 'desc')->get();
    }

    public function create(Request $request)
    {
        $sales = new Sales();
        $sales->salesId = $request->salesId;
        $sales->productCode = $request->productCode;
        $sales->batchNumber = $request->batchNumber;
        $sales->manufacturerId = $request->manufacturerId;
        $sales->paymentMode = $request->paymentMode;
        $sales->quantity = $request->quantity;
        $sales->status = $request->status;
        $sales->landedCost = $request->landedCost;
        $sales->markUp = $request->markUp;
        $sales->discount = $request->discount;
        $sales->retailCost = $request->retailCost;
        $sales->soldBy = $request->soldBy;
        $sales->save();
        return response()->json([
            "message" => "Sale has been successfully entered"
        ], 201);
    }


    public function show($id)
    {
        if ($sales = Sales::find($id))
        {
        return response()->json([
            "message" => "Sale found:",
            "data" => $sales
        ], 200);
        } else {
        return response()->json([
            "message" => "Sorry this Sale does not exist or wrong sale ID supplied."
        ], 404);
    }
    }


    public function edit(Request $request, $id)
       {
        if (Sales::where('salesId', $id)->exists()) {
            $sales = Sales::find($id);
            $sales->salesId = is_null($request->salesId) ? $sales->salesId : $request->salesId;
            $sales->productCode = is_null($request->productCode) ? $sales->productCode : $request->productCode;
            $sales->batchNumber = is_null($request->batchNumber) ? $sales->batchNumber : $request->batchNumber;
            $sales->manufacturerId = is_null($request->manufacturerId) ? $sales->manufacturerId : $request->manufacturerId;
            $sales->paymentMode = is_null($request->paymentMode) ? $sales->paymentMode : $request->paymentMode;
            $sales->quantity = is_null($request->quantity) ? $sales->quantity : $request->quantity;
            $sales->status = is_null($request->status) ? $sales->status : $request->status;
            $sales->landedCost = is_null($request->landedCost) ? $sales->landedCost : $request->landedCost;
            $sales->markUp = is_null($request->markUp) ? $sales->markUp : $request->markUp;
            $sales->discount = is_null($request->discount) ? $sales->discount : $request->discount;
            $sales->retailCost = is_null($request->retailCost) ? $sales->retailCost : $request->retailCost;
            $sales->soldBy = is_null($request->soldBy) ? $sales->soldBy : $request->soldBy;
            $sales->save();

            return response()->json([
                "message" => "Sale updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Sale not found"
            ], 404);

        }
    }

    public function destroy(Request $request, $id)
    {
        if(Sales::where('salesId', $id)->exists()) {
            $sales = Sales::find($id);
            $sales->delete();
  
            return response()->json([
              "message" => "This Sale has successfully deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Sale not found"
            ], 404);
          }    
        
    }

}
