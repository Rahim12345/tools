<?php
/**
 * Login Customization in Laravel 8
 * 
 *  Change the Email Input when Login
*Go to Folder config > fortify.php
*On Line 45 (Default) there is a key "username" => "email". 
*Change the email to whatever you want, for example, username. 
*So it becomes "username" => "username". That way you can log in using a 
*username and password without the need for email. Of course it must also be adjusted to those in database.
*🔓 Changing the Route / Destination After Successfully Login
*Go to Folder app > Providers > RouteServiceProvider.php
*Change the "/ dashboard" as desired on line 20
*public const HOME = '/ dashboard';
*after successful login it will go to the route you point here
*
*🔐 Change the Minimum Requirement Password when registering
*By default in Laravel 8, if we want to register then the password is at least 8 characters to change it:
*
*Go to vendor > laravel > fortify > src > Rule > Password.php
*Change protected $ length = 8; As you wish, for example 10
*And if you want when registering, the password must have an Uppercase character, 
*just change it $requireUppercase from false to true
*And if you want to register, the password must be a number, just change $requireNumeric from false to true
*
*origin : https://dev.to/aibnuhibban/login-customization-in-laravel-8-2gc8
 */