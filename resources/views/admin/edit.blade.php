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
             
             
              <form method="GET"  action="{{ url('upm_view')}}/{{ $edit->id  }}">

                 <!-- <form method="GET">   -->
              @csrf
                  <!-- text input -->
                  <div class="form-group">
                    <label>الاسم الطبيب</label>
                    <input id="d_name" type="text" class="form-control @error('d_name') is-invalid @enderror" name="d_name" value="{{  $edit->d_name  }}" required autocomplete="name" autofocus>

                           @error('d_name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>
                

                 
                 

                  <!-- input states -->
          
                  <div class="form-group">

<label class="" >التخصص </label>
<input id="d_name" type="text" class="form-control @error('d_name') is-invalid @enderror" name="d_spe" value="{{  $edit->d_spe   }}" required autocomplete="name" autofocus>

@error('d_name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>



<div class="form-group">

<label class="" >العنوان</label>
<input id="d_name" type="text" class="form-control @error('d_name') is-invalid @enderror" name="d_address" value="{{  $edit->d_address  }}" required autocomplete="name" autofocus>

@error('d_name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
 <label class="" >المحلية</label>
 <input id="d_name" type="text" class="form-control @error('d_name') is-invalid @enderror" name="d_city" value="{{  $edit->d_city  }}" required autocomplete="name" autofocus>

                           @error('d_name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div> <!-- textarea -->
 <div class="form-group">
                    <!-- text input -->
                    <div class="form-group">
                    <label>المؤاهل العلمي</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="d_mo" value="{{  $edit->d_mo  }}" required autocomplete="name" autofocus>

                           @error('name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>
                    <!-- text input -->
                    <div class="form-group">
                    <label>رقم الهاتف</label>
                    <input id="name" type="tel" class="form-control @error('name') is-invalid @enderror" name="d_phone" value="{{  $edit->d_phone  }}" required autocomplete="name" autofocus>

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
 
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

        @endsection
</body>
</html>