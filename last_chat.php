<?php 

    function lastChat($id_1, $id_2, $conn){
        $sql = "SELECT * FROM conversations WHERE (FromUser=? AND ToUser=?) OR (ToUser=? AND FromUser=?) ORDER BY id DESC LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_1, $id_2, $id_1, $id_2]);

        if($stmt->num_rows > 0){
            $chat = $stmt->fetch();
            return $chat('Message');
        }

        else{
            $chat='';
            return $chat;
        }
    }

?>