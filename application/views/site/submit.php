<?php
/**
 * write your own code here
 */
?>

<?php if ($this->session->flashdata('message')) { ?>

    <p class="alert alert-success">
        <?php echo $this->session->flashdata('message'); ?>
    </p>

<?php } else { ?>

    <div class="row">

        <div class="col-xs-7 col-sm-7 col-md-7">

            <?php if ($this->session->flashdata('error')) { ?>

                <p class='alert alert-danger alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span
                                aria-hidden='true'>×</span></button>
                    <?php echo $this->session->flashdata('error'); ?>
                </p>

            <?php } ?>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Мурожаат қилиш талаби:</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>
                            Мурожаатни юбориш учун барча кизил майдонларни тўлдириш шарт
                        </li>
                    </ul>
                </div>
            </div>

            <form class="form-horizontal" action="<?php echo site_url("site/send_complaint") ?>" method="post">

                <div class="form-group required">
                    <label for="fish" class="col-sm-4 control-label">Ф.И.О.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="fish" id="fish" placeholder="Ф.И.О." required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tugil_yil" class="col-sm-4 control-label">Туғилган йилингиз</label>
                    <div class="col-sm-8">
                        <input type="number" min="1900" max="2000" name="tugil_yil" id="tugil_yil" class="form-control"
                               placeholder="Туғилган йилингиз">
                    </div>
                </div>

                <div class="form-group required">
                    <label for="tuman" class="col-sm-4 control-label">Туман</label>
                    <div class="col-sm-8">
                        <select id="tuman" name="tuman" class="form-control" required>
                            <option value=""></option>
                            <option value="Олмазор">Олмазор</option>
                            <option value="Бектемир">Бектемир</option>
                            <option value="Миробод">Миробод</option>
                            <option value="Мирзо">Мирзо Улуғбек</option>
                            <option value="Сирғали">Сирғали</option>
                            <option value="Учтепа">Учтепа</option>
                            <option value="Яшнобод">Яшнобод</option>
                            <option value="Чилонзор">Чилонзор</option>
                            <option value="Шайхонтохур">Шайхонтохур</option>
                            <option value="Юнусобод">Юнусобод</option>
                            <option value="Яккасарой">Яккасарой</option>
                        </select>
                    </div>
                </div>

                <div class="form-group required">
                    <label for="manzil" class="col-sm-4 control-label">Манзил</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="manzil" id="manzil" placeholder="Манзил" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="manzil" class="col-sm-4 control-label">Электрон почта</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Электрон почта">
                    </div>
                </div>

                <div class="form-group required">
                    <label for="telefon" class="col-sm-4 control-label">Телефон</label>
                    <div class="col-sm-8">
                        <input type="tel" class="form-control" name="telefon" value="+998" id="telefon"
                               placeholder="Телефон">
                    </div>
                </div>

                <div class="form-group required">
                    <label for="maqom" class="col-sm-4 control-label">Мақом</label>
                    <div class="col-sm-8">
                        <select id="maqom" class="form-control" name="maqom">
                            <option value=""></option>
                            <option value="1">Банд-ишлайди</option>
                            <option value="2">Ишсиз</option>
                            <option value="3">Пенсионер</option>
                            <option value="4">Талаба</option>
                        </select>
                    </div>
                </div>

                <div class="form-group required">
                    <label for="maxfiy" class="col-sm-4 control-label">Махфийлиги</label>
                    <div class="col-sm-8">
                        <select id="maxfiy" class="form-control" name="maxfiy" required>
                            <option value=""></option>
                            <option value="1">Ҳа</option>
                            <option value="0">Йўқ</option>
                        </select>
                        <br>
                        <p class="alert alert-info">
                            Мурожаатингиз сир сақланишини истасангиз “ҳа”ни белгиланг. Махфийлик банди “йўқ” деб
                            белгиланган мурожаатлар порталнинг “Ҳал этилган мурожаатлар” бўлимига, шахсий маълумотлардан
                            холи тарзда, жойлаштирилиши мумкин
                        </p>
                    </div>
                </div>

                <div class="form-group required">
                    <label for="mazmun" class="col-sm-4 control-label">Мурожаатнинг қисқача мазмуни</label>
                    <div class="col-sm-8">
                        <select id="mazmun" class="form-control" name="mazmun">
                            <option></option>
                            <option>Сув</option>
                            <option>Газ</option>
                            <option>Ток</option>
                            <option>Домкон</option>
                        </select>
                    </div>
                </div>


                <div class="form-group required">
                    <label for="matn" class="col-sm-4 control-label">Мурожаат матни</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="10" type="text" name="matn" id="matn" required></textarea>
                        <br>
                        <p class="alert alert-info">
                            Мурожаатингиз тезкор равишда ҳал этилишини истасангиз, ҳар бир масала бўйича алоҳида
                            мурожаат йўллашингизни ҳамда мазкур мурожаатни лўнда, оддий ва равон тилда баён этишингизни
                            сўраймиз!
                        </p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="file" class="col-sm-4 control-label">
                        Файл
                    </label>
                    <div class="col-sm-8">

                        <label class="btn btn-default btn-file">
                            Танланг <input type="file" name="file" id="file" style="display: none;">
                        </label>
                    </div>
                </div>

                <div class="form-group required">
                    <label for="CaptchaCode" class="col-sm-4 control-label">
                        Расмдагини киритинг
                    </label>
                    <div class="col-sm-8">
                        <?php echo $captchaHtml; ?>
                        <input type="text" name="CaptchaCode" class="form-control" id="CaptchaCode" value="" required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-primary">Жўнатиш</button>
                    </div>
                </div>

            </form>

        </div>

        <div class="col-xs-5 col-sm-5 col-md-5">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Мурожаат қилиш тартиби:</h3>
                </div>
                <div class="panel-body">
                    <h4>
                        Ҳурматли фойдаланувчи!
                    </h4>
                    <p>
                        Сизга Ўзбекистон Республикаси Президентига бевосита электрон тарзда мурожаатларни юбориш
                        имконияти
                        тақдим этилмоқда. Шу билан бирга, Сизнинг юбораётган мурожаатингиз расмий мақомга эга эканлигини
                        ҳам
                        эслатиб қўймоқчимиз.
                    </p>
                    <p>
                        Шу сабабли, Сиздан қуйидагиларни унутмаслигингизни сўраймиз:
                    </p>
                    <ul>
                        <li>
                            Жисмоний шахс сифатида мурожаат йўлласангиз фамилиянгиз (исмингиз, отангизнинг исми), яшаш
                            жойингиз тўғрисидаги маълумотлар кўрсатилган ва мурожаатингиз моҳияти баён этилган бўлиши
                            шарт.
                            Юридик шахс сифатида мурожаат йўлласангиз юридик шахснинг тўлиқ номи, унинг жойлашган жойи
                            (почта манзили) тўғрисидаги маълумотлар кўрсатилган ва мурожаатнинг моҳияти баён этилиши
                            талаб
                            этилади.
                        </li>

                        <li>Алоҳида эътибор беринг! Туҳмат, ҳақорат сўзлар ишлатилган ва ёлғон хабар берувчи
                            мурожаатларни тақдим этиш мумкин эмас.
                        </li>

                        <li>
                            <p>
                                Шунингдек, қуйидаги ҳолатларда мурожаатларингиз рад этилиши мумкинлигини эслатиб
                                ўтмоқчимиз:
                            </p>
                            <ul>
                                <li>
                                    одобсизлик мазмунидаги мурожаатлар (уятсиз ёхуд ҳақоратли иборалар, таҳдидлар,
                                    мантиқ ва
                                    маъноси бўлмаган таклифлар ва шунга ўхшаш мурожаатлар);
                                </li>
                                <li>
                                    мурожаат матнида тушунарсиз қисқартиришлар ёки реклама материаллари мавжуд бўлган,
                                    таркибида
                                    аниқ аризалар, шикоятлар ёки таклифлар бўлмаган мурожаатлар
                                </li>
                            </ul>
                        </li>

                        <li>
                            Шунингдек, фойдаланувчининг бир неча бор битта масала бўйича жавоб берилган мурожаатини
                            қайта
                            юборилганда агар унда янги важлар ёки ҳолатлар келтирилмаган бўлса, кўриб чиқилмайди.
                            Мазкур шартларнинг барчаси Ўзбекистон Республикасининг амалдаги қонунчилигидан келиб чиққан
                            ҳолда белгиланган.
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
<?php } ?>
