<div class="menu">

  <div class="hot">

    <div class="headline">
      <p>Hot Drinks</p>
    </div>

    <div class="products">

      <div class="details">
        <a href="#" class="flex">
          <span class="choccy"></span>
        </a>
        <p>Hot Chocolate</p>
        <p>$2.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

      <div class="details">
        <a href="#" class="flex">
          <span class="hcoffee"></span>
        </a>
        <p>Vanilla Latté</p>
        <p>$4.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

      <div class="details">
        <a href="#" class="flex">
          <span class="htea"></span>
        </a>
        <p>Hot Peach Tea</p>
        <p>$3.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

    </div>

  </div>

  <div class="cold">

    <div class="headline">
      <p>Cold Drinks</p>
    </div>

    <div class="products">

      <div class="details">
        <a href="#" class="flex">
          <span class="ichoccy"></span>
        </a>
        <p>Iced Chocolate</p>
        <p>$2.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

      <div class="details">
        <a href="#" class="flex">
          <span class="icoffee"></span>
        </a>
        <p>Iced Vanilla Latté</p>
        <p>$4.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

      <div class="details">
        <a href="#" class="flex">
          <span class="itea"></span>
        </a>
        <p>Iced Lemon Tea</p>
        <p>$3.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

    </div>

  </div>

  <div class="beans">

    <div class="headline">
      <p>Coffee Beans</p>
    </div>

    <div class="products">

      <div class="details">
        <a href="#" class="flex">
          <span class="light"></span>
        </a>
        <p>Light Roast</p>
        <p>$10.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

      <div class="details">
        <a href="#" class="flex">
          <span class="medium"></span>
        </a>
        <p>Medium Ethiopian</p>
        <p>$10.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

      <div class="details">
        <a href="#" class="flex">
          <span class="dark"></span>
        </a>
        <p>Dark Ethiopian</p>
        <p>$10.95</p>
        <div <?php if (mysqli_num_rows($result2) > 0) {

          if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <form method="post" action="index.php?actions=add&id=<?php echo $row2['id']; ?>">
              <input type="submit" name="add_to_cart" value="Add To Cart">
            </form>
            <?php
          }

        } ?></div>
      </div>

    </div>

  </div>
</div>
