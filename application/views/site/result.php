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
                        <span class="badge">
                            <?php echo $status1 ?>
                        </span>
                        Кабул килинди</a>

                    <a href="#" class="list-group-item">
                        <span class="badge">
                                <?php echo $status2 ?>
                        </span>
                        Кайта ишланмокда</a>

                    <a href="#" class="list-group-item">
                        <span class="badge">
                                <?php echo $status3 ?>
                        </span>
                        Бажарилди</a>
                    <a href="#" class="list-group-item">
                        <span class="badge">
                                <?php echo $total ?>
                        </span>
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


<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            Ҳал этилган мурожаатлардан мисоллар
        </h3>
    </div>
    <div class="panel-body">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Мурожаат мавзуси</th>
                <th>Қабул қилинган сана</th>
                <th>Кўриб чиқилган сана</th>
                <th>Манзил</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="#">Сув</a></td>
                <td>25.11.2016</td>
                <td>28.11.2016</td>
                <td>Чилонзор тумани</td>
            </tr>
            <tr>
                <td><a href="#">Газ</a></td>
                <td>25.11.2016</td>
                <td>28.11.2016</td>
                <td>Юнусобот туман</td>
            </tr>
            </tbody>
        </table>
        <div class="bs-example" data-example-id="disabled-active-pagination">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


