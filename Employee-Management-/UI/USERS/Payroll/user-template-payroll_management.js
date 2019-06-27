$(document).ready(function(){
    window.onload = function() {
                var d = new Date();
                var n = d.getMonth();
                what(n);
                function what(n){
                    document.getElementById('.month').innerHTML = n;
                };
            }});
