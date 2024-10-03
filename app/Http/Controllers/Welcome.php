<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; 
use App;
use Hash;
use Image;

class Welcome extends Controller
{


	public function index(){
         $services = DB::select('SELECT * FROM services ORDER BY service_id DESC LIMIT 3');
          $pic = DB::table('gallery')
        ->orderBy('created_at', 'desc')
        ->select('*')
        ->paginate(8);
         $team = DB::select('SELECT * FROM team');
          $brand = DB::select('SELECT * FROM brands');
        return view('frontend.index', [
            'services'=>$services,
            'pic'=>$pic,
            'brand'=>$brand,
            'team'=>$team
        ]);
    }

    public function about(){
        return view('frontend.about');
    }

    public function brands(){
       $brand = DB::select('SELECT * FROM brands');
        return view('frontend.brands', [
            'brand'=>$brand
        ]); 
    }

    public function gallery(){
         $gallery = DB::select('SELECT * FROM gallery');
          $pic = DB::table('gallery')
        ->orderBy('created_at', 'desc')
        ->select('*')
        ->paginate(8);
        return view('frontend.gallery', [
            'gallery'=>$gallery,
            'pic'=>$pic
        ]); 
    }

     public function pricing(){
        return view('frontend.pricing');
    }

     public function services(){
         $services = DB::select('SELECT * FROM services');
        return view('frontend.services', [
            'services'=>$services
        ]); 
    }

      public function service_detail(){
         $serv = DB::select('SELECT * FROM services');
        return view('frontend.service_detail', [
            'serv'=>$serv
        ]); 
    }

    public function products(){
         $product = DB::select('SELECT * FROM products');
        return view('frontend.products', [
            'product'=>$product
        ]); 
    }

     public function products_detail(){
         $pro = DB::select('SELECT * FROM products');
        return view('frontend.products_detail', [
            'pro'=>$pro
        ]); 
    }

     public function our_team(){
      $team = DB::select('SELECT * FROM team');
        return view('frontend.our_team', [
            'team'=>$team
        ]); 
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function blog_detail(){
        return view('frontend.blog_detail');
    }

    public function contact(){
        return view('frontend.contact');
    }



    // ================BackEnd======================

   public function dashboard(){
        if (Auth::user()) {

            $id = Auth::user()->id;
            $level = Auth::user()->level;
            if ($level==1) {
                $total_services = DB::select("SELECT COUNT(service_id) services FROM services ");

                $total_products = DB::select("SELECT COUNT(product_id) products FROM products ");

                $total_team = DB::select("SELECT COUNT(team_id) team FROM team");

                $total_gallery = DB::select("SELECT COUNT(gallery_id) gallery FROM gallery");

               
            }
            return view('admin.dashboard', [
                'total_services'=>$total_services,
                'total_products'=>$total_products,
                'total_team'=>$total_team,
                'total_gallery'=>$total_gallery
            ]);
        }
        else{
            return redirect('login')->with('error', 'You are not logged in');
        }



    }
        

   public function add_services(){
        $services = DB::select('SELECT * FROM services');
        return view('admin.add_services', [
            'services'=>$services
        ]); 
    }

    public function add_gallery(){
        $gallery = DB::select('SELECT * FROM gallery');
        return view('admin.add_gallery', [
            'gallery'=>$gallery
        ]); 
    }

     public function add_brands(){
        $brand = DB::select('SELECT * FROM brands');
        return view('admin.add_brands', [
            'brand'=>$brand
        ]); 
    }

    public function add_products(){
        $products = DB::select('SELECT * FROM products');
        return view('admin.add_products', [
            'products'=>$products
        ]); 
    }
public function add_team(){
        $team = DB::select('SELECT * FROM team');
        return view('admin.add_team', [
            'team'=>$team
        ]); 
    }

 public function user_profile($id){

     $data = DB::table('users')
     ->where('id', '=', $id)
     ->get();
     $user = json_decode($data, true);
     return view('admin.user_profile', ['user'=>$user]);
 }

  public function add_invoice(){
    $invoice = DB::select('SELECT * FROM invoice');
        return view('admin.add_invoice', [
            'invoice'=>$invoice
        ]); 
    }

    public function invoice($invoice_id){
  $invoice = DB::table('invoice')
  ->where('invoice_id', '=', $invoice_id)
  ->get();
  $invoice = json_decode($invoice, true);
  return view('admin.invoice', ['invoice'=>$invoice]);
} 


    public function invoice_print($invoice_id){
  $invoice = DB::table('invoice')
  ->where('invoice_id', '=', $invoice_id)
  ->get();
  $invoice = json_decode($invoice, true);
  return view('admin.invoice_print', ['invoice'=>$invoice]);
} 



 

    public function login(){
        return view('auth.login');
    }

}



