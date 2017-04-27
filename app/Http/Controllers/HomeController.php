<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Mst_im_reg;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function admin()
    {
        return view("admin");
    }
    
    public function index()
    {
       $user = Auth::User();     
        $userId = $user->id;
       // echo  $userId;
        $userrole = $user->role;
        
        
        if ($userrole=='user')
        {
         $mst_im_reg = DB::table('mst_im_regs')
             ->select('im_no', 'im_status','created_at')
             ->where('user_id' ,$user->id)   
              ->orderby('user_id')
                 
            ->get();
         //echo $mst_im_reg;
         return view('home')->with(['mst_im_reg' => $mst_im_reg]);
       
            
            
        //return view('home');
        }
        else
        {
          return view('admin');  
        }
        
}
    
       
    }
