<script type="text/javascript">
	window.print(); 
</script>
<link href="<?php echo base_url('assets/user')?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="<?php echo base_url('assets/user')?>/css/freelancer.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/user')?>/lib/noty.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/user')?>/lib/themes/metroui.css" rel="stylesheet">

  	<div class="card" style="width: 20rem;">
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item text-center"><h3>SELAMAT DATANG</h3><h5>Di Puskesmas Mekarmukti</h5>
	    	<h8>Jalan Raya Pantai Cijayana Mekarmukti Dekat Pasar Cijayana</h8>
		</li>
	    <li class="list-group-item text-center">
	    	<div class="row card-link"><?php echo $row->tgl_antrian_poli ?></div>
	    	<h4>ANTRIAN</h4><h1><?php echo $row->no_antrian_poli ?></h1><h6><?php echo $row->nama_poli ?></h6>
	    </li>
	    <li class="list-group-item text-center"><h3>TERIMAKASIH</h3></li>
	  </ul>
	</div>
<?php

?>
