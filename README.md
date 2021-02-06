# PHP-Database-Connection
You can learn how to connect a PHP MY ADMIN database and Insert a data using PHP 

Prerequisites :
1. Download and Install a Xampp Server from here (https://www.apachefriends.org/index.html)

Steps to start server :
1. Open a Xampp Control Panel Then Start Apache and MySql

Steps for run the project:
1. Copy the project files and paste into C://Xampp/htdocs/
2. Create a folder then paste the project files
4. Open your browser navigate to localhost/phpmyadmin/ 
5. Create a database and table with with sno, username and password columns
6. Then open a browser Type localhost/foldername that you have created

Then you can see this project running in your browser

About the project

In index.html A form with 2 input boxes and 1 button to accept Username and Password with Register button
After you click the register button the form submit the post request to Insert.php

In Insert.php 
1. If condition checks the form is submitted
2. Replace the username, password and database name that you have created
3. Then we make the connection to The database
4. We have check if the error in connection
5. Then we get username and password from the request that you have made from the form
6. Write the SQL Insert query with your desire table name
7. And execute the query and Check if error
8. Finally close the connection


Thank you
Sarbudeen S
