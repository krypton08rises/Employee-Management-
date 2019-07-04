//function getleave(){
//    $.ajax({
//       method: "POST",
//       url: 'http://localhost:8080/sendcomplaint.php',
//       contentType: "application/json; charset=utf-8",
//       data: {},
//
//        success: function (data) {
//            var count = data;
//            displayleave();
//        },
//        error : function(oErr){
//          alert(oErr);
//          
//        }
//    });
//}
    function reqListener () {
      console.log(this.responseText);
    }


    var oReq = new XMLHttpRequest(); //New request object
    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
        alert(this.responseText); //Will alert: 42
    };
    oReq.open("get", "get-data.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();



function displayleave(Number count){
        if(count==0)
        document.getElementById("leave").innerHTML = "No one has applied for leave.";
    else { 
        function getnotif(){
             document.getElementById("leave").innerHTML = "There are " .num "leaves";  
        }
}

