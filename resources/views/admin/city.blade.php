@extends ('layout.master1')
@section('content3')
@section('content')
@section('content1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.a{

    text-align: center;  
    }
    </style>
</head>
<body>
</div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 434px;">
    <!-- Content Header (Page header) -->
<div class="a">

<div class="row"  class="content-wrapper" style="min-height: 434px;">
                <div class="col-lg-12">
                  <div class="card">



 

  <br>
  <form action="{{ url('cityStort')}}" method="GET">
              @csrf

  <input type="text" name="c_city">

  <input type="submit" name="Add" value="اضافة">

</form>
  
  <br>

  <br>
 
<div  class="a" class="content-wrapper" style="min-height: 434px;">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">المدينة</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>الاسم </th>
                      <th style="width: 40px">التحكم</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                    
                    @foreach($city as $data)
                    
                      <td> {{$data->id}}</td>
                      <td>{{$data->c_city}}</td>
                      <td>
                      <button class="btn btn-danger" ><a href="{{  url('Delcity')  }}/{{  $data->id  }}">حذف</a></button>
                       </td>
                       </tr>
                       @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->



          </div>

           
</div> 
</div>
</div>  
@endsection 
</body>