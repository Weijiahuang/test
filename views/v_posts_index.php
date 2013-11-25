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

<br>
<br>
<div id ='windows'>
<br>
<?php foreach($posts as $post): ?>
<div id = "box" style="border: 1px solid black; width:90%;">
<article>

    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>
</article>
</div>
<br>
<?php endforeach; ?>

</div>