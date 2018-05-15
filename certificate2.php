<?php
require "init.php";


if( !isset($_SESSION['new_sess']) ){
    header("Location:index.php?invalid=1");
    App\Session::sess_destroy();
    die();
}

if( isset($_POST['f_name']) ){
    App\Session::sess_create($_POST);
    $_SESSION['_can'] = time().date('/m/Y');
}
else{
    header("Location:index.php?invalid=1");
    App\Session::sess_destroy();
    die();
}

include "inc/header.php";
?>
    <section class="certificate_section">
        <div class="container">
            <div class="main_certificate">
                <div class="color">
                    
                </div>
            </div>
        </div>
    </section>
<?php
    include "inc/footer.php";
?>