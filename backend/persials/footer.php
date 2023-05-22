    <!-- javascript files are here -->
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <script src="assets/javascript/bootstrap.min.js"></script>
    <script src="assets/javascript/jquery.min.js"></script>
    <script src="assets/javascript/admin.js"></script>
    <!-- alertify JavaScript code -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        <?php if(isset($_SESSION['message'])){ ?>
            alertify.set('notifier','position', 'top-right');
               alertify.success('<?php echo $_SESSION['message']; ?>');
          <?php 
            unset($_SESSION['message']);
        } ?>
    </script>
  </body>
</html>