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
                        <table class="datatables-ajax table" id="SettingTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Data</th>
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
@include('admin.modal.updateSetting')
<script>
$(function(){

    var SettingTable = $('#SettingTable');
    SettingTable.DataTable(); //uncomment below code & remove this line.

    // SettingTable.DataTable({
    //     responsive: true,
    //     serverSide: true,
    //     processing: true,
    //     ordering: false,
    //     ajax: "{{url('admin/settings/data')}}",
    //     "aoColumns": [
    //         {
    //             mData: 'key'
    //         },
    //         {
    //             mData: 'value'
    //         },
    //     ],
    //     "columnDefs": [{
    //         targets: -1,
    //         className: 'text-right'
    //     }],
    // });

}); //Final Close Tag
</script>
@endsection
