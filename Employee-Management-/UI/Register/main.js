function inputdata()
{
    
   var oName = document.getElementById("name").value;
var oEmail = document.getElementById("email").value;
var oPassword = document.getElementById("password").value;
  var oData= {
  "name" : oName,
  "email" : oEmail,
  "password" : oPassword
};
    var dataString = '&name=' + oName + '&email=' + oEmail + '&password=' + oPassword;

   $.ajax({
         type: "POST",
        url: 'http://localhost:8080/addInfo.php',
        datatype: 'json',
        data:dataString,

        success: function (data) {
            alert(data);
        },
        error : function(oErr){
          alert("sorry");
          
        }
    });
}
    
 