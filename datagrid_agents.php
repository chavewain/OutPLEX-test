

	<?php 

		debug_backtrace() || die ("Direct access not permitted");

		include 'connect.php'; 

		$sql = "SELECT a.*, u.name From agents a LEFT JOIN users u ON a.user = u.id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0) { ?>
            
            <div class="alert alert-primary fade in alert-dismissible show" style="margin-top:18px;">
     <strong>Alert!</strong> No reccords to show.
</div>
        
        <?php }else{ ?>

        	<div class="p-2 rounded bg-light mt-5">	

	         	<table class="table table-striped">
				  <thead>
				    <tr>

				      <th scope="col" class="border-0">ID</th>
				      <th scope="col" class="border-0">Agent</th>
				      <th scope="col" class="border-0">Score</th>
				      <th scope="col" class="border-0">Rated By</th>
				      <th scope="col" class="border-0" style="width: 140px">Actions</th>

				    </tr>
				  </thead>
				  <tbody>

				  	<?php while($row = mysqli_fetch_assoc($result)) { ?>

				  		<tr>
					      <th scope="row"><?= $row['id']; ?></th>
					      <td><?= $row['agent']; ?></td>
					      <td><?= $row['score']; ?></td>
					      <td><?= $row['name']; ?></td>
					      <td>
					      	<a href="edit.php?agent=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
					      	<a href="delete.php?agent=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
					      </td>
					    </tr>
				  		
				  	<?php } ?>
		    
		    
		    
				  </tbody>
				</table>
         	
       			<?php  } mysqli_close($conn); ?>

	
</div>