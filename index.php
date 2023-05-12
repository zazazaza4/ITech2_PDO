<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Товари в магазині</title>
</head>
<?php
include "./php/run_query.php";
?>

<body>
  <h1>
    <b> Варіант 5.</b> БД для зберігання інформації про товари в
    інтернет-магазині
  </h1>
  <section>
    <h2>Товари обраного виробника</h2>
    <form action="./php/get_vendor.php" method="get">
      <select name="vendor">
        <?php
        $sqlSelect = "SELECT DISTINCT v_name FROM vendors";
        $vendors = runQuery($sqlSelect, []);

        foreach ($vendors as $vendor) {
          echo '<option value="' . $vendor['v_name'] . '">' . $vendor['v_name'] . '</option>';
        }
        ?>
      </select>
      <button type="submit">Отримати</button>
    </form>
  </section>
  <br />
  <section>
    <h2>Товари в обраної категорії</h2>
    <form action="./php/get_category.php" method="get">
      <select name="category">
        <?php
        $sqlSelect = "SELECT DISTINCT c_name FROM category";
        $categories = runQuery($sqlSelect, []);

        foreach ($categories as $category) {
          echo '<option value="' . $category['c_name'] . '">' . $category['c_name'] . '</option>';
        }
        ?>
      </select>
      <button type="submit">Отримати</button>
    </form>
  </section>
  <br />
  <section>
    <h2>Товари в обраному ціновому діапазоні</h2>
    <form class="range" action="./php/get_range.php" method="get">
      <?php
      $sqlSelect = "SELECT MIN(price) AS minPrice, MAX(price) AS maxPrice FROM items";

      $result = runQuery($sqlSelect, []);
      $minPrice = $result[0]['minPrice'];
      $maxPrice = $result[0]['maxPrice'];

      echo '<label for="min">Min:</label>';
      echo '<input type="number" id="min" name="min" min="' . $minPrice . '" max="' . $maxPrice . '" value="' . $minPrice . '" placeholder="min" />';

      echo '<label for="max">Max:</label>';
      echo '<input type="number" id="max" name="max" min="' . $minPrice . '" max="' . $maxPrice . '" value="' . $maxPrice . '" placeholder="max" />';

      ?>
      <button type="submit">Отримати</button>
    </form>
  </section>
  <br />
  <script src="./js/index.js"></script>
</body>

</html>