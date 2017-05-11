<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Mst_im_reg;
use App\User;
use App\Trn_applicant_details;
use App\trn_attachments_proforma_details;
use Auth;

class IN_PrnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function in_applicant(Request $request,$im_no)
    {

        $trn_attach = new Trn_attachments_proforma_details;
        $trn_attach->im_no = Input::get('im_no');
        echo $im_no;
        
        $user = Auth::User();     
        $userId = $user->id;


foreach($request['attachment'] as $index => $value) {
    $trn_attachments_proforma_details = new Trn_attachments_proforma_details;
    
    $trn_attachments_proforma_details->attachment = $request['attachment'][$index];
    $trn_attachments_proforma_details->sub_model = $request['sub_model'][$index];
    $trn_attachments_proforma_details->quant = $request['quant'][$index];
    $trn_attachments_proforma_details->rate_unit = $request['rate_unit'][$index];
    $total_cost =$trn_attachments_proforma_details->quant *  $trn_attachments_proforma_details->rate_unit;
    $trn_attachments_proforma_details->total_cost = $request['total_cost'][$index];
    $trn_attachments_proforma_details->total = $request['total'][$index];
    $trn_attachments_proforma_details->im_no = $im_no;
    $trn_attachments_proforma_details->user_id = $userId;
    $trn_attachments_proforma_details->save();
}
return Redirect::to('home');

       }

     public function in1(Request $request,$im_no)
    {

         $mst_im = new Mst_im_reg;
        $mst_im->im_no = Input::get('im_no');
        //echo $im_no;
        
        $mst_im_reg = DB::table('mst_im_regs')
             -> join('users', 'mst_im_regs.user_id', '=', 'users.id')
           
             ->select('mst_im_regs.*', 'users.*')
             ->where('mst_im_regs.im_no' ,$im_no)     
            ->get();
         

         $trn_app = new Trn_applicant_details;
        $trn_app->im_no = Input::get('im_no');
        //echo $im_no;
        
        $trn_applicant = DB::table('trn_applicant_details')
            ->select('trn_applicant_details.*')
            ->where('im_no' ,$im_no)     
            ->get();



return view('USER.InPrincipal_Number',compact('mst_im_reg','trn_applicant'));
    // return view('USER.InPrincipal_Number')->with(['mst_im_reg' => $mst_im_reg]);
       }
    public function in()
    {
        return view("USER.InPrincipal_Number");
    }


    
    public function action()
    {
        return view("action");
    }
    // upload file function
    public function multiple_upload() {
    // getting all of the post data
    $files = Input::file('file');
    // Making counting of uploaded images
    $file_count = count($files);
    // start count how many uploaded
    $uploadcount = 0;
    foreach($files as $file) {
      $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
      $validator = Validator::make(array('file'=> $file), $rules);
      if($validator->passes()){
        $destinationPath = 'uploads';
        $filename = $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $filename);
        $uploadcount ++;
      }
    }
    if($uploadcount == $file_count){
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    } 
    else {
      return Redirect::to('upload')->withInput()->withErrors($validator);
    }
  }
    
   
    public function index(Request $request,$im_no)
    {
         $mst_im1 = new Mst_im_reg;
        $mst_im1->im_no = Input::get('im_no');
        //echo $im_no;
        
        $mst_im_reg = DB::table('mst_im_regs')
             ->join('users', 'mst_im_regs.user_id', '=', 'users.id')
             ->select('mst_im_regs.*', 'users.*')
             ->where('im_no' ,$im_no)     
            ->get();
         
      return view('format_II')->with(['mst_im_reg' => $mst_im_reg]);
       }

    public function in_app()
    {
        return view("format_II");
    }
     
    public function in_format3()
    {
        return view("format_III_1");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$im_no)
    {
     /*  $this->validate($request, [
    'im_bank_name' => 'required',
    'im_bank_branch' => 'required',
    'im__bank_add' => 'required',
    'im_bank_pin' => 'required',     
    'im_bank_mob' => 'required',
    'im_bank_acc'  => 'required',
    'im_bank_ifsc'  => 'required',  
    
          
]); 
       
       $mst_im_reg = new Mst_im_reg;
     $mst_im_reg->user_id = Input::get('im_bank_name');
     $mst_im_reg->im_unit_name = Input::get('im_bank_branch');
     $mst_im_reg->im_unit_add = Input::get('im__bank_add');
     $mst_im_reg->im_unit_tal = Input::get('im_bank_pin');
     $mst_im_reg->im_unit_dist = Input::get('im_bank_mob');
     $mst_im_reg->im_unit_state = Input::get('im_bank_acc');
     $mst_im_reg->im_unit_pin = Input::get('im_bank_ifsc');
     $mst_im_reg->im_no = Input::get('im_no');
       
       
      
     $mst_im_reg2 = DB::table('mst_im_regs')
             ->join('users', 'mst_im_regs.user_id', '=', 'users.id')
             ->select('mst_im_regs.*', 'users.*')
             ->where('im_no' ,$im_no)     
            ->get();
         
      return view('IN_3')->with(['mst_im_reg2' => $mst_im_reg2]);
       
     */  
       
   


       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
