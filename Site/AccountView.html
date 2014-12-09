<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSSFiles/global.css" />
		<script type="text/Javascript" src="jQueryFiles/jquery-2.1.1.js"></script>
		<script type="text/Javascript" src="jQueryFiles/jqueryUI/jquery-ui.js"></script>
		<title>Account View</title>
	</head>
	<body align="center">
		<div id="outerWrapper" align="center">
			<div id="innerWrapper">
				<h1>
					Account View
				</h1>
				<p id="custInfo">
					<span align="left">Customer Name:</span>
					<span id="custName"></span>
					<br />
					<span align="left">Account Number:</span>
					<span id="custActNum"></span>
					<br />
					<span align="left">Account Balance:</span>
					<span id="custActBal"></span>
				</p>
				<div id="transactions">
					<input type="radio" id="withdraw" name="trasnType" checked>&nbsp;Cash Withdrawl</input>
					<br />
					<input type="radio" id="deposit" name="trasnType">&nbsp;Deposit</input>
					<br />
					<input type="radio" id="charge" name="trasnType">&nbsp;Debit/Credit Transaction (Charge)</input>
					<br />
					<span>Ammount: </span>
					<input type="text" id="ammount" />
					<br />
					<br />
					<span>Description: </span>
					<input type="text" id="desc" />
					<br />
					<br />
					<button id="addTrans">
						<span>Add Transaction</span>
					</button>
				</div>
				<div id="transTable">
					<table cellspacing="0">
						<thead>
								<th>
									No.
								</th>
								<th>
									Date
								</th>
								<th>
									Description
								</th>
								<th>
									Ammount In
								</th>
								<th>
									Ammount Out
								</th>
								<th>
									Balance
								</th>
						</thead>
						<tbody id="transTableBody">
							
						</tbody>
						<tfoot>
							<tr>
								<th id="numTrans"></th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th id="totAmtIn" class="amtIn"></th>
								<th id="totAmtOut" class="amtOut"></th>
								<th id="totBal"></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
		<div id="footer" align="center">
            <p>
                Last Login: <span id="lastLogin"></span>
            </p>
        </div>
		<script type="text/javascript">
			var count = 1;
			var credit = 0;
			var debit = 0;
			$(document).ready(function(){
				if($('#totBal').text().substr(0,1) == "("){
					$('#totBal').css('color','#FF0000');
				}
				else{
					$('#totBal').css('color','#000000');
				}
			});
			
			
			
			//Function For Adding New Transactions
			$('#addTrans').click(function(){
				var amt = $('#ammount').val();
				var desc = $('#desc').val();
				var cell1 = "<td>" + count + "</td>";
				var today = new Date();
				var dd = today.getDate();
				var mm = today.getMonth()+1;
				var yyyy = today.getFullYear();

				if(dd<10) {
					dd='0'+dd
				} 

				if(mm<10) {
					mm='0'+mm
				} 

				today = mm+'/'+dd+'/'+yyyy;
				var cell2 = "<td>" + today + "</td>";
				var cell3 = "<td>" + desc + "</td>";
				var cell4 = "";
				var cell5 = "";
				var cell6 = "";
				var neg = false;
				var totBal = $('#totBal').text();
				if(totBal.substr(0,2) == "-$"){
					totBal = "-" + totBal.substr(2);
					neg = true;
					//console.log("previously negative");
				}
				else if(totBal.substr(0,1) == "$"){
					totBal = totBal.substr(1)
					neg = false;
					//console.log("previously positive");
				}
				else{
					totBal = "0.00";
					neg = false;
					//console.log("not set");
				}
				//console.log(totBal);
				if($('#withdraw').prop('checked') == true || $('#charge').prop('checked') == true){
					cell4 = "<td>&nbsp;</td>";
					cell5 = "<td>($" + amt + ")</td>";
					debit += parseFloat(amt);
					if(neg){
						totBal = (parseFloat(totBal));
					}
					else{
						totBal = parseFloat(totBal);
					}
					console.log("widhtdraw or charge");
					console.log(totBal);
					var tempBal = totBal - parseFloat(amt);
					tempBal = tempBal.toFixed(2);
					console.log(tempBal);
					totBal = tempBal;
					if(tempBal < 0.00){
						tempBal = Math.abs(tempBal);
						cell6 = "<td style='color: #FF0000;'>-$" + tempBal + "</td>";
					}
					else{
						cell6 = "<td>$" + tempBal + "</td>";
					}
				}
				else{
					cell5 = "<td>&nbsp;</td>";
					cell4 = "<td>$" + amt + "</td>";
					credit += parseFloat(amt);
					if(neg){
						totBal = (parseFloat(totBal));
					}
					else{
						totBal = parseFloat(totBal);
					}
					console.log("Deposit")
					console.log(totBal)
					var tempBal = totBal + parseFloat(amt);
					tempBal = tempBal.toFixed(2);
					console.log(tempBal);
					totBal = tempBal;
					if(tempBal < 0.00){
						tempBal = Math.abs(tempBal);
						cell6 = "<td style='color: #FF0000;'>-$" + tempBal + "</td>";
					}
					else{
						cell6 = "<td>$" + tempBal + "</td>";
					}
				}
				$('#numTrans').text(count);
				if(totBal < 0.00){
					totBal = Math.abs(totBal);
					$('#totBal').text('-$' + totBal);
					$('#totBal').css('color', '#FF0000');
				}
				else{
					$('#totBal').text('$' + totBal);
					$('#totBal').css('color', '#000000');
				}
				var type = "";
				if(count%2 == 1){
					type = "<tr class='odd'>";
				}
				else{
					type = "<tr class='even'>";
				}
				$('#totAmtIn').text("$" + credit.toFixed(2));
				$('#totAmtOut').text("($" + debit.toFixed(2) + ")");
				$('#totAmtOut').css('color','#FF0000');
				var newStr = type + cell1 + cell2 + cell3 + cell4 + cell5 + cell6 + "</tr>";
				$('#transTableBody').append(newStr);
				count++;
			});
		</script>
	</body>
</html>
