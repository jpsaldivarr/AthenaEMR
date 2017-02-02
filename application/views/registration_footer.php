  <footer class="app-footer"> 
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
        Copyright © 2016-2017 AthenaEMR Development Team / Gema Aji Wardian. For license info <a href="<?php echo base_url("LICENSE"); ?>">LICENSE</a>
      </div>
    </div>
  </div>
</footer>
</div>

  <script type="text/javascript" src="<?php echo base_url("assets/js/vendor.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/app.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/moment.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/transition.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/collapse.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap3-typeahead.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-datetimepicker.min.js"); ?>"></script>

  <script type="text/javascript">
    $('#clinic_id').change(function(){
        var clinic_id = $(this).val();
        $("#doctor_id > option").remove();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('registration/getDoctor'); ?>",
            data: {id: clinic_id},
            dataType: 'json',
            success:function(data){
                $.each(data,function(k, v){
                    var opt = $('<option />');
                    opt.val(k);
                    opt.text(v);
                    $('#doctor_id').append(opt);
                });
                //$('#state').append('<option value="' + id + '">' + name + '</option>');
            }
        });
    });
  </script>
</body>
</html>