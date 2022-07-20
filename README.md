# Hallo MVC with PHP 8.1

SQLite, MySQL, PostgreSQL
<a href="https://egosanto.de/" target="_blank">![](/View/assets/images/colorful-wall.png)</a>

> ## 1. Make your own DB/config.ini
<pre>
[MySQL]
version = 10
host = 'localhost'
port = 3306
dbname = 'images'
user = 'root'
password = ''

[PostgreSQL_11]
version = 11
host = 'localhost'
port = 5432
dbname = 'images'
user = 'postgres'
password = 'your_password'

[PostgreSQL]
version = 14
host = 'localhost'
port = 5433
dbname = 'images'
user = 'postgres'
password = 'your_password'


[SQLite]
path = 'DB/images.db'
dbname = 'images'
</pre>

>## Sequence Diagram
[![Sequence Diagram](/out/doc/mvc_seq_dia/mvc_seq_dia.svg)](/out/doc/mvc_seq_dia.plantuml)
&copy; 2022 ToniSun, Inc.

>## Use Case Diagram
[![USE Case Diagram](/out/doc/mvc_usc_dia/mvc_usc_dia.svg)](/out/doc/mvc_usc_dia.plantuml)
&copy; 2022 ToniSun, Inc.