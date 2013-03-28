--TEST--
Template Test: image_view.html
--FILE--
<?php
require_once 'testsuite.php';
compilefile('image_view.html');

--EXPECTF--
===Compiling image_view.html===



===Compiled file: image_view.html===


<table cellpadding="2" cellspacing="2" border="0" bgcolor="black" style="text-align: left; width: 100%;">

  <tbody>
    <?php if ($this->options['strict'] || (is_array($t->images)  || is_object($t->images))) foreach($t->images as $row) {?><tr>
      <?php if ($this->options['strict'] || (is_array($row)  || is_object($row))) foreach($row as $col) {?><td align="center" valign="middle" background="<?php echo htmlspecialchars($t->rootURL,ENT_COMPAT,'UTF-8');?>/FlexyWiki/templates/negative.jpg"><a href="<?php echo htmlspecialchars($col->link,ENT_COMPAT,'UTF-8');?>"><img border="0" height="<?php echo htmlspecialchars($col->info[1],ENT_COMPAT,'UTF-8');?>" width="<?php echo htmlspecialchars($col->info[0],ENT_COMPAT,'UTF-8');?>" src="<?php echo htmlspecialchars($col->url,ENT_COMPAT,'UTF-8');?>"></a><br>
            <font color="white">[<?php echo htmlspecialchars($col->name,ENT_COMPAT,'UTF-8');?>] <?php echo htmlspecialchars($col->size,ENT_COMPAT,'UTF-8');?>Mb</font>
      </td><?php }?>
    </tr><?php }?>
  </tbody>
</table>




===With data file: image_view.html===


<table cellpadding="2" cellspacing="2" border="0" bgcolor="black" style="text-align: left; width: 100%;">

  <tbody>
      </tbody>
</table>