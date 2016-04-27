<div class="grid-form">
	<div class="grid-form1">
<ul class="pager">
	<li><a href="<?php echo site_url('menu/admin/')?>">List</a></li>
	<li><a href="<?php echo site_url('menu/admin/create')?>">Add</a></li>
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
<?php echo form_open('menu/admin/edit/'.$menu->id) ?><div class="form-group">
	<?php
		$input = array(
			'name' => 'name',
			'id' 		=> 'name',
			'class' => 'form-control',
			'value' => $menu->name,
		);
	?>
    <label for="name">Name</label>
	<?php echo form_input($input);?>
</div><div class="form-group">
	<?php
		$input = array(
			'name' => 'link',
			'id' 		=> 'link',
			'class' => 'form-control',
			'value' => $menu->link,
		);
	?>
    <label for="link">Link</label>
	<?php echo form_input($input);?>
</div>
<?php
$this->load->helper('menu/menu');
$root = get_all_menus();
?>
<div class="form-group">
	
    <label for="parent_id">Parent Id</label>
	<select name="parent_id" id="parent_id" class="form-control customselect">
		<option value="-1">Root</option>
		<?php foreach($root as $r):?>
		<option value="<?php echo $r->id; ?>" <?php echo ($r->id == $menu->parent_id )?'selected':''; ?>><?php echo $r->name; ?></option>
		<?php endforeach;?>
	</select>
</div>
<div class="form-group">
	<?php
		$input = array(
			'name' => 'order',
			'id' 		=> 'order',
			'class' => 'form-control',
			'value' => $menu->order,
		);
	?>
    <label for="order">Order</label>
	<?php echo form_input($input);?>
</div>
<?php echo form_submit('submit', 'Save!','class="btn btn-primary" ');?>
<?php echo form_close();?>
</div>
</div>