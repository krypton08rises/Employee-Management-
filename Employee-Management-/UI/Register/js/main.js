function inputdata()
{
    
    var oName = document.getElementById("name").value;
    var oEmail = document.getElementById("email").value;
    var oPassword = document.getElementById("password").value;

    var dataString = '&name=' + oName + '&email=' + oEmail + '&password=' + oPassword;

   $.ajax({
       type: "POST",
       url: 'http://localhost:8080/addinfo.php',
       contentType: "application/json; charset=utf-8",
       data:{test : dataString},

        success: function (data) {
            alert("Success!");
        },
        error : function(oErr){
          alert(oErr);
          
        }
    });
}
    
 