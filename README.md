# MO_PHP-Login/Register-System

The MO_PHP-Login/Register-System uses the 
<a href="LICENSE">Apache 2.0 License</a>


## About MO_PHP-Login/Register-System

### SQL Server
The MO_PHP-Login/Register-System is compatiple with :
| driver      | Supported Databases |
| ----------- | ----------- |
| PDO_CUBRID      | Cubrid       |
| PDO_DBLIB   | FreeTDS / Microsoft SQL Server / Sybase        |
| PDO_FIREBIRD | Firebird |
| PDO_IBM | IBM, DB2 |
| PDO_INFORMIX | IBM / Informix Dynamic Server |
| PDO_MYSQL	| MySQL 3.x/4.x/5.x |
| PDO_OCI	| Oracle Call Interface |
| PDO_ODBC	| ODBC v3 (IBM DB2, unixODBC und win32 ODBC) |
| PDO_PGSQL	| PostgreSQL |
| PDO_SQLITE	| SQLite 3 und SQLite 2 |
| PDO_SQLSRV	| Microsoft SQL Server / SQL Azure |

<br>
<br>


---

## MO_PHP-Login/Register-System Set-up

### Connect to SQL Server
> connect.php
```php
<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mo_login_system";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
				echo "Error: " . $e->getMessage();
                $conn = NULL;
	}
?>
```
Change the veriables to your own.
The `$dbname` should stay the same if you are using the `setup.sql`.


### Change SQL driver
> conect.php
```php
9 :   $conn = new PDO("pgsql:host=$servername;port=$port;dbname=$dbname", $username, $password);
```
Change the `mysql` to the driver of your needs.
