
<script type="text/javascript">
    
    $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='part"+i+"' type='text'  class='form-control input-md'/></td><td><select id='gen"+i+"' class='form-control input-md'/></td><td><select id='rel"+i+"' class='form-control input-md'/></td><td><select id='cat"+i+"' class='form-control input-md'/></td><td><span class='glyphicon glyphicon-minus addBtnRemove'  name='delete_row"+i+"' ></span></td>  ");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
    
   function ShowHideDiv() {
        var chkYes = document.getElementById("chkYes");
        var dvcost = document.getElementById("dvcost");
        dvcost.style.display = chkYes.checked ? "block" : "none";
    }
</script>
@extends('layouts.app')
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
       
         <label>Application Form for obtaining IM Number</label>
          </div>
          <form  method="POST" action="{{ url('/home/registered') }}">
            <div class="modal-body">
              <div class="row">
		{{ csrf_field() }}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
			   <div class="col-md-3">
                  <div class="form-group">
                    <label for="im_unit_name" class="control-label">Name of the applicant Textile Unit Block Letters</label>
                    <input type="text" class="form-control" id="im_unit_name" name="im_unit_name" placeholder="">
                    <span class="help-block"></span>
                  </div>
                </div>
                              
                 <input type="hidden" name="user_id" value="{{ $user->id }}">
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_add">Address of Factory</label>
                    <input type="text" class="form-control" id="im_unit_add" placeholder="" name="im_unit_add">
                    <span class="help-block">Plot No,Street Address.</span>
                  </div>
                </div>
				
				
				
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_tal">Taluka / Tahashil / Mandal</label>
                    <input class="form-control" id="im_unit_tal" placeholder=""  name="im_unit_tal" type="text">
                  </div>
                </div>
                  
                   <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_dist">District</label>
					<div class="select-style">
                    <select class="form-control match-content" name="im_unit_dist">
                      <option selected="">Select</option>
                      <option>Mumbai</option>
                      <option>Pune</option>
                      <option>Thane</option>
                    </select>
                  </div>
                </div>
				</div>
              
                  
				</div>
				
				
				 <div class="row">
               
            
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_state">State</label>
					<div class="select-style">
                    <select class="form-control match-content" name="im_unit_state">
                      <option selected="">Select</option>
                      <option>Maharashtra</option>
                    </select>
                  </div>
                </div>
				</div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Pincode</label>
                    <input class="form-control" id="im_unit_pin" placeholder="" name="im_unit_pin" type="text">
                    <span class="help-block">Enter Pincode.</span>
                  </div>
                </div>
               <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_fax">Fax Number</label>
                    <input class="form-control" id="im_unit_fax" placeholder="" name="im_unit_fax" type="text">
                  </div>
                </div>
                                     
                   <div class="col-md-3">
                  <div class="form-group">
                    <label for="im_unit_mob" class="control-label">Mobile Number/ Phone Number</label>
                    <input class="form-control" id="im_unit_mob" placeholder="" name="im_unit_mob" type="text">
                  </div>
                </div>                  
				</div>
				
				
              <div class="row">
                
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="im_unit_email" class="control-label">Email</label>
                    <input class="form-control" id="im_unit_email" placeholder=""  name="im_unit_email" type="email">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_web">Website</label>
                    <input class="form-control" id="im_unit_web" placeholder="" name="im_unit_web" type="text">
                     <span class="help-block">If any.</span>
                  </div>
                </div>
                  
                  
                  <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_ssi">SSI / Non-SSI</label>
					<div class="select-style">
                    <select class="form-control match-content" name="im_unit_ssi">
                        <option selected="">Select</option>
                      <option>SSI</option>
                      <option>Non SSI</option>
                    </select>
                  </div>
                </div>
				</div>
                  
                  <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_for">Whether the information memorandum for</label>
					<div class="select-style">
                    <select class="form-control match-content" name="im_unit_for">
                        <option selected="">Select</option>
                      <option>New Unit</option>
                      <option>Existing Unit</option>
                    </select>
                  </div>
                </div>
				</div>
   
              </div>
                <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="im_unit_firm" class="control-label">Constitution of Firm</label></div></div>
                     <div class="col-md-9">
                  <div class="form-group">
		 <label class="radio-inline">
                    <input type="radio"  value="Proprietorship" name="im_unit_firm" id="chkNo" onclick="ShowHideDiv()">Proprietorship</label>
                    <label class="radio-inline" >
                      <input type="radio"  value="Partnership" name="im_unit_firm" id="chkYes" onclick="ShowHideDiv()" >Partnership</label>
                    <label class="radio-inline" >
                        <input type="radio"  value="Pvt.Ltd" name="im_unit_firm" id="chkYes" onclick="ShowHideDiv()">Pvt.Ltd</label>
                    <label class="radio-inline" >
                      <input type="radio" name="im_unit_firm"  value="Co-Operative" id="chkYes" onclick="ShowHideDiv()"> Co-Operative</label>
                    <label class="radio-inline" >
                      <input type="radio" name="im_unit_firm" id="chkYes" value="Others" onclick="ShowHideDiv()" >Others</label>
                  </div>
                </div>
                </div>
                
                
                <div class="row">
               
                <div class="col-md-3">
                  <div class="form-group">
                     <label for="fname" class="control-label">Name of Proprietor</label>
					 
                    <input type="text" class="form-control" id="" name="" placeholder=" ">
                
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                      <label for="fprem" class="control-label">Gender</label><br>
                   <label class="radio-inline">
                      <input type="radio" name="optradio">Male</label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio">Female</label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio">Others</label>
                  </div>
                </div>
                  
                   <div class="col-md-3">
                  <div class="form-group">
                  <label for="fadd" class="control-label">Religion</label>
				  <div class="select-style">
                    <select class="form-control match-content" name="">
                      <option selected="">Select</option>
                      <option>Hindu</option>
                    </select>
                    
                  </div>
                </div>
				</div>
                    <div class="col-md-3">
                  <div class="form-group">
                    <label for="fadd" class="control-label">Category</label>
					<div class="select-style">
                    <select class="form-control match-content" name="">
                      <option selected="">Select</option>
                      <option>SC/ ST</option>
                      <option>OBC</option>
                      <option>OPEN</option>
                    </select>
                   
                  </div>
                </div>
				</div>
              </div>
                  
                  <div class="col-md-12 col-sm-12" id="dvcost" style="display: none">
               
                <table class="table  table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
		      <th>Name of Partners/Managing Director(s)</th>
                      <th>Gender</th>
                      <th>Religion</th>
                      <th>Category</th>
                      <th style="width:10px">
                        <span class="glyphicon glyphicon-plus addBtn" name="add_row" id="add_row"></span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
		<td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td>

                        <select  name="gen" id="gen" class="form-control match-content">
                          <option id="o1">Select</option>
                          <option>Male</option>
                          <option>Female</option>
                          <option>Others</option>
                        </select>
                         
                      </td>
                      <td>
                     
                        <select  name="rel" id="rel" class="form-control match-content">
                          <option id="o1">Select</option>
                          <option>Hindu</option>
                         </select>
                         
                      </td>
                      <td>
                     
                        <select  name="cat" id="cat" class="form-control match-content">
                          <option id="o1">Select</option>
                          <option>SC/ST</option>
                          <option>OBC</option>
                          <option>OPEN</option>
                        </select>
                        
                      </td>
                    
                      <td>
                        <span class="glyphicon glyphicon-minus addBtnRemove"  name="delete_row" id="delete_row"></span>
                      </td>
                    </tr>
					  <tr id='addr1'></tr>
					    
                  </tbody>
                </table>
              </div>
                
               
                    
                    
              <div class="modal-footer">
                <ul class="pager">
                 
                    <div class="form-group">
                           <!-- <div class="col-md-6 col-md-offset-4">
                                 <a href="reg_2">Next  →</a> -->
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Next  →
                                </button>
                            </div>
                        </div>
                    
                    
                  <!--<li>
                    <a href="reg_2">Next  →</a> -->
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  
@endsection
</body></html>

