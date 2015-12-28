# PHP-SQLITE-registration-login-form
Log in/Regisration form in PHP and SQLITE database.

1. If you are Linux user you have to install  ```php-sqlite3```
on Ubuntu:
```
sudo apt-get install php5-sqlite3
```
On arch:
 ```
 sudo pacman -S php5-sqlite3
 ```

If you are on Mac or Windows just download from official site: https://www.sqlite.org/download.html

2. Create database,
 

if you are on Linux open terminal,(if you are on Windows open command prompt and drag sqlite3.exe on it) and type:
 
```
sqlite3 database.db
``` 
//first type cd "path to our project"

3.Create Tabele

Then type:
```
sqlite3>  CREATE TABLE USERS( 
   ID INT PRIMARY KEY     NOT NULL,
   NAME           TEXT    NOT NULL,
   USERNAME       TEXT     NOT NULL,
   MAIL           TEXT,
   PASSWORD       TEXT
);
```



 
