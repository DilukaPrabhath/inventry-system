@extends('layouts.app')

@section('content')
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
                  <h4 class="card-title">Add Qutation</h4>
                  
                </div>
                <div class="card-body">
                  <form method="post" action="save">
                    {{csrf_field()}}

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Customer</label>
                          <input type="text" name="customer" value="{{ old('customer')}}" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Qutation No</label>
                          <input type="text" name="qutation" value="{{ old('qutation')}}" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">SUBMIT</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
     </div>
       </div>
@endsection