<div class="grid-form">
	<div class="grid-form1">
<ul class="pager">
	<li><a href="<?php echo site_url('footer/admin')?>">List</a></li>
	<li><a href="<?php echo site_url('footer/admin/create')?>">Add</a></li>
</ul>
<?php 
	if(isset($message) && !empty($message)){
		?>
		<div class="alert alert-info"><?php echo $message ?></div>
		<?php
	}
?>
<?php 
	$validation_error = validation_errors(); 
	if(!empty($validation_error)){
		?>
		<div class="alert alert-danger"><?php echo $validation_error ?></div>
		<?php
	}
?>
<?php echo form_open('footer/admin/create') ?><div class="form-group">
	<?php
		$input = array(
			'name' => 'type',
			'id' 		=> 'type',
			'class' => 'form-control',
		);
	?>
    <label for="type">Type</label>
	<?php echo form_input($input);?>
</div><div class="form-group">
	<?php
		$input = array(
			'name' => 'value',
			'id' 		=> 'value',
			'class' => 'form-control',
		);
	?>
    <label for="value">Value</label>
	<?php echo form_input($input);?>
</div>
<?php echo form_submit('submit', 'Save!','class="btn btn-primary" ');?>
<?php echo form_close();?>
</div>
</div>