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
						<a href="#">Gallery</a>
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-picture"></i> Gallery</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<p class="center">
							<button id="toggle-fullscreen" class="btn btn-large btn-primary visible-desktop" data-toggle="button">Toggle Fullscreen</button>
						</p>
						<br/>
						<ul class="thumbnails gallery">
														<li id="image-1" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/1.jpg)" title="Sample Image 1" href="/static/theme/manage/img/gallery/1.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/1.jpg" alt="Sample Image 1"></a>
							</li>
														<li id="image-2" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/2.jpg)" title="Sample Image 2" href="/static/theme/manage/img/gallery/2.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/2.jpg" alt="Sample Image 2"></a>
							</li>
														<li id="image-3" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/3.jpg)" title="Sample Image 3" href="/static/theme/manage/img/gallery/3.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/3.jpg" alt="Sample Image 3"></a>
							</li>
														<li id="image-4" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/4.jpg)" title="Sample Image 4" href="/static/theme/manage/img/gallery/4.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/4.jpg" alt="Sample Image 4"></a>
							</li>
														<li id="image-5" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/5.jpg)" title="Sample Image 5" href="/static/theme/manage/img/gallery/5.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/5.jpg" alt="Sample Image 5"></a>
							</li>
														<li id="image-6" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/6.jpg)" title="Sample Image 6" href="/static/theme/manage/img/gallery/6.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/6.jpg" alt="Sample Image 6"></a>
							</li>
														<li id="image-7" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/7.jpg)" title="Sample Image 7" href="/static/theme/manage/img/gallery/7.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/7.jpg" alt="Sample Image 7"></a>
							</li>
														<li id="image-8" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/8.jpg)" title="Sample Image 8" href="/static/theme/manage/img/gallery/8.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/8.jpg" alt="Sample Image 8"></a>
							</li>
														<li id="image-9" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/9.jpg)" title="Sample Image 9" href="/static/theme/manage/img/gallery/9.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/9.jpg" alt="Sample Image 9"></a>
							</li>
														<li id="image-10" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/10.jpg)" title="Sample Image 10" href="/static/theme/manage/img/gallery/10.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/10.jpg" alt="Sample Image 10"></a>
							</li>
														<li id="image-11" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/11.jpg)" title="Sample Image 11" href="/static/theme/manage/img/gallery/11.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/11.jpg" alt="Sample Image 11"></a>
							</li>
														<li id="image-12" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/12.jpg)" title="Sample Image 12" href="/static/theme/manage/img/gallery/12.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/12.jpg" alt="Sample Image 12"></a>
							</li>
														<li id="image-13" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/13.jpg)" title="Sample Image 13" href="/static/theme/manage/img/gallery/13.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/13.jpg" alt="Sample Image 13"></a>
							</li>
														<li id="image-14" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/14.jpg)" title="Sample Image 14" href="/static/theme/manage/img/gallery/14.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/14.jpg" alt="Sample Image 14"></a>
							</li>
														<li id="image-15" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/15.jpg)" title="Sample Image 15" href="/static/theme/manage/img/gallery/15.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/15.jpg" alt="Sample Image 15"></a>
							</li>
														<li id="image-16" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/16.jpg)" title="Sample Image 16" href="/static/theme/manage/img/gallery/16.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/16.jpg" alt="Sample Image 16"></a>
							</li>
														<li id="image-17" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/17.jpg)" title="Sample Image 17" href="/static/theme/manage/img/gallery/17.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/17.jpg" alt="Sample Image 17"></a>
							</li>
														<li id="image-18" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/18.jpg)" title="Sample Image 18" href="/static/theme/manage/img/gallery/18.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/18.jpg" alt="Sample Image 18"></a>
							</li>
														<li id="image-19" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/19.jpg)" title="Sample Image 19" href="/static/theme/manage/img/gallery/19.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/19.jpg" alt="Sample Image 19"></a>
							</li>
														<li id="image-20" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/20.jpg)" title="Sample Image 20" href="/static/theme/manage/img/gallery/20.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/20.jpg" alt="Sample Image 20"></a>
							</li>
														<li id="image-21" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/21.jpg)" title="Sample Image 21" href="/static/theme/manage/img/gallery/21.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/21.jpg" alt="Sample Image 21"></a>
							</li>
														<li id="image-22" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/22.jpg)" title="Sample Image 22" href="/static/theme/manage/img/gallery/22.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/22.jpg" alt="Sample Image 22"></a>
							</li>
														<li id="image-23" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/23.jpg)" title="Sample Image 23" href="/static/theme/manage/img/gallery/23.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/23.jpg" alt="Sample Image 23"></a>
							</li>
														<li id="image-24" class="thumbnail">
								<a style="background:url(/static/theme/manage/img/gallery/thumbs/24.jpg)" title="Sample Image 24" href="/static/theme/manage/img/gallery/24.jpg"><img class="grayscale" src="/static/theme/manage/img/gallery/thumbs/24.jpg" alt="Sample Image 24"></a>
							</li>
													</ul>
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