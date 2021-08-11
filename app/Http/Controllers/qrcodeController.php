<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Color\Hex;
class qrcodeController extends Controller
{


////////////////لمعرفة التفاصيل الرجاء الذهاب الي  https://www.simplesoftware.io/#/docs/simple-qrcode/////////////



    public function index(Request $request){
       
        $code=QrCode::generate('welcome me name is yosri !');
        $val=0;  /////////من اجل اختيار الراوت 
        return view('qrcode/qrcode' ,compact('code','val'));
    
    }

    public function qr_builder(Request $request){




        $val=1; /////////من اجل اختيار الراوت 








        $name = $request->name;
        $qr_type = $request->qr_type ??'png';
        $code= Str::slug($name) .'.' .$qr_type; // لي انهاء المساحات في الاسم => yosri maysera= yosri_maysera
        $body = $request->body;
        $qr_attachment =$request->qr_attachment ??'no';
        $qr_size= $request->qr_size ??'300';
        $qr_correction = $request->qr_correction ??'H';
        $qr_encoding= $request->input('$qr_encoding') ?? 'UTF-8';
        
        
        $qr_eye= $request->qr_eye ??'square';
        $qr_margin= $request->qr_margin ?? 0;
        $qr_Style= $request->qr_Style ??'square';
        $qr_color= Hex::fromString($request->qr_color ??'#000000')->toRgb();
        $qr_Background_coler = Hex::fromString($request->qr_Background_coler ??'#ffffff')->toRgb();
        $qr_Background_transparent=  $request->qr_Background_transparent ?? 0;


        $qrcode1=QrCode::format($qr_type);
        $qrcode1->size($qr_size);
        $qrcode1->errorCorrection($qr_correction );
        $qrcode1->encoding($qr_encoding);
        $qrcode1->eye($qr_eye); 
        $qrcode1->margin($qr_margin);
        $qrcode1->style($qr_Style);
        $qrcode1->color($qr_color->red(), $qr_color->green(), $qr_color->blue()); 
        $qrcode1->backgroundColor($qr_Background_coler->red(), $qr_Background_coler->green(), $qr_Background_coler->blue(), $qr_Background_transparent);
        if($qr_attachment == 'yes')

        {

           $qrcode1->merge('../public/imagess.png', .1, true);

        }
        
        $qrcode1->generate($body,'../public/qr_code/' .$code);

      
     //  return back()->with(['success'=> 'تم تعديل كلمة السر بنجاح' ]);
        return view('qrcode/qrcode' ,compact('code','val'))->with(['success'=> 'تم تعديل كلمة السر بنجاح' ]);
    }








    public function phone(){
       
        $code=QrCode::phoneNumber('+249925599920');
        return view('qrcode/qrcode_phone' ,compact('code'));
    
    }


    public function email(){
       
        $code=QrCode::email('halaby272@gmail.com', 'This is the subject.', 'This is the message body.');
        return view('qrcode/qrcode_email' ,compact('code'));
    
    }



    public function geo(){

        $latitude=15.612125361623244;
        
        $longitude=32.542332043270115;
       
        $code=QrCode::geo($latitude, $longitude);
        return view('qrcode/qrcode_geo' ,compact('code'));
    
    }



    public function sms(){
       
        $code=QrCode::SMS('+249925599920', 'Body of the message');
        return view('qrcode/qrcode_sms' ,compact('code'));
    
    }









}
