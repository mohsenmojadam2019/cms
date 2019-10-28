<section class="main-contact">
    <div class="row">
        <div class="col-xs-12 col-md-3 pull-right">
            <?php
            $cats=$pageData->build_cat();
            echo $cats;

            ?>
        </div>
        <div class="col-xs-12 col-md-9 pull-right">
            <?php
            if($check_form===true){
                echo '<script>window.location="./?m=pane1";</script>';
            }else{
                if($check_form===false)echo'<div class="alert alert-danger">
<srtong>اخطار !</srtong> مقادیر ارسالی اشتباه است.</div>';
            ?>
            <form action="./?m=login" method="post" class="forms" id="login-form">
                <input type="hidden" name="action" value="login">
                <fieldset>
                    <legend>ورود به حساب کاربری</legend>
                    <ul>
                        <li>
                            <label>ایمیل:</label>
                            <input type="text" name="mail" class="required email">
                            <span></span>
                        </li> <li>
                            <label>رمز عبور:</label>
                            <input type="text" name="pass" class="required email" data-min="8">
                            <span></span>
                        </li> <li>
                            <label></label>
                            <input type="text" value="ورود" ">
                            <span></span>
                        </li>
                    </ul>
                </fieldset>
            </form>
                <?php

            }

            ?>
        </div>

    </div>

</section>