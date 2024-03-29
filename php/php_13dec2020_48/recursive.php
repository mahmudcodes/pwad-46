<?php

function amortizationTable($paymentNumber, $periodicPayment, $balance,
	$monthlyInterest)
{
	static $table = array();
 // Calculate payment interest
	$paymentInterest = round($balance * $monthlyInterest, 2);
// Calculate payment principal
	$paymentPrincipal = round($periodicPayment - $paymentInterest, 2);
 // Deduct principal from remaining balance
	$newBalance = round($balance - $paymentPrincipal, 2);
 // If new balance < monthly payment, set to zero
	if ($newBalance < $paymentPrincipal) {
		$newBalance = 0;
	}
	$table[] = [$paymentNumber,
		number_format($newBalance, 2),
		number_format($periodicPayment, 2),
		number_format($paymentPrincipal, 2),
		number_format($paymentInterest, 2)
	];
 // If balance not yet zero, recursively call amortizationTable()
	if ($newBalance > 0) {
		$paymentNumber++;
		amortizationTable($paymentNumber, $periodicPayment,
			$newBalance, $monthlyInterest);
	}
	return $table;
}
?>


<?php
 // Loan balance
$balance = 10000.00;
 // Loan interest rate
$interestRate = .0575;
 // Monthly interest rate
$monthlyInterest = $interestRate / 12;
 // Term length of the loan, in years.
$termLength = 5;
 // Number of payments per year.
$paymentsPerYear = 12;
 // Payment iteration
$paymentNumber = 1;
 // Determine total number payments
$totalPayments = $termLength * $paymentsPerYear;
 // Determine interest component of periodic payment
$intCalc = 1 + $interestRate / $paymentsPerYear;
 // Determine periodic payment
$periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) /
(pow($intCalc,$totalPayments) - 1);
 // Round periodic payment to two decimals
$periodicPayment = round($periodicPayment,2);
$rows = amortizationTable($paymentNumber, $periodicPayment, $balance,
	$monthlyInterest);
 // Create table
echo "<table border=1>";
echo "<tr>
<th>Payment Number</th><th>Balance</th>
<th>Payment</th><th>Principal</th><th>Interest</th>
</tr>";
foreach($rows as $row) {
	printf("<tr><td>%d</td>", $row[0]);
	printf("<td>$%s</td>", $row[1]);
	printf("<td>$%s</td>", $row[2]);
	printf("<td>$%s</td>", $row[3]);
	printf("<td>$%s</td></tr>", $row[4]);
}
 // Close table
echo "</table>";
?>