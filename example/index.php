<html>
<?php
header('Cache-control: private, max-age=0');
#var_dump($_SERVER);
echo '<hr>';
echo '<strong>REQUEST: </strong>';
print_r($_REQUEST);
#print_r($_SERVER);
echo '<hr>';
foreach($_SERVER as $key => $value){
    echo "<span>$key</span> : " . $value . '<br>';

}
echo '<hr>';
if ($_SERVER['REQUEST_URI']==='/welcome') {
?>
 <b>WELCOME</b>
<?php
}
elseif ($_SERVER['REQUEST_URI'] === '/data') {
// Печатает год в STDOUT
echo date('Y');
echo "\n<br>";
echo "Hello, world!";
}
else {
    http_response_code(404);
?>
 <b>NOT FOUND</b>
<?php
}
?>
<br>
<a href="/welcome">welcome</a>
<a href="/data">data</a>
<a href="/not-found">not-found</a>
<br /><br />
<?php
echo '<strong>RESPONCE CODE: </strong>';
var_dump(http_response_code());
?>
</html>