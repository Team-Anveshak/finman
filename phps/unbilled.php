
<?php
# For billed transactions
if(isset($_POST["bill_no"])){

	#echo "Submitted";



    $date          =  $_POST["date"];
	$payee         =  $_POST["payee"];
	$paid_to       =  $_POST["paid_to"];
	$amount        =  $_POST["amount"];
	$description   =  $_POST["description"];
	$module        =  $_POST["module"];
	$paid_by_payee =  $_POST["paid_by_payee"];
	$signed        =  0 ;
	$submitted     = 0 ;


	$servername = "localhost";
	$username   = "achu";
	$password   = "achu123";
	$dbname     = "finance_db";

	$conn = new mysqli($servername,$username,$password, $dbname);
              
	if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
	} 



$sql = sprintf("INSERT INTO `billed_tra` ( `date`, `payee`, `paid_to`, `amount`,`description`,`module`,`paid_by_payee`,`signed`,`submitted`) VALUES ( '%d', '%s', '%s', '%s','%f', '%s', '%s', '%s','%d','%d','%d')" ,$bill_id,$date,$payee,$paid_to,$amount,$bill_no,$description,$module,$paid_by_payee,$signed,$submitted);

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully <br><br><br>" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	

}




 ?>

<html>

	<body>  

		<form action="" method="post">


			Date :   
			<input type="date" name="date"/> <br><br>

			Payee : 
            <input type="text" name="payee"/> <br><br>

            Paid to :  
            <input type="text" name="paid_to"/> <br><br>

            Amount :  
            <input type="number" step="any" name="amount"/> <br><br>

            Description :  
            <input type="text" name="description"/> <br><br>

            Module :  
            <input type="text" name="module"/> <br><br>


            <input type="hidden" value="0" name="paid_by_payee" />  
			<input type="checkbox" value="1" name="paid_by_payee" />Paid by payee <br>




  			<br><br>
  			<input type="submit" name="SubmitButton"/>

		</form> 

	</body>

</html>