function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(function () {
    $(".sidenav").click(function (event) {
        var clickover = $(event.target);
        if (!clickover.hasClass("navelem")) {
            document.getElementById("mySidenav").style.width = "0";
        }
    });
});
