<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Halaman Masuk</title>

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

</head>

<body>

  <form id="formLogin" class="form" action="<?php echo base_url(); ?>admin/login" method="post" enctype="multipart/form-data">
    <div class="login-form">
      <h1>PorKat</h1>
      <div class="form-group ">
        <input type="text" class="form-control" placeholder="Id Pengguna" id="id_pengguna" name="id_pengguna">
        <i class="fa fa-user"></i>
      </div>
      <div class="form-group log-status">
        <input type="password" class="form-control" placeholder="Katasandi" id="katasandi" name="katasandi">
        <i class="fa fa-lock"></i>
      </div>
      <span class="alert" id="error_message">Id Pengguna atau Katasandi Salah</span>
      <input type="submit" class="log-btn" value="Masuk"/>
    </div>
  </form>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="<?php echo base_url(); ?>/assets/js/index.js"></script>
  <script type="text/javascript">
  $(document).ready(function()
  {
    $("#formLogin").submit(function(e)
    {
      e.preventDefault();

      $.ajax({
        type: "POST",
        url:"<?php echo base_url(); ?>admin/login",
        data: $(this).serialize()
      }).done(function(responseLogin){
			if(responseLogin!='')
			{
				alert("sadsadsa");
			}
			else
			{
				window.location.href = "<?php echo base_url(); ?>";
			}
		});
      // $.ajax({
      //   url:"<?php echo base_url(); ?>admin/login",
      //   type:"POST",
      //   data:$(this).serialize()
      // }).done(function(responseLogin){
      //   if(responseLogin!='')
      //   {
      //     alert('gagal');
      //     document.getElementById("error_message").innerHTML=responseLogin;
      //     $('.alert').fadeIn(500);
      //   }
      //   else
      //   {
      //     alert('sukses');
      //     window.location.href = "<?php echo base_url(); ?>/sukses";
      //   }
      // });
    });
  });
  </script>

</body>
</html>
