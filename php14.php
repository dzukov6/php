<?php
$imagedir = 'img/';  // Relative path to images

// Function to display a random image
function suvaPilt($dir) {
    $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);  // Get image files
    if (count($images) > 0) {
        $randomImage = $images[array_rand($images)];  // Pick a random image
        return $randomImage;
    }
    return '';  // Return empty string if no images found
}

// Function to display thumbnails in columns
function pisipilt($dir, $columns = 3) {
    $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);  // Get image files
    if (empty($images)) {
        echo "No images found in the directory!";
        return;
    }
    
    $rowCount = ceil(count($images) / $columns);  // Calculate rows based on columns
    for ($i = 0; $i < $rowCount; $i++) {
        echo '<div class="row">';
        for ($j = 0; $j < $columns; $j++) {
            $index = $i * $columns + $j;
            if ($index < count($images)) {
                echo '<div class="col">';
                echo '<a href="' . $images[$index] . '" target="_blank">';
                echo '<img src="' . $images[$index] . '" class="thumbnail" onclick="pisipiltSuureks(\'' . $images[$index] . '\');">';
                echo '</a>';
                echo '</div>';
            }
        }
        echo '</div>';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .thumbnail {
            max-width: 120px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Harjutus 14</h1>

        <h2>Suvaline pilt:</h2>
        <?php 
            $randomImage = suvaPilt($imagedir); 
            if ($randomImage != '') {
                echo '<img src="' . $randomImage . '" style="max-width: 100%;">';
            } else {
                echo 'No images found!';
            }
        ?>

        <h2>Pisipildid veergudes:</h2>
        <?php pisipilt($imagedir, 3); ?>  <!-- Display images in columns -->
    </div>

    <script>
        function pisipiltSuureks(imageSrc) {
            var largeImageWindow = window.open('', '_blank');
            largeImageWindow.document.write('<img src="' + imageSrc + '" style="max-width: 100%;">');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
