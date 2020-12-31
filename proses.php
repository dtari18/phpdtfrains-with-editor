<?php
if(isset($_POST['proses'])){
    $id = $_POST['proses'];
    //Pemilihan untuk upload project website yang ada.
    if($id == '1'){
        // ambil data file
        $namaFile = $_FILES['fileproject']['name'];
        $namaSementara = $_FILES['fileproject']['tmp_name'];

        // tentukan lokasi file akan dipindahkan
        $dirUpload = "";

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        
        if ($terupload) {
            $zip = new ZipArchive; 
            
            // Zip File Name 
            if ($zip->open($namaFile) === TRUE) { 
                // Unzip Path 
                $zip->extractTo('.'); 
                $zip->close(); 
                header('Location:index.php?tipe=1&hasil=1'); 
            } else { 
                header('Location:index.php?tipe=1&hasil=2'); 
            } 
        } else {
        echo "Upload Gagal!";
        }
    }else if($id == '2'){
    //Pemilihan untuk memulai project baru dengan menggunakan PHP Framework
        $framework = $_POST['framework'];
        $download = array('','https://codeload.github.com/bcit-ci/CodeIgniter/legacy.zip/3.1.11','https://codeload.github.com/codeigniter4/framework/zip/v4.0.4','https://codeload.github.com/laravel/laravel/zip/master','https://codeload.github.com/cakephp/cakephp/zip/master','https://packages.zendframework.com/releases/ZendFramework-2.4.13/ZendFramework-minimal-2.4.13.zip','https://ftp.drupal.org/files/projects/drupal-9.0.7.zip','https://codeload.github.com/joomla/joomla-cms/zip/staging','https://codeload.github.com/slimphp/Slim/zip/4.x','https://codeload.github.com/slimphp/Slim/zip/3.x','https://codeload.github.com/yiisoft/yii2/zip/master');
        
        $url = $download[$framework]; 
  
        // Initialize the cURL session 
        $ch = curl_init($url); 
  
        // Inintialize directory name where 
        // file will be save 
        $dir = './'; 
  
        // Use basename() function to return 
        // the base name of file  
        $file_name = basename($url); 
  
        // Save file into file location 
        $save_file_loc = $dir . $file_name . ".zip"; 
  
        // Open file  
        $fp = fopen($save_file_loc, 'wb'); 
  
        // It set an option for a cURL transfer 
        curl_setopt($ch, CURLOPT_FILE, $fp); 
        curl_setopt($ch, CURLOPT_HEADER, 0); 
  
        // Perform a cURL session 
        curl_exec($ch); 
  
        // Closes a cURL session and frees all resources 
        curl_close($ch); 
  
        // Close file 
        fclose($fp);
        $zip = new ZipArchive; 
            
            // Zip File Name 
            if ($zip->open($file_name . ".zip") === TRUE) { 
                // Unzip Path 
                $zip->extractTo('.'); 
                $zip->close(); 
                header('Location:index.php?tipe=2&hasil=1');
                unlink($file_name . ".zip"); 
            } else { 
               header('Location:index.php?tipe=2&hasil=2');
            } 

    }
}
?>