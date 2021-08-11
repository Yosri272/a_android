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
<select name="d_spe">
@foreach($spe as $data)
    <option>{{$data->s_spe }}</option>
    @endforeach

</select>
   
</div>
<div class="form-group">

<label class="" >العنوان</label>
<select name="d_address">


@foreach($city as $data1)
    <option>{{$data1->c_city }}</option>
    @endforeach

</select>
 
 </div>
 <label class="" >المحلية</label>
<select name="d_city">


@foreach($local as $data2)
    <option>{{$data2->l_local }}</option>
    @endforeach

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
                    <input id="name" type="tel" class="form-control @error('name') is-invalid @enderror" name="d_phone" value="{{ old('name') }}" required autocomplete="name" autofocus>

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