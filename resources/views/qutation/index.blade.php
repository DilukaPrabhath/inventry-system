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
.actin{
  
  font-size: 20px;
  padding: 5px;
}
</style>
 <div class="content">
        <div class="container-fluid ">
   <div class="row col-md-12">
     <div class="col-md-12 pull-right">   
       <li class="btn btn-info btn-circle btn-circle-lg m-1 pull-right"><a href="create"><i class="fa fa-plus" style="color: white"></i></a></li>     
    </div> 
    </div>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Qutation Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example1" class="display" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          #
                        </th>
                        <th>
                          Qu ID
                        </th>
                        <th>
                          Customer
                        </th>
                        <th>
                          PO
                        </th>
                        <th>
                          D Note
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
     </div>
       </div>

       

<script>
function deletecl(id) {
    // var id = document.getElementById("datazz").value;
    alert(id);

  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   $.ajax({
                type: "GET",
                url: "delete",
                data: {id:id},
                success: function (data) {
                            
                    }         
            });
location.reload()
  } else {
    alert('not done');
  }
});
}
</script></script>


<script>

// $("#example1").on('click', '.paysingleClick', function() {
//     alert('Row index: ' + $(this).closest('tr').index());
// });

</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection