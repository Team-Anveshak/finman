function OnSubmitForm()
{

  var radval1 = document.getElementById("rad1");
  var radval2 = document.getElementById("rad2")

     if(radval1.checked == true)
     {
       document.finform.action ="ret/billlist.php"
     }
     else
     if(radval2.checked == true)
     {
       document.finform.action ="ret/statement.php";
     }

}
