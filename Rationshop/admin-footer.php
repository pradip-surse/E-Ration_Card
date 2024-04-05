</div>



   
    <!-- <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script> -->
    

    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
   
    <script type="text/javascript">
      // $('#sl').click(function(){
      //   $('#tl').loadingBtn();
      //   $('#tb').loadingBtn({ text : "Signing In"});
      // });
      
      // $('#el').click(function(){
      //   $('#tl').loadingBtnComplete();
      //   $('#tb').loadingBtnComplete({ html : "Sign In"});
      // });
      
      $('#feedback1').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
      });

      $('#feedback2').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
      });


      $('#feedback3').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
      });
      
      $('.demoSelect').select2();
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
      
        var map = $('#demo-map');
        map.vectorMap({
          map: 'world_en',
          backgroundColor: '#fff',
          color: '#333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#C8EEFF', '#006491'],
          values: sample_data,
          normalizeFunction: 'polynomial'
        });
      });
    </script>
  </body>
</html>