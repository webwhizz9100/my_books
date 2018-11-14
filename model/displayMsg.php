


<?php
    //session_start();
    if(isset($_SESSION['err'])){
        if ( $_SESSION[ 'err' ] != "" ) {
        echo '<div class="err" >' . $_SESSION[ 'err' ] . '</div>';
        unset($_SESSION['err']);
        }
    }
    if(isset($_SESSION['msg'])){
        if ( $_SESSION[ 'msg' ] != "" ) {
        echo '<div class="msg" >' . $_SESSION[ 'msg' ] . '</div>';
        unset($_SESSION['msg']);
        }
    }
    ?>