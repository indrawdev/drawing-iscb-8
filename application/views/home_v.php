<div class="row"  style="margin-top:20px">
	<div class="col-sm-12">
		<h2 class="title">Drawing 8 Besar - Indonesia Soccer Championship B</h2>
	</div>
</div>
<hr>
<div class="row">

	<div class="col-xs-6 col-sm-4">
		
		<div class="panel panel-default">
			<div class="panel-heading heading-1">A</div>
			<div class="panel-body">
				<ol id="group1" class='simple_with_animation vertical'>
				<?php foreach($group1 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-4">
	</div>
	<div class="col-xs-6 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading heading-3">C</div>
			<div class="panel-body">
				<ol id="group3" class='simple_with_animation vertical'>
				<?php foreach($group3 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">

	</div>
	<div class="col-md-4">
		<img src="<?php echo base_url('assets/images/bg-knock-out.png'); ?>" class="img-responsive center-block">
	</div>
	<div class="col-md-4">

	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading heading-2">B</div>
			<div class="panel-body">
				<ol id="group2" class='simple_with_animation vertical'>
				<?php foreach($group2 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>	
			</div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-4"></div>
	<div class="col-xs-6 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading heading-4">D</div>
			<div class="panel-body">
				<ol id="group4" class='simple_with_animation vertical'>
				<?php foreach($group4 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
</div>