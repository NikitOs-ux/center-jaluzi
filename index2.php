    <?php
        if($_SERVER['SCRIPT_NAME']!='/index2.php'){
            require "modules/application_modal.php";
        }
        else{
            require "modules/header.php";     
            require "modules/order_block.php";     
            require "modules/footer.php";     
            require "modules/counter_block.php";   
        }
    ?>