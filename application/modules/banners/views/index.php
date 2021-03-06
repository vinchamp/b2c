<div class="grid-form">
	<div class="grid-form1">
<ul class="pager">
	<li><a href="<?php echo site_url('banners/admin')?>">List</a></li>
	<li><a href="<?php echo site_url('banners/admin/create')?>">Add</a></li>
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

	$this->table->set_heading('Title','Status','Banners','Sequence','Created On','Action');
	foreach($tbl_banners as $tbl_banner){
		
		if($tbl_banner->status  == 1){
				$statu =anchor('banners/admin/setstatus?status=0'.'&'.'id='.$tbl_banner->id,'Enable',array('title'=>'Enable','class'=>'btn btn-sm btn-info "'));
		}else{
				$statu =anchor('banners/admin/setstatus?status=1'.'&'.'id='.$tbl_banner->id,'Disable',array('title'=>'Disable','class'=>'btn btn-sm btn-danger '));	
		}
		if($tbl_banner->image == ''){

				$img=base_url().'assets/admin/images/BAnner.png';
			}else{

				$img=base_url().'assets/upload/banner_image/'.$tbl_banner->image;
			}
        $image = "<img class='img-circle' src='$img'  width='100px' height=100px >";
		$links = anchor('banners/admin/view/'.$tbl_banner->id,'view',array('title'=>'View Banner','class'=>'btn btn-sm btn-success'));
		$links .= ' | '.anchor('banners/admin/edit/'.$tbl_banner->id,'edit',array('title'=>'Edit Banner','class'=>'btn btn-sm btn-warning'));
		$links .= ' | '.anchor('banners/admin/remove/'.$tbl_banner->id,'remove',array('title'=>'remove Banner','class'=>'btn btn-sm btn-danger'));
		
		$this->table->add_row($tbl_banner->title,$statu,$image,$tbl_banner->sequence,$tbl_banner->created_on,$links);
		
	}
?>
<?php echo $this->table->generate();?>
<ul class="pagination">
<?php
	for($i=0;$i<$total_rows/$per_page;$i++){
		?>
		<li <?php echo ($i == $current_page)?'class="active" ':''?>><a href="<?php echo site_url('banners/admin/index/'.$i)?>"><?php echo $i ?></a></li>
		<?php
	}
?>
</ul>
</div>
</div>