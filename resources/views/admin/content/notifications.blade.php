@extends('admin.layouts/verticalLayoutMaster')

@section('title', 'Home')

@section('content')
<!-- Page layout -->

<div class="card">
  <div class="card-header">
    <h4 class="card-title text-left" style="color: #475f7b;">Send Notification</h4>
  </div>
  <div class="card-body">
    <form method="POST" id="send_notification_form">
        @csrf
        <div class="form-group">
            <input type="text"  class="form-control" name="title" placeholder="Notification Title">
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="Type Your Message Here..." name="message"></textarea>
        </div>

        <h5 class="mb-0 pb-0">Notification For</h5>
        <div class="demo-inline-spacing">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="all" name="notify_to[]" value="all" checked />
                <label class="custom-control-label" for="all">All</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="user" name="notify_to[]" value="user" checked />
                <label class="custom-control-label" for="user">User</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="sub_admin" name="notify_to[]" value="sub_admin" disabled />
                <label class="custom-control-label" for="sub_admin">Sub Admin</label>
            </div>
        </div>
        <div class="mb-1 mt-0" style="float: right;">
            <button type="reset" class="btn btn-outline-danger mr-1">Cancel</button>
            <button type="button" class="btn btn-gradient-primary send-btn">Send</button>
        </div>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h4 class="card-title" style="color: #475f7b;">Previous Notifications</h4>
  </div>
  <div class="card-body">
    <!-- Ajax Sourced Server-side -->
    <section id="ajax-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-datatable">
                        <table class="datatables-ajax table" id="NotificationTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Notification For</th>
                                    <th>Title</th>
                                    <th>Message</th>
                                    <th>Send At</th>
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

  var NotificationTable = $('#NotificationTable');
  // load_data();
  NotificationTable.DataTable(); //remove this line when using the real database
  function load_data(notify_to = 'all')
  { 
      NotificationTable.DataTable({

          responsive: true,
          serverSide: true,
          processing: true,
          ordering: false,
          searching: false,
          paging: false, info: false,
          ajax:{
                url:"{{url('admin/notifications/data')}}",
                data:{'notify_to': notify_to}, 
              },
          "aoColumns": [
              {
                  mData: 'notify_to'
              },
              {
                  mData: 'title'
              },
              {
                  mData: 'message'
              },
              {
                  mData: 'created_at'
              },
          ],
          "columnDefs": [{
              targets: -1,
              className: 'text-right'
          }],
      });
  }

  //This function is send the data.
  $(document).on('click', '.send-btn', function() {

      alert('You have to remove this alert & uncomment to use this function');
      // var path = $(this).val();
      // $(this).html('Sending...').attr('disabled', true);
      // $.ajax({
      //     type: "post",
      //     data: $("#send_notification_form").serialize(),
      //     url: "{{url('admin/notifications')}}",
      //     success: function(result) {
      //         $('.send-btn').html('Send').attr('disabled', false);
      //         if (result.success == false) {
      //             Toast.fire({
      //                     icon: 'error',
      //                     title: result.message
      //                   })
      //         }else{
      //             Toast.fire({
      //                     icon: 'success',
      //                     title: result.message
      //                   })
      //             document.getElementById('send_notification_form').reset();
      //         }
      //         NotificationTable.DataTable().ajax.reload();
      //     }
      // });
  });


  //Check Box Functions.
  $(document).on('change', '#notification-for #all, #user, #sub_admin', function() {

    //all the checkbox.
    var item = ['user'];
    var check = ($(this).is(":checked")) ? true : false ;

    if ($(this).val() == 'all') {

      item.map(function(key, index) {
        $(":checkbox[value="+key+"]").prop("checked", check);
      });

    }else{
      
      if (check === false) {
        //if any option uncheck then uncheck the "all" option.  
        $(":checkbox[value='all']").prop("checked", check);

      }else{

        //This check all have checked or not.
        check = [];
        item.map(function(key, index) {
          var is_check = ($(":checkbox[value="+key+"]").is(":checked")) ? true : false ;
          if (is_check === true) { check.push(true); }else{ check.push(false); }
        });
        if (!check.includes(false)) { $(":checkbox[value='all']").prop("checked", check); }
      }

    }
  });

}); // End Tag.
</script>
@endsection