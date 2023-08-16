<?php include('inc/header.php');

require __DIR__ . "/vendor/autoload.php";

$client = new GuzzleHttp\Client();
$response = $client->request("GET", "http://www.omdbapi.com/?apikey=9cf76141&t={$_POST['title']}");
$movieJson = (string) $response->getBody();
$movie = json_decode($movieJson, true);
?>
<?php if (!empty($response)) : ?>
    <div class="container">
        <h2><?= $movie['Title'] ?></h2>
        <div class="poster-container">
            <img src="<?= $movie['Poster']; ?>" alt="" srcset="">
        </div>
        <p>Released: <?= $movie['Released']; ?></p>
        <button>Add to Favorites</button>
        <a href="/">Back Home</a>
    </div>
<?php else : ?>
    <div>
        <h2>No Movie Found</h2>
    </div>



<?php endif; ?>

<?php include('inc/footer.php'); ?>