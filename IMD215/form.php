<?php
/* Rename form.phps to form.php. 
.phps means PHP source code - the server will not excute the PHP code, 
instead the browser will show the PHP source code. 
To have the server actually run the file, the extension needs to be .php */ 

if($_POST['submit']){
print "POST: <br/> ";
print $_POST['firstName']." <br/> ";
print $_POST['lastName']." <br/> ";

$ages=count($_POST['age']);
for ($i=0; $i < $ages; $i++){
echo "<br>".$_POST['age'][$i];
}

$news=count($_POST['newsletter']);
for ($i=0; $i < $news; $i++){
echo "<br>".$_POST['newsletter'][$i];
}

$genres=count($_POST['genre']);
for ($i=0; $i < $genres; $i++){
echo "<br>".$_POST['genre'][$i];
}

echo "<br>";

print $_POST['email']." <br/> ";
print $_POST['password']." <br/> ";
print $_POST['phone']." <br/> ";
}

if($_GET['submit']){
print "GET: <br/> ";
print $_GET['firstName']." <br/> ";
print $_GET['lastName']." <br/> ";

$ages=count($_GET['age']);
for ($i=0; $i < $ages; $i++){
echo "<br>".$_GET['age'][$i];
}

$news=count($_GET['newsletter']);
for ($i=0; $i < $news; $i++){
echo "<br>".$_GET['newsletter'][$i];
}

$genres=count($_GET['genre']);
for ($i=0; $i < $genres; $i++){
echo "<br>".$_GET['genre'][$i];
}

echo "<br>";

print $_GET['email']." <br/> ";
print $_GET['password']." <br/> ";
print $_GET['phone']." <br/> ";
}

?> 