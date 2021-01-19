<!-- Footer -->
  <footer class="footer bg-light" style="background: #00354E!important">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
        
          <p class="text-muted small mb-4 mb-lg-0">Copyright &copy;  2010 - <?php print date('Y', time());?> <a href="https://baulphp.com/">BAULPHP.COM</a> .</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
       
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery('#render-data').DataTable({
		  	rowReorder: {
            selector: 'td:nth-child(2)'
        },
		responsive: true,
		  	"language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },
          "paging": true,
          "processing": true,
          'serverMethod': 'post',
          "ajax": "data.php",
          dom: 'lBfrtip',
          buttons: [
               'excel',  'csv', 'pdf', 'print', 'copy',
          ],
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
      } );
    } );

  </script>
</body>
</html>