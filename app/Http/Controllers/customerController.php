<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModdel;

class customerController extends Controller
{
    //
    public function index()
    {	
    	$shows = CustomerModdel::all();
        return view('customer.customer_list', compact('shows'));
        
    }

    public function addcustomer()
    {
        return view('customer.insert');

    }

    public function store(Request $request)
    {
    	$this->validate(request(), [
                'name'              => 'required',
                'telephone'         => 'required|unique:customer_moddels',
                'email'             => 'required|unique:customer_moddels',
            ]);
    	
    		$customer = new CustomerModdel();

    		$customer->name      = $request->name;
    		$customer->city      = $request->city;
    		$customer->number    = $request->number;
    		$customer->telephone = $request->telephone;
    		$customer->email     = $request->email;
    		$customer->city      = $request->city;
    		$customer->road      = $request->road;
    		$customer->details   = $request->details;

    		$customer->save();
    		return redirect()->back();
    }

    public function view($id)
    {
    	$customer = CustomerModdel::find($id);
    	return view('customer.views', compact('customer'));
    }
    public function backcustormer()
    {
    	return redirect('custormer/list');
    	
    }
    public function edit($id)
    {
    	$customer = CustomerModdel::find($id);
    	return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
    	
    	
    	$this->validate(request(), [
                'name'              => 'required',
                'telephone'         => 'required',
                'email'             => 'required',
            ]);
    	
    		$customer = CustomerModdel::find($id);

    		$customer->name      = $request->name;
    		$customer->city      = $request->city;
    		$customer->number    = $request->number;
    		$customer->telephone = $request->telephone;
    		$customer->email     = $request->email;
    		$customer->city      = $request->city;
    		$customer->road      = $request->road;
    		$customer->details   = $request->details;

    		$customer->save();
    		return redirect()->back();
    }

    public function delete(Request $request)
    {
        $cid = $request->id;
        $customer = CustomerModdel::find($cid);
        $customer->delete();




    }
}
