</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo asset_url('js/jquery.min.js'); ?>"></script>
<script src="<?php echo asset_url('js/ie10-viewport-bug-workaround.js'); ?>"></script>
<script src="<?php echo asset_url('js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset_url('plugins/DataTables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo asset_url('plugins/DataTables/js/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset_url('plugins/DataTables/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo asset_url('plugins/DataTables/js/buttons.flash.min.js'); ?>"></script>
<script>
    $(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });
    });
</script>
</body>
</html>
