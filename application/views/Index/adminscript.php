<script src="<?php echo base_url('vendor/portal'); ?>/assets/vendor/libs/jquery/jquery.js"></script>
 <script src="https://d3js.org/d3.v4.min.js" data-semver="4.0.0" data-require="d3@*"></script>

<script src="<?php echo base_url('vendor/portal'); ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url('vendor/portal'); ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url('vendor/portal'); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>



<script src="<?php echo base_url('vendor/portal'); ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo base_url('vendor/portal'); ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url('vendor/portal'); ?>/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url('vendor/portal'); ?>/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });

  $('.form-check-input').on('click', function() {
    const menuID = $(this).data('menu');
    const roleID = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changeaccess'); ?>",
      type: 'post',
      data: {
        menuID: menuID,
        roleID: roleID
      },
      success: function() {
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleID;
      }

    });

  });
</script>

<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });

  $('.form-check-input').on('click', function() {

    const submenuID = $(this).data('submenu');
    const roleID = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changesubaccess'); ?>",
      type: 'post',
      data: {
        submenuID: submenuID,
        roleID: roleID
      },
      success: function() {
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleID;
      }

    });

  });
</script>
<!-- Page level plugins -->
<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });

  $('.form-check-input').on('click', function() {

    const undersubmenuID = $(this).data('undersubmenu');
    const roleID = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changeundersubaccess'); ?>",
      type: 'post',
      data: {
        undersubmenuID: undersubmenuID,
        roleID: roleID
      },
      success: function() {
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleID;
      }

    });

  });
</script>

<script>
  $(document).ready(function () {
    $('#dataTable').DataTable();
});
</script>