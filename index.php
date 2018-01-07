<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Anveshak Finance</title>

	<link rel="stylesheet" href="assets/form-mini.css">
  <script src="assets/func.js"></script>

</head>
<body onload="func()">



    <div class="main-content">

        <!-- You only need this form and the form-mini.css -->

        <div class="form-mini-container">


            <h1>Finance</h1>

            <form class="form-mini" method="post" name="finform" action="#" onsubmit="return OnSubmitForm();">

                <div class="form-row">
                    <input class="pass" type="password" name="name" placeholder="Authenticate">
                </div>

                <div class="form-row">
                    <div class="form-radio-buttons">

                        <div>
                            <label class="inrad">
                                <input type="radio" name="radio" id="rad1" onclick="func()">
                                <span>Add Transaction</span>
                            </label>
                        </div>

                        <div class="innerrad">
                            <label class="inrad">
                                <input type="radio" name="inner type" id="rad21">
                                <span>Billed Expenditure</span>
                            </label>
                        </div>
                        <div class="innerrad">
                            <label class="inrad">
                                <input type="radio" name="inner type" id="rad22">
                                <span>Unbilled Expenditure</span>
                            </label>
                        </div>
                        <div class="innerrad">
                            <label class="inrad">
                                <input type="radio" name="inner type" id="rad23" >
                                <span>Money Inflow</span>
                            </label>
                        </div>
                        <div class="innerrad">
                            <label class="inrad">
                                <input type="radio" name="inner type" id="rad24">
                                <span>Reimbursement</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="radio" id="rad2" onclick="func()">
                                <span>Retrieve Transactions</span>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-row form-last-row">
                    <button type="submit">GO</button>
                </div>

            </form>
        </div>


    </div>

</body>

</html>
