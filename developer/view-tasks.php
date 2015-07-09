<?php include('header.php'); ?>
<!-- Sidebar -->
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="view-clients.php"><i class="glyphicon glyphicon-record"></i> Clients</a></li>
                    <li><a href="view-projects.php"><i class="glyphicon glyphicon-fire"></i> Projects</a></li>
                    <li class="current submenu open">
                         <a href="#">
                            <i class="glyphicon glyphicon-tasks"></i> Tasks
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="view-tasks-user.php">My Tasks</a></li>
                            <li class="current"><a href="view-tasks.php">All</a></li>
                        </ul>
                    </li>
                    <li><a href="view-reminders.php"><i class="glyphicon glyphicon-pushpin"></i> Reminders</a></li>
                    <li><a href="view-history.php"><i class="glyphicon glyphicon-calendar"></i> History</a></li>
                    <li><a href="view-users.php"><i class="glyphicon glyphicon-user"></i> Users</a></li>
                    <li><a href="settings.php"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                </ul>
             </div>
		  </div>
<!-- /Sidebar -->
<div class="col-md-10">
			<div class="row">
			 <div class="col-md-10">
			   <h2>Tasks</h2>
			 </div>
			</div>
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="row">
		  				<div class="col-md-12">
		 <?php 
		 	   if(!isset($_GET['project']) && !isset($_GET['id'])) { 
		 			include('templates/tpl-tasks-all.php');
		 	   } elseif(isset($_GET['project']) && !isset($_GET['id'])) { 
		 	   		include('templates/tpl-tasks-project.php');
		 	   } elseif(isset($_GET['id']) && !isset($_GET['project'])) {
		 	   		include('templates/tpl-tasks-view.php');
			   } 
		 ?>					
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		  	
		  </div>	
		</div>
<?php include('footer.php'); ?>