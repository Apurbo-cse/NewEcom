<form id="create-form" enctype="multipart/form-data" action="{{ route('roles.store') }}" method="POST">
    @csrf
    <div class="row form-group">
        <div class="col-md-12">
              <label for="name">Role Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Role Name">
         </div>
         {{-- <div class="col-md-6">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Admin Last Name">
        </div> --}}
     </div>

    <div class="form-group row">
        <div class="col-md-12">
          <label for="phone">Permissions</label>
          @foreach ($permissions as $permission)
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="permission[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name}}">
            <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
          </div>
          @endforeach

        </div>

    </div>



    <button type="submit"  class="btn btn-primary" id="btnSaveAdmin"><i class="fa fa-save"></i>&nbsp; Save</button>

  </form>

  {{-- <script>
    $(document).on('click','#btnSaveAdmin',function (event) {
        event.preventDefault();
        var form = $('#create-form')[0];
        var formData = new FormData(form);

        // Set header if need any otherwise remove setup part
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
            }
        });
        $.ajax({
            url: "{{route('superAdmin.admin.store')}}",// your request url
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                // Swal.fire({
                //     position: 'top-end',
                //     icon: data.type,
                //     title: data.message,
                //     showConfirmButton: false,
                //     // timer: 1500
                // })
                Swal.fire(
                    'Success!',
                    'Admin has been Added. ' + data.message,
                    'success'
                )
                setTimeout(function() {
                    location.reload();
                }, 1000);
            },
            error: function (data) {
                var errorMessage = '<div class="card bg-danger">\n' +
                            '<div class="card-body text-center p-5">\n' +
                            '<span class="text-white">';
                $.each(data.responseJSON.errors, function(key, value) {
                    errorMessage += ('' + value + '<br>');
                });
                errorMessage += '</span>\n' +
                    '</div>\n' +
                    '</div>';
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    footer: errorMessage
                });

                console.log(data);
            }
        });

    });
 </script> --}}
