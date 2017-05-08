@extends('layouts.app')

@section('content')
<body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
			<label>
             In-principle approval 
scheme of In-situ Upgradation of plain powerlooms for SSI Powerloom Sector</label>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="modal-content">
          <div class="modal-header">
          
           <label>In-principle approval 

</label>
          </div>
          <form action="" method="post">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
				  <div class="paragraph">
                 <p class="text-justify">
				 
With reference to your application dated __________ in Format I, 
this is to convey the In-priciple approval of this office for release of subsidy upto 50% of the cost of Attachments/ Kits 
subject to a maximum subsidy of Rs,15,000/- per loom, maximum 8 looms per unit for installation of attachment as under, 
subject to the conditions mentioned below :
				 
				 </p>
				 </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                 <div class="col-lg-10 col-lg-offset-1">
               
                    <table class="table table-bordered table-hover"  name="tab_logic" id="tab_logic">
                  
				 
                    <tr>
						<td>1</td>
                      <th>In-principle Registration No.</th>
					  <th></th>
					 
                   
                    </tr>
                 
				  <tr>
				  <td>2</td>
				    <th>In-principle Registration Date</th>
				  <th></th>
				  </tr>
				  
				  <tr>
				  <td>3</td>
				   <th>Name of Unit</th>
				   <th></th>
				  </tr>
				  
				  <tr>
				  <td>4</td>
				   <th>Address of Unit</th>
				   <th></th>
				  </tr>
				  
				  <tr>
				  <td>5</td>
				  <th>Attachments / Kits with quantity</th>
				   <th></th>
				  </tr>
				  
				  
				  
				 </table>
              </div>
            </div>
			
				
          </form>
         
		 <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
				  <div class="paragraph">
                 <p>
	
<ol><li>	
 This approval will be valid for a period of 6 months from the date of issue of this letter.</li>
<br>
<li> Issurance of In principle Registration /approval does not gurantee the release of eligible subsidy attachments/kits as mentioned above.</li>
<br>
<li>In the event of failing to comply with the conditions or committing breach of conditions of the scheme you would be liable to refund the 
  subsidy amount with interest at 10% per annum thereon.</li><br>
  </ol>
  
  
  
  You shall purchase the attachments from the enlisted suppliers specified in the scheme. after installation of the kits, 
  you may submit your claim to this office in Format-II i.e. application for submitting the claim for subsidy under In-situ upgradation.
  
  
  <br><br>
  Copy to :<br>
  <ol><li>
   Powerloom Service Centre, __________</li>
  <li> Powerloom Development Cell,<br>
  office of the Textile Commissioner,
  Mumbai</li></ol><br>
				 
				 </p>
				 </div>
                  </div>
                </div>
              </div>
            </div>
		 
		 
        </div>
        <div class="modal-footer">
          <ul class="pager">
            <li>
             
              <input type="hidden" name="isEmpty" value="">
			  <button type="button" class="btn btn-default btn-icon" data-dismiss="modal">
			  <i class="fa fa-print" aria-hidden="true"></i>
                Print</button>
              <button type="input" name="submit" value="newAccount" class="btn btn-success btn-icon">
                <i class="fa fa-check"></i>Approve</button>
              
            </li>
          </ul>
        </div>
      </div>
  
@endsection