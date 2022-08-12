<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Personal Lines</title>
  <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie9.css">
  <![endif]-->
 
</head>
<body >
 
	<style>
		@font-face {
		  font-family: 'Helvetica';
		  font-weight: normal;
		  font-style: normal;
		  font-variant: normal;
		  src: url("font url");
		}
		body {
		  font-family: Helvetica, sans-serif;
		}
		</style>
 
  <div id="signature-pad" class="signature-pad m-5">
    <div class="container">
      <h5 class="bg-warning text-center">Private & Confidential</h5>
      <br>  
     <div class="row">
      <div class="col-4"></div>
      <div class="col-4"><img class="center-block" src="TsogaLogo.jpeg" /></div>
      <div class="col-4"></div>
    </div>
    <br>
    {{ $title }}
      <h4 class="text-center">Intermediary Appointment: Personal Lines</h4>
      <br>
<p>
  {{ $id }}
  <ol>
    <li>I, the undersigned, appoint Tsoga Afrika Insure Brokers (Pty) Ltd, hereinafter referred to as Tsoga, as my non-mandated intermediary. <br>
      This means that Tsoga is appointed as my short-term insurance broker in order to:     

    <ul>
    <li>a. secure quotations on my behalf from a range of Insurers</li>  
    <li>b. arrange for insurance cover on my behalf after I accept a quotation</li>
    <li>c. process any claims on my behalf with my Insurer</li>
    <li>d. renew my Insurance cover as and when necessary and only after securing my agreement to do so</li>
    <li>e. amend my Insurance cover from time to time as per my request</li>
    <li>f. provide me with guidance regarding matters of a short-term insurance nature</li>
    <li>g. deal with queries that I may have regarding my Insurance cover</li>
    </ul>
  </li>
  <br>
  <li>In order to fulfill these responsibilities, I authorise Tsoga to obtain, on my behalf and at my request, all relevant information pertaining to my existing insurance cover for all personal business, including:
    <ul>
      <li>a. policy wordings</li>  
      <li>b. policy schedules</li>
      <li>c. endorsements</li>
      <li>d. detailed claims experience</li>
      </ul>
  </li>
  <br>
  <li>I take note of the following:
    <ul>
      <li>a. that Tsoga Africa Insurance Brokers (Pty) Ltd (Tsoga) is a registered Financial Services Provider under licence number 49909 and company registration number 2017/510564/07</li>  
      <li>b. that Tsoga does not collect or handle Insurance premiums; these are paid directly by the client to the Insurer</li>
      <li>c. that, as required by law, Tsoga has Professional Indemnity / Fidelity Guarantee Insurance in place</li>
      </ul>
  </li>
  <br>
  <li>Client Confirmation:
  </li>

   
</p>



<div class="row">
  <div class="col">
    <label><b>EFFECTIVE DATE OF APPOINTMENT:</b></label>
    <input type="date" class="form-control" placeholder="Effective Date">
  </div>
  
</div>
 
<br>
<div class="row">
  <div class="col">
    <label>CONTACT PERSON 1:</label>
    <input type="text" class="form-control" placeholder="Enter Contact Person 1">
  </div>
  <div class="col">

    <label>ID No.:</label>
    <input type="text" class="form-control" placeholder="Enter ID No.">
  </div>
</div>

<br>
<div class="row">
  <div class="col">
    <label>CONTACT PERSON 2:</label>
    <input type="text" class="form-control" placeholder="Enter Contact Person 2">
  </div>
  <div class="col">
    
    <label>ID No.:</label>
    <input type="text" class="form-control" placeholder="Enter ID No.">
  </div>
</div>

<br>
<div class="row">
  <div class="col">
    <label>NAME OF SIGNATORY:</label>
    <input id="firstname" type="text" class="form-control" placeholder="Enter Name of Signatory">
  </div>
  <div class="col">
    
    <label>CONTACT No.:</label>
    <input id="cellphone_number" type="text" class="form-control" placeholder="Enter Contact No.">
  </div>
</div>

<br>
<div class="row">
  <div class="col">
    <label>DATE:</label>
    <input type="date" class="form-control" placeholder="Enter Contact No">
  </div>

</div>
<br> 
<div class="description"><b>SIGNATURE:</b></div>
<br>
<hr>
      <div class="signature-pad--body">
  
        <canvas></canvas>
      </div>
      <hr>     
      
      </div>
    </div>


    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
 
</body>
</html>
