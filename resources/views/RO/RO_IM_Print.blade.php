 <html moznomarginboxes mozdisallowselectionprint>
  <head>
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
       <script type="javascript" src="http://www.position-absolute.com/creation/print/jquey.printPage.js"></script>

        <style type="text/css" media="print">
    .NonPrintable
    {
      display: none;
    }
   /* body { margin: 1.6cm; }*/
     @page 
    {
        size: auto;   /* auto is the initial value */
       margin:0 -6cm;  /* this affects the margin in the printer settings */
    }
   
    /*html {margin:0 6cm}*/

    html
    {
        background-color: #FFFFFF; 
        margin: 6px;  /* this affects the margin on the html before sending to printer */
    }

    body
    {
       
        margin: 20mm 20mm 10mm 20mm; /* margin you want for the content */
    }


  </style>

  </head>


<body>
<div class="NonPrintable">
@extends('layouts.app')
</div>
@section('content')
<form >
   
      <div class="container">
        <div class="row">
          <div class="col-md-12">
			<center><label>
          GOVERNMENT OF INDIA<br>
          MINISTRY OF TEXTILES<br>
          REGIONAL OFFICE OF THE TEXTILE COMMISSIONER<br>
          KENDRIYA SADAN, 5 FLOOR , "C" WING,<br>
          NIRMALA DEVI MARG,BELAPUR ,SECTOR-10,<br>
          NAVI MUMBAI - 400614.<br>
          Ph: 022-27560645/2629 Website: www.txcindia.gov.in<br>
          Email: rotxcmumbai@gmail.com<br>
          
          </label></center>
          </div>
        </div>
      
    
 
  <br><br><br>
    @foreach($mst_im_reg as $mst_im_regs)

    <label>No.4(80)/IMBHI/{{ date('Y', strtotime($mst_im_regs->created_at)) }}/ROM/{{$mst_im_regs->im_no}}</label> 

     <label style="text-align:right;display:block;">Dated:&nbsp;{{ date('d-m-Y')}}</label>
     <br><br>
     <b>{{$mst_im_regs->im_unit_name}}<br>
     {{$mst_im_regs->im_unit_add}},{{$mst_im_regs->im_unit_dist}},{{$mst_im_regs->im_unit_state}},{{$mst_im_regs->im_unit_pin}}.<br></b>
     <br><br>
<br>
     <center> ACKNOWLEDGEMENT NO. {{$mst_im_regs->im_no}}/{{ date('Y', strtotime($mst_im_regs->created_at)) }} </center>
     <br><br>
     <div class="row">
          <div class="col-md-12">
     <p>The receipt of Information Memorandum dated<b> {{date('d-m-Y', strtotime($mst_im_regs->created_at)) }}</b> filled by <b>{{$mst_im_regs->im_unit_name}} </b>proprietor of Powerloom unit for installation of 08 Nos. of Powerloom located at S.No.20/3,Nagaon-II,Bhiwandi,Dist.Thane 421302 under Textiles (Development & Regulation) Order,2001 is hereby acknowledged.
     </p>
     
    
    <br><br><br><br><br><br><br><br>
   
    <label style="text-align:right;display:block;">ASSISTANT DIRECTOR</label>
     <label>Received Contents not Verified</label>
    </div></div></div>

   
    <script type="text/javascript">
      $(document).ready(function()
      {
       window.print();
             });


    </script>
     @endforeach
       </form>
    @endsection
    </div>
  
    </body>
</html>

