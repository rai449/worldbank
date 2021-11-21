<!DOCTYPE html>
<html lang="">
	<head>
		<title>List</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="google-site-verification" content="uWO9eGor8AFjlLI_L2zkP-Y0XT64O6JBNi4MxsesDo8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	</head>
	<body id="top">
		<div class="container">
			<div class="title-wrapper">
				<h1 class="text-center">List Page</h1>
				<div class="top_headind_band">
					<div class="product_txt alignleft"><i class="fa <?php // $icon; ?>"></i><?php //echo $bread_crumb; ?></div>

					<div class="form_txt_top">
						<?php 
							if($this->session->has_userdata('err_msg')){
								echo $this->session->userdata('err_msg');
								$this->session->unset_userdata('err_msg');
							}
						?>
					</div>
				</div>
			</div>
		
			<div id="container" >  
				<div id="dynamic">  
					<table cellpadding="0" cellspacing="0" border="0" class="display table" id="example" align="center" >
						<thead class="h_th">
							<th width="60" class="sorting_disabled">Sl No</th>
							<th width="60" class="sorting_disabled">Iso2 code</th>
							<th width="60" class="sorting_disabled">Name</th>
							<th width="60" class="sorting_disabled">Region</th>
							<th width="60" class="sorting_disabled">Income level</th>
							<th width="60" class="sorting_disabled">Capital city</th>
							<th width="60" class="sorting_disabled">Latitude</th>
							<th width="60" class="sorting_disabled">Longitude</th>
							<th width="10" class="sorting_disabled"></th>
						</thead>
							<tbody>	
								<?php 
								if(!empty($banks)){
									foreach($banks as $val){
										?>
										<tr>
										<td><?php echo $val['id']; ?></td>
										<td><?php echo $val['iso2Code']; ?></td>	
										<td><?php echo $val['name']; ?></td>	
										<td><?php echo $val['region']; ?></td>	
										<td><?php echo $val['incomeLevel']; ?></td>	
										<td><?php echo $val['capitalCity']; ?></td>	
										<td><?php echo $val['latitude']; ?></td>	
										<td><?php echo $val['longitude']; ?></td>
										<td><a class="font-icon btn btn-primary" href="<?php echo base_url('update/'.$val['id'])?>">Edit</a></td>
									</tr>
									<?php }
								}else{
									?>
									<tr><td colspan="8">No record found</td> </tr>
									<?php
								}
								?>	
							</tbody>
						<tfoot>
						</tfoot>
					</table>
				</div>
			</div>
			<style>
				.title-wrapper {padding:2%;}
			</style>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function() { $('.table').DataTable(); } );
		</script>
	</body>
</html>