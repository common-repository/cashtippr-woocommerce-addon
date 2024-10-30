<?php
if (!defined('ABSPATH'))
	exit("denied");
?>
<p><b>
  <?php if($tplVars['paid'] === true):?>
    <?php printf(esc_html__('Your payment has been received with the BCH transaction ID: %s', 'ekliptor'), $tplVars['txid']); ?>
  <?php else:?> 
    <?php printf(esc_html( 'Please send %s %s to %s', 'ekliptor' ), $tplVars['amountDisplay'], $tplVars['tickerDisplay'], $tplVars['recAddress']); ?> 
  <?php endif; /*paid*/?>
</b></p>