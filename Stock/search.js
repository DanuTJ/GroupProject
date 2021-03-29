function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0]; // for column one
    	
	td6 = tr[i].getElementsByTagName("td")[6];	
	
    if (td) {
      if ( (td.innerHTML.toUpperCase().indexOf(filter) > -1) || (td6.innerHTML.toUpperCase().indexOf(filter) > -1) )  {            
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
} 
  /*for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}*/