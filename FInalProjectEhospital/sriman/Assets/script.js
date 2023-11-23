
    function ajaxJson(){

        let billdateID = document.getElementById("billdateID").value;
        let billusageID= document.getElementById("billusageID").value;
        let billcostID=  document.getElementById("billcostID").value;
        let billamountID=document.getElementById("billamountID").value;
        
        let elecbill = {'billdateID' : billdateID, 'billusageID': billusageID , 'billcostID': billcostID, 'billamountID': billamountID};
    
         let json = JSON.stringify(elecbill);
    
          let xhttp = new XMLHttpRequest();
    
                        xhttp.open('POST','../Controls/addbillCheck.php', true);
                        xhttp.onreadystatechange = function (){                    
    
                            if(this.readyState == 4 && this.status == 200){
                                alert(this.responseText);
    
                            }
    
                        }
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhttp.send('json='+data);
    
                    }





    function searchvaidation(){

        let searchchild = document.getElementById('searchchild').value;
        let xhttp = new XMLHttpRequest();
    
     
    
        xhttp.open('POST', '../Controls/searchDBrecordCheck.php?', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('searchchild='+searchchild);
        xhttp.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementsByTagName('h6')[0].innerHTML = this.responseText;
            }
        }
    }