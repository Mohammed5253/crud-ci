<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="<?php echo base_url(); ?>/index.php/user/updateEntries/<?php echo $entry->id ?>" method="post">
			<h2>Update <?php echo $entry->first_name; ?></small></h2>
			<hr class="colorgraph">
            <?php if(isset($entry))?>
            <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input  value="<?php echo $entry->first_name; ?>" type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input  value="<?php echo $entry->last_name; ?>" type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<input  value="<?php echo $entry->email; ?>" type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
            </div>
			<div class="row">
				<div class="col-xs-12 col-md-12"><input type="submit" value="Update" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            </div>
           
		</form>
	</div>
</div>
