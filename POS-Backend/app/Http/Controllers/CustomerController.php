<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function index()
    {
        return Customer::orderBy('created_at', 'desc')->get();
    }

    public function create(Request $request)
    {
        $customer = new Customer();
        $customer->customerId = $request->customerId;
        $customer->customerName = $request->customerName;
        $customer->phoneNumber = $request->phoneNumber;
        $customer->email = $request->email;
        $customer->addedBy = $request->addedBy;
        $customer->save();
        return response()->json([
            "message" => "Customer has been successfully entered"
        ], 201);
    }


    public function show($id)
    {
        if ($customer = Customer::find($id))
        {
        return response()->json([
            "message" => "Customer found:",
            "data" => $customer
        ], 200);
        } else {
        return response()->json([
            "message" => "Sorry this Customer does not exist or wrong Cusomer ID supplied."
        ], 404);
    }
    }


    public function edit(Request $request, $id)
       {
        if (Customer::where('customerId', $id)->exists()) {
            $customer = Customer::find($id);
            $customer->customerId = is_null($request->customerId) ? $customer->customerId : $request->customerId;
            $customer->customerName = is_null($request->customerName) ? $customer->customerName : $request->customerName;
            $customer->phoneNumber = is_null($request->phoneNumber) ? $customer->phoneNumber : $request->phoneNumber;
            $customer->email = is_null($request->email) ? $customer->phoneNumber : $request->phoneNumber;
            $customer->addedBy = is_null($request->addedBy) ? $customer->addedBy : $request->addedBy;
            $customer->save();

            return response()->json([
                "message" => "Customer updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Customer not found"
            ], 404);

        }
    }

    public function destroy(Request $request, $id)
    {
        if(Customer::where('customerId', $id)->exists()) {
            $customer = Customer::find($id);
            $customer->delete();
  
            return response()->json([
              "message" => "This Customer has successfully deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Customer not found"
            ], 404);
          }    
        
    }
}
