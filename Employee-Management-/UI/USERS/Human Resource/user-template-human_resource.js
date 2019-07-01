function sendcomplaint()
{
    
//    var oName = document.getElementById("name").value;
//    var oEmail = document.getElementById("email").value;
//    var oPassword = document.getElementById("password").value;
//
//  var dataString = 'name=' + oName + '&email=' + oEmail + '&password=' + oPassword;
    

   $.ajax({
       method: "POST",
       url: 'http://localhost:8080/sendcomplaint.php',
       contentType: "application/json; charset=utf-8",
       
       data: { name : 'hi'},

        success: function (data) {
            alert('Complaint submitted');
        },
        error : function(oErr){
          alert(oErr);
          
        }
    });
}
    
function search()
{
    
//    var oName = document.getElementById("name").value;
//    var oEmail = document.getElementById("email").value;
//    var oPassword = document.getElementById("password").value;
//
//  var dataString = 'name=' + oName + '&email=' + oEmail + '&password=' + oPassword;
    

   $.ajax({
       method: "POST",
       url: 'http://localhost:8080/searchname.php',
       contentType: "application/json; charset=utf-8",
       
       data: { name : 'hi'},

        success: function (data) {
            echo data;
        },
        error : function(oErr){
          alert(oErr);
          
        }
    });
}
    
    