<?php
session_start();
#Se nao existe a Sessao
if (!isset($_SESSION['userSession']))
{
    ?>
    <!--JS Redirect-->
    <script type="text/javascript">
        window.location = '../index.php'
    </script>
    <?php
}//if

?>