<?php
class b2b_operations{

    function search_session_save(){
        $_SESSION['tours_array'] = json_encode($_POST['tours_array']);
        $_SESSION['session_currency_id'] = $_POST['currency'];
    }
}
?>