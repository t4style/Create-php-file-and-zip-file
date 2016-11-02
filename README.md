# Create-php-file-and-zip-file
PHP create a php file  and add zip archive created file.

Getting Class
$class = New zip();

Executing function 

$execute = $class->execute("zipfilename","phpfilename","optional value");

Getting error message

try{
if($execute == true){
echo "..";

}
}catch( exception $e){

echo $e->getMessage;
}
