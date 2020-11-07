<div class="cart">
  <h3>Shopping Cart</h3>
  <?php
    $query2 = "SELECT * FROM products ORDER by id ASC";
    $result2 = mysqli_query($con, $query2);
    if (mysqli_num_rows($result2) > 0) {
      while ($row2 = mysqli_fetch_array($result2)) {
        ?>
        <div>
          <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
            <h4><?php echo $row2['name']; ?></h4>
            <h4><?php echo $row2['price']; ?></h4>
            <h4>It works</h4>
            <input type="submit" name="add_to_cart" value="Add To Cart">
          </form>
        </div>
        <?php
      }
    }
   ?>
</div>
