<?php

require_once "connect.php";
if(isset($_REQUEST['itemId'])){
    $id = $_REQUEST['itemId'];
    $itemSql = "select * from `item_details` where item_id=$id";
    $itemRes = mysqli_query($conn,$itemSql);
    if($itemRes){
        $itemData = mysqli_fetch_assoc($itemRes);
        ?>
        <div class="rating">5.0<i class="fa-solid fa-star"></i></div>
          <div class="ingridient">
            <h4>Ingridients:-</h4>
            <p><?php echo $itemData['ingredient']; ?></p>
          </div>
          <div class="nutration">
            <h4>Nutrational Information:-</h4>
            <p>Energy(<?php echo $itemData['energy']; ?>kcal),Protein(<?php echo $itemData['protein']; ?>g) ,Carbohydrate(<?php echo $itemData['carbohydrate']; ?>g),Fat(<?php echo $itemData['fat']; ?>g,sodium(<?php echo $itemData['sodium']; ?>g))</p>
          </div>
        <?php
    }
}

?>