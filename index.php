<html>
    <head>
        <title>calculator</title>
        <link rel="stylesheet" href="paystyle.css">
        
    </head>
    <body>
        <form id="EmpForm" action="PayCalc.php" method="GET">
            <fieldset>

                <legend>Payroll Calculator</legend>
                <?php
                    if(!empty($error_message)) {
                ?>
                    <p class="error">

                        <?php echo htmlspecialchars($error_message); ?>
                    </p>
                  
                <?php
                    }
                ?>  
                <div class="formRow">
                    <label for="en">Employee Name:</label>
                    <input name="employeeName" id="en" type="text">
                </div>
                <div class="formRow">
                    <label for="hw">Hours Worked :</label>
                    <input name="hoursWorked" id="hw" type="text">
                </div>
                <div class="formRow"></div>
                    <label for="pr">Pay Rate :</label>
                    <input name="payRate" id="pr" type="text">
                </div>
                <br>
                <input type="submit" value="Calculate">
                <input type="reset" value="Clear">
                

            </fieldset>
        </form>
    </body>
</html>