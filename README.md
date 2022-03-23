# merchant_deposits
 
PRE-REQUISITES
------------

To run this app
you need to have the following installed on your system

PHP version 7 or higher with the PDO extension enabled.

Composer globally installed

A local database server.MySQL is used in this project.

Postman or similar app to test endpoints.

INSTALLATION
------------

clone the project from github repository or extract the archive file to a specified folder

create a database called deposits in your mysql application

open config/db.php to verify the database credentials to match your server configurations

run this commad "composer update" to update dependencies with Composer

run "php yii migrate" to run migrations to create tables and dumb some data using faker

click y to allow execution 

run php yii serve command to start the server

Send a request to this endpoint http://localhost:8080/deposits with GET HTTP request method  to get the list of submitted deposits.

Send a POST request to same endpoint http://localhost:8080/deposits with form data(amount and reason)




