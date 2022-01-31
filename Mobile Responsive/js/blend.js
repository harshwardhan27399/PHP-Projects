function create_batch(){
    var month =  document.getElementById("inv_date").value;
    document.getElementById("batch").value = month;
 }

 function confirmPage(){
    var r = confirm("Confirm");
    if (r == false) {
      return false;
    } 
 }