	<?php
		include('menu.php');
	?>
	<!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Customer Service</li>
			</ol>
		</div><!--/.row-->
	<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chat Customer Service</h1>
			</div>
		</div><!--/.row-->

	<div class="panel panel-default chat">
		<div class="panel-body">
			<ul>
				<li class="left clearfix" style="background-color:#e6ffee;"><span class="chat-img pull-left">
					<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
					</span>
					<div class="chat-body clearfix">
						<div class="header"><strong class="primary-font">Customer Service</strong></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
						<small class="text-muted">32 mins ago </small>
					</div>
				</li>
				<li class="right clearfix"><span class="chat-img pull-right">
					<img src="http://placehold.it/60/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
					</span>
					<div class="chat-body clearfix">
						<p style="text-align:right;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
						<small class="pull-right text-muted">6 mins ago</small>
					</div>
				</li>
				
				
			</ul>
		</div>
		<div class="panel-footer">
			<div class="input-group">
				<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
					<button class="btn btn-primary btn-md" id="btn-chat">Send</button>
			</span></div>
		</div>
	</div>
		
		<?php
		include('footer.php');
	?>