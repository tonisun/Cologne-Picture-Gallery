# Cologne Picture Gallery

SQLite, MySQL, PostgreSQL
[![Project Logo](out/assets/images/colorful-wall_sm.png)](https://github.com/tonisun/Cologne-Picture-Gallery)

![tonisun´s Cologne-Picture-Gallery](/out/assets/images/ColognePictureGalleryScreenshot.png)



> ## 0. Project Structure
![Project Structure](/out/assets/images/AppSceleton.png)

> ## 1. Make your own DB/config.ini file
<pre>
[MySQL]
version = 10
host = 'localhost'
port = 3306
dbname = 'images'
user = 'root'
password = 'your_password'

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
>## 2. PDO extention for SQLite & PostgreSQL
In ***php.ini*** you must activate PDO extention for SQLite and PostgreSQL
![PDO_DBMS_extentions](/out/assets/images/php.ini%20pdo%20extention.png)
<br>

> ## 3. Add PlugIn for UML and have nice day
[![PlantUML](/out/assets/images/PlantUML_hell.png)](https://plantuml.com/de/)

>## Use Case Diagram
[![USE Case Diagram](/out/doc/mvc_usc_dia/mvc_usc_dia.svg)](/out/doc/mvc_usc_dia.plantuml)

>## Sequence Diagram for "see some pictures" case
[![Sequence Diagram](/out/doc/mvc_seq_dia/mvc_seq_dia.svg)](/out/doc/mvc_seq_dia.plantuml)

>## Class Diagram
[![Class Diagram](/out/app/doc/uml/mvc_cla_dia/mvc_cla_dia.svg)](/app/doc/uml/mvc_cla_dia.plantuml)







&copy; 2022 ToniSun, Inc.