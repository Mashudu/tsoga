     
      function mySubmitFunction(e) {
        e.preventDefault();
        someBug();
        return false;
      }

      function createMember(dataURL){
        // initialise data 
 

        var firstname = document.getElementById("firstname");        
        var cellphone_number = document.getElementById("cellphone_number");  
    
        if(firstname.length==0||cellphone_number.length==0){
            alert("Please fill in all the fields required.");
        }
        else{
           
            var data = JSON.stringify({
                "firstname":firstname.value,
                "cellphone_number":cellphone_number.value, 
                "signature":dataURL
            }) ;
    
            // initialise API 

            var http = new XMLHttpRequest();
           // var url = 'https://api.dev.duravest.co.za/api/create-member';
            var url = 'https://elevate.api.duravest.co.za/api/create-member';
        
            http.open('POST', url, true);
             
            //Send the proper header information along with the request
            http.setRequestHeader('Content-type', 'application/json');
            
            http.onreadystatechange = function() {//Call a function when the state changes.
      
                if(http.readyState == 4 && http.status == 200) {                  
           
                alert('sent to api via call')   ;            
                    
                
                }
            }
            
           // http.send(data);
           http.send(data);
        }

        
         
    }
  