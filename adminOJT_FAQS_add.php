<?php 

require 'db_conn.php';

if(isset($_POST['submit'])){
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $department = $_POST['department'];

    $sql = "INSERT INTO tbl_faqs (question, answer, department) VALUES ('$question', '$answer', '$department')";
    mysqli_query($conn, $sql);

    echo '<script>alert("Successfully Added FAQ")</script>';
    echo '<script>window.location.href = "settings_Ojt.php"</script>';
}

?>