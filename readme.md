# :pineapple: Laravel Website: Pineapple Library Sciences :pineapple:

Created this website to learn Laravel for creating web portal from ground up (including design, model relationships, database, etc.) for digital archive project. Features a custom search and allows user to view individual project page.

Was using a custom table to display search results, until I discovered DataTables (jQuery) 


### How to Start web portal

After downloading cloning, cd into project root and run:

```bash

$> mysql -u username -p pineapples < pineappleDB.sql

```

Edit the .env.example file and add your mySQL username and password.

To start program, make sure you have php and Laravel installed, then while in project root run:
```bash
$> mv .env.example .env
$> php artisan serv
```
