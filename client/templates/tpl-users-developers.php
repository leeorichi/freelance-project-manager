<?php $users = $fpm->getFreelancers(); ?>
	      <div class="table-responsive">
			<table class="table">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Role</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                 <?php foreach($users as $user) { ?>
                  <tr>
                   <td><a href="view-users.php?id=<?php print $user['id']; ?>"><?php print $user['username']; ?></a></td>
                   <td <?php print ($user['role'] == 'admin' ? 'class="text-success"' : ''); ?>><?php print $user['role']; ?></td>
                   <td><a href="view-users.php?id=<?php print $user['id']; ?>" class="btn btn-info btn-xs">View Details</a></td>
                  </tr>
                 <?php } ?>
              </tbody>
            </table>
		 </div>