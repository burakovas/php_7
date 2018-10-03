  <?php
  $sql = "SELECT tovId, SUM(tovkol) AS koll FROM cart GROUP BY tovId;";
  $data = queryAll($sql);

  ?>

  <div class="myCart" >
    <?php foreach ($data as $product): ?>
      <p><?= $product['tovId'] ?><span> = <?= $product['koll'] ?></span></p>
      <a href="/public/index.php?id=<?=$product['tovId']?>&oper=delFromCart">УДАЛИТЬ ИЗ КОРЗИНЫ</a>
    <?php endforeach; ?>
  </div>
