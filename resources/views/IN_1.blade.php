
<html>
    

    <head>
  </head>
  @extends('layouts.app')
  <body>
   
   @section('content')
  
  <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <label><center>Format-I
			<br>
              </center>
			Application for obtaining IN-Principal Approval for claim under In-situ Upgradation of plain Powerlooms for SSI Powerloom Sector</label>
			
		 </div>
        </div>
      </div>
    </div>
  
  
    <div class="container">
      <div class="row">
        <div class="modal-content">
          <div class="modal-header">
       
         <label>Application Form for obtaining IN-Principal Approval</label>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            	
            <div class="modal-body">
                 @foreach($mst_im_reg as $mst_im_regs)

               
                  <input type="hidden" name="im_no" value="{{ $mst_im_regs->im_no}}">
         
   
                <div class="row">
		  
                  <div class="col-md-3">
                  <div class="form-group">
                      <label class="control-label" for="im_no">IM Number</label>
                      <input type="text" class="form-control" id="im_no" placeholder="" name="im_no1" value="{{ $mst_im_regs->im_no}}" readonly>
                    
                 </div>
                </div>
			
                <div class="col-md-3">
                  <div class="form-group">
                      <label class="control-label" for="im_unit_name">Unit Name</label>
                      <input type="text" class="form-control" id="im_unit_name" placeholder="" name="im_unit_name" value="{{ $mst_im_regs->im_unit_name}}" readonly>
                    
                  </div>
                </div>
                    <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_add">Address of Factory</label>
                    <input type="text" class="form-control" id="im_unit_add" placeholder="" name="im_unit_add" value="{{ $mst_im_regs->im_unit_add}}" readonly>
                  </div>
                </div>
				
				
				
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_tal">Taluka / Tahashil / Mandal</label>
                    <input class="form-control" id="im_unit_tal" placeholder=""  name="im_unit_tal" type="text" value="{{ $mst_im_regs->im_unit_tal}}" readonly>
                  </div>
                </div>
				</div>
				
				
				 <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                  <label class="control-label" for="im_unit_dist">District</label>
                   <input class="form-control" id="im_unit_dist" placeholder=""  name="im_unit_dist" type="text" value="{{ $mst_im_regs->im_unit_dist}}" readonly>
                  
                </div>
				</div>
              
            
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="im_unit_state">State</label>
                   <input class="form-control" id="im_unit_state" placeholder=""  name="im_unit_state" type="text" value="{{ $mst_im_regs->im_unit_state}}" readonly>
                  </div>
                </div>
				
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Pincode</label>
                    <input class="form-control" id="im_unit_pin" placeholder="" name="im_unit_pin" type="text" value="{{ $mst_im_regs->im_unit_pin}}" readonly>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" name="im_prems" for="fprem">Whether premises is Owned or Rented</label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" name="im_prems" value="Owned">Owned</label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" name="im_prems" value="Rented">Rented</label>
                  </div>
                </div>
				</div>
				
				 <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="att_elc_bill">Please attach copy of electricity bill of the unit</label>
                   
                  </div>
                </div>
				
				<div class="col-md-9">
                  <div class="form-group">
				   <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-primary btn-file">
                       <!-- <span class="fileupload-new">Select file</span>
                        <span class="fileupload-exists">Change</span> -->
                          <input type="file" name="file[]" multiple><br>
                      </span>
                      <span class="fileupload-preview"></span>
                    </div>
				  
				   </div>
                </div>
				  
				
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="im_unit_mob" class="control-label">Mobile Number/ Phone Number</label>
                    <input class="form-control" id="im_unit_mob" placeholder="" name="im_unit_mob" type="text" value="{{ $mst_im_regs->im_unit_mob}}" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="im_unit_fax">Fax Number</label>
                    <input class="form-control" id="im_unit_fax" placeholder="" name="im_unit_fax" type="text" value="{{ $mst_im_regs->im_unit_fax}}" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                     <label for="im_unit_email" class="control-label">Email</label>
                    <input class="form-control" id="im_unit_email" placeholder=""  name="im_unit_email" type="email" value="{{ $mst_im_regs->im_unit_email}}" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="username">PAN Number</label>
                      <input class="form-control" id="username" placeholder=""  name="username" type="text" value="{{ $mst_im_regs->name}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="co_cont_name" class="control-label">Name of Contact Person</label>
                    <input class="form-control" id="co_cont_name"  type="text" name="co_cont_name" value="{{ $mst_im_regs->co_cont_name}}"  readonly>
                   </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="co_cont_no">Contact Number/ Mobile Number</label>
                    <input class="form-control" id="co_cont_no" type="text" name="co_cont_no" value="{{ $mst_im_regs->co_cont_no}}" readonly>
                   </div>
                </div>
                  <!--
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Powerloom Permit Number</label>
                    <input type="text" class="form-control" id="fcp" placeholder="">
                    <span class="help-block">.</span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Powerloom Permit date</label>
                    <input type="text" class="form-control" id="fcp" placeholder="DD/MM/YYYY">
                    <span class="help-block">Enter Powerloom Permit date.</span>
                  </div>
                </div> -->
                
              </div>
              <div class="modal-footer">
                <ul class="pager">
                 
                  <li>
                      <a href ="{!!route('im2.index',['im_no'=>$mst_im_regs->im_no,'im_prems'=>$mst_im_regs->im_prems])!!}">Next -> </a>
                     
                  </li>
                </ul>
              </div>
                @endforeach
              
            </div>
             
            
          </form>
        </div>
      </div>
    </div>
  
@endsection
</body></html>