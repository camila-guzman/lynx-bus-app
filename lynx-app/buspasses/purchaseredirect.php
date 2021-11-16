<!--include head section and navbar-->
<?php include('../templates/headerinfolder.php'); ?>

<!--Insert Content Here-->
<div class="container py-3">
  <header>
   

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Pass Purchased</h1>
      <p class="fs-5 text-muted">Thanks for using the Lynx App</p>
    </div>
    <script type="text/javascript">
    setTimeout(function () {
   window.location.href= '../buspasses.php'; // the redirect goes here

},2000); 
</script>
<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>