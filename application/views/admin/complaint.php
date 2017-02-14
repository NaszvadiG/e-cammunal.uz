<?php
/**
 * write your own code here
 */
?>

<?php if ($this->session->flashdata('message')) { ?>

    <p class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>×</span></button>
        <?php echo $this->session->flashdata('message'); ?>
    </p>

<?php } ?>

<div class="row">

    <form class="form-inline" action="<?php echo site_url("admin/complaint") ?>" method="get" id="filterFrm">

        <label for="status">Статус</label>
        <select id="status" class="form-control" name="status" onchange="$('#filterFrm').submit()">
            <option value=""></option>
            <option value="0">Кабул килинди</option>
            <option value="1">Кайта ишланмокда</option>
            <option value="2">Бажарилди</option>
        </select>
    </form>

</div>
<br>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Мавзу</th>
        <th>Шахсий</th>
        <th>Манзил</th>
        <th>Контакт</th>
        <th>Мурожаат матни</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($query as $item): ?>
        <tr>
            <td>
                <a href="<?php echo site_url('admin/complaint_view') ?>/<?= $item->id ?>"
                   class="btn btn-link">
                    <?php echo $item->mazmun; ?>
                </a>
            </td>
            <td>
                <?php echo $item->fish; ?> <br>
                <?php echo $item->tugil_yil; ?>
            </td>
            <td>
                <?php echo $item->tuman; ?> <br>
                <?php echo $item->manzil; ?>
            </td>
            <td>
                <?php echo $item->email; ?>
                <br/>
                <?php echo $item->telefon; ?>
            </td>
            <td>
                <?php echo $item->matn; ?>
            </td>
            <td>
                <?php if ($item->status == 3) { ?>
                    <strong class="btn btn-success disabled">Бажарилди</strong>
                <?php } elseif ($item->status == 2) { ?>
                    <strong class="btn btn-info disabled">Кайта ишланмокда</strong>
                <?php } elseif ($item->status == 1) { ?>
                    <strong class="btn btn-primary disabled">Кабул килинди</strong>
                <?php } elseif ($item->status == 0) { ?>
                    <strong class="btn btn-warning disabled">Курилмаган</strong>
                <?php } ?>
                <a href="<?php echo site_url('admin/complaint_delete') ?>/<?= $item->id ?>"
                   class="btn btn-danger">Учириш</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
