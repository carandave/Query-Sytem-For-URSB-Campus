<?php 

require 'db_conn.php';

if(isset($_POST['addStatusBtn'])){
    
    $title = $_POST['title_add'];
    $content = $_POST['content_add'];

    $sql = "INSERT INTO tbl_university (`title`, `content`) VALUES ('$title', '$content')";
    $result = $conn->query($sql);

    echo '<script>alert("Successfully Added Website About")</script>';
    echo '<script>window.location.href = "adminWebsite.php"</script>';
}
?>