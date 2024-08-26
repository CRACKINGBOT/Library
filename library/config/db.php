
<?php
ORM::configure(array(
   'connection_string' => 'mysql:host=localhost;dbname=book_store',
   'username' => 'root',
   'password' => ''
));

ORM::configure('id_column_overrides', array(
   'book' => 'book_id',
   'book_page' => 'page_id',
));
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
