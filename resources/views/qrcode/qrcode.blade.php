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



 
         
     
             
<div class="row">
<div class="col-8">
<form action="{{ url('qr_builder')}}"  method="POST">
  
<div class="card card-warning">
              <div class="card-header d-flex">
                    
                
                <h3 class="card-title">اضافة بيانات مدير</h3>
              </div>
  </div>     
@csrf
                  <div class="form-group">
                    <label>الاسم</label>
                    <input id="name" type="text" class="form-control @error('a_name') is-invalid @enderror" name="name" value="{{ old('d_name') }}" required autocomplete="name" autofocus>

                           @error('a_name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>
                

                  <div class="form-group">
                    <label>المحتوي</label>
                    <input id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}" required autocomplete="name" autofocus>

                           @error('a_name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>






                  <hr>


                       <div class="row">  
                              <div class="col-3">
                                 <div class="form-group">
                                    <label>ادخال اللوغو في qr code</label>
                                    <select  name="qr_attachment" class="form-control">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                     </select> 

             
                                   </div>
                                </div>


                        </div>

                  <hr>




                  <div class="row">
                           <div class="col-3">
                             <div class="form-group">
                               <label>الحجم qr_code</label>
                                <select  name="qr_size" class="form-control">
                                  <option value="">اختيار الحجم</option>
                                  <option value="100">100x100</option>
                                  <option value="300">300x300</option>
                                  <option value="600">600x600</option>
                                  <option value="900">900x900</option>
                                </select> 

                           
                             </div>
                            </div>  

                            <div class="col-3">
                             <div class="form-group">
                               <label>النوع الصورة</label>
                                <select  name="qr_type" class="form-control">
                                  <option value="png">PNG</option>
                                  <option value="svg">SVG</option>
                                  <option value="eps">EPS</option>
                                  
                                </select> 

                           
                             </div>
                            </div>


                            
                            <div class="col-3">
                             <div class="form-group">
                               <label>معدل تصحيح الخطاء</label>
                                <select  name="qr_correction" class="form-control">
                                  <option value="">معدل تصحيح الخطاء</option>
                                  <option value="L">7%</option>
                                  <option value="M">15%</option>
                                  <option value="Q">25%</option>
                                  <option value="H">30%</option>
                                </select> 

                           
                             </div>
                            </div>
                            
                            



                            <div class="col-3">
                             <div class="form-group">
                               <label>معدل الترميز </label>
                                <select  name="qr_encoding" class="form-control">
                                  <option value="">معدل تصحيح الخطاء</option>
                                  <option value="UTF-8">UTF-8</option>
                                  <option value="ISO-8859-1">ISO-8859-1</option>
                                  <option value="ISO-8859-2">ISO-8859-2</option>
                                  <option value="ISO-8859-3">ISO-8859-3</option>
                                  <option value="ISO-8859-4">ISO-8859-4</option>
                                  <option value="ISO-8859-5">ISO-8859-5</option>
                                  <option value="ISO-8859-6">ISO-8859-6</option>
                                  <option value="ISO-8859-7">ISO-8859-7</option>
                                  <option value="ISO-8859-8">ISO-8859-8</option>
                                  <option value="ISO-8859-9">ISO-8859-9</option>
                                  <option value="ISO-8859-10">ISO-8859-10</option>
                                  <option value="ISO-8859-11">ISO-8859-11</option>
                                  <option value="ISO-8859-12">ISO-8859-12</option>
                                  <option value="ISO-8859-13">ISO-8859-13</option>
                                  <option value="ISO-8859-14">ISO-8859-14</option>
                                  <option value="ISO-8859-15">ISO-8859-15</option>
                                  <option value="ISO-8859-16">ISO-8859-16</option>
                                  <option value=" WINDOWS-1250"> WINDOWS-1250</option>
                                  <option value="WINDOWS-1251">WINDOWS-1251</option>
                                  <option value="WINDOWS-1252">WINDOWS-1252</option>
                                  <option value="WINDOWS-1256">WINDOWS-1256</option>
                                  <option value="UTF-16BE">UTF-16BE</option>
                                  <option value="ASCII">ASCII</option>
                                  <option value="GBK">GBK</option>
                                  <option value="EUC-KR">EUC-KR</option>
                                </select> 

                           
                             </div>
                            </div> 



















                         </div>



           
   
                   <div class="row">
                           <div class="col-3">
                             <div class="form-group">
                               <label> qr_Eye</label>
                                <select  name="qr_eye" class="form-control">
                                  <option value="">اختيار الحجم</option>
                                  <option value="square">square</option>
                                  <option value="circle">circle</option>
                                            
                                </select> 

                           
                             </div>
                    </div>  

                            <div class="col-3">
                             <div class="form-group">
                               <label>تدكين اللون qrcode</label>
                               <input  type="number"  name="qr_margin" value="{{ old('qr_margin' , 0) }}" min="0" max ="100"step="1" class="form-control" >

                                  
                                

                           
                             </div>
                            </div>


                            
                            <div class="col-3">
                             <div class="form-group">
                               <label>اشكال qr_code</label>
                                <select  name="qr_Style" class="form-control">
                                  <option value="">اختيار اشكال qr_code</option>
                                  <option value="square">square</option>
                                  <option value="dot">dot</option>
                                  <option value="round">round</option>
                                
                                </select> 

                           
                             </div>
                            </div>
                            
                            



                            <div class="col-3">
                             <div class="form-group">
                               <label>لون qr_code </label>
                                 
                               <input  type="color"  name="qr_color" value="{{ old('qr_color' ,'#000000') }}" class="form-control" >
                           
                             </div>
                            </div> 



















                         </div>

                         <div class="row">
                            <div class="col-6">

                              <div class="form-group">
                               <label> لون الخلفية qr_code </label>
                                 
                               <input  type="color"  name="qr_Background_coler " value="{{ old('qr_Background_coler ' ,'#ffffff') }}" class="form-control" >
                           
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-group">
                                   <label>دكانة الخلفية </label>
                                   <input  type="number"  name="qr_Background_transparent" value="{{ old('qr_Background_transparent' , 0) }}" min="0" max ="100"step="1" class="form-control" >

                                  
                                </div>
                              </div>
                         </div>  





                    




                        

                  <div class="form-group  pull-right">
                    <button  class="btn  btn-primary"><a   class="btn  btn-primary" >انشاء qrcode</a></button>

  
                      </div>
                    </form>


</div>


@if ($val == 0) 


{{ $code  }}





@elseif($val == 1)



                   @if (pathinfo($code)['extension'] ==='eps')  
                       <div class="image">
                 
                  
                            qe code not avaliable, <a href="{{ asset('qr_code/' .$code) }}">click here</a>
                      @else

                          <img  src="{{ asset('qr_code/' .$code) }}" alt="{{ $code}}" class=" img-fluid">
                        </div>
                    @endif
@endif              
   
      
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