<?php
include __DIR__ . '/../header.php';
?>

<h1>Welcome To The HomePage!</h1>
<h2>Users</h2>
<?php
foreach ($users as $user) : ?>

<p>name : <?= $user->name ?></p>
<p><i>id : <?= $user->id ?></i></p>
<p>username : <?= $user->username ?></p>

<?php
endforeach;
include __DIR__ . '/../footer.php';
?>