<?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Laudantium fugiat in Lorem ad quasi cum numquam commodi Lorem repellendus velit delectus, 
            omnis dolorum nam Lorem tempore ducimus esse odio Lorem.";

    $censored_word = $_GET["censored"];

    $text_censored = str_replace("Lorem", "***"; $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>

    <h1>Uncensored text</h1>
    <p><?= $text ?></p>

    <h1>Censored text</h1>
    <h3>Characters number: <?= strlen($text_censored) ?></h3>
    <p><?= $text_censored ?></p>
</body>
</html>