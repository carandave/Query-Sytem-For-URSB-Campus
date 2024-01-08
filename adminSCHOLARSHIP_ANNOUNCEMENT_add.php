<!-- Addition of Registrar Code -->
<?php 

require 'db_conn.php';

if(isset($_POST['submit'])){

    $announcement = $_POST['announcement'];
    $department = $_POST['office'];
    $dateSubmitted = date('F, d Y');
    

    $phpFileUploadErrors = array(
            0 => 'There is no error, the file uploaded with success',
            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML Form',
            3 => 'The uploaded file was only partially uploaded',
            4 => 'No file was uploaded',
            6 => 'Missing a temporary folder',
            7 => 'Failed to write file to disk',
            8 => 'A PHP extension stopped the file upload.',
        );

        if(isset($_FILES['userfile'])){

            

            $file_array = reArrayFiles($_FILES['userfile']);

            for($i = 0; $i<count($file_array); $i++){
                if($file_array[$i]['error']){
                    $sql = "INSERT IGNORE INTO tbl_announcement (announcement, department, date_created) VALUES ('$announcement', '$department', '$dateSubmitted')";
                    mysqli_query($conn, $sql);

                    echo '<script>alert("Successfully Inserted Announcement")</script>';
                    echo '<script>window.location.href = "settings_Scholarship.php"</script>';
                }

                else{
                    $extensions = array('jpg', 'png', 'gif', 'jpeg');

                    $file_ext = explode('.', $file_array[$i]['name']);

                    // pre_r($file_ext);
                    // die; 
                    // $file_ext = end($file_ext);

                    $name = $file_ext[0];
                    $name = preg_replace("!-!", " ", $name);
                    $name = ucwords($name);
                    

                    $file_ext = end($file_ext);

                    if(!in_array($file_ext, $extensions)){
                        ?> <div class="alert alert-danger">
                        <?php echo "{$file_array[$i]['name']} - Invalid File Extension!";
                        ?> </div> <?php
                    }

                    else {

                        $img_dir = 'web/'.$file_array[$i]['name'];

                        move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);

                        $sql = "INSERT IGNORE INTO tbl_announcement (announcement, department, name, image_dir, date_created) VALUES ('$announcement', '$department', '$name', '$img_dir', '$dateSubmitted')";
                        mysqli_query($conn, $sql)
                        // $mysqli->query($sql) or die ($mysqli->error);

                        ?> <div class="alert alert-success">
                        </div> <?php

                        echo '<script>alert("Successfully Inserted Announcement")</script>';
                        echo '<script>window.location.href = "settings_Scholarship.php"</script>';
                    }


                }

            }
        }
}

else{
    
}

function reArrayFiles(&$file_post){
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for($i = 0; $i<$file_count; $i++){
        foreach($file_keys as $key){
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}


function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

        
        
        
?>