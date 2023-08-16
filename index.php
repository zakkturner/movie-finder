<?php include('inc/header.php') ?>
<h1>Find A Movie</h1>
<form action="/movie.php" method="POST">
  <input type="text" name="title" />
  <button>Submit</button>
</form>
<?php include('inc/footer.php'); ?>