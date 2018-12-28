<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 ">
    <table class="table">
    <thead>
      <tr>
          <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
        if(isset($users))
            foreach($users as $user){
        ?>

     <tr>
        <td><?php echo $user->id ?></td>
        <td><?php echo $user->first_name ?></td>
        <td><?php echo $user->last_name ?></td>
        <td><?php echo $user->email ?></td>
        <td colspan="2">
            <a href="user/editEntries/<?php echo $user->id?>">Edit</a>
            <a href="<?php echo base_url();?>index.php/user/deleteEntries/<?php echo $user->id?>">Delete</a>
        </td>

      </tr>
            <?php } ?>
    </tbody>
  </table>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
		<form role="form" action="<?php echo base_url(); ?>/index.php/user/register" method="post">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-xs-12 col-md-12"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>

</div>