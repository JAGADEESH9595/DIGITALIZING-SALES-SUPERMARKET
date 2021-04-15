<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="animate.css-master/animate.min.css" />
	
  <title>Employee Login</title>
  <link rel="icon" type="image/png" href="img/emp.png" />
 
 <!-----------style---------------------------->
 
 <style>
[data-tab-content] {
  display: none;
}

.active[data-tab-content] {
  display: block;
}

body
 {
  padding: 0;
  margin: 0;
 

}

.tabs {
  display: flex;
  justify-content: space-around;
  list-style-type: none;
  margin: 0;
  padding: 0;
  border-bottom: 1px solid black;
  background-color: #21D4FD;
  background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);

}

.tab {
  cursor: pointer;
  padding: 10px;
}

.tab.active {
  background-color: #fff;
}

.tab:hover {
  background-color: #AAA;
}

.tab-content {
  margin-left: 20px;
  margin-right: 20px;
}
.special-h1
{
    text-align:center;
    padding:20px;
}


#pointer 
{
  width: 316px;
    height: 15px;
    position: relative;
    background: red;
    right: -377px;
    top: -19px;
}

#pointer:after 
{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 0;
  border-left: 20px solid white;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
}

#pointer:before 
{
  content: "";
  position: absolute;
  right: -20px;
  bottom: 0;
  width: 0;
  height: 0;
  border-left: 20px solid red;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
}



#pointer1 
{
	width: 242px;
    height: 15px;
    position: relative;
    background: red;
    right: -520px;
    top: -6px;
}

#pointer1:after 
{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 0;
  border-left: 20px solid white;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
}

#pointer1:before 
{
  content: "";
  position: absolute;
  right: -20px;
  bottom: 0;
  width: 0;
  height: 0;
  border-left: 20px solid red;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
}

#pointer2 
{
	width: 180px;
    height: 15px;
    position: relative;
    background: red;
    right: -554px;
    top: -28px;
}

#pointer2:after 
{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 0;
  border-left: 20px solid white;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
}

#pointer2:before 
{
  content: "";
  position: absolute;
  right: -20px;
  bottom: 0;
  width: 0;
  height: 0;
  border-left: 20px solid red;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
}



.log-icons
{
    width: 20px;
}


.btn-box 
{
    display: flex;
    border-bottom: 1px solid #ccc;
}

.btn-box button 
{
    background: transparent;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 32px 16px;
    margin-right: 32px;
    font-size: 20px;
    font-weight: bold;
	left: 113px;
    position: relative;
   
}

.btn-box .log-icons
{
    margin-right: 20px;
}

.btn-box button:hover .log-icons
{
    color: #ff7846;

}
#btn1
{
    color: #ff7846;

}

.container
{
    width:100%;
    font-family:sans-serif;
    letter-spacing: 1px; 
}

.special
{
    margin-top:30px;

}

.product-bottom .fa
{
    color: #28a745;
    font-size:10px;

}

.product-bottom h3
{
    font-size: 20px;
    font-weight: bold;
}

.product-bottom h5
{
    font-size:15px;
    padding-bottom: 10px;
}

.overlay
{
    display:block;
    opacity:0;
    position:absolute;
    top: 10%;
    margin-left:0;
    width: 70px;
}

.product-top:hover .overlay
{
    opacity:0;
    margin-left: 5%;
    transition: 0.5s;
    

}


.overlay .fa
{
    cursor: pointer;
    background-color: #fff;
    color: #000;
    height: 35px;
    width: 35px;
    font-size: 20px;
    padding: 7px;
    margin: 5%;
    margin-bottom: 5%;

}

.overlay .btn-secondary 
{
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
}



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/


@font-face {
  font-family: OpenSans-Regular;
  src: url('../fonts/OpenSans/OpenSans-Regular.ttf'); 
}



/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: sans-serif;
}

/* ------------------------------------ */
a {
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}

p {margin: 0px;}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/* ------------------------------------ */
input {
  display: block;
	outline: none;
	border: none !important;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

/* ------------------------------------ */
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}




/*//////////////////////////////////////////////////////////////////
[ Utiliti ]*/






/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #c850c0;
  background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);
  background: -o-linear-gradient(45deg, #4158d0, #c850c0);
  background: -moz-linear-gradient(45deg, #4158d0, #c850c0);
  background: linear-gradient(45deg, #4158d0, #c850c0);

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1170px;
}

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #36304a;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

tbody tr {
  font-family: OpenSans-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

.column1 {
  width: 260px;
  padding-left: 40px;
}

.column2 {
  width: 160px;
}

.column3 {
  width: 245px;
}

.column4 {
  width: 110px;
  text-align: right;
}

.column5 {
  width: 170px;
  text-align: right;
}

.column6 {
  width: 222px;
  text-align: right;
  padding-right: 62px;
}


@media screen and (max-width: 992px) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 37px 0;
  }
  table tbody tr td {
    padding-left: 40% !important;
    margin-bottom: 24px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    font-family: OpenSans-Regular;
    font-size: 14px;
    color: #999999;
    line-height: 1.2;
    font-weight: unset;
    position: absolute;
    width: 40%;
    left: 30px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "Date";
  }
  table tbody tr td:nth-child(2):before {
    content: "Order ID";
  }
  table tbody tr td:nth-child(3):before {
    content: "Name";
  }
  table tbody tr td:nth-child(4):before {
    content: "Price";
  }
  table tbody tr td:nth-child(5):before {
    content: "Quantity";
  }
  table tbody tr td:nth-child(6):before {
    content: "Total";
  }

  .column4,
  .column5,
  .column6 {
    text-align: left;
  }

  .column4,
  .column5,
  .column6,
  .column1,
  .column2,
  .column3 {
    width: 100%;
  }

  tbody tr {
    font-size: 14px;
  }
}

@media (max-width: 576px) {
  .container-table100 {
    padding-left: 15px;
    padding-right: 15px;
  }
}


 
</style>





</head>
<body>
  
<ul class="tabs">
    <li data-tab-target="Home" class="active tab">Home</li>
    <li data-tab-target="#pricing" class="tab">Product list</li>
	
	<!-- <a href="../Pages/product-report.php" >Help Desk ChatBot</a> -->

	<li data-tab-target="#about" class="tab">Sells List</li>
	<a href="index.php?logout=true" style="margin-top: 8px;
    text-decoration: none; color: black;">Logout</a>
  </ul>

  <div class="tab-content">
    <div id="home" data-tab-content class="active">
	<div class="container">

<!---------------------------------------spaceil offers------------------------------------------>


<h1 class="special-h1 animated flash">Special Offers</h1>
<div id="pointer" class="animated flash"></div>

<div class="btn-box">


	<button id="btn1" onclick="openHTML()"><img src="img/sunflower-oil.png" class="log-icons animated bounceIn delay-1s">Staples</button>
	<button id="btn2" onclick="openCSS()"><img src="img/food-and-restaurant.png" class="log-icons animated bounceIn delay-1s">Snacks</button>
	<button id="btn3" onclick="openJS()"><img src="img/food.png" class="log-icons animated bounceIn delay-1s">Fruits & Vegetables</button>
	<button id="btn3" onclick="openJS()"><img src="img/lunch.png" class="log-icons animated bounceIn delay-1s">Breakfast Cereal</button>

</div>


<div class="row special animated bounce delay-1s">

	<div class="col-md-3">
		<div class="product-top">
			<img src="img/ricepacket.jpg" style="width:100%;height:250px; padding:25px;" />
			<div class="overlay">
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-heart-o"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-shopping-cart"></i>
				</button>
			</div>
		</div>

		<div class="product-bottom text-center">

			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<h3>Rice Packet</h3>
			<h5>$80.00</h5>

		</div>
	</div>

	<div class="col-md-3">
		<div class="product-top">
			<img src="img/oilimg.jpg" style="width:100%;height:250px; padding:25px;" />
			<div class="overlay">
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-heart-o"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-shopping-cart"></i>
				</button>
			</div>
		</div>

		<div class="product-bottom text-center">

			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<h3>Sunflower Oil</h3>
			<h5>$100</h5>

		</div>
	</div>
	<div class="col-md-3">
		<div class="product-top">
			<img src="img/dhaimg.jpg" style="width:100%;height:250px; padding:25px;" />
			<div class="overlay">
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-heart-o"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-shopping-cart"></i>
				</button>
			</div>
		</div>

		<div class="product-bottom text-center">

			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<h3>Dhal</h3>
			<h5>$50.00</h5>

		</div>
	</div>
	<div class="col-md-3">
		<div class="product-top">
			<img src="img/meera.png" style="width:100%;height:250px; padding:25px;" />
			<div class="overlay">
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-heart-o"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-shopping-cart"></i>
				</button>
			</div>
		</div>

		<div class="product-bottom text-center">

			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<h3>Meera Shampoo</h3>
			<h5>$20</h5>

		</div>
	</div>


</div>

<div class="row special animated bounce delay-1s">

	<div class="col-md-3">
		<div class="product-top">
			<img src="img/chipa.jpg" style="width:100%;height:250px; padding:25px;" />
			<div class="overlay">
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-heart-o"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-shopping-cart"></i>
				</button>
			</div>
		</div>

		<div class="product-bottom text-center">

			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<h3>Chocolate</h3>
			<h5>$120.00</h5>

		</div>
	</div>

	<div class="col-md-3">
		<div class="product-top">
			<img src="img/candy.jpg" style="width:100%;height:250px; padding:25px;" />
			<div class="overlay">
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-heart-o"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-shopping-cart"></i>
				</button>
			</div>
		</div>

		<div class="product-bottom text-center">

			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<h3>Candy Club</h3>
			<h5>$80.00</h5>

		</div>
	</div>
	<div class="col-md-3">
		<div class="product-top">
			<img src="img/snaks1.jpg" style="width:100%;height:250px; padding:25px;" />
			<div class="overlay">
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-heart-o"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-shopping-cart"></i>
				</button>
			</div>
		</div>

		<div class="product-bottom text-center">

			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<h3>Snacks</h3>
			<h5>$20.00</h5>

		</div>
	</div>
	<div class="col-md-3">
		<div class="product-top">
			<img src="img/snaks.jpg" style="width:100%;height:250px; padding:25px;" />
			<div class="overlay">
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-heart-o"></i>
				</button>
				<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-shopping-cart"></i>
				</button>
			</div>
		</div>

		<div class="product-bottom text-center">

			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<i class="fa fa-star-o"></i>
			<h3>Chips</h3>
			<h5>$10.00</h5>

		</div>
	</div>


</div>

</div>
<!-------------------------------------------product list---------------------------->
<br />
<br />
<br />
<br />

    </div>
    <div id="pricing" data-tab-content>
		<br/>
	
	  <h1 style="text-align:center; color:#3D4A83;">Product list</h1>
	  <div id="pointer1" class="animated flash"></div>
	  	<br/>
	  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">ID</th>
								<th class="column2">Item Code</th>
								<th class="column3">Name</th>
								<th class="column4">Item Type</th>
								<th class="column5">Units</th>
								<th class="column6">Price</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">01</td>
									<td class="column2">M10001</td>
									<td class="column3">Good Day Biscuits</td>
									<td class="column4">Biscuits</td>
									<td class="column5">250</td>
									<td class="column6">$100.00</td>
								</tr>
								<tr>
									<td class="column1">02</td>
									<td class="column2">M10002</td>
									<td class="column3">Gram Flour</td>
									<td class="column4">Oil</td>
									<td class="column5">150</td>
									<td class="column6">$156.00</td>
								</tr>
								<tr>
									<td class="column1">03</td>
									<td class="column2">M10003</td>
									<td class="column3">Tur Pulse</td>
									<td class="column4">Pulses</td>
									<td class="column5">150</td>
									<td class="column6">$44.00</td>
								</tr>
								<tr>
									<td class="column1">04</td>
									<td class="column2">M10004</td>
									<td class="column3">Black Paper</td>
									<td class="column4">Garam Masala</td>
									<td class="column5">80</td>
									<td class="column6">$30.00</td>
								</tr>
								<tr>
									<td class="column1">05</td>
									<td class="column2">M10005</td>
									<td class="column3">Red Rajma</td>
									<td class="column4">Pulses</td>
									<td class="column5">100</td>
									<td class="column6">$1494.00</td>
								</tr>
								<tr>
									<td class="column1">06</td>
									<td class="column2">M10006</td>
									<td class="column3">Sella Rice</td>
									<td class="column4">Rice</td>
									<td class="column5">120</td>
									<td class="column6">$699.00</td>
								</tr>
								<tr>
									<td class="column1">07</td>
									<td class="column2">M10007</td>
									<td class="column3">Tumeric Powder</td>
									<td class="column4">Grama Masala</td>
									<td class="column5">100</td>
									<td class="column6">$219.00</td>
								</tr>
								<tr>
									<td class="column1">08</td>
									<td class="column2">M10008</td>
									<td class="column3">Tata Tea</td>
									<td class="column4">Tea</td>
									<td class="column5">100</td>
									<td class="column6">$99.00</td>
								</tr>
								<tr>
									<td class="column1">09</td>
									<td class="column2">M10009</td>
									<td class="column3">Haldiram Namkeen</td>
									<td class="column4">Namkeen</td>
									<td class="column5">100</td>
									<td class="column6">$99.00</td>
								</tr>
								<tr>
									<td class="column1">10</td>
									<td class="column2">ap909090</td>
									<td class="column3">Chips</td>
									<td class="column4">Biscuits</td>
									<td class="column5">10</td>
									<td class="column6">$99.00</td>
								</tr>
								<tr>
									<td class="column1">11</td>
									<td class="column2">ja123</td>
									<td class="column3">chacolate</td>
									<td class="column4">Biscuits</td>
									<td class="column5">5</td>
									<td class="column6">$9.00</td>
								</tr>
								<tr>
									<td class="column1">12</td>
									<td class="column2">Ja10011</td>
									<td class="column3">Boost</td>
									<td class="column4">Tea</td>
									<td class="column5">10</td>
									<td class="column6">$99.00</td>
								</tr>
								<tr>
									<td class="column1">13</td>
									<td class="column2">8999</td>
									<td class="column3">chaco</td>
									<td class="column4">Biscuits</td>
									<td class="column5">10</td>
									<td class="column6">$99.00</td>
								</tr>
								<tr>
									<td class="column1">14</td>
									<td class="column2">JA10001</td>
									<td class="column3">Gram Flour</td>
									<td class="column4">Gram Flour</td>
									<td class="column5">100</td>
									<td class="column6">$999.00</td>
								</tr>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>




	<!-------------------------------sells list--------------------------------->

	  
    </div>
    <div id="about" data-tab-content><br>
	  <h1 style="text-align:center; color:#3D4A83;">Sells list</h1><br>
	  <div id="pointer2" class="animated flash"></div>
      <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column2">Order ID</th>
								<th class="column3">Name</th>
								<th class="column4">Mobile</th>
								<th class="column5">Total Amount</th>
								<th class="column6">Payment</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">05-05-2020 01:22</td>
									<td class="column2">200398</td>
									<td class="column3">Kaushal Kishor</td>
									<td class="column4">9876543212</td>
									<td class="column5">215</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">02-09-2020 05:57</td>
									<td class="column2">200397</td>
									<td class="column3">Atul Kumar</td>
									<td class="column4">9876543212</td>
									<td class="column5">76</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">02-09-2020 05:57</td>
									<td class="column2">200396</td>
									<td class="column3">Kaushal</td>
									<td class="column4">94385034</td>
									<td class="column5">44</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">03-05-2020 05:50</td>
									<td class="column2">200392</td>
									<td class="column3">Rahul Kumar</td>
									<td class="column4">987654323</td>
									<td class="column5">112.5</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">03-05-2020 05:57</td>
									<td class="column2">200391</td>
									<td class="column3">Kaushal</td>
									<td class="column4">493573</td>
									<td class="column5">39</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">03-05-2020 5:50</td>
									<td class="column2">200390</td>
									<td class="column3">Anil</td>
									<td class="column4">9876543212</td>
									<td class="column5">348..5</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">03-05-2020 5:50</td>
									<td class="column2">200389</td>
									<td class="column3">fghjkl</td>
									<td class="column4">7897988</td>
									<td class="column5">150</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">03-05-2020 05:57</td>
									<td class="column2">200388</td>
									<td class="column3">Ram Kapoor</td>
									<td class="column4">8470010001</td>
									<td class="column5">330</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">04-05-2020 05:57</td>
									<td class="column2">200387</td>
									<td class="column3">Ram Kapoor</td>
									<td class="column4">8470010001</td>
									<td class="column5">4440</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">04-05-2020 05:57</td>
									<td class="column2">200386</td>
									<td class="column3">Ram Kapoor</td>
									<td class="column4">8470010001</td>
									<td class="column5">330</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">04-05-2020 05:57</td>
									<td class="column2">200389</td>
									<td class="column3">Ram Kapoor</td>
									<td class="column4">8470010001</td>
									<td class="column5">1000</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">04-05-2020 05:57</td>
									<td class="column2">200388</td>
									<td class="column3">Ram Kapoor</td>
									<td class="column4">8470010001</td>
									<td class="column5">130</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">05-17-2020 05:57</td>
									<td class="column2">200387</td>
									<td class="column3">JANU</td>
									<td class="column4">7799646316</td>
									<td class="column5">240</td>
									<td class="column6">Success</td>
								</tr>
								<tr>
									<td class="column1">05-17-2020 05:57</td>
									<td class="column2">200386</td>
									<td class="column3">thulasi</td>
									<td class="column4">7799646316</td>
									<td class="column5">100</td>
									<td class="column6">Success</td>
								</tr>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

    </div>
  </div>


<script>
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})
</script>
  
<script>

(function ($)
 {
    "use strict";

})(jQuery);
</script>

</body>
</html>













