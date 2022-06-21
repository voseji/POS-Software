<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Models\Manufacturers;

class ManufacturerController extends Controller
{
    public function index()
    {
        return Manufacturer::orderBy('created_at', 'desc')->get();
    }

    public function create(Request $request)
    {
        $manufacturer = new Manufacturer();
        $manufacturer->manufacturerId = $request->manufacturerId;
        $manufacturer->manufacturerName = $request->manufacturerName;
        $manufacturer->shortName = $request->shortName;
        $manufacturer->addedBy = $request->addedBy;
        $manufacturer->save();
        return response()->json([
            "message" => "Manufacturer has been successfully entered"
        ], 201);
    }


    public function show($id)
    {
        if ($manufacturer = Manufacturer::find($id))
        {
        return response()->json([
            "message" => "Manufacturer found:",
            "data" => $manufacturer
        ], 200);
        } else {
        return response()->json([
            "message" => "Sorry this Manufacturer does not exist or wrong Manufacturer ID supplied."
        ], 404);
    }
    }


    public function edit(Request $request, $id)
       {
        if (Manufacturer::where('manufacturerId', $id)->exists()) {
            $manufacturer = Manufacturer::find($id);
            $manufacturer->manufacturerId = is_null($request->manufacturerId) ? $manufacturer->manufacturerId : $request->manufacturerId;
            $manufacturer->manufacturerName = is_null($request->manufacturerName) ? $manufacturer->manufacturerName : $request->manufacturerName;
            $manufacturer->shortName = is_null($request->shortName) ? $manufacturer->shortName : $request->shortName;
            $manufacturer->addedBy = is_null($request->addedBy) ? $manufacturer->addedBy : $request->addedBy;
            $manufacturer->save();

            return response()->json([
                "message" => "Manufacturer updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Customer not found"
            ], 404);

        }
    }

    public function destroy(Request $request, $id)
    {
        if(Customer::where('manufacturerId', $id)->exists()) {
            $manufacturer = Manufacturer::find($id);
            $manufacturer->delete();
  
            return response()->json([
              "message" => "This Manufacturer has successfully deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Manufacturer not found"
            ], 404);
          }    
        
    }
}
