<div class="grid-form">
	<div class="grid-form1">
<ul class="pager">
	<li><a href="<?php echo site_url('notification/admin/')?>">List</a></li>
	<li><a href="<?php echo site_url('notification/admin/')?>">Add</a></li>
</ul>
<?php
	$template = array(
        'table_open'            => '<table class="table table-stripped table-bordered">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

	$this->table->set_template($template);

	//$this->table->set_heading('Notification ID','User','Message','Status','Action');
	$img= base_url().'assets/admin/images/comingsoon.png';
	$image = "<img class='img-circle' src='$img'   >";
	$this->table->add_row($image);
?>
<?php echo $this->table->generate();?>
<!--ul class="pagination">
<?php
	for($i=0;$i<$total_rows/$per_page;$i++){
		?>
		<li <?php echo ($i == $current_page)?'class="active" ':''?>><a href="<?php echo site_url('notification/admin/index/'.$i)?>"><?php echo $i ?></a></li>
		<?php
	}
?>
</ul-->
</div>
</div>