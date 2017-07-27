</div>	  <!-- /3 --> 
<div class="col-lg-3">
    <br>
    <?php
    if (file_exists("../temas/conejo/$p/sidebar_der.php")) {
        include "../temas/conejo/$p/sidebar_der.php";
    } else {
        include "../gestion/home/vista/sidebar_der.php";
    }
    ?>    
</div>
</div>	  <!-- /3 --> 
</div>  <!-- /2 -->
</div>	<!-- /1 -->

<?php
//include "home/vista/footer.php";
// cerramos la coneccion 
mysql_close($conexion);
?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../includes/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
