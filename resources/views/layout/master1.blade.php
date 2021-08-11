<!DOCTYPE html>
<html style="height: auto;"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>المدير</title>
  <!-- from downfile -->
  <link href="main_files/yosri/ionicons.min.css" rel="stylesheet" type="text/css" />    
  <link href="main_files/yosri/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <!-- from internet -->
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="main_files/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="main_files/ionicons.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="main_files/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="main_files/css.css" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="main_files/bootstrap-rtl.css">
  <!-- template rtl version -->

  <link rel="stylesheet" href="main_files/custom-style.css">

  <script src="main_files/jquery_002.js"></script>
  <!-- font awesome -->
    <link rel="stylesheet" href="main_files/font-awesome_002.css">

  <script src="main_files/ckeditor.js"></script><style>.cke{visibility:hidden;}</style>

    <link rel="stylesheet" href="main_files/ratingstar.css">    

    <script type="text/javascript">
      var csrf = 'jhFvWsr4IQbWxVg44WEM64mv4GtyiRYMAD9lKWox';
    </script>

</head>
<body class="sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper"><!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
  

 
    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->
           <li style="margin-left: 200px;"> <a href="{{ url('e_pssword') }}">Edit Password </a></li>
 
           <li class="nav-item">

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                </form>


</li>

    </ul>
  </nav>
  @yield('content')
<!-- /.navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
  
   
    <div class="form-control">
    <div class="form-group">
              @include('flash-message')
               @yield('content3')
               </div>
                 </div>
                 
  </nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 434px;">
    <!-- Brand Logo -->
    <a href="{{ url('index') }}" class="brand-link">
        <img src="main_files/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">احجز واحتار ظبيبك</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img  src="{{ asset('AdminLTELogo.png') }}" class="img-circle elevation-2"  >
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->


                    
                        
                            <li class="nav-item">
                                <a href="{{ url('c_adminsave') }}" class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>

                                        إضافة بيانات مدير   
                                       
                                    </p>
                                </a>
                            </li>

                            
                            <li class="nav-item">
                            <a href="{{ url('c_doctorsave') }}" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    اضافة بياتات طبيب           

                                   
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{ url('emphasis') }}" class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                       تأكيد حساب طبيب
                                        
                                    </p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a href="{{ url('m_view') }}" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                ادارة بيانات طبيب 
                                    
                                </p>
                            </a>
                        </li>
                        
                       
                        
                            <li class="nav-item">
                                <a href="#"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                    تفريغ الحجوزات
                                        
                                    </p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                               <a  href="{{ url('choose') }}" class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                       عرض الحجوزات
                                       
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('spe') }}"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                   ادارة التخصصات
                                        
                                    </p>
                                </a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a href="{{ url('city') }}"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                    ادارة المدينة
                                        
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('local') }}"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                  ادارةالمحلية
                                        
                                    </p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ url('qrcodr') }}"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                  انشاء QR_CODE
                                        
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ url('qrcodr_phone') }}"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                  انشاء QR_CODE_phone
                                        
                                    </p>
                                </a>
                            </li>
                    
                            
                            <li class="nav-item">
                                <a href="{{ url('qrcodr_email') }}"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                  انشاء QR_CODE_email
                                        
                                    </p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="{{ url('qrcodr_geo') }}"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                  انشاء QR_CODE_GPS
                                        
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('qrcodr_sms') }}"  class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                  انشاء QR_CODE_SMS
                                        
                                    </p>
                                </a>
                            </li>
                    
                    

                </ul>
            </nav>
            @yield('content1')
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
    

<!-- jQuery -->
<script src="main_files/jquery_003.js"></script>
<!-- Bootstrap 4 -->
<script src="main_files/bootstrap.js"></script>
<!-- SlimScroll -->
<script src="main_files/jquery.js"></script>
<!-- FastClick -->
<script src="main_files/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="main_files/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="main_files/demo.js"></script>

<script src="main_files/bootstrap_002.js"></script>
<!-- jquery -->
<script src="main_files/jquery_002.js"></script>
<!-- star js -->
<script src="main_files/ratingstar.js"></script>


<script>
// rating
var rate;
$('#rating-student').starrr({
  change: function(e, value){ 
  	rate = value;  	       
    if (value) {
      $('.your-choice-was').show();      
    } else {
      $('.your-choice-was').hide();
    }
  }
});
// ajax submit
$("#submit").click(function(){	
	var name = $('#name').val();
  var id = $('#id').val();

	$.ajax({		
         url:'http://www.ultimate-erp.com/nms/public/getmsg',
         type: 'post',
         data: {v1 : name, v2 : id , v3 : rate,_token:csrf},
        success: function (response) {
        	if(response.status == 1){
            	$('.msg').html('<b>تم التقييم بنجاح</b>');
        	}else{
            	$('.msg').html('<b>يوجد خطاء !!</b>');        		
        	}
        }
    });

});
</script>


<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0756'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src="main_files/tcc_l.js"></script>
</div></div></div></body></html>