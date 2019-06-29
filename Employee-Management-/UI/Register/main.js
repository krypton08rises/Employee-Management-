
function inputdata()
{
  console.log("this works!");
var oName = document.getElementById("name").value;
var oEmail = document.getElementById("email").value;
var oPassword = document.getElementById("password").value;
  var oData= {
  "name" : oName,
  "email" : oEmail,
  "password" : oPassword
};

oJsonObjData = JSON.stringify(oData);
var oDef = jQuery.Deferred();


jQuery.ajax({
    type: "POST",
    url: "localhost:8080/addinfo.php",
    dataType: "JSON" ,
    data: {test: oJsonObjData},

    success: function (oDeferred) {
        console.log("Registered");
        oDeferred.resolve();
      }.bind(this, oDef),
    error : function(oDeferred, oErr){
      console.log("Couldnt Register because " + oErr);
      oDeferred.reject();
    }.bind(this,oDef)
  });

}
/*
(function($) {

    $(".toggle-password").click(function() {

        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });

})(jQuery);
*/
