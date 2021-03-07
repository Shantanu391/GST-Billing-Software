<?php
include("db.php");
session_start();
$user=$_SESSION["userid"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

  <link rel="stylesheet" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>View</title>
	<script type="text/javascript">
		function Bill(gst,amount,cgst,sgst,profit,prft_amt,total_amt,tax,amt_after_tax,name,business,email,dop,billno)
		{
			document.getElementById("details").style.display = "";
			document.getElementById("name").innerHTML = name;
			document.getElementById("business").innerHTML = business;
			document.getElementById("email").innerHTML = email;
			document.getElementById("dop").innerHTML = dop;
			document.getElementById("billno").innerHTML = billno;
			document.getElementById("amount").innerHTML = amount;
			document.getElementById("profit").innerHTML = profit;
			document.getElementById("prft_amt").innerHTML = prft_amt;
			document.getElementById("total_amt").innerHTML = total_amt;
			document.getElementById("gst").innerHTML = gst;
			document.getElementById("cgst_percent").innerHTML = gst/2;
			document.getElementById("sgst_percent").innerHTML = gst/2;
			document.getElementById("tax").innerHTML = tax;
			document.getElementById("cgst").innerHTML = cgst;
			document.getElementById("sgst").innerHTML = sgst;
			document.getElementById("amt_after_tax").innerHTML = amt_after_tax;
			document.getElementById('pay_dop').value = dop;
			document.getElementById('pay_billno').value = billno;
			document.getElementById('pay_gst').value = gst;
			document.getElementById('pay_profit').value = profit;
			document.getElementById('pay_tax').value = tax;
			document.getElementById('pay_amt').value = amount;
		}
		function NoBill()
		{

		}
	</script>
</head>
<style type="text/css">
	#page-wrap {
		width: 700px;
		margin: 0 auto;
	}
	.center-justified {
		text-align: justify;
		margin: 0 auto;
		width: 30em;
	}
	table.outline-table {
		border: 1px solid;
		border-spacing: 0;
	}
	tr.border-bottom td, td.border-bottom {
		border-bottom: 1px solid;
	}
	tr.border-top td, td.border-top {
		border-top: 1px solid;
	}
	tr.border-right td, td.border-right {
		border-right: 1px solid;
	}
	tr.border-right td:last-child {
		border-right: 0px solid;
	}
	tr.center td, td.center {
		text-align: center;
		vertical-align: text-top;
	}
	td.pad-left {
		padding-left: 5px;
	}
	tr.right-center td, td.right-center {
		text-align: right;
		padding-right: 50px;
	}
	tr.right td, td.right {
		text-align: right;
	}
	.grey {
		background:grey;
	}
</style>
<body>
	<div class="jumbotron text-center">
		<h1>VIEW BILL</h1>
	</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index1.php">GST</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Info
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="ViewBill1.php">View Bills</a></p>
					</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Pay
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="PayBill1.php">Pay Bill</a></p>
					</div>
		</li>

	</ul>
</div>
</nav>
	<div style="background-image: url('bruce.jpg'); background-repeat: no-repeat;  background-position: center ;background-size: 1600px 1500px; ">
<form action="ViewBill1.php" method="post">
<div style="padding-left:500px;">
	<p style="display: inline-block; color:white;">Select the month and year of payment :</p>
	<div class="slabSelect" id="Date_of_Payment" style="display: inline-block;">
	<select class="form-select form-select-lg mb-6" aria-label=".form-select-lg example" name="Month" required="">
	<option value="">- Month -</option>
	<option value="1">January</option>
	<option value="2">Febuary</option>
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
	<select name="Year" required="">
	<option value="">- Year -</option>
	<option value="2020">2020</option>
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	</select>
	</div>
	<br>
	<div style="padding-left:200px;">
		<button type="submit" name="view" class="btn btn-primary">View</button>
		</div>

	</form>
	</div>
</div>


<div id="details" style="display: none;">
	<div class="jumbotron text-center">
		<h1>COMPLETE ENQUIRY</h1>
	</div>
<!--<div style="background-image: url('lol.jpg'); background-repeat: no-repeat;  background-position: center ;background-size: 100% 150%; " >
	<div style="padding-left:600px;">
		<p id="name1" style ="display: inline-block; float: left;">Name :</p>
		<p id="name" name="name" style ="display: inline-block;"></p>
		<br>

		<p id="business1" style="display: inline-block; float: left;">Name of Business : </p>
		<p id="business" style="display: inline-block;"></p>
		<br>

		<p id="email1" style="display: inline-block; float: left;">Email : </p>
		<p id="email" style="display: inline-block;"></p>
		<br>

		<p id="dop1" style="display: inline-block; float: left;">Date : </p>
		<p id="dop" style="display: inline-block;"></p>
		<input type="hidden" id="pay_dop" name="pay_dop" value="">
		<br>

		<p id="billno1" style="display: inline-block; float: left;">Bill No. : </p>
		<p id="billno" style="display: inline-block;"></p>
		<input type="hidden" id="pay_billno" name="pay_billno" value="">
		<br>

		<p id="gst1" style="display: inline-block; float: left;">GST : </p>
		<p id="gst" style="display: inline-block;"></p>
		<p style="display: inline-block;">%</p>
		<input type="hidden" id="pay_gst" name="pay_gst" value="">
		<br>

		<p id="amount1" style="display: inline-block; float: left;">Amount : Rs.</p>
		<p id="amount" style="display: inline-block;"></p>
		<input type="hidden" id="pay_amt" name="pay_amt" value="">
		<br>

		<p id="profit1" style="display: inline-block; float: left;">Profit % : </p>
		<p id="profit" style="display: inline-block;"></p>
		<p style="display: inline-block;">%</p>
		<input type="hidden" id="pay_profit" name="pay_profit" value="">
		<br>

		<p id="prft_amt1" style="display: inline-block; float: left;">Profit Amount : Rs.</p>
		<p id="prft_amt" style="display: inline-block;"></p>
		<br>

		<p id="total_amt1" style="display: inline-block; float: left;">Amount after profit : Rs.</p>
		<p id="total_amt" style="display: inline-block;"></p>
		<br>

		<p id="cgst1" style="display: inline-block; float: left;">CGST : Rs.</p>
		<p id="cgst" style="display: inline-block;"></p>
		<br>

		<p id="sgst1" style="display: inline-block; float: left;">SGST : Rs.</p>
		<p id="sgst" style="display: inline-block;"></p>
		<br>

		<p id="tax1" style="display: inline-block; float: left;">Tax : Rs.</p>
		<p id="tax" style="display: inline-block;"></p>
		<input type="hidden" id="pay_tax" name="pay_tax" value="">
		<br>

		<p id="amt_after_tax1" style="display: inline-block; float: left;">Final Amount : Rs.</p>
		<p id="amt_after_tax" style="display: inline-block;"></p>
		</div>

		<br>
		</div>

</div>-->
<div id="page-wrap">
		<table width="100%">
			<tbody>
				<tr>
					<td width="70%">
						<h2 style="text-align: center;">Tax Invoice</h2><br>
						<strong>Name:</strong><p id="name" name="name" style ="display: inline-block;"></p><br>
						<strong>Email:</strong><p id="email" style="display: inline-block;"></p><br>
						<strong>Date:</strong>
						<p id="dop" style="display: inline-block;"></p>
						<input type="hidden" id="pay_dop" name="pay_dop" value="">
						<br>
						<strong>Invoice Number:</strong>
						<p id="billno" style="display: inline-block;"></p>
						<input type="hidden" id="pay_billno" name="pay_billno" value="">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="center-justified" style="text-align: center;">
							<strong>Invoice To:</strong> <p id="business" style="display: inline-block;"></p>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table width="100%" class="outline-table">
			<tbody>
				<tr class="border-bottom border-right grey">
					<td colspan="3" style="text-align: center;"><strong>Summary</strong></td>
				</tr>
				<tr class="border-bottom border-right center">
					<td width="45%"><strong>Activity</strong></td>
					<td width="25%"><strong>Rate %</strong></td>
					<td width="30%"><strong>Amount (INR)</strong></td>
				</tr>
				<tr class="border-right">
					<td class="pad-left" style="text-align: center;">Invoice Value</td>
					<td class="center">&nbsp;</td>
					<td style="text-align: center;">
						Rs.<p id="amount" style="display: inline-block;padding-top: 15px;"></p>
						<input type="hidden" id="pay_amt" name="pay_amt" value="">
					</td>
				</tr>
				<tr class="border-right">
					<td class="right border-top" style="text-align: center;">Profit</td>
					<td class="right border-top" style="text-align: center;">
						<p id="profit" style="display: inline-block;padding-top: 15px;"></p>
						<p style="display: inline-block;">%</p>
						<input type="hidden" id="pay_profit" name="pay_profit" value="">
					</td>
					<td class="right border-top" style="text-align: center;">
						Rs.<p id="prft_amt" style="display: inline-block;padding-top: 15px;"></p>
					</td>
				</tr>
				<tr class="border-right">
					<td class="right border-top" style="text-align: center;">Total</td>
					<td class="right border-top">&nbsp;</td>
					<td class="right border-top" style="text-align: center;">
						Rs.<p id="total_amt" style="display: inline-block;padding-top: 15px;"></p>
					</td>
				</tr>
				<tr class="border-right">
					<td class="right border-top" style="text-align: center;">GST</td>
					<td class="right border-top" style="text-align: center;">
						<p id="gst" style="display: inline-block;padding-top: 15px;"></p>
						<p style="display: inline-block;">%</p>
						<input type="hidden" id="pay_gst" name="pay_gst" value="">
					</td>
					<td class="right border-top" style="text-align: center;">
						Rs.<p id="tax" style="display: inline-block;padding-top: 15px;"></p>
						<input type="hidden" id="pay_tax" name="pay_tax" value="">
					</td>
				</tr>
				<tr class="border-right">
					<td class="right border-top" style="text-align: center;">CGST</td>
					<td class="right border-top" style="text-align: center;">
						<p id="cgst_percent" style="display: inline-block;padding-top: 15px;"></p>
						<p style="display: inline-block;">%</p>
					</td>
					<td class="right border-top" style="text-align: center;">
						Rs.<p id="cgst" style="display: inline-block;padding-top: 15px;"></p>
					</td>
				</tr>
				<tr class="border-right">
					<td class="right border-top" style="text-align: center;">SGST</td>
					<td class="right border-top" style="text-align: center;">
						<p id="sgst_percent" style="display: inline-block;padding-top: 15px;"></p>
						<p style="display: inline-block;">%</p>
					</td>
					<td class="right border-top" style="text-align: center;">
						Rs.<p id="sgst" style="display: inline-block;padding-top: 15px;"></p>
					</td>
				</tr>
				<tr class="border-right">
					<td class="right border-top" style="text-align: center;">Final</td>
					<td class="right border-top">&nbsp;</td>
					<td class="right border-top" style="text-align: center;">
						Rs.<p id="amt_after_tax" style="display: inline-block; padding-top: 15px;"></p>
					</td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['view']))
{
	$month=$_POST['Month'];
	$year=$_POST['Year'];
	$billno=$user.$month.$year;
	$sql = "SELECT * FROM Bill WHERE BillNo='$billno'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if($result->num_rows==1)
	{
		$gst=$row['gst'];
		$profit=$row['profit'];
		$amount=$row['amt'];
		$dop=$row['dop'];
		$tax=$row['tax'];
		$prft_amt=($amount*$profit)/100;
		$total_amt=$prft_amt+$amount;
		$cgst=(($gst/2)*$total_amt)/100;
		$sgst=$cgst;
		$amt_after_tax=$total_amt+$tax;
		$sql = "SELECT * FROM GST WHERE id='$user'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$name = $row['name'];
		$business = $row['business'];
		$email = $row['email'];
		$amount=number_format($amount, 2, '.', "");
		$prft_amt=number_format($prft_amt, 2, '.', "");
		$total_amt=number_format($total_amt, 2, '.', "");
		$cgst=number_format($cgst, 2, '.', "");
		$sgst=number_format($sgst, 2, '.', "");
		$tax=number_format($tax, 2, '.', "");
		$amt_after_tax=number_format($amt_after_tax, 2, '.', "");
		echo "<script>Bill('$gst', '$amount', '$cgst', '$sgst', '$profit', '$prft_amt', '$total_amt','$tax', '$amt_after_tax', '$name', '$business', '$email', '$dop', '$billno');</script>";
	}
	else
	{
		echo 'Bill hasnt been paid yet.';
	}
}
?>