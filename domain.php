<?php
if (isset($_POST["btn"])) {
        $post_data = file_get_contents('php://input');
        echo "<div> POST BODY <br>".$post_data."</div>"; 
        echo $_POST['tdl'];       
    }
    ?>