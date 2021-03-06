<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<title>Title</title>	
	<?php include View('block/manage/head');?>		
</head>
<body>		
	<?php include View('block/manage/topbar');?>
		<div class="container-fluid">
		<div class="row-fluid">
			<?php include View('block/manage/leftmenu');?>			
			<noscript><div class="alert alert-block span10"><h4 class="alert-heading">Warning!</h4><p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p></div></noscript>
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Tour</a>
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
				<div class="box span12 tour">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-globe"></i> Tour</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<a href="tour.html">Click Here to restart the tour</a><br/>
						You can create Custom Tour, like this. <br/> For more help on implementing tour go <a href="http://pushly.github.com/bootstrap-tour/index.html" target="_blank">here</a>
					</div>
				</div><!--/span-->
			</div><!--/row-->

					<!-- content ends -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		<?php include View('block/manage/footer');?>		
	</div><!--/.fluid-container-->
	<?php include View('block/manage/js');?>		
</body>
</html>