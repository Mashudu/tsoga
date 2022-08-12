@section('content')
<div>
    <div id="signature-pad" class="signature-pad m-5">
        <div class="container">
          <h5 class="bg-warning text-center">Private & Confidential</h5>
          <br>  
         <div class="row">
          <div class="col-4"></div>
          <div class="col-4"><img class="center-block" src="{{asset('personal/TsogaLogo.jpeg')}}" /></div>
          <div class="col-4"></div>
        </div>
        <br>
      
          <h4 class="text-center">Intermediary Appointment: Personal Lines</h4>
          <br>
    <p>
    
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
    
    
    <form id="form" onsubmit="mySubmitFunction()">
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
          <div class="signature-pad--footer">
          
      
            <div class="signature-pad--actions">
              <div>
                <button type="button" class="button clear btn btn-warning" data-action="clear">Clear</button>
                <button type="button" class="button btn btn-warning" data-action="change-color">Change Colour</button>
                <button type="button" class="button btn btn-warning" data-action="undo">Undo</button>
                <button type="button" class="button save btn btn-warning" data-action="save-png">Submit Form</button>
              </div>
              <div>
                <!--Call api what ever -->
              
              </div>
            </div>
          </div>
        </div>
    
    
        </div>
    </from> 

</div>
@endsection