<?php
class zip{
/** 
*  @author t4style on GitHub. < t4stylee[at]gmail[dot]com >
* @copyright  2007-2016++ Freelance
* PHP Dosya oluşturup içeriğine parametreler gir ve zip arşivi oluştur.
* PHP Create file and add a zip archive created file.
*/
  public function execute($zipadi,$dosyaadi,$sifre){

  $function =  $this->ziple($zipadi,$dosyaadi,$sifre);
  return $function;
  }


  protected function ziple($bilgiler1,$bilgiler2,$bilgiler3){

      $zip = new ZipArchive();
      $zip->open($bilgiler1.'.zip',ZipArchive::CREATE);
      $adi = $bilgiler2.".php";
      $sifre = $bilgiler3;
      $icerik = "       
             
      <?php

      \$password = \"".$sifre."\";

      ?>
      ";
      $dt = fopen($adi, 'w');
     $yazdir = fwrite($dt, $icerik);
  
      fclose($dt);
      $zip->addFile($adi);
      $zip->close();
        if(file_exists($bilgiler1.".zip")){
          return true;
        }else{
          $explode = explode("/", $bilgiler1);
    throw new Exception("Dosya izinlerini kontrol et. ".$explode[0]." Bulunamadı [ Directory  Not Found ] ");
  }

  }
}
$class = New zip();
try{
  $calistir = $class->execute("testzip1","asd/testname","testpassword");
  if($calistir == TRUE){

    echo 'Dosya Oluşturuldu [ File Created ]';
  }
}catch(exception $e){
  echo $e->getMessage();

}
?>