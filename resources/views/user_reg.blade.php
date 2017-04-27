<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   @extends('header')
  <body>
   @section('content')
   
     
   <div class="container">
   
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
        <div class="modal-content">
          <div class="modal-header">
           
            <center>  <label>User Registration</label></center>
          </div>
            <br>
            {!! Form::open(['route' => 'reg.store']) !!}
     
          <!--  <form action="{{ url('reg/save') }}" method="post">-->
              {{ csrf_field() }}

                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="modal-body">
                <table border="2" class="table boredered table-hover" name="tab_logic" id="tab_logic">  
                    <thead>
                    <th colspan="2">Company Details :</th>
                     <th colspan="2">Login Details :</th> 
                </thead>
                <tbody>
                    <tr>
                <th> Company Name</th>
                <td>   <input type="text" name="co_name" class="form-control" id="fcp"></td>
                
                 <th> PAN Number/User Name</th>
                <td> <input type="text"  name="co_pan_no" class="form-control" id="fcp"></td>
   </tr>
                    
    <tr>
                <th> Company Address</th>
                <td>   <input type="text" name="co_add" class="form-control" id="fcp"></td>
                
                 <th> Password</th>
                <td> <input type="password"  name="co_pwd" class="form-control" id="fcp"></td>
   </tr>
   
                <tr>
                <th> Contact Person Name</th>
                <td>   <input type="text"  name="co_cont_name" class="form-control" id="fcp"></td>
                
                 <th> Adhar Number</th>
                <td> <input type="text"  name="co_adhar_no" class="form-control" id="fcp"></td>
   </tr>

    <tr>
                <th> Contact Number</th>
                <td>   <input type="text"  name="co_cont_no" class="form-control" id="fcp"></td>
                
                 <th> Email Id</th>
                <td> <input type="email"  name="co_email" class="form-control" id="fcp"></td>
   </tr>

   <tr>
       
             
   </tr>
    </tbody>
                      </table>   
               
                <center>
                  {{  Form::submit('Register', array('class' =>'btn btn-success btn-icon') }}
                  
    </center>
               
                
                 
                 
                
 </div>
         <!--  </form> -->
        {!! Form::close() !!} 
</div>
        </div>
 </div>
   </div>
      
    
 @endsection
  </body></html>