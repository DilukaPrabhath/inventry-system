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
                  <h4 class="card-title">Add Customer</h4>
                  <p class="card-category">Enter customer details...</p>
                </div>
                <div class="card-body">
                  <form method="post" action="save">
                    {{csrf_field()}}
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Customer Name</label>
                          <input type="text" name="name" value="{{ old('name')}}" class="form-control">
                        </div>
                        @if($errors->has('name'))
                            <div class="alt-dan" style="padding: 0 !important;">
                                <span class="">{{$errors->first('name')}}</span>
                            </div>
                        @endif
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Telephone</label>
                          <input type="number" name="telephone" value="{{ old('telephone')}}" class="form-control">
                        </div>
                        @if($errors->has('telephone'))
                            <div class="alt-dan" style="padding: 0 !important;">
                                <span class="">{{$errors->first('telephone')}}</span>
                            </div>
                        @endif
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">E mail Adress</label>
                          <input type="email" name="email" value="{{ old('email')}}" class="form-control">
                        </div>
                        @if($errors->has('email'))
                            <div class="alt-dan" style="padding: 0 !important;">
                                <span class="">{{$errors->first('email')}}</span>
                            </div>
                        @endif
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Number</label>
                          <input type="text" name="number" value="{{ old('number')}}" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Road</label>
                          <input type="text" name="road" value="{{ old('road')}}" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" value="{{ old('city')}}" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Details</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> More details add here...</label>
                            <textarea class="form-control" name="details" rows="5">{{ old('details')}}</textarea>
                          </div>
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