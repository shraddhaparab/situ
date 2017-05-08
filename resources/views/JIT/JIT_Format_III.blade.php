<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
    
   function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[1].cells.length;

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[1].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
                                        case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;                
                                                        
                                        case "text":
							newcell.childNodes[0].value = "";
							break;
					case "text":
							newcell.childNodes[0].value = "";
							break;
                                        
                                        case "text":
							newcell.childNodes[0].value = "";
							break;
                                        case "text":
							newcell.childNodes[0].value = "";
							break;                
				}
			}
		}
                
                function addRow1(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[1].cells.length;

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[1].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
                                                        
                                                        
                                        case "text":
							newcell.childNodes[0].value = "";
							break;
					case "text":
							newcell.childNodes[0].value = "";
							break;
                                        
                                        case "text":
							newcell.childNodes[0].value = "";
							break;
                                        case "text":
							newcell.childNodes[0].value = "";
							break;                
				}
			}
		}

		function deleteRow(x,tableID) {
			try {
			 var row = x.parentNode.parentNode;
    document.getElementById(tableID).deleteRow(row.rowIndex);
    console.log(row);
			}catch(e) {
				alert(e);
			}
		}
       
      
</script>
  
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
  <title>SITU</title>
</head>
  
  @extends('layouts.app')
  <body>
   
   @section('content')
  
  <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <label><center>Format-III
			<br>
              
			 Certification Installation and Commissioning of Attachments / Kits by Joint Inspection Team under In-situ Upgradation of plain Plowerlooms for SSI Powerloom Sector</center></label>
			
		 </div>
        </div>
      
          <hr>
          <br>
     <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>

  <form id="regiration_form" action="" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}

                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
       <!--  1st fieldset -->
    <div class="row">
        <div class="modal-content">
         <div class="modal-body">
           
                <fieldset>
            
         <input type="hidden" name="im_no" value="">
   
        
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">IN-Principal Registration Number 
					 </label>
                    <input type="text" class="form-control" id="fcp" placeholder="" readonly>
                   
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                   
	 <label for="fname" class="control-label">
					Registration date </label>
					
                    <input class="form-control" id="fname" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Name of the Unit</label>
                    <input class="form-control" id="fadd" placeholder="" type="text" readonly>
                   
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Address Of the Unit</label>
                    <input class="form-control" id="fadd1" placeholder="" type="text" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                  <label class="control-label" for="fadd">Taluka/Tahashil Mandal</label>
                    <input class="form-control" id="fadd1" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="fadd">District</label>
                    <input class="form-control" id="fadd1" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fadd">State</label>
                    <input class="form-control" id="fadd1" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="fadd">Pincode</label>
                    <input class="form-control" id="fadd3" placeholder="" type="text" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                 <label class="control-label" for="fprem">Premises is Owned or Rented</label>
				   <input class="form-control" id="fadd3" placeholder="" type="text" readonly>
                  </div>
                </div>
               
                  <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Mobile Number/ Phone Number</label>
                    <input class="form-control" id="fmob" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fname">Fax Number</label>
                    <input class="form-control" id="ffax" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Email</label>
                    <input class="form-control" id="femail" placeholder="" type="email" readonly>
                  </div>
                </div>
                </div>
              
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fname">PAN Number</label>
                    <input class="form-control" id="fpan" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                   <label for="fname" class="control-label">Name of Contact Person</label>
                    <input class="form-control" id="fcp" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                     <label class="control-label" for="fadd">Contact Number/ Mobile Number</label>
                    <input class="form-control" id="fcpmb" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fname">IM Number / Powerloom Permit Number</label>
                    <input class="form-control" id="fpan" placeholder="" type="text" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
               
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Registering Authority</label>
                    <input type="text" class="form-control" id="fcp" placeholder="" readonly>
                    
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Constitution Of Firm</label>
                    <input type="text" class="form-control" id="fcp" readonly>
                   
                  </div>
                </div>
              </div>
			  
			  <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                   <label for="fname" class="control-label">Name of Proprietor</label>
                    <input type="text" class="form-control" id="fcp" placeholder="" readonly>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Gender</label>
                    <input type="text" class="form-control" id="fcp" placeholder="" readonly>
                    
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Religion</label>
                    <input type="text" class="form-control" id="fcp" readonly>
                   
                  </div>
                </div>

                 <div class="col-md-3">
                  <div class="form-group">
                 <label for="fadd" class="control-label">Category</label>
                    <input class="form-control" id="fbankadd2" placeholder="" type="text" readonly>
                  </div>
                </div>
              </div>
			  <div class="row">
			        
               <div class="col-md-3">
                  <div class="form-group">
                       <label for="im_bank_name" class="control-label">Bank Name</label>
      <input type="text" class="form-control" id="im_bank_name" name="im_bank_name" readonly>
                 
                   </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                 <label for="im_bank_branch" class="control-label">Branch Name</label>
                <input type="text" class="form-control" id="im_bank_branch" name="im_bank_branch" readonly >
                   </div>
                </div>
			  
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Address of Bank</label>
                <input type="text" class="form-control" id="fname" placeholder="" readonly>
                
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                      <label for="fadd" class="control-label">Pincode</label>
                    <input class="form-control" id="fbankadd2" placeholder="" type="text" readonly>
                  </div>
                </div></div>
                

              
			   <div class="row">
         <div class="col-md-3">
                  <div class="form-group">
                     <label class="control-label" for="fadd">Phone Number</label>
                    <input class="form-control" id="fbankmob" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="fadd">IFSC Number</label>
                    <input class="form-control" id="fbankmob" placeholder="" type="text" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Account Number</label>
                    <input class="form-control" id="fcpmb" placeholder="" type="text" readonly>
                  
                  </div>
                </div>
               
              </div>
			  <hr></hr>
			  <div class="row">
                <div class="col-md-10 ">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Name of the Manufacturer of Attachments/ Kits(ITEM-WISE)</label>
                  </div>
                </div>
              </div>
            
            <div class="row">
              <div class="col-md-12">
               
                <table class="table table-bordered table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
						<th>Item</th>
                      <th>Manufacturer</th>
                      <th>Invoice No</th>
                      <th>Invoice Date</th>
                      <th>Quantity</th>
                      <th>10 Digit Code No</th>
                      <th style="width:10px">
                        <span class="glyphicon glyphicon-plus addBtn" name="add_row" id="add_row" onclick="addRow('tab_logic');"></span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
					
                      <td>
					  	  <div class="select-style">
                        <select  name="item[]" id="item" class="form-control match-content">
                          <option id="o1" selected="">Select</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
						</div>
                      </td>
                      <td>
					  <div class="select-style">
                          <select  name="manufact[]" id="manufact" class="form-control match-content">
                          <option id="o1" selected="">Select</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
						</div>
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="qunt[]" id="qunt">
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="rate[]" id="rate">
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value="" name="cost[]" id="cost">
                      </td>
                       <td>
                        <input type="text" class="form-control" size="5" value="" name="code[]" id="code">
                      </td>
                      <td>
                        <span class="glyphicon glyphicon-minus addBtnRemove"  name="delete_row" id="delete_row" onclick="deleteRow(this,'tab_logic')"></span>
                      </td>
                    </tr>
					  <tr id='addr1'></tr>
                  </tbody>
                </table>
              </div>
            </div>
			
		  <hr></hr>
          <div class="row">
            <div class="col-md-6 col-md-offset-1">
              <div class="form-group">
                <label for="fadd" class="control-label">Please attach a copy of Quotation/Proforma Invoice</label>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <span class="btn btn-primary btn-file">
                    <!-- <span class="fileupload-exists">Change</span> -->
                    <input type="file">
                  </span>
                  <span class="fileupload-preview"></span>
                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
              </div>
            </div>
          </div>
		 
       
	  <input type="button" name="next" class="next btn btn-info" value="Next" style="float:right;"/>
                  
             
               </fieldset>
                  
                 <!--2nd fieldset -->
                 <fieldset>
                     
                   <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Attachments/ Kits applied for with Details:</label>
                  </div>
                </div>
              </div>
			
            <div class="row">
              <div class="col-lg-12">
               
                <table class="table table-bordered table-hover" name="tab_logic" id="table1">
                  <thead>
                    <tr>
					
                      <th>Attachments</th>
					  <th>Quantity</th>
                      <th>Rate</th>
                      <th>Total Amount</th>
                      <th>Eligible Rate/Unit</th>
					   <th>Eligible Amount</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
					<td></td>
                      <td>
                      </td>
                      		  <td>
                    </td>
                      <td>
                      
                      </td>
                      <td>
                    
                      </td>
                      <td></td>
                    		  <td>
                     </td>
                    </tr>
					  <tr id='tab1'></tr>
					    <tr>
					  <td></td>
					  <th class="text-right">Total</th>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					   </tr>
                  </tbody>
                </table>
              </div>
            </div>
			
			
			
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="control-label" for="fadd"> Please attach a copy of Final Invoice/ Bill,stamped by the unit & signed by all JIT members</label>
                  </div>
                </div>
				
				
				  
		  
				<div class="col-md-4">
              <div class="form-group">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <span class="btn btn-primary btn-file">
                    <!-- <span class="fileupload-exists">Change</span> -->
                    <input type="file">
                  </span>
                  <span class="fileupload-preview"></span>
                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
              </div>
            </div>
				
				
				
				
              </div>
			<hr></hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Payment Details:</label>
                  </div>
                </div>
              </div>
           
		   <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Please attach payment 
					receipts acknowledged by the attachments/kits supplier duly stamped and signed by unit & countersigned by JIT members</label>
                  </div>
                </div>
				<div class="col-md-4">
              <div class="form-group">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <span class="btn btn-primary btn-file">
                    <!-- <span class="fileupload-exists">Change</span> -->
                    <input type="file">
                  </span>
                  <span class="fileupload-preview"></span>
                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
              </div>
            </div>
				
				
              </div>
           
		   
		   
            <div class="row">
              <div class="col-lg-12">
               
                <table class="table table-bordered table-hover" name="tab_logic1" id="tab_logic1">
                  <thead>
                    <tr>
						
                      <th>Manufacturer</th>
					  <th>Invoice Value</th>
                      <th>Payment Receipts No</th>
                      <th>Payment Date</th>
					   <th>Amount on Receipts</th>
                      <th style="width:10px">
                          <span class="glyphicon glyphicon-plus addBtn" name="add_row" id="add_row" onclick="addRow1('tab_logic1')"></span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
					
                      <td>
					  <div class="select-style">
                        <select  name="attach" id="attach" class="form-control match-content">
                          <option id="o1" selected="">Select</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
						</div>
                      </td>
                      
					  <td>
                        <input type="text" class="form-control" size="5" value="" name="cost" id="cost" >
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt" >
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="rate" id="rate" >
                      </td>
                    
					  <td>
                        <input type="text" class="form-control" size="5" value=""  name="eligible_cost" id="sub" >
                      </td>
                      <td>
                        <span class="glyphicon glyphicon-minus addBtnRemove"  name="delete_row" id="delete_row" onclick="deleteRow(this,'tab_logic1')"></span>
                      </td>
                    </tr>
					  
                  </tbody>
                
                </table>
                  <table class="table table-bordered table-hover">
                      <tr></tr>
					  
					    <tr>
                                                
					  <th class="text-right">Total</th>
					  <td>  <input type="text" class="form-control" size="5" value=""  name="rate" id="rate" ></td>
					  
					 
					   </tr>
                                           </table>
              </div>
            </div>
			
				
          
          <div class="row">
            <div class="col-md-6 col-md-offset-1">
              <div class="form-group">
                <label for="fadd" class="control-label">Please attach a copy of Quotation/Proforma Invoice</label>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <span class="btn btn-primary btn-file">
                    <!-- <span class="fileupload-exists">Change</span> -->
                    <input type="file">
                  </span>
                  <span class="fileupload-preview"></span>
                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
              </div>
            </div>
          </div>
		  
		  	<hr></hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Recommendation/ Remarks of Joint Inspection Team on eligibility of the claim :</label>
				
                  </div>
                </div>
              </div>
			  
			   <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                
					<textarea id="remark" rows="2" cols="150"></textarea>
                  </div>
                </div>
              </div>
			  
			  
			   <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                 <label class="control-label" for="fadd">Certified by JIT Members:</label>
				 </div>
                </div>
				
				
				  <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt" readonly >
				 </div>
                </div>
				
				  <div class="col-md-3">
                  <div class="form-group">
                   <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt" >
				 </div>
                </div>
				
				  <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt" >
				 </div>
                </div>
				
              </div>
                        
                <input type="submit" name="submit" class="submit btn btn-success" value="Submit" style="float:right;" />&nbsp;&nbsp;&nbsp;
               <input type="button" name="previous" class="previous btn btn-default" value="Previous" style="float:right;" />&nbsp;&nbsp;&nbsp;
               <!-- <a href="IN_2">←  Prev</a>-->
              <input type="hidden" name="isEmpty" value="">         
			  
		 </fieldset>
			  
         </div>
        </div>
        </div>
         <!--form close -->
          </form>
    </div>
  </div>
@endsection

</body></html>
 <script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
            	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>