<?php
if (!defined('ABSPATH'))
	exit("denied");
?>
<form id="ct-qrcode-form" action="" method="post" enctype="application/x-www-form-urlencoded">
  <input id="ct-txid-db" type="hidden" name="ct-txid-db" value="<?php echo esc_attr($btnConf['txid']);?>">
  <p>
    <label for="ct-address"><?php esc_html_e( 'Payment Link:', 'ekliptor' ); ?></label>
  </p>
  <p class="ct-textfield-group">
    <input id="ct-address" type="text" name="ct-address" value="<?php echo esc_attr($btnConf['uri']);?>" readonly> 
    <input type="button" class="ct-copy-field" value="<?php esc_attr_e( 'Copy', 'ekliptor' ); ?>">
  </p>
  <p class="ct-textfield-group">
    <a id="ct-pay-app" href="<?php echo esc_attr($btnConf['uri']);?>"><?php esc_html_e( 'Open Wallet App', 'ekliptor' ); ?></a>
  </p>
  <?php if (false):?>
  <p>
    <label for="ct-amount"><?php esc_html_e( 'Amount (BCH):', 'ekliptor' ); ?></label>
  </p>
  <p class="ct-textfield-group">
    <input id="ct-amount" type="text" name="ct-amount" value="<?php echo esc_attr($btnConf['amountBCH']);?>" readonly>
    <input type="button" class="ct-copy-field" value="<?php esc_attr_e( 'Copy', 'ekliptor' ); ?>">
  </p>
  <?php endif; /*false*/?>
</form>