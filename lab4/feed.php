<?php
    include_once(__DIR__ . "/helpers/Security.php");
    include_once(__DIR__ . "/classes/Video.php");

    // here's a bit of sample code to get your started
    // try to understand the used methods in order to build your own code
    Security::onlyLoggedInUsers();
    $videos = Video::getAll();
    if(!empty($_GET)){
        $videos = Video::getAllByUserId($_GET["filteruser"]);
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEOZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="container">
<?php include_once(__DIR__ . "/partials/nav.inc.php"); ?>

<?php foreach($videos as $video): ?>
<main>
    <article class="video" class="mb-4">
    <div class="youtube-video-container">
        <iframe width="100%" height="489" src="<?php echo $video["src"]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h5 class="mt-2 mb-0"><a href="video.php?id=<?php echo $video['id']; ?>"><?php echo $video["title"]; ?></a></h5>
    <?php if($video["user_id"] == 1): ?>
    <a href="feed.php?filteruser=1">Acid 2</a>
    <?php endif; ?>
    <?php if($video["user_id"] == 2): ?>
    <a href="feed.php?filteruser=2">Pokémon Journeys</a>
    <?php endif; ?>
    </article>
</main>
<?php endforeach; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>