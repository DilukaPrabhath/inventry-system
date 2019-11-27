@extends('layouts.app')

@section('content')


    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  

.btn-circle {
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  padding: 0;
  border-radius: 50%;
}

.btn-circle i {
  position: relative;
  top: -1px;
}

.btn-circle-sm {
  width: 35px;
  height: 35px;
  line-height: 35px;
  font-size: 0.9rem;
}

.btn-circle-lg {
  width: 55px;
  height: 55px;
  line-height: 55px;
  font-size: 1.1rem;
}

.btn-circle-xl {
  width: 70px;
  height: 70px;
  line-height: 70px;
  font-size: 1.3rem;
}

.btn-circle i {
  position: relative;
  top: -1px;
}
.alt-dan{
  color: red;
  font-size: 14px;
}
</style>
 <div class="content">
        <div class="container-fluid ">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Delivery Note.</h4>
                  
                </div>
                <div class="card-body">
                    <form action="savebill" method="post">
     {{csrf_field()}}
<!-- 2nd unit -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12"><br>
            <!-- Basic elements -->
      
        
        <div class="row" class="col-lg-12 col-sm-12">

          <div class="col-lg-12 col-sm-12"> 

             <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                        
                        <select class="form-control" name="customer">
                        @foreach($customer as $customer)
                         <option value="{{$customer->name}}">{{$customer->name}}</option>
                        @endforeach  
                        </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Delivery No</label>
                          <input type="text" name="delivery_no" value="{{$nextInvoiceNumber}}" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="margin-left: 95px;">Date</label>
                          <input type="date" name="date" value="" class="form-control">
                        </div>
                      </div>
                      
                    </div>

          <table border="0" id="tb" name="tb" class="col-lg-12 col-sm-12">

          </table>
          

          </div>
      </div>
        </div>



          <div class="col-lg-12"><br>
            <!-- Basic elements -->
            <h4 class="mb-5">
              <span>Delivery Note.</span>
            </h4>
            <!-- <div class="mb-3">
          <small class="text-uppercase font-weight-bold">Form controls</small>
        </div> -->
        
        <div class="row" class="col-lg-12 col-sm-12">

          <div class="col-lg-12 col-sm-12"> 

          <table border="0" id="tbexperiance" name="tbexperiance" class="col-lg-12 col-sm-12">

          <tr class="col-lg-12 col-sm-12">
              <td><input type="text" required="required" placeholder="Item" name="experiance[]" id="experiance" class="form-control" /></td>
              <td style="width: 20px;"></td>
              <td><input type="number" required="required" placeholder="Quantity" id="qt" name="qut[]" id="experiance" class="form-control" /></td>
              
              <td><button class="btn btn-1 btn-primary" name="experiance1" id="experiance1" type="button">more</button></td>
          </tr>


          </table>
            <!-- <div class="form-group">
              <input type="text" placeholder="" name="experiance" id="experiance" class="form-control" />
            </div> -->
          <!-- </div> -->

          <!-- <div class="col-lg-2 col-sm-2"> 
            <div class="form-group">
            <button class="btn btn-1 btn-primary" name="experiance1" id="experiance1" type="button">more</button>  
            </div>
          </div> -->

          </div>
      </div>
        </div>
      </div>
      <br>
      <br>
      <button class="btn btn-1 btn-primary" name="" id="" type="submit">Submit</button>
      </div>

</form>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
     </div>
       </div>
           <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

@endsection