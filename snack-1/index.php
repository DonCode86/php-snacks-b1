<?php
$matches = [
    [
      "home" => "Lakers",
      "visitors" => "Chicago Bulls",
      "homeScore" => "88",
      "visitorsScore" => "100",
      ],

      [
      "home" => "Warriors",
      "visitors" => "Boston",
      "homeScore" => "103",
      "visitorsScore" => "90",
      ],

      [
      "home" => "Orlando",
      "visitors" => "Sacramento",
      "homeScore" => "95",
      "visitorsScore" => "101",
      ],

    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>NBA SCORES:</h1>
  <ul>
    <?php
      for ($i = 0; $i < count($matches); $i++) {
        echo "<li>{$matches[$i]['home']} - {$matches[$i]['visitors']} | {$matches[$i]['homeScore']}-{$matches[$i]['visitorsScore']}</li>";
      }
    ?>
  </ul>
</body>
</html>