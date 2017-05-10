<html><head>
    <script type="text/javascript">
      function generateim() {
   
    if (confirm("Do yoy want to confirm the changes ?") == true) {
       window.location.href = "{ url('/home') }";
    } else {
       return false;
    }
   
}




    </script>
  </head> @extends('layouts.app')
  <body>
   @section('content')
   
   
  <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <center> <label>Form-IA
			<br>
                        INFORMATION MEMORANDUM
                        <br> (SEE CLAUSE 4)<br>
              
			Please read instructions carefully before filling this form</label></center>
			
		 </div>
        </div>
      </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="modal-content">
          <div class="modal-header">

           <label>Application  Form for obtaining IM Number</label>
          </div>
          <form  method="post" action="{{ url('/home') }}">
       <!--   <form method="post">-->
            <div class="modal-body">
            {{ csrf_field() }}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                 <div class="col-md-12 col-sm-12">
                      <label>Details of investment in fixed assets(Group Black)as on the date of filling of information memorandum if it is an unit under expansion,
                      give details there of separately</label>
                  </div>
                
                
               <div class="col-md-12 col-sm-12">
               
                <table border="2" class="table boredered table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
		      <th>Description</th>
                      <th>For Existing capacity</th>
                       <th>For new/ Expanded capacity
                       </th>
                       <th>Total</th>
                      
                    </tr>
                     </thead>
                  <tbody>
                     <tr>
		      
                         <th>Land</th>
                        <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     </tr>
                 
                    <tr>
                       <th>Building</th>   
		<td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    </tr>
                    
                     <tr>
                       <th>Plant and Machinery</th>   
                    
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    </tr>
				
                     <tr>
                       <th>Indigenous</th>   
                    
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    </tr>
                    
                    
                     <tr>
                       <th>Imported</th>   
                    
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    </tr>
			
                     <tr>
                       <th>Others</th>   
                    
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    </tr>
				
				
                  </tbody>
                </table>
              </div>    
                
                  <div class="col-md-12 col-sm-12">
                      <label>Finance patterns (Rs. In lakhs) - own</label>
                  </div>
                
                
                 <div class="col-md-12 col-sm-12">
                      <label>Details of Employment ( All figures in Numbers)</label>
                  </div>
                
                
                <div class="col-md-12 col-sm-12">
               
                <table border="2" class="table boredered table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
		      <th>SI No.</th>
                      <th rowspan="3">Category</th>
                       <th >Men </th>
                       <th>Women</th>
                       <th>Total</th>
                    </tr>
                     <tr>
		      
                  </thead>
                  <tbody>
                      
                      <tr>
                          <td rowspan="3">1</td>
                         <th>Supervisory</th>
                         <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      </tr>
                      
                        <tr>
                    
                         <th>Technical</th>
                         <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      </tr>

                       <tr>
                    
                         <th>Non-Technical</th>
                         <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      </tr>
                      
                      
                       <tr>
                          <td rowspan="3">2</td>
                         <th>Non-Supervisory</th>
                         <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      </tr>
                      
                        <tr>
                    
                         <th>Skilled</th>
                         <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      </tr>

                       <tr>
                    
                         <th>Unskilled</th>
                         <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      </tr>
                      
                    
                       	
                  </tbody>
                </table>
              </div>  
                
                
              <div class="col-md-12 col-sm-12">
                      <label>Pollution Control, Measures (if applicable)</label>
                  </div>
                
                    <div class="col-md-12 col-sm-12">
                      <label>Final Production during the preceeding TWP Financial years - NA</label>
                  </div>
                
                  <div class="col-md-12 col-sm-12">
                      <label>Whether it is in foreign technical / finacial collaboration or any import drawing and designs is involved - NO</label>
                  </div>
                
                
                  <div class="col-md-12 col-sm-12">
                      <label>Any other relevant information YES / NO</label>
                  </div>
                
                
                <div class="col-md-12 col-sm-12">
                    <center><label>DECLARATION</label></center>
                  </div>
                
                  <div class="col-md-12 col-sm-12">
                    <center><label>I / We hereby declare that this information Memorandum is filled in accordance with the
                        provisions of the Textiles (Development & Regulation) oreder, 2001 and the information given in this memorandum are true to the best of my / our
                        knowledge and belief and nothing has been concealed therein.</label></center>
                  </div>
                <br>
                <br>
                <div class="col-md-2 col-sm-2 col-md-offset-10">
                   <label>Signature of the applicant / Authorized signatory</label>
                  </div>
                
                <div class="col-md-3 col-sm-2 col-md-offset-1">
                    <font align="right"><label>Place : </label></font>
                  </div>
                
                  <div class="col-md-3 col-sm-2 col-md-offset-5">
                    <font align="right"><label>Name : </label></font>
                  </div>
                
                
                 <div class="col-md-3 col-sm-2 col-md-offset-1">
                    <font align="right"><label>Date : </label></font>
                  </div>
                
                  <div class="col-md-3 col-sm-2 col-md-offset-5">
                    <font align="right"><label>Designation : </label></font>
                  </div>
                
                <div class="modal-footer">
          <ul class="pager">
              
              <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                 <a href="reg_2">←  Prev</a>
                                
                             <a href="{{ url('/home') }}"><button type="submit" class="btn btn-primary" id="generate_im" onclick="return(generateim());">
                                    <i class="fa fa-btn fa-user"></i> Generate IM Number
                                </button></a>
                                <p id="demo"></p>
                            </div>
                        </div>
            
            <!--<li>
                <a href="reg_2">←  Prev</a>
              <input type="hidden" name="isEmpty" value="">
              <button type="input" name="submit" value="newAccount" class="btn btn-success btn-icon">
                <i class="fa fa-check"></i>Submit</button>
              <button type="button" class="btn btn-default btn-icon" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>Cancel</button>
            </li> -->
          </ul>
            
        </div>
                
                
</div>
          </form>
        </div>
      </div>
   
   @endsection
  </body>
</html>
                
                
                

