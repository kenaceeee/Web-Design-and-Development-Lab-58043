<html>
    <head>
        <title>Long Quiz 2</title>
        <style>
			body 
			{
                background: #000080;
            }
            #main 
			{
                background: #FFA500;
                border-radius: 40px;
                margin: 10px auto 10px auto;
                padding: 40px;
                max-width: 50%;
                float: center;
                text-align: center;
                font-family: times new roman;
            }
        </style>
			<body>
				<div id="main">
					<?php
							echo "<h2>Long Quiz 2</h2>";
							
						// Problem 1

							$salary_per_day = 600;
							$salary = $salary_per_day * 15;
							$tax = $salary * 0.30;
							$net_pay = $salary - $tax;

							echo "<h3>Problem 1</h3>";
							echo "Salary rate: $salary_per_day<br/>";
							echo "Salary: $salary<br/>";
							echo "Taxable amount: $tax<br/>";
							echo "Net Pay: $net_pay<br/>";

							echo "<br/ >";

							// Problem 2

							$number = 50;
							$total = 0;
							for($i= 0; $i <= $number; $i++) {
								$total += $i;
							}

							echo "<h3>Problem 2</h3>";
							echo "The sum of all positive integers from 1-$number is <b>$total</b>";
							 
							echo "<br/ >";
							echo "<br/ >";
							echo "<br/ >";
							echo "<br/ >";
							echo "<br/ >";
						
							echo "<b>Submitted by: Acerado, Jhon Kenneth A.</b>";
							echo "<br/ >";
							echo "<b>WEB DESIGN AND DEVELOPMENT LAB - 58043</b>";
					?>
				</div>
		</body>
</html>