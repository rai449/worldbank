<!DOCTYPE html>
<html lang="">
	<head>
		<title>Edit Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="google-site-verification" content="uWO9eGor8AFjlLI_L2zkP-Y0XT64O6JBNi4MxsesDo8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	</head>
	<body id="top">
	<div class="container">
<div class="title-wrapper">
  <div class="top_headind_band">
    <div class="form-signin-heading">  <i class="fa <?php //echo $icon; ?>"></i><?php //echo $bread_crumb; ?>
    </div>
  </div>
</div>
<div class="border-gap">
  <div class="error">
    <ul>
     
    </ul>
  </div>
  <?php 
          $attributes = array('name' => 'bank', 'id' => 'bank', 'class'=>'form-signin', 'role'=>'form');
            echo form_open('save',$attributes);
            echo form_hidden('id',isset($bank->id)?$bank->id:'');   
         ?>
  <div class="form-wrapper-sm">
    <div class="fild-wrapper-sm border p-4">
		<h4 class="text-center">Edit Data</h4>
		<hr>
		<div class="bot-gap-10 row">     
			<div class="col-2"> 
				<?php echo form_label('Income Level: ', '');?>
			</div>     
			<div class="col-10">
				<?php echo form_input(array('type'=>'text','name'=>'incomeLevel','class'=>'form-control field_log','value'=>set_value('incomeLevel',isset($bank->incomeLevel)?$bank->incomeLevel:''), 'required'=>'required' ,'style'=>'margin-bottom:5px;'));?> 
				<?php echo form_error('incomeLevel', '<div class="error">', '</div>'); ?>
			</div>
		</div>
		<div class="bot-gap-10 row">     
			<div class="col-2"> 
				<?php echo form_label('Latitude: ', '');?>
			</div>     
			<div class="col-10">
				<?php echo form_input(array('type'=>'text','name'=>'latitude','class'=>'form-control field_log','value'=>set_value('latitude',isset($bank->latitude)?$bank->latitude:''), 'required'=>'required' ,'style'=>'margin-bottom:5px;'));?> 
				<?php echo form_error('latitude', '<div class="error">', '</div>'); ?>
			</div>
		</div>
		<div class="bot-gap-10 row">     
			<div class="col-2"> 
				<?php echo form_label('Longitude: ', '');?>
			</div>     
			<div class="col-10">
				<?php echo form_input(array('type'=>'text','name'=>'longitude','class'=>'form-control field_log','value'=>set_value('longitude',isset($bank->longitude)?$bank->longitude:''), 'required'=>'required' ,'style'=>'margin-bottom:5px;'));?> 
				<?php echo form_error('longitude', '<div class="error">', '</div>'); ?>
			</div>
		</div>
  		<div class="bot-gap-10 row">     
			<div class="col-2"> 
				<?php echo form_label('Capital City: ', '');?>
			</div>     
			<div class="col-10">
				<?php echo form_input(array('type'=>'text','name'=>'capitalCity','class'=>'form-control field_log','value'=>set_value('capitalCity',isset($bank->capitalCity)?$bank->capitalCity:''), 'required'=>'required' ,'style'=>'margin-bottom:5px;'));?> 
				<?php echo form_error('capitalCity', '<div class="error">', '</div>'); ?>
        	</div>
    	</div>    
		<div class="col-12 p-0">
			<div class="text-right">
				<?php echo form_submit(array('value'=>'Update','class'=>'update rge-btn add btn btn-primary'));  ?>
				<a href="<?php echo base_url('/')?>" class="btn btn-danger text-white">Back</a>
			</div>
			
			<?php echo form_close();?> </div>   
      	</div>
    </div>
  </div>
</div>
</div>
</body>
</html>