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
                            <th>الرقم المتسلسل   </th>
                            <th> اسم المريض      </th>
                            <th>اسم الطبيب       </th>
                            <th>التذكرة          </th>
                            <th>يوم الحجز        </th>
                            <th>زمن الحجز        </th>
                            
                          </tr>
                        </thead>
                        <tbody>

        <tr>
        @foreach($choose as $data)
       
                            <td>{{$data->id}}</td>
                            <td>{{$data->name }}</td>
                            <td>{{$data->d_name}}</td>
                            <td>{{$data->teket }}</td>
                            <td>{{$data->Day}}</td>
                            <td>{{$data->Time}}</td>
                           
                        

                            <td>
                                






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