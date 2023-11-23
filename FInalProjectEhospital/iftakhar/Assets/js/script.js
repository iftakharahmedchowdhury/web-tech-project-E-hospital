function pharmaAddProductFormValidation(){

    var Pname=document.getElementById("pharmaPN").value;
    var Pcost=document.getElementById("pharmaPC").value;
    var Pstatus=document.getElementById("pharmaPS").value;

    if (Pname=="" || Pcost=="" || Pstatus=="") {
        //alert("All input filed must be filled out");
        //document.getElementById("alertPart").disabled = true;
       // document.getElementById("alertPart").style.visibility = "visible";
   
       document.getElementById("alertPart").innerHTML= "All input filed must be filled out";
       return false;
    
        
    }
    else{
        /* document.getElementById("alertPart").style.visibility = "hidden"; */
    }
  

}

function ajax(){

    let searchproduct = document.getElementById('searchproduct').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controls/pharmacyInventorySearchCheck.php?', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('searchproduct='+searchproduct);
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            document.getElementsByTagName('h5')[0].innerHTML = this.responseText;
        }
    }
}

function ajaxJson(){ 

    let pharmaPN = document.getElementById('pharmaPN').value;
    let pharmaPC=document.getElementById('pharmaPC').value;
    let pharmaPS=document.getElementById('pharmaPS').value;
   
    let pharmaProduct = {'pharmaPN' : pharmaPN, 'pharmaPC': pharmaPC , 'pharmaPS': pharmaPS};
     let json = JSON.stringify(pharmaProduct);
      let xhttp = new XMLHttpRequest();
                    // xhttp.open('GET','usercheck.php?username='+username, true);
                    // xhttp.onreadystatechange = function (){                    
                    //     if(this.readyState == 4 && this.status == 200){
                    //         //alert(this.responseText);
                    //         document.getElementById('head').innerHTML = this.responseText;
                    //     }
                    // } 
                    // xhttp.send();
                    
                    xhttp.open('POST','../controls/pharmacistAddProductCheck.php', true);
                    xhttp.onreadystatechange = function (){                    
                        if(this.readyState == 4 && this.status == 200){
                       
                            alert(this.responseText);
                            if(this.responseText=="Product enter successfull."){
                             window.location.replace("../view/pharmacistHomePage.php");
                        }
                        }
                    }
    
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                    xhttp.send('data='+json); 
    
                }

