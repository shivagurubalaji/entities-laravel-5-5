<?php

$output = file_get_contents(public_path('price-data.txt'));

  $qRes = $output;

  if ($qRes != '!!!CAN\'T CONNECT!!!') {

  $cdate = '';
  $cnt = 0;
  foreach (explode("\n", $qRes) as $line) {
      if (isset($line[0]) && ($line[0] == 'u' || $line[0] == 'd')) {
          $tmp = explode(' ', $line);
          //------------------- SHOW ONE ROW --------------------------------

          $bid1 = substr($tmp[2], 0, -3);
          $bid2 = substr($tmp[2], 4, -1);
          $bid3 = substr($tmp[2], 6);

          $ask1 = substr($tmp[3], 0, -3);
          $ask2 = substr($tmp[3], 4, -1);
          $ask3 = substr($tmp[3], 6);

          $spread = $tmp[3] - $tmp[2];
          $spreadvar = number_format($spread, 1, '.', '');  // Last two parameters are optional
          $spreadvar2 = number_format($spread, 2, '.', '');  // Last two parameters are optional
          $xagusd =  $spreadvar2 * 10;
          $first3 = substr($spread, 0, 1);
          $no4 = round($tmp[3] - $tmp[2], 5);
          $no4b = $no4 * 10;
          $last2 = round($tmp[3] - $tmp[2], 5);
          $last2F = $last2 * 10;

          //$spreadf = str_replace("E-5", "", $newspread);
          $myTitle = strtoupper($tmp[1]);
          $titleNor = str_replace(".R", "", $myTitle);

          if ($tmp[0] == 'down') {
              $color = 'one';
          }
          else {
              $color = 'two';
          }

  ?>
        <div class="Marquee-tag">
          <div class="single-bid style-<?= $color ?>">
            <ul class="bid-1">
              <li>
                <h3><?= $titleNor ?></h3>
              </li>
              <li>
                <span>Spread</span>
                <h4>
                  <?php if ($titleNor == 'EURUSD') : ?>0.0<?= $first3 ?><?php endif;  ?>
                  <?php if ($titleNor == 'AUDUSD') : ?>0.0<?= $first3 ?><?php endif;  ?>
                  <?php if ($titleNor == 'GBPUSD') : ?>0.0<?= $first3 ?><?php endif;  ?>
                  <?php if ($titleNor == 'USDJPY') : ?><?= $no4b ?><?php endif;  ?>
                  <?php if ($titleNor == 'XAUUSD') : ?><?= $last2F ?><?php endif;  ?>
                  <?php if ($titleNor == 'XAUAUD') : ?><?= $spreadvar ?><?php endif;  ?>
                  <?php if ($titleNor == 'XAGUSD') : ?><?= $xagusd ?><?php endif;  ?>
                  <?php if ($titleNor == 'XAGAUD') : ?><?= $spreadvar ?><?php endif;  ?>
                  <?php if ($titleNor == 'AUS200') : ?><?= $spreadvar ?><?php endif;  ?>
                  <?php if ($titleNor == 'SPX') : ?><?= $spreadvar ?><?php endif;  ?>
                  <?php if ($titleNor == 'STOXX50E') : ?><?= $spreadvar ?><?php endif;  ?>
                  <?php if ($titleNor == 'UK100') : ?><?= $spreadvar ?><?php endif;  ?>
                  <?php if ($titleNor == 'XTIUSD') : ?><?= $spreadvar ?><?php endif;  ?>
                </h4>
              </li>
            </ul>
            <ul class="bid-2">
              <li>
                <div class="bid-3">
                  <span>Bid</span>
                </div>
                <div>
                    <span class = "spread"><?= $bid1 ?></span>
                    <h4 class = "bid-ask"><?= $bid2 ?><sup><?= $bid3 ?></sup></h4>
                <div>
              </li>
              <li>
                <div class="bid-3">
                  <span>Ask</span>
                </div>
                <div>
                    <span class = "spread"><?= $ask1 ?></span>
                    <h4 class = "bid-ask"><?= $ask2 ?><sup><?= $ask3 ?></sup></h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
<?php
    } elseif ($line != '') {
        $cdate = $line;
    }
  ++$cnt;
  }
} else {
//------------------- CONNECTION ERROR MESSAGE --------------------
echo 'Connection timeout';
}
