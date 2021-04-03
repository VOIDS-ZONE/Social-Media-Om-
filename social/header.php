<?php // 
session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='styles.css'>
<script src='javascript.js'></script>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
_INIT;

require_once 'functions.php';
$userstr = 'Welcome Guest';
if(isset($_SESSION['user'])){ 
$user = $_SESSION['user'];
$loggedin = TRUE;
$userstr  = "Logged in as: $user";
}
else $loggedin = FALSE;

echo <<<_MAIN
<title>Robin's Nest: $userstr</title>
</head>
<body>
<div data-role='page'>
<div data-role='header'>
<div id='logo'class='center'>R<img id='robin' src='robin.png'>bin's Nest</div>
<div class='username'>$userstr</div>
</div>
<div data-role='content'>
_MAIN;
if ($loggedin)
{
echo <<<_LOGGEDIN
<div class='center'>
<a data-role='button' data-inline='true' data-icon='home'data-transition="slide" href='members.php?view=$user'>Home</a>
<a data-role='button' data-inline='true'data-transition="slide" href='members.php'>Members</a>
<a data-role='button' data-inline='true'data-transition="slide" href='friends.php'>Friends</a>
<a data-role='button' data-inline='true'data-transition="slide" href='messages.php'>Messages</a>
<a data-role='button' data-inline='true'data-transition="slide" href='profile.php'>Edit Profile</a>
<a data-role='button' data-inline='true'data-transition="slide" href='logout.php'>Log out</a></div>
_LOGGEDIN;
}
else  {
// echo <<<_GUEST
echo "<div class='center'><a data-role='button' data-inline='true' data-icon='home'data-transition='slide' href='index.php'>Home</a><a data-role='button' data-inline='true' data-icon='plus'data-transition='slide' href='signup.php'>Sign Up</a><a data-role='button' data-inline='true' data-icon='check'data-transition='slide' href='login.php'>Log In</a></div><p class='info'>(You must be logged in to use this app)</p>";
// _GUEST; 
}
