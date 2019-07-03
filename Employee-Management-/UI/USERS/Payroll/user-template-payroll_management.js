function getdate(){
    var dateObj = new Date();
    mymonth(dateObj);
    myyear(dateObj);
}

function mymonth(dateObj){
var month = dateObj.getUTCMonth() + 1; //months from 1-12     
    var mL = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
document.getElementById("month").innerHTML = mL[month];

}

function myyear(dateObj){
document.getElementById("year").innerHTML =  dateObj.getFullYear();
}


/*   $.ajax({
       method: "POST",
       url: 'http://localhost:8080/addinfo.php',
       contentType: "application/json; charset=utf-8",
       
       data: { name : 'hi'},

        success: function (data) {
            window.location = "http://localhost:8080/Login/homepage.html";

        },
        error : function(oErr){
          alert(oErr);
          
        }
    });*/
    

//var day = dateObj.getUTCDate();
//var year = dateObj.getUTCFullYear();


  /*
  var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";
  var d = new Date();
  var n = month[d.getMonth()];
  document.write(n);
  console.log("n");

  */
