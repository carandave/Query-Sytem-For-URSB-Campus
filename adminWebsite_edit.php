<?php 

require 'db_conn.php';

if(isset($_POST['editStatusBtn'])){
    $info_Id = $_POST['info_Id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sqlu = "UPDATE tbl_university SET title='$title', content='$content' WHERE info_Id='$info_Id'";
    $result = $conn->query($sqlu);

    echo '<script>alert("Successfully Edited Website")</script>';
    echo '<script>window.location.href = "adminWebsite.php"</script>';
}
?>