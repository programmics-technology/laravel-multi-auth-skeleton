@extends('admin.layouts/verticalLayoutMaster')

@section('title', 'Home')

@section('content')
<!-- Page layout -->
<div class="card">
  <div class="card-header">
    <!-- <h4 class="card-title">Heading Here</h4> -->
  </div>
  <div class="card-body">
      <!-- Ajax Sourced Server-side -->
      <section id="ajax-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-datatable">
                        <table class="datatables-ajax table" id="UserTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Ajax Sourced Server-side -->
  </div>
</div>
<!--/ Page layout -->
@endsection

<!--/ Page Scripts -->
@section('page-script')
<script>
$(function(){

    var UserTable = $('#UserTable');
    UserTable.DataTable();  //uncomment below code & remove this line.

    // UserTable.DataTable({
    //     responsive: true,
    //     serverSide: true,
    //     processing: true,
    //     ordering: false,
    //     ajax: "{{url('admin/users/data')}}",
    //     "aoColumns": [
    //         {
    //             mData: 'name'
    //         },
    //         {
    //             mData: 'phone'
    //         },
    //         {
    //             mData: 'email'
    //         },
    //         {
    //             mData: 'status'
    //         },
    //         {
    //             mData: 'action'
    //         },
    //     ],
    //     "columnDefs": [{
    //         targets: -1,
    //         className: 'text-right'
    //     }],
    // });

    $(document).on('click', '.status-btn', function(e) {
        e.stopPropagation();
        alert('You have to remove this alert & uncomment to use this function');
        // var id = $(this).attr('data-value');
        // var action = $(this).attr('name');

        // if (action == 'delete') {

        //   Swal.fire({
        //     title: 'You wont be able to retrive this!',
        //     showDenyButton: true,
        //     confirmButtonText: `Ok, Delete it.`,
        //     denyButtonText: `No, Cancel it.`,
        //   }).then((result) => {
        //     if (result.isConfirmed) {
        //       status_change(id, action);
        //     } 
        //   })
        // }else{
        //   status_change(id, action);
        // }
    });

    // const status_change = (id = 0, action = 'enable') => {
    //   $.ajax({
    //           type: "post",
    //           url: "{{url('admin/users/status')}}",
    //           data: { 'id' :id , 'status': action, '_token' : '{{ csrf_token() }}' },
    //           success: function(result) {
    //               if (result.error == true) {
    //                   Toast.fire({
    //                     icon: 'error',
    //                     title: result.message
    //                   })
    //               }else{
    //                   Toast.fire({
    //                     icon: 'success',
    //                     title: result.message
    //                   })
    //               }
    //               UserTable.DataTable().ajax.reload();
    //           }
    //       });
    // }

});
</script>
@endsection
