<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interface\PaymentGateway;
use Illuminate\View\View;

class MainController extends Controller
{
   
   /* public function index(PaymentGateway $payment):View {

        
 
      $resulta = app(PaymentGateway::class);

      

      return view('index', ['valor' => $resulta->doPayment()]);


    }*/

    public function index():View {
      
     
     
 
       return view('index', ['valor' => 'SIN VALOR']);
 
 
     }

   public function indexStore(Request $request, PaymentGateway $payment):View {

      $resulta = $payment->doPayment();
      $pepe = $request->pepe;

      return view('index', ['valor' => $resulta, 'otro' => $pepe]);

     // dd($resulta);

    }


    
}
