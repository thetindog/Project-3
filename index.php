<?
	session_start();
	include('db_connect.php');
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Frugal - Video Game Comparison System</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" /> 
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script> 
  	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
</head>
<body>

	<div data-role="page" id="loginPage">
		<div data-role="header">
			<h1>Login Page</h1>
		</div>
			<p>Please log in to search for games:</p>
			<form method="POST" action="index.php" data-ajax="false">
				<p><label>Username: <input name="username" type="text"></label></p>
                <p><label>Password: <input name="password" type="password"></label></p>
				<p><button type="submit" name="login_submit">Log In</button></p>
			</form>
		</div>
	</div>
	
	<div data-role="page" id="myGames" >
		<div data-role="header">
			<h1>My Games</h1>
		</div>
		<div data-role="content" data-theme='a'>
            <ul data-role="listview" data-inset="true">
             <!-- list items of current chosen games with picture, name, and current lowest price (this is what we're intending?) here, can be done through inline PHP probably since this will be database info -->
            	<li>
            		<a href="#vendorList"><img src = "#" alt = "gameNameResults" />Game Name</a>
				</li>
            </ul>
		</div>
	</div>
    
    <div data-role="page" id="search" >
		<div data-role="header">
			<h1>Search</h1>
		</div>
		<div data-role="content" data-theme='a'>
			<form id="searchForm">
        		<input type="search" id="searchBox" placeholder="Search for a game" />
        	</form>
            <ul data-role="listview" data-inset="true" id="searchResults">
            </ul>
		</div>
	</div>
    
      <div data-role="page" id="vendorList" >
		<div data-role="header">
			<h1>Vendors for <!-- game name here -->:</h1>
		</div>
		<div data-role="content" data-theme='a'>
            <ul data-role="listview">
                <!-- we can have ajax/DOM scripting populate this(?) since the results will be google query-based -->
            </ul>
		</div>
	</div>
</html>