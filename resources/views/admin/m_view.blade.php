@extends ('layout.master1')
@section('content3')
@section('content')
@section('content1')
</div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 434px;">
    <!-- Content Header (Page header) -->
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">

            <div class="card-body">
 
<div class="row">
                <div class="col-lg-12">
                  <div class="card">



     

                    

                    <div class="card-body">


                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>الرقم التعريفي</th>
                            <th> اسم الطبيب   </th>
                            <th>التخصص        </th>
                            <th>العنوان       </th>
                            <th>المحلية       </th>
                            <th> الؤاهل العلمي</th>
                            <th>رقم الهاتف</th>
                            <th>تحكم</th>
                          </tr>
                        </thead>
                        <tbody>

        <tr>
        @foreach($m_viewData as $data)
       
                            <td>{{$data->id}}</td>
                            <td>{{$data->d_name}}</td>
                            <td>{{$data->d_spe}}</td>
                            <td>{{$data->d_address}}</td>
                            <td>{{$data->d_city}}</td>
                            <td>{{$data->d_mo}}</td>
                            <td>{{$data->d_phone}}</td>
                        

                            <td>
                                


<a class="btn btn-info" href="{{  url('editm_view')  }}/{{  $data->id  }}">
<i class="fa fa-edit">   تعديل  </i>
</a>

<a class="btn btn-danger" href="{{  url('Delm_view')  }}/{{  $data->id  }}">
<i class="fa fa-trash-o">  حذف </i>
</a>



</td>

                          </tr>
                          @endforeach




       


                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>

            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
</body>
</html>