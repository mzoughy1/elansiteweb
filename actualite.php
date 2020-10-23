<?php
$dbname='elansite';
$con=mysqli_connect("localhost","root","",$dbname);  
$handle = opendir(dirname(realpath(__FILE__)).'/actualite/');
while($file = readdir($handle)){
  if($file !== '.' && $file !== '..'){
    $req="INSERT INTO images (img) VALUES ('$file')";
            $res=mysqli_query($con,$req);

    /*echo '<img src="pictures/'.$file.'" border="0" />';*/
  }
}
/*$all_files = glob("C:\wamp64\www\elansite\actualite/*.*");
  for ($i=1; $i<count($all_files); $i++)
    {
      $image_name = $all_files[$i];
      $supported_format = array('gif','jpg','jpeg','png');
      $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
      echo $image_name[1];
      if (in_array($ext, $supported_format))
          {
            echo 'fait';
            echo '<html><head></head><body><img src="'.$image_name.'" alt=""/>'."<br/><br/></body></html>";
           
          } else {
              echo 'no images';
          }
          
    }*/
    /*$photo= "C:\wamp64\www\elansite\actualite/" . $_FILES["file"]["name"];
    $ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
    $req="INSERT INTO images (img) VALUES ('$photo')";
            $res=mysqli_query($con,$req);*/
    
  ?>