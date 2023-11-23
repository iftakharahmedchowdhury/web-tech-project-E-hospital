function ajax(){

    let patientUserName = document.getElementById('patientUserName').value;
    let patientPassword = document.getElementById('patientPassword').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controls/staffLogInCheck.php?', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('patientUserName='+patientUserName);
    xhttp.send('patientPassword='+patientPassword);
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            document.getElementsByTagName('h5')[0].innerHTML = this.responseText;
        }
    }
}