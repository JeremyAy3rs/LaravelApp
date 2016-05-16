<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	
    <title>Your Easy Lodging Destination</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

	 <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

	<!-- functions for the form query -->
	<link href="functions.php" rel="php">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php include 'functions.php';?>
<?php //include 'connection.php';?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt="EAsy Lodging"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Easy Lodging</h1>
        <p>We strive to bring you a unique and pleasant exprience here at Easy Lodging.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
		<div class="center-block"><img class="img-responsive" src="images/great-rooms.jpg" alt="Easy Lodging logo"></div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
		<div class="table-container-left">
<h3>Select Your Vacation Preferences</h3>   
<div>
<h5>Your Information</h5>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  First Name: <input type="text" name="firstname">
  <br><br>
 Last Name: <input type="text" name="lastname">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Address: <input type="text" name="address">
  <br><br>
  Additional Comments: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Club Member:
  <input type="radio" name="preferred" value="Yes">Yes
  <input type="radio" name="preferred" value="No">No
 
	
</div>
<table cellspacing="0" cellpadding="5" border="0" rules="none" class="table-container">
	<tbody>
        <tr>
            <td colspan="2">
			    <p>Select the number of nights, rooms &amp; guests.</p>
            </td>
        </tr>
		<tr>
			<td align="left" valign="top">
<meta name="vs_showGrid" content="True">
<div>

	<table cellspacing="0" cellpadding="0" border="0">
	  <tbody>
						<tr>
							<td>
							<span>Nights:</span>
							</td>
							<td colspan="2">
								<select name="NumberOfNights">
									<option value="1" selected="selected">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>

								</select>
							</td>
						</tr>
						<tr>
							<td>
							<span>Rooms:</span></td>
							<td colspan="2">
								<select name="NumberOfRooms">
									<option value="1" selected="selected">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<span>Adults</span></td>
							<td nowrap="nowrap" colspan="2">
								<select name="AdultCount">
								<option value="1" selected="selected">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>

							</select>
								<span></span></td>
						</tr>
						<tr>
						<td>
							<span>Adolescents:</span></td>
						<td nowrap="nowrap" colspan="2">
							<select name="YouthCount">
							<option value="0" selected="selected">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>

						</select>
							<span>Ages (11 - 17)</span></td>
						</tr>	
					<tr style="display:none;">
						<td>
							<span>Discount Children:</span></td>
						<td nowrap="nowrap" colspan="2">
							<select name="wucStayInfo$ddlChild2Count">
								<option value="0" selected="selected">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
							<span></span>
						</td>
					</tr>
					<tr>
						<td >
							<span>Children 10 and under</span>
						</td>
						<td nowrap="nowrap" colspan="2">
							<select  name="ChildCount">
								<option value="0" selected="selected">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
							</select>
						<span>(5 And Under)</span>
						</td>
					</tr>
				</tbody>
				</table>	
				<span></span>	
				</div>
				</td>				
					</tr>
					</tbody>
				</table>
			</div>
        </div>
        <div class="col-md-4">
		<h3>Your Exclusive Cabin Choices</h3>
          <table cellspacing="1" cellpadding="1" border="0" class="RoomListTableStyle" id="wucRoomList_tblRoomList">
	<tbody><tr>
		<td align="left" colspan="2">

			</select></td>
			<td>
				</td>
		</tr>
		<tr>
			<td colspan="3">
				<span style="color:Red;display:none;"></span></td>
		</tr>
		<tr>
			<td colspan="3">
				</td>
		</tr>
		<tr>
			<td colspan="3">
				<div>
				  <table cellspacing="0" border="1" style="border-color:Black;border-width:1px;border-style:Solid;height:384px;border-collapse:collapse;" rules="all" class="RoomListRoomsTableStyle">
					<tbody>
							<p>Select &nbsp;&nbsp;&nbsp;&nbsp; Room &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cabin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total</p>
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Deluxe One Bedroom Suite - $199.99" name="room">
								</td><td><a target="_blank">Deluxe One Bedroom Suite</a></td><td>
									<div>Cabin A</div>
								</td><td>
									<span>$199.99</span>
								</td>
				</tr><tr class="RoomListAlternatingItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Deluxe King - $179.99" name="room">
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Deluxe King</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin B</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl03_lblRoomStayTotal">$179.99</span>
								</td>
				</tr><tr class="RoomListItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Deluxe Queen / Queen - $150.99" name="room">
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Deluxe Queen / Queen</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin C</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl04_lblRoomStayTotal">$150.99</span>
								</td>
				</tr><tr class="RoomListAlternatingItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Deluxe King Accessible - $159.99" name="room">
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Deluxe King Accessible</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin D</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl05_lblRoomStayTotal">$159.99</span>
								</td>
				</tr><tr class="RoomListItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Premium Suite- $209.99" name="room">
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Premium Suite</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin E</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl06_lblRoomStayTotal">$209.99</span>
								</td>
				</tr><tr class="RoomListAlternatingItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Standard Queen - $147.99" name="room">
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Standard Queen / Queen</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin F</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl07_lblRoomStayTotal">$147.99</span>
								</td>
				</tr><tr class="RoomListItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Standard King- $157.99" name="room">
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Standard King</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin G</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl08_lblRoomStayTotal">$157.99</span>
								</td>
				</tr><tr class="RoomListAlternatingItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Executive Queen / Queen - $167.99" name="room">
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Executive Queen / Queen</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin H</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl09_lblRoomStayTotal">$167.99</span>
								</td>
				</tr><tr class="RoomListItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio"  value="Exe King - $175.99" name="room" >
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Exe King</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin I</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl10_lblRoomStayTotal">$175.99</span>
								</td>
				</tr><tr class="RoomListAlternatingItemStyle">
					<td class="RoomListSelectColumnStyle">
									<input type="radio" value="Executive King with Lakeview - $187.99" name="room">
								</td><td class="RoomListRoomColumnStyle"><a target="_blank">Executive King with Lakeview</a></td><td class="RoomListBuildingColumnStyle">
									<div>Cabin J</div>
								</td><td class="RoomListTotalColumnStyle">
									<span id="wucRoomList_dgRooms_ctl11_lblRoomStayTotal">$187.99</span>
								</td>
				</tr>
			  </tbody>
			</table>
			</div>
			</td>
		</tr>
	</tbody></table>
		  
		  
       </div>
        <div class="col-md-4">
		<h3>Your Chosen Preferences</h3>
           <input type="submit" name="submit" value="Submit" class="btn btn-default">  <input name="reset" type="submit" src="" value="Reset" onclick="reset();" class="btn btn-default" /> 
	
</form>
	<?php
	echo "<h5>Check your info below before submitting</h5>";
	echo "First Name: ";
	echo $firstname;
	echo "<br>";
	echo "Last Name: ";
	echo $lastname;
	echo "<br>";
	echo "email: ";
	echo $email;
	echo "<br>";
	echo "Street Address: ";
	echo $address;
	echo "<br>";
	echo "Comments: ";
	echo $comment;
	echo "<br>";
	echo "Club Member? ";
	echo $preferred;
	echo "<br>";
	echo "Room Selected: ";
	echo $room;
	echo "<br>";
	echo "Number of Nights: "; 
	echo $NumberOfNights;
	echo "<br>";
	echo "Number of Adults: ";
	echo $AdultCount;
	echo "<br>";
	echo "Number of Youth: ";
	echo $YouthCount;
	echo "<br>";
	echo "Number of Children: ";
	echo $ChildCount;
	echo "<br>";

	?>
	<br />
	
   <input type="submit" name="register" value="Register" class="btn btn-default" onclick="return book();">   
		<script type="text/javascript" src="functions.js"></script>   
        </div>
      </div>
      <hr>
      <footer class="footer">
        <p>Web design by <a href="http://anjstudios.biz" target="_blank">Jeremy Ayers</a></p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
