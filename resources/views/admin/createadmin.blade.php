@extends ('layout.master1')
@section('content3')
@section('content')
@section('content1')

<!DOCTYPE html>

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
                <h3 class="card-title">اضافة بيانات مدير</h3>
              </div>
              <!-- /.card-header -->


                <form action="{{ url('adminStort')}}"  method="GET">
                 <!-- <form method="GET">   -->
              @csrf
                  <!-- text input -->
                  <div class="form-group">
                    <label>اسم المدير</label>
                    <input id="a_name" type="text" class="form-control @error('a_name') is-invalid @enderror" name="a_name" value="{{ old('d_name') }}" required autocomplete="name" autofocus>

                           @error('a_name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>





                  <!-- input states -->




 <!-- textarea -->
 <div class="form-group">
                    <!-- text input -->
                    <div class="form-group">
                    <label>البريد الالكتروني</label>
                    <input
                      id="name"
                      type="email"
                      class="form-control @error('name') is-invalid @enderror"
                      name="a_username" value="{{ old('name') }}"
                      required autocomplete="name" autofocus>

                           @error('name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>
                    <!-- text input -->
                    <div class="form-group">
                    <label>كلمة السر</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i  class="fa fa-fw fa-eye field-icon toggle-password" id="eye"></i></div>
                        <input
                          id="password"
                          type="password"
                          class="form-control @error('password') is-invalid @enderror"
                          name="password"
                          required autocomplete="new-password"
                          data-toggle="password">

                    </div>


                                @error('password')
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

<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- jQuery -->
<script src="javascript/showpassword.js"></script>

        @endsection


</body>
</html>
