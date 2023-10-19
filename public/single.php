<?php
require_once("../src/config.php");

if (isset($_GET['slug'])) {
    // Use prepared statements to prevent SQL injection
    $slug = $conn->real_escape_string($_GET['slug']);
    $sql = "SELECT * FROM producten WHERE slug = '$slug'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Output the product details here
        ?>

        
<!DOCTYPE html>
        <html lang="en">
        <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baking Products</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="" defer></script>
</head>
        <body class="body">

            <section class="products--detail">
                <div class="product--detail">
                <h1 class="product__title"><?php echo $row["Titel"]; ?></h1>
                <img src="<?php echo $row["img"]; ?>" alt="Image of <?php echo $row["Titel"]; ?>" class="image--detail">
                <p class="product__intro"><?php echo $row["omschrijving"]; ?></p>
                </div>
            </section>
        </body>
        </html>



        <?php
    } else {
        echo "Product not found!";
    }
} else {
    echo "Slug not specified!";
}
