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

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Шахсий</th>
        <th>Адрес</th>
        <th>Контакт</th>
        <th>Мурожаат матни</th>
        <th>Статус</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($query as $item): ?>
        <tr>
            <td>
                <?php echo $item->fish; ?> <br>
                <?php echo $item->tugil_yil; ?> <br>
                <?php echo $item->jins; ?>
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
                <?php if ($item->status == 1) { ?>
                    <strong class="text-info">Кабул килинган</strong>
                <?php } else { ?>
                    <strong class="text-warning">Янги</strong>
                    <br>
                    <a href="<?php echo site_url('admin/complaint_active') ?>/<?= $item->id ?>"
                       class="btn btn-link">Кабул килиш</a>
                <?php } ?>
            </td>
            <td>
                <a href="<?php echo site_url('admin/complaint_delete') ?>/<?= $item->id ?>"
                   class="btn btn-danger">Учириш</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
