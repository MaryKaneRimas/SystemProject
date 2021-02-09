<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" href="img/logo.png">
	<link href="css1/sample1.css" rel="stylesheet">
</head>
<body>


	<div class="div1">
		<nav id="nav1"><br>
				<img src="img/logo.png" class="img2">
				
				<a href="L" ><img src="img/logout.png" class="img1"></a>
				<br>
				<nav>
					<a href="H" class="navb">Home</a>
					<a href="P" class="navb">Products</a>
					<a href="I" class="navb"><b class="backg">Inventory</b></a>
				</nav>

		</nav>
	</div>
	<div class="container">
	<div style="height:10px;"></div>
	<div class="well" style="margin:auto; padding:auto;  width:80%; background-color: white;">
	<span style="font-size:25px; font-weight: bold; color:indigo; font-family:  Goudy Stout;"><center><strong><h1>INVENTORY</h1></strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table border="1" style="margin:auto; padding:2; height: 10px; width:80%; background-color:white; border-radius: 2px; border-color: white;  font-weight: bold;"  >
			<tr class="backg">
				<td><h2><center>Products</center></h2></td>
				<td><h2><center>Price</center></h2></td>
				<td><h2><center>Qty</center></h2></td>
				<td><h2><center>Total</center></h2></td>
				<td><h2><center>Action</center></h2></td>
				<td><h2><center>Date</center></h2></td>


			</tr>
			</thead>
			<tbody>

			
					<tr class="backg">
						<td></td>
						<td><center></center></td>
						<td><center></center></td>
						<td><center></center></td>
						<td><center>
							<a href="#edit" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a> || 
							<a href="#del" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
							</center>
							 
						</td>
						<td><center></center></td>
					</tr>
				</tbody>
				</table>
				<br>
				<table border="1" style="margin:auto; padding:2; height: 10px; width:80%; background-color:white; border-radius: 2px; border-color: white;  font-weight: bold;"  >		   	
					</tr>
					<tr class="backg">
						<td colspan="4" align="center"><h4>TOTAL:<b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></h4></td> 


					</tr>
					
					
			</tbody>
		</table>
	</div>
</div>
</body>
</html><!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
        <div class="container-fluid">
        <form method="POST" action="addnew.php">
          <div class="row">
            <div class="col-lg-3">
              <label class="control-label" style="position:relative; top:7px;">Product Name:</label>
            </div>
            <div class="col-lg-8">
              
              <select class="form-control" name="pname">
                    <option>--SELECT--</option>
                    <option value="MILKTEA SPECIALS-CHOCO PUFF">MILKTEA SPECIALS-CHOCO PUFF</option>
                    <option value="MILKTEA SPECIALS-TARO OVERLOAD">MILKTEA SPECIALS-TARO OVERLOAD</option>
                    <option value="MILKTEA SPECIALS-TOKYO MATCHA">MILKTEA SPECIALS-TOKYO MATCHA</option>
                    <option value="MILKTEA SPECIALS-WINTERMELON COOKIES & CREAM">MILKTEA SPECIALS-WINTERMELON COOKIES & CREAM</option>
                    <option value="MILKTEA SPECIALS-CHOCOLATE OVERLOAD">MILKTEA SPECIALS-CHOCOLATE OVERLOAD</option>
                    <option value="MILKTEA SPECIALS-OKINAWA CHEESECAKE">MILKTEA SPECIALS-OKINAWA CHEESECAKE</option>
                    <option value="MILKTEA SPECIALS-BROWN SUGAR CHEESECAKE">MILKTEA SPECIALS-BROWN SUGAR CHEESECAKE</option>


                    <option value="MILKTEA DELUXE-RED VELVET CHEESECAKE">MILKTEA DELUXE-RED VELVET CHEESECAKE</option>
                    <option value="MILKTEA DELUXE-MANGO GRAHAM SWIRL">MILKTEA DELUXE-MANGO GRAHAM SWIRL</option>
                    <option value="MILKTEA DELUXE-BLUEBERRY MERMAID">MILKTEA DELUXE-BLUEBERRY MERMAID</option>
                    <option value="MILKTEA DELUXE-HERSHEY'S CHOCOLATE">MILKTEA DELUXE-HERSHEY'S CHOCOLATE</option>
                    <option value="MILKTEA DELUXE-ATEANA MILKTEA">MILKTEA DELUXE-ATEANA MILKTEA</option>


                    <option value="FRUIT TEA SERIES-MANGO">FRUIT TEA SERIES-MANGO</option>
                    <option value="FRUIT TEA SERIES-MIXED BERRIES">FRUIT TEA SERIES-MIXED BERRIES</option>
                    <option value="FRUIT TEA SERIES-STRAWBERRY">FRUIT TEA SERIES-STRAWBERRY</option>
                    <option value="FRUIT TEA SERIES-LYCHEE">FRUIT TEA SERIES-LYCHEE</option>

                    <option value="MILKTEA CLASSICS-BROWN SUGARs">MILKTEA CLASSICS-BROWN SUGAR</option>
                    <option value="MILKTEA CLASSICS-WINTERMELON">MILKTEA CLASSICS-WINTERMELON</option>
                    <option value="MILKTEA CLASSICS-TARO">MILKTEA CLASSICS-TARO</option>
                    <option value="MILKTEA CLASSICS-OKINAWA">MILKTEA CLASSICS-OKINAWA</option>
                    <option value="MILKTEA CLASSICS-MATCHA">MILKTEA CLASSICS-MATCHA</option>
                    <option value="MILKTEA CLASSICS-CHOCOLATE">MILKTEA CLASSICS-CHOCOLATE</option>

                    <option value="SNACKS BUY 1 TAKE 1-HOTDOG SANDWICH">SNACKS BUY 1 TAKE 1-HOTDOG SANDWICH</option>
                    <option value="SNACKS BUY 1 TAKE 1-CHEESE BURGER">SNACKS BUY 1 TAKE 1-CHEESE BURGER</option>
                    <option value="SNACKS BUY 1 TAKE 1-CLASSIC BURGER">SNACKS BUY 1 TAKE 1-CLASSIC BURGER</option>


                    <option value="FRIES-CHEESE">FRIES-CHEESE</option>
                    <option value="FRIES-SOUR CREAM">Fries-SOUR CREAM</option>
                    <option value="FFRIES-BBQ">FRIES-BBQ</option>

                    <option value="REGULAR ORDERS-CHEESY NACHOS">REGULAR ORDERS-CHEESY NACHOS</option>
                    <option value="REGULAR ORDERS-NACHOS OVERLOAD">REGULAR ORDERS-NACHOS OVERLOAD</option>
                    <option value="REGULAR ORDERS-EGG BURGER">REGULAR ORDERS-EGG BURGER</option>
                    <option value="REGULAR ORDERS-HOTDOG SANDWICH">REGULAR ORDERS-HOTDOG SANDWICH</option>
                    <option value="REGULAR ORDERS-CLASSIC BURGER">REGULAR ORDERS-CLASSIC BURGER</option>
                    <option value="REGULAR ORDERS-CHEESE BURGER">REGULAR ORDERS-CHEESE BURGER</option>
                    <option value="REGULAR ORDERS-CHEESE BURGER W/ EGG">REGULAR ORDERS-CHEESE BURGER W/ EGG</option>

                    <option value="FRIED NOODLES-TERIYAKI W/ 2PCS SOIMAI">FRIED NOODLES-TERIYAKI W/ 2PCS SOIMAI</option>
                    <option value="FRIED NOODLES-SWEET & SPICY W/ 2PCS SOIMAI">FRIED NOODLES-SWEET & SPICY W/ 2PCS SOIMAI</option>
                    <option value="FRIED NOODLES-TOYOMANSI W/ 2PCS SOIMAI">FRIED NOODLES-TOYOMANSI W/ 2PCS SOIMAI</option>
                  </select>
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label class="control-label" style="position:relative; top:7px;">Product Price:</label>
            </div>
            <div class="col-lg-8">
              <input type="text" name="" class="form-control" name="price">
              
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label class="control-label" style="position:relative; top:7px;">Product Qty:</label>
            </div>
            <div class="col-lg-8">
              <input type="text" class="form-control" name="qty">
            </div>
          </div>
                </div> 
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
        </form>
                </div>
 
            </div>
        </div>
    </div>

</body>
</html>