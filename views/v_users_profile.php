<div id size="fontsize" style=" color:red; font-size:40px; position:absolute; flow:left; margin-left:10px;">
			<strong>Geohangout</strong>
		</div>

<div id='profilemenu'>
        <!-- Menu for users who are logged in -->
        <?php if($user): ?>

            <a href='/users/logout'>Logout</a>
            <a href='/users/profile'>Profile</a>
			<a href='/posts/add'>Add a post<a>
			<a href='/posts/index'>View post<a>
			<a href='/posts/users'>Users<a>
        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/users/signup'>Sign up</a>
            <a href='/users/index'>Log in</a>
        <?php endif; ?>
        
        
</div>

<?php if(isset($user)): ?>
    <h1 style="color:red">Welcome!! <?=$user->first_name?> <?=$user->last_name?></h1>
<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>

<div id ='windows'>
<br>
<h1> One step away, upload your picture</h1> 
<form action="/users/p_upload" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>