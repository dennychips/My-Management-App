    	<?php if($accounts) :?>
	    <table class="table table-bordered table-striped">
		    <thead>
			    <th>Account Name</th>
			    <th>Type</th>
			    <th>Starting Balance</th>
			    <th>Current Balance</th>
		    </thead>
		    <tbody>
		    	<?php foreach($accounts as $acc) :?>
			    <tr>
				    <td><a href="<?php echo site_url('/accounts/view/'. $acc->id)?>"><?php echo $acc->name?></a></td>
				    <td><?php echo $acc->type?></td>
				    <td>Rp. 100.000.000</td>
				    <td>Rp. 98.000.000</td>
			    </tr>
			    <?php endforeach; ?>
		    </tbody>
	    </table>
	    <?php else : ?>
	    	Please Add Account
	    <?php endif;?>
