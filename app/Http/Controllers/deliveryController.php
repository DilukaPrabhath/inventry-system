<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModdel;
use App\Delivery;
use App\DeliveryItem;

class deliveryController extends Controller
{
    public function index(){
        
    	$shows = Delivery::all();
    	return view('delivery.index',compact('shows'));
    }

    public function create(){
        $customer = CustomerModdel::all();
//check first day in a year
		$latest = Delivery::latest()->first();

        if (! $latest) {
            $nextInvoiceNumber = 'D-000001';
        }

        $string = preg_replace("/[^0-9\.]/", '', $latest->de_id);

        $nextInvoiceNumber = 'D-' . sprintf('%06d', $string+1);

    	return view('delivery.create',compact('nextInvoiceNumber','customer'));
    }

    public function store(Request $request){

            $this->validate(request(), [
                'name'         => 'required',
                'date'         => 'required',
            ]);
    	
    		$bill = new Delivery();

    		$bill->de_id    = $request->delivery_no;
    		$bill->customer = $request->customer;
    		$bill->date     = $request->date;

    		$bill->save();

    		$assign      = $bill->id;
    		$experience1 = $request->get("experiance");
            $qut1        = $request->get("qut");

    for($count = 0; $count < count($experience1); $count++)
      {
       $data = array(
        'experience'  => $experience1[$count],
        'qty'  => $qut1[$count],
        'assign'  => $assign,

       );
       $insert_data[] = $data; 
      }


    			foreach($insert_data as $key => $value){
                                                     
                $billitem               = new DeliveryItem();

                $billitem->item         =  $value['experience'];
                $billitem->qty          =  $value['qty'];
                $billitem->delivery_id  =  $value['assign'];
                $billitem->save();
             }
             $id1 = $bill->id;
           
             return redirect('delivery/view/' . $id1);
            

		}

		 public function view($id){

    		$dnote = Delivery::find($id);
    		$showid = $id;
    		$abc = DeliveryItem::where('delivery_id', $showid)->get();




    	return view('delivery.view',compact('showid','dnote','abc'));
    }
    

         public function printview($id){

            $dnote = Delivery::find($id);
            $showid = $id;
            $abc = DeliveryItem::where('delivery_id', $showid)->get();




        return view('delivery.index',compact('showid','dnote','abc'));
    }
}
