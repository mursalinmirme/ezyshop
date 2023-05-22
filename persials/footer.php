
<!-- scripting files -->
<script src="assets/javascript/bootstrap.min.js"></script>
<script src="assets/javascript/bootstrap.bundle.min.js"></script>
<script src="assets/javascript/jquery.min.js"></script>
<!-- alertify JavaScript code -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    <?php if(isset($_SESSION['logout_msg'])){ ?>
        alertify.set('notifier','position', 'top-right');
            alertify.success('<?php echo $_SESSION['logout_msg']; ?>');
        <?php 
        unset($_SESSION['logout_msg']);
    } ?>
</script>
</body>
</html>