<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Anveshak Finance</title>

	<link rel="stylesheet" href="assets/form-mini.css">
  <script src="assets/ret.js"></script>

</head>
<body>



    <div class="main-content">

        <!-- You only need this form and the form-mini.css -->

        <div class="form-mini-container">


            <h1>Bill List and Statements</h1>

            <form class="form-mini" method="post" name="finform" action="#" onsubmit="return OnSubmitForm();">

                <div class="form-row">
                    <label>
                        <select name="month_select" placeholder="Month">
                            <option disabled selected >Select Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </label>
                </div>

                <div class="form-row">
                    <div class="form-radio-buttons">

                        <div>
                            <label class="inrad">
                                <input type="radio" name="radio" id="rad1" checked="checked">
                                <span>Bill List</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="radio" id="rad2">
                                <span>Finance Statement</span>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-row form-last-row">
                    <button type="submit">FETCH</button>
                </div>

            </form>
        </div>


    </div>

</body>

</html>
