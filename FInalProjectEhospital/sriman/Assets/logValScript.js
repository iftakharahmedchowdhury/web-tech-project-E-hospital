function addEmployeeValidation()
{
    var validjsUser     = document.getElementById("useID").value;
    var validjsPosition = document.getElementById("empPid").value;
    var validjsFname    = document.getElementById("empFid").value;
    var validjsLname    = document.getElementById("empLid").value;
    var validjsDob      = document.getElementById("empDBid").value;
    var validjsAge      = document.getElementById("empAid").value;
    var validjsGen      = document.getElementById("empGid").value;
    var validjsAdd      = document.getElementById("empAid").value;
    var validjsPho      = document.getElementById("empPHid").value;
    var validjsMail     = document.getElementById("empMaiid").value;
    var validjsPass     = document.getElementById("empPassid").value;


    if(validjsUser="" || validjsPosition=="" || validjsFname=="" || validjsLname=="" || validjsDob=="" || validjsAge=="" || validjsGen=="" || validjsAdd=="" || validjsPho=="" || validjsMail=="" || validjsPass==""){

        document.getElementById("userAlert").innerHTML  = "*Empty Field Detected!!";
        document.getElementById("PosAlert").innerHTML  = "*Empty Field Detected!!";
        document.getElementById("FirstAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("LastAlert").innerHTML = "*Empty Field Detected!!";
        document.getElementById("DobAlert").innerHTML  = "*Empty Field Detected!!";
        document.getElementById("AgeAlert").innerHTML  = "*Empty Field Detected!!";
        document.getElementById("AddAlert").innerHTML  = "*Empty Field Detected!!";
        document.getElementById("PhoneAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("MailAlert").innerHTML = "*Empty Field Detected!!";
        document.getElementById("PassAlert").innerHTML = "*Empty Field Detected!!";

        return false;
        //alert("All Informations Must be Filled Out!");
    }


    function ajazValidation(){
        var formAjaxValidate = document.getElementById("empValid");

        var checkForm = function(e) {

            var form = e.target;
        
            if(this.usernameEMP.value == "") {
              alert("Please enter your Name in the form");
              this.usernameEMP.focus();
              e.preventDefault();
              return;
            }
            if(this.PositionEmp.value == "") {
              alert("Please enter a valid Email address");
              this.PositionEmp.focus();
              e.preventDefault();
              return;
            }
            if(this.FirstNameEmp.value == "") {
                alert("Please enter a valid Email address");
                this.FirstNameEmp.focus();
                e.preventDefault();
                return;
              }

            if(this.age.value == "" || !this.valid_age.checked) {
              alert("Please enter an Age");
              this.age.focus();
              e.preventDefault();
              return;
            }
        
            alert("Success!  The form has been completed, validated and is ready to be submitted...");
            e.preventDefault();
        
          }
        
          formAjaxValidate.addEventListener("submit", checkForm, false);
        
          formAjaxValidate.name.addEventListener("change", function(e) {
            this.value = this.value.replace(/^\s+|\s+$/g, "");
            this.form.valid_name.checked = this.value;
          }, false);
        
          formAjaxValidate.email.addEventListener("change", function(e) {
            if(this.value != "") {
              callAjax("checkEmail", this.value, this.id);
            }
          }, false);
        
          formAjaxValidate.age.addEventListener("keyup", function(e) {
            if(this.value != "") {
              callAjax("checkAge", this.value, this.id);
            }
          }, false);
        
    }

}
