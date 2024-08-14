<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DemoController extends Controller
{
    

    // 1. String Int Null Boolean Response
    function Demo1():string|int|null|bool{

        return "Hello";
    }


    
  // 2. Array & Associative Array Response 
    function Demo2():array{

        // $city = array('Dhaka','Rangpur','Rajshahi');

        $assc=array(['name'=>'rabbil','age'=>34],['name'=>'rabbil','age'=>34]);
        
        return $assc;
    }


    // 3. Json Response 
    function Demo3():JsonResponse{

        // $city = array('Dhaka','Rangpur','Rajshahi');

        $assc=array(['name'=>'rabbil','age'=>34],['name'=>'rabbil','age'=>34]);
        
        return response()->json($assc);
    }


      // 4. Response with data, msg, code

    function Demo4():JsonResponse{


        $assc=array(['name'=>'rabbil','age'=>34],['name'=>'rabbil','age'=>34]);
        
        return response()->json(['status'=>'success','data'=>$assc],201);
    }


    // 5. Response redirect

    function Demo5(){  
        
        return redirect("/Demo1");
    }


    // 6. Binary File Response

    function Demo6(): BinaryFileResponse{  

        $path = "laravel.jpg";
        
        return response()->file($path);
    }


    // 7. File Download Response

    function Demo7(): BinaryFileResponse{  

        $path = "laravel.jpg";
        
        return response()->download($path);
    }


     // 8. Response Cookies

     function Demo8(){  

        $name = "ostad";
        $value = "ostad-123";
        $expTime = 60;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure=true;
        $httpOnly=true;
        
        return response("Cookie Set Success")->cookie(
            $name,$value,$expTime,$path,$domain,$secure,$httpOnly
        );
    }


         // 9. Response with Header properties

         function Demo9(){  
            
            return response("Header Set Success")
            ->header('ostad1','ostad1-value')
            ->header('ostad2','ostad2-value')
            ->header('ostad3','ostad3-value');
        }


        
         // 10. Response Blade view

         function Demo10(){  
            
            return view('pages/hello');
        }

}
