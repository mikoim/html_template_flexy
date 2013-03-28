--TEST--
Template Test: looping.html
--FILE--
<?php
require_once 'testsuite.php';
compilefile('looping.html',array('list'=>array(1,2,3,4)));

--EXPECTF--
===Compiling looping.html===



===Compiled file: looping.html===


<h2>Looping</h2>


<p>a loop <?php if ($this->options['strict'] || (is_array($t->loop)  || is_object($t->loop))) foreach($t->loop as $a) {?> <?php echo htmlspecialchars($a,ENT_COMPAT,'UTF-8');?> <?php }?></p>
<p>a loop with 2 vars <?php if ($this->options['strict'] || (is_array($t->loop)  || is_object($t->loop))) foreach($t->loop as $a => $b) {?> 
    <?php echo htmlspecialchars($a,ENT_COMPAT,'UTF-8');?> , 
    <?php echo htmlspecialchars($b,ENT_COMPAT,'UTF-8');?>
<?php }?></p>

Bug #84
<?php if ($this->options['strict'] || (is_array($t->list)  || is_object($t->list))) foreach($t->list as $i) {?>
  <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'method'))) echo htmlspecialchars($t->method($i),ENT_COMPAT,'UTF-8');?>
<?php }?>

<?php if ($this->options['strict'] || (is_array($t->list)  || is_object($t->list))) foreach($t->list as $i => $j) {?>
    <?php echo htmlspecialchars($i,ENT_COMPAT,'UTF-8');?>:<?php echo htmlspecialchars($j,ENT_COMPAT,'UTF-8');?>
<?php }?>

<table>
    <?php if ($this->options['strict'] || (is_array($t->xyz)  || is_object($t->xyz))) foreach($t->xyz as $abcd => $def) {?><tr>
        <td><?php echo htmlspecialchars($abcd,ENT_COMPAT,'UTF-8');?>, <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'test'))) echo htmlspecialchars($t->test($def),ENT_COMPAT,'UTF-8');?></td>
    </tr><?php }?>
</table>


<h2>HTML tags example using foreach=&quot;loop,a,b&quot; or the tr</h2>
<table width="100%" border="0">
  <?php if ($this->options['strict'] || (is_array($t->loop)  || is_object($t->loop))) foreach($t->loop as $a => $b) {?><tr> 
    <td><?php echo htmlspecialchars($a,ENT_COMPAT,'UTF-8');?></td>
    <td><?php echo htmlspecialchars($b,ENT_COMPAT,'UTF-8');?></td>
  </tr><?php }?>
</table>

<h2>HTML tags example using foreach=&quot;loop,a&quot; or the tr using a highlight class.</h2>
<table width="100%" border="0">
  <?php if ($this->options['strict'] || (is_array($t->loop)  || is_object($t->loop))) foreach($t->loop as $a) {?><tr class="<?php echo htmlspecialchars($a->hightlight,ENT_COMPAT,'UTF-8');?>"> 
    <td>a is</td>
    <?php if ($a->showtext)  {?><td><?php echo htmlspecialchars($a->text,ENT_COMPAT,'UTF-8');?></td><?php }?>
    <?php if (!$a->showtext)  {?><td><?php echo number_format($a->price,2,'.',',');?></td><?php }?>
  </tr><?php }?>
</table>

<h2>HTML tags example using foreach=&quot;loop,a,b&quot; or the tr</h2>
<table width="100%" border="0">
  <?php if ($this->options['strict'] || (is_array($t->loop)  || is_object($t->loop))) foreach($t->loop as $a => $b) {?><tr> 
    <?php if ($this->options['strict'] || (is_array($b)  || is_object($b))) foreach($b as $c => $d) {?><td><?php echo htmlspecialchars($d,ENT_COMPAT,'UTF-8');?></td><?php }?>
  </tr><?php }?>
</table>

<h2>Looping in CDATA</h2>
Dont forget that php strips line breaks!
<![CDATA[
<?php if ($this->options['strict'] || (is_array($t->list)  || is_object($t->list))) foreach($t->list as $i => $j) {?>
    <?php echo htmlspecialchars($i,ENT_COMPAT,'UTF-8');?>:<?php echo htmlspecialchars($j,ENT_COMPAT,'UTF-8');?>
    
<?php }?>
]]>

===With data file: looping.html===


<h2>Looping</h2>


<p>a loop </p>
<p>a loop with 2 vars </p>

Bug #84
        
    0:1    1:2    2:3    3:4
<table>
    </table>


<h2>HTML tags example using foreach=&quot;loop,a,b&quot; or the tr</h2>
<table width="100%" border="0">
  </table>

<h2>HTML tags example using foreach=&quot;loop,a&quot; or the tr using a highlight class.</h2>
<table width="100%" border="0">
  </table>

<h2>HTML tags example using foreach=&quot;loop,a,b&quot; or the tr</h2>
<table width="100%" border="0">
  </table>

<h2>Looping in CDATA</h2>
Dont forget that php strips line breaks!
<![CDATA[
    0:1    
    1:2    
    2:3    
    3:4    
]]>
