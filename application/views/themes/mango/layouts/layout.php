
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<base href="<?php echo site_url();?>">
	<meta charset="utf-8">
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	   More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<title>Money Management App</title>
	<meta name="description" content="Mango is a slick and responsive Admin Template build with modern techniques like HTML5 and CSS3 to be used for backend solutions of any size.">
	<meta name="author" content="Deni Permana">

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- iPhone: Don't render numbers as call links -->
	<meta name="format-detection" content="telephone=no">
	
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
	<!-- The Styles -->
	
	<?php 
	display_css(array(
	'mango/style.css',
	'mango/grid.css',
	'mango/layout.css',
	'mango/icons.css',
	'mango/fonts/font-awesome.css',	
	'mango/external/jquery-ui-1.8.21.custom.css',
	'mango/external/jquery.chosen.css',
	'mango/external/jquery.cleditor.css',
	'mango/external/jquery.colorpicker.css',
	'mango/external/jquery.elfinder.css',
	'mango/external/jquery.fancybox.css',
	'mango/external/jquery.jgrowl.css',
	'mango/external/jquery.plupload.queue.css',
	'mango/external/syntaxhighlighter/shCore.css',
	'mango/external/syntaxhighlighter/shThemeDefault.css',
	'mango/elements.css',
	'mango/forms.css',
	'mango/print-invoice.css',
	'mango/typographics.css',
	'mango/media-queries.css',
	'mango/ie-fixes.css',
	));
	?>
	<!--[if IE 8]><?php display_css('mango/fonts/font-awesome-ie7.css') ?><![endif]-->	<!-- The Scripts -->	
	<!-- JavaScript at the top (will be cached by browser) -->
	
	<!-- Load Webfont loader -->
	<script type="text/javascript">
		window.WebFontConfig = {
			google: { families: [ 'PT Sans:400,700' ] },
			active: function(){ $(window).trigger('fontsloaded') }
		};
	</script>
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js"></script> -->
	
	<!-- Essential polyfills -->
	<?php display_js(array(
	'mylibs/polyfills/modernizr-2.6.1.min.js',
	'mylibs/polyfills/respond.js',
	'mylibs/polyfills/matchmedia.js',
	));
	?>
	<!--[if lt IE 9]><script src="assets/js/mylibs/polyfills/selectivizr-min.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="assets/js/mylibs/charts/excanvas.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="assets/js/mylibs/polyfills/classlist.js"></script><![endif]-->
	
	
	
	<!-- Grab frameworks from CDNs -->
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<!-- 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
	<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
	
		<!-- Do the same with jQuery UI -->
<!-- 	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script> -->
	<script>window.jQuery.ui || document.write('<script src="assets/js/libs/jquery-ui-1.8.21.min.js"><\/script>')</script>
	
		<!-- Do the same with Lo-Dash.js -->
<!-- 	<script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.4.2/lodash.min.js"></script> -->
	<script>window._ || document.write('<script src="assets/js/libs/lodash.min.js"><\/script>')</script>
	
	
	
	<?php 
	display_js(array(
	'mylibs/jquery.hashchange.js',
	'mylibs/jquery.idle-timer.js',
	'mylibs/jquery.plusplus.js',
	'mylibs/jquery.jgrowl.js',
	'mylibs/jquery.scrollTo.js',
	'mylibs/jquery.ui.touch-punch.js',
	'mylibs/jquery.ui.multiaccordion.js',
	'mylibs/number-functions.js',
	'mylibs/forms/jquery.autosize.js',
	'mylibs/forms/jquery.checkbox.js',
	'mylibs/forms/jquery.chosen.js',
	'mylibs/forms/jquery.cleditor.js',
	'mylibs/forms/jquery.colorpicker.js',
	'mylibs/forms/jquery.ellipsis.js',
	'mylibs/forms/jquery.fileinput.js',
	'mylibs/forms/jquery.fullcalendar.js',
	'mylibs/forms/jquery.maskedinput.js',
	'mylibs/forms/jquery.mousewheel.js',
	'mylibs/forms/jquery.placeholder.js',
	'mylibs/forms/jquery.pwdmeter.js',
	'mylibs/forms/jquery.ui.datetimepicker.js',
	'mylibs/forms/jquery.ui.spinner.js',
	'mylibs/forms/jquery.validate.js',
	'mylibs/forms/uploader/plupload.js',
	'mylibs/forms/uploader/plupload.html5.js',
	'mylibs/forms/uploader/plupload.html4.js',
	'mylibs/forms/uploader/plupload.flash.js',
	'mylibs/forms/uploader/jquery.plupload.queue/jquery.plupload.queue.js',
	'mylibs/charts/jquery.flot.js',
	'mylibs/charts/jquery.flot.orderBars.js',
	'mylibs/charts/jquery.flot.pie.js',
	'mylibs/charts/jquery.flot.resize.js',
	'mylibs/explorer/jquery.elfinder.js',
	'mylibs/fullstats/jquery.css-transform.js',
	'mylibs/fullstats/jquery.animate-css-rotate-scale.js',
	'mylibs/fullstats/jquery.sparkline.js',
	'mylibs/syntaxhighlighter/shCore.js',
	'mylibs/syntaxhighlighter/shAutoloader.js',
	'mylibs/dynamic-tables/jquery.dataTables.js',
	'mylibs/dynamic-tables/jquery.dataTables.tableTools.zeroClipboard.js',
	'mylibs/dynamic-tables/jquery.dataTables.tableTools.js',
	'mylibs/gallery/jquery.fancybox.js',
	'mylibs/tooltips/jquery.tipsy.js',
	'mango.js',
	'plugins.js',
	'script.js',
	'app.js',
	));
	?>
	
</head>
<body>

	<!----------------------->
	<!-- Some dialogs etc. -->

	<!-- The loading box -->
<!--
	<div id="loading-overlay"></div>
	<div id="loading">
		<span>Loading...</span>
	</div>
-->
	<!-- End of loading box -->
	<!-- Message Dialog -->
	<div style="display: none;" id="dialog_message" title="Conversation: John Doe">
		<div class="spacer"></div>
		<div class="messages full chat">
			
			<div class="msg reply">
				<img src="assets/img/icons/packs/iconsweets2/25x25/user-2.png "/>
				<div class="content">
					<h3><a href="pages_profile.html">John Doe</a> <span>says:</span><small>3 hours ago</small></h3>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
					et dolore magna aliquyam erat, sed diam voluptua.</p>
				</div>
			</div>
			
			<div class="msg">
				<img src="assets/img/icons/packs/iconsweets2/25x25/user-2.png"/>
				<div class="content">
					<h3><a href="pages_profile.html">Peter Doe</a> <span>says:</span><small>5 hours ago</small></h3>
					<p>At vero eos et accusam et justo duo dolores et ea rebum.
					Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		
		</div><!-- End of .messages -->
		
		<div class="actions">
			<div class="left">
				<input style="width: 330px;" type="text" name=d3_message id=d3_message placeholder="Type your message..."/>
			</div>
			<div class="right">
				<button>Send</button>
				<button class="grey">Cancel</button>
			</div>
		</div><!-- End of .actions -->
		
	</div><!-- End of #dialog_message -->
	
	<script>
	$$.ready(function() {
		$( "#dialog_message" ).dialog({
			autoOpen: false,
			width: 500,
			modal: true
		}).find('button').click(function(){
			$(this).parents('.ui-dialog-content').dialog('close');
		});
		
		$( ".open-message-dialog" ).click(function() {
			$( "#dialog_message" ).dialog( "open" );
			return false;
		});
	});
	</script>
	<!-- End of Message Dialog -->
	
	<!--------------------------------->
	<!-- Now, the page itself begins -->
	<!--------------------------------->
	
	<!-- The toolbar at the top -->
	<section id="toolbar">
		<div class="container_12">
		
			
			
			<!-- Right side -->
			<div class="right">
				<ul>
				
					<li><a href="pages_profile.html"><span class="icon i14_admin-user"></span>Profile</a></li>
					
					<li>
						<a href="#"><span>3</span>Messages</a>
						
						<!-- Mail popup -->
						<div class="popup">
							<h3>New Messages</h3>
							
							<!-- Button bar -->
							<a class="button flat left grey" onclick="$(this).parent().fadeToggle($$.config.fxSpeed)">Close</a>
							<a class="button flat right" href="tables_dynamic.html">Inbox</a>
							
							<!-- The mail content -->
							<div class="content mail">
								<ul>
								
									<li>
										<div class="avatar">
											<img src="assets/img/elements/mail/avatar.png" height=40 width=40/>
										</div>
										<div class="info">
											<strong>John Doe</strong>
											<span>Thanks for your theme!</span>
											<small>09:32 am</small>
										</div>
										<div class="text">
											<p>Hey Admin!</p>
											<p>I've purchased your admin template and it's great :)</p>
											<p>A happy customer</p>
											<div class="actions">
												<a href="javascript:void(0);" class="left open-message-dialog">Reply</a>
												<a onclick="$(this).parent().parent().parent().slideToggle($$.config.fxSpeed)" class="red right" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</li>
									
									<li>
										<div class="avatar">
											<img src="assets/img/elements/mail/mail.png" height=40 width=40/>
										</div>
										<div class="info">
											<strong>System</strong>
											<span>New comment</span>
											<small>08:47 am</small>
										</div>
										<div class="text">
											<p>Hello,</p>
											<p>There is one new comment on your theme.</p>
											<p>Go to Comments page to see it.</p>
											<div class="actions">
												<a href="javascript:void(0);" class="left open-message-dialog">Reply</a>
												<a onclick="$(this).parent().parent().parent().slideToggle($$.config.fxSpeed)" class="red right" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</li>
									
									<li>
										<div class="avatar">
											<img src="assets/img/elements/mail/mail.png" height=40 width=40/>
										</div>
										<div class="info">
											<strong>Stranger</strong>
											<span>[SPAM] ---</span>
											<small>Yesterday</small>
										</div>
										<div class="text">
											<p>[...]</p>
											<div class="actions">
												<a href="javascript:void(0);" class="left open-message-dialog">Read</a>
												<a onclick="$(this).parent().parent().parent().slideToggle($$.config.fxSpeed)" class="red right" href="javascript:void(0);">Delete</a>
											</div>                            
										</div>
									</li>
									
								</ul>
							</div><!-- End of .contents -->
							
						</div><!-- End of .popup -->
					</li><!-- End of li -->					
					<li class="red"><a href="login.html">Logout</a></li>
					
				</ul>
			</div><!-- End of .right -->
			
			<!-- Phone only items -->
			<div class="phone">
				
				<!-- User Link -->
				<li><a href="pages_profile.html"><span class="icon icon-user"></span></a></li>
				<!-- Navigation -->
				<li><a class="navigation" href="#"><span class="icon icon-list"></span></a></li>
			
			</div><!-- End of phone items -->
			
		</div><!-- End of .container_12 -->
	</section><!-- End of #toolbar -->
	
	<!-- The header containing the logo -->
	<header class="container_12">
		<div style="height:20px;">&nbsp;</div>
	</header><!-- End of header -->
	
	<!-- The container of the sidebar and content box -->
	<div role="main" id="main" class="container_12 clearfix">
	
		<!-- The blue toolbar stripe -->
		<section class="toolbar">
			<div class="user">
				<div class="avatar">
					<img src="assets/img/layout/content/toolbar/user/avatar.png" />
					<span>3</span>
				</div>
				<span>Administrator</span>
				<ul>
					<li><a href="javascript:$$.settings();">Settings</a></li>
					<li><a href="pages_profile.html">Profile</a></li>
					<li class="line"></li>
					<li><a href="login.html">Logout</a></li>
				</ul>
			</div>
			
			<input type="search" data-source="extras/search.php" placeholder="Search..." autocomplete="off" class="tooltip" title="e.g. Peach" data-gravity=s>
		</section><!-- End of .toolbar-->
		
		<!-- The sidebar -->
		<aside>
			<div class="top">
			
				<!-- Navigation -->
				<nav><ul class="collapsible accordion">
				
					<li class="">
						<a href="<?php echo site_url('dashboard')?>">
							<img src="assets/img/icons/packs/fugue/16x16/dashboard.png" alt="Dashboard" height="16" width="16" />Dashboard
						</a>
					</li>
					
					<li class="current">
						<a href="javascript:void(0);"><img src="assets/img/icons/packs/fugue/16x16/ui-layered-pane.png" alt="" height=16 width=16>Accounts</span></a>
						<ul>
							<li><a href="<?php echo site_url('accounts')?>"><span class="icon icon-list"></span>List Accounts</a></li>

						</ul>
					</li>
					
					<li>
						<a href="javascript:void(0);"><img src="assets/img/icons/packs/fugue/16x16/application-form.png" alt="" height=16 width=16>Categories</a>
						<ul>
							<li><a href="forms.html"><span class="icon icon-list-alt"></span>Category List</a></li>
							<li><a href="forms_validation.html"><span class="icon icon-warning-sign"></span>Add Category</a></li>
						</ul>
					</li>
					
					<li>
						<a href="javascript:void(0);"><img src="assets/img/icons/packs/fugue/16x16/table.png" alt="" height="16" width="16">Payee</a>
						<ul>
							<li><a href="statistics.html"><span class="icon icon-sitemap"></span>Payees</a></li>
							<li><a href="charts.html"><span class="icon icon-bar-chart"></span>Add Payee</a></li>
						</ul>
					</li>
					
					<li>
						<a href="javascript:void(0);">
						<img src="assets/img/icons/packs/fugue/16x16/chart.png" alt="" height="16" width="16">Report</a>
						<ul>
							<li><a href="tables_static.html"><span class="icon icon-check-empty"></span>Static</a></li>
							<li><a href="tables_dynamic.html"><span class="icon icon-table"></span>Dynamic</a></li>
							<li><a href="tables_full.html"><span class="icon icon-fullscreen"></span>Full</a></li>
						</ul>
					</li>
					
					<li>
						<a href="javascript:void(0);"><img src="assets/img/icons/packs/fugue/16x16/document-horizontal.png" alt="" height=16 width=16>Settings</a>
						<ul>
							<li><a href="login.html">Login</a></li>
							<li><a href="pages_profile.html">Profile</a></li>
							<li><a href="pages_invoice.html">Invoice<span class="badge grey">1 open</span></a></li>
							<li><a href="pages_faq.html">FAQ</a></li>
							<li><a href="pages_search.html">Search</a></li>
							<li><a href="pages_error_404.html">Error Page (404)</a></li>
						</ul>
					</li>
					
				</ul></nav><!-- End of nav -->				
			</div><!-- End of .top -->
			
			<div class="bottom sticky">
				<div class="divider"></div>
				<div class="progress">
					<div class="bar" data-title="Space" data-value="1285" data-max="5120" data-format="0,0 MB"></div>
					<div class="bar" data-title="Traffic" data-value="8.61" data-max="14" data-format="0.00 GB"></div>
					<div class="bar" data-title="Budget" data-value="20000" data-max="20000" data-format="$0,0"></div>
				</div>
				<div class="divider"></div>
				<div class="buttons">
					<a href="javascript:void(0);" class="button grey open-add-client-dialog">Add New Client</a>
					<a href="javascript:void(0);" class="button grey open-add-client-dialog">Open a Ticket</a>
				</div>
			</div><!-- End of .bottom -->
			
		</aside><!-- End of sidebar -->

		<!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort="true">
			<?php echo $content?>
		</section><!-- End of #content -->
		
	</div><!-- End of #main -->
	
	<!-- The footer -->
	<footer class="container_12">
		<span class="grid_12">
			Copyright &copy; 2012 YourCompany
		</span>
	</footer><!-- End of footer -->
	
	<!-- Spawn $$.loaded -->
	<script>
		$$.loaded();
	</script>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script defer src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js',
	<script defer>window.attachEvent('onload.js',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html>