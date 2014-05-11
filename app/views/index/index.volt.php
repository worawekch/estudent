<?php foreach ($items as $item) { ?>
<li><?php echo $this->escaper->escapeHtml($item->name); ?></li>
<?php } ?>