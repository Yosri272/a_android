@extends ('layout.master1')
@section('content3')
@section('content')
@section('content1')

<!DOCTYPE html>
<html lang="en">
<body>
</div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 434px;">
    <!-- Content Header (Page header) -->



<br>
<div class="container">
<div class="row">
                <div class="col-lg-12">
                  <div class="card">




<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">اضافة بيانات طبيب</h3>
              </div>
              <!-- /.card-header -->


                <form action="{{ url('doctorStort')}}"  method="GET">
                 <!-- <form method="GET">   -->
              @csrf
                  <!-- text input -->
                  <div class="form-group">
                    <label>الاسم الطبيب</label>
                    <input id="d_name" type="text" class="form-control @error('d_name') is-invalid @enderror" name="d_name" value="{{ old('d_name') }}" required autocomplete="name" autofocus>

                           @error('d_name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>





                  <!-- input states -->

                  <div class="form-group">

                      <label class="" >التخصص </label>
                        <select name="d_spe" value="{{ old('d_spe') }}">
                            <option value="">*اختار التخصص</option>
                            @foreach($spe as $data)
                            <option>{{$data->s_spe }}</option>
                            @endforeach

                        </select>

                      </div>


                <div class="form-group">
                    <label class="" >العنوان</label>
                    <select name="city" id="city" value="{{ old('city') }}">
                        <option value="">*اختار العنوان</option>
                         @foreach($city as $data2)
                        <option value="{{ $data2->c_city }}">{{ ucfirst($data2->c_city) }}</option>
                         @endforeach
                    </select>
                </div>

                <div class="form-group">
                   <label class="" >المحلية</label>
                   <select name="d_city" id="d_city" value="d_city">
                   <option value="">*اختار المحلية</option>
                    </select>
                </div>

 <!-- textarea -->
 <div class="form-group">
                    <!-- text input -->
                    <div class="form-group">
                    <label>المؤاهل العلمي</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="d_mo" value="{{ old('name') }}" required autocomplete="name" autofocus>

                           @error('name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>

                    <!-- text input -->
                    <div class="form-group">
                    <label>رقم الهاتف</label>
                    <input id="name" type="phone" class="form-control @error('name') is-invalid @enderror" name="d_phone" value="{{ old('name') }}" required autocomplete="name" autofocus>

                           @error('name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>

<br>
     <div class="form-group  pull-right">



     <button  class="btn  btn-primary"><a   class="btn  btn-primary" >ارسال</a></button>


     </div>


                </form>
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.content -->
</div>
</div>
</div>

<!-- /.script -->

<script src="javascript/jquery.js"></script>
<script>
            $(document).ready(function () {
            $('#city').on('change', function () {
            let c_city = $(this).val();
            $('#d_city').empty();
            $('#d_city').append(`<option value="0" disabled selected>Processing...</option>`);
            $.ajax({
            type: 'GET',
            url: 'GetSubCatAgainstMainCatEdit/' + c_city,
            success: function (response) {
            var response = JSON.parse(response);
            console.log(response);
            $('#d_city').empty();
            $('#d_city').append(`<option value="0" disabled selected>اختار المحلية*</option>`);
            response.forEach(element => {
                $('#d_city').append(`<option value="${element['c_city']}">${element['l_local']}</option>`);
                });
            }
        });
    });
});
</script>
<!-- /.content-wrapper -->
@endsection
</body>

</html>


