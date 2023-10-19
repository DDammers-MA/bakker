<?php
require_once("../src/config.php");
$sql = "SELECT * FROM producten";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baking Products</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="" defer></script>
</head>

<body>
    <section class="products">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?><a href="/single.php?slug=<?php echo $row["slug"]; ?>" class="product">
            <p class="product__title"><?php echo $row["Titel"]; ?></p>
          
            <img src="<?php echo $row["img"]; ?>" alt="Image of <?php echo $row["Titel"]; ?>"
                class="product__image">
                  <p class="product__intro"><?php echo $row["introtekst"]; ?></p>       
        </a>
       <?php
            }
        } else {
            echo "No products found!";
        }
        ?>
    </section>
</body>

</html>