# Create-php-file-and-zip-file
PHP Create zip file and including php file on zip.

Fully use 
<code>

$class = New zip();

try{

  $calistir = $class->execute("testzip1","exampledirectory/testname","testpassword");
  
  if($calistir == TRUE){
  
    echo 'Dosya Oluşturuldu [ File Created ]'; // created message.
    
  }
  
}catch(exception $e){

  echo $e->getMessage(); // error msg.
  
}

</code>
