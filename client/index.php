<?php include('header.php'); ?>
<!-- Sidebar -->
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="view-projects.php"><i class="glyphicon glyphicon-fire"></i> Projects</a></li>
                    <li><a href="view-tasks.php"><i class="glyphicon glyphicon-tasks"></i> Tasks</a></li>
                    <li><a href="view-history.php"><i class="glyphicon glyphicon-calendar"></i> History</a></li>
                </ul>
             </div>
		  </div>
<!-- /Sidebar -->

<div class="col-md-10">
			<div class="row">
			 <div class="col-md-12">
			   <h2>Welcome, <span class="welcome"><?php print $fpm_username_details['first_name'] . " " . $fpm_username_details['last_name']; ?>!</span></h2>
			 </div>
			</div>
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Today's Tasks</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				<?php $tasks = $fpm->getTodaysTasks(); ?>
				  				 <?php foreach($tasks as $task) { //print_r($task); ?>
				  				<div class="row">
				  				 <div class="col-md-6">	 	
				  				 	<h4 class="thin">[<span class="project_name"><?php print $task['pname']; ?></span>] <?php print $task['task']; ?></h4>
				  				 	<p class="assignee">assigned to <span class="assignee"><?php print $task['assignee']; ?></span></p>
				  				 </div>
				  				 <div class="col-md-6">
				  				 	<div class="progress push-down">
				  					 <div class="progress-bar" role="progressbar" aria-valuenow="<?php print $task['percent']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php print $task['percent']; ?>%;">
				    				  <?php print $task['percent']; ?>%<br/>
				  					 </div>
									</div>
									<a href="view-task.php?id=<?php print $task['id']; ?>" class="btn btn-default btn-block">View Task</a>
								  </div>
				  				 </div>	
				  				 <hr/>
				  				 <?php } ?>
							</div>
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Reminders</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>

		  </div>	
		</div>

<?php include('footer.php'); ?>