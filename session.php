<?php
if(!isset($_SESSION))
{
	session_start();
}
if(!isset($_SESSION['user_name']))
{
	$_SESSION['user_name']="news_hub_anonymous_user";
    $_SESSION['privilege']=-1;
}
?>