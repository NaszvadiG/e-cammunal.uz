<?php
/**
 * write your own code here
 */
?>

<div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">


        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Мурожаатлар статистикаси
                </h3>
            </div>
            <div class="panel-body">
                <div class="list-group">

                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        Кабул килинди</a>

                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        Кайта ишланмокда</a>

                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        Бажарилди</a>

                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        Умумий</a>

                </div>
            </div>
        </div>

    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Мурожаат холатини текширинг
                </h3>
            </div>
            <div class="panel-body">

                <form action="<?php echo site_url("site/check_complaint") ?>" method="post">
                    <div class="form-group required">
                        <label for="code" class="control-label">Мурожаат рақами
                            киритинг</label>
                        <input type="number" name="code" id="code" class="form-control"/>
                    </div>

                    <div class="form-group required">
                        <label for="CaptchaCode" class="control-label">
                            Расмдагини киритинг
                        </label>
                        <?php echo $captchaHtml; ?>
                        <input type="text" name="CaptchaCode" class="form-control" id="CaptchaCode" value="" required/>
                    </div>

                    <button type="submit" class="btn btn-primary">Текшириш</button>
                </form>

            </div>
        </div>

    </div>
</div>
