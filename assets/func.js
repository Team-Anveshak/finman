function func(){

  var radval1 = document.getElementById("rad1");
  var rad21 = document.getElementById("rad21");
  var rad22 = document.getElementById("rad22");
  var rad23 = document.getElementById("rad23");
  var rad24 = document.getElementById("rad24");

  if (radval1.checked != true){
    rad21.disabled = true;
    rad22.disabled = true;
    rad23.disabled = true;
    rad24.disabled = true;
  }
  else {
    rad21.disabled = false;
    rad22.disabled = false;
    rad23.disabled = false;
    rad24.disabled = false;
  }

}

function OnSubmitForm()
{

  var radval1 = document.getElementById("rad1");
  var rad21 = document.getElementById("rad21");
  var rad22 = document.getElementById("rad22");
  var rad23 = document.getElementById("rad23");
  var rad24 = document.getElementById("rad24");
  var radval2 = document.getElementById("rad2")

     if(radval1.checked == true)
     {
       if(rad21.checked == true){
         document.finform.action ="phps/billed.php";
       }
       else
       if(rad22.checked == true){
         document.finform.action ="phps/unbill.php";
       }
       else
       if(rad23.checked == true){
         document.finform.action ="phps/inflow.php";
       }
       else
       if(rad24.checked == true){
         document.finform.action ="phps/reimbu.php";
       }
     }
     else
     if(radval2.checked == true)
     {
         document.finform.action ="phps/retreive.php";
     }

}
