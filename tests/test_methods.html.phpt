--TEST--
Template Test: methods.html
--FILE--
<?php
require_once 'testsuite.php';
compilefile('methods.html');

--EXPECTF--
===Compiling methods.html===



===Compiled file: methods.html===

<h2>Methods</H2>
<p>Calling a method <?php if ($this->options['strict'] || (isset($t->a) && method_exists($t->a, 'helloWorld'))) echo htmlspecialchars($t->a->helloWorld(),ENT_COMPAT,'UTF-8');?></p>
<p>or <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'includeBody'))) echo $t->includeBody();?></P>
<img src="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getImageDir'))) echo htmlspecialchars($t->getImageDir(),ENT_COMPAT,'UTF-8');?>/someimage.jpg">
<img src="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getImageDir'))) echo $this->plugin("h%7",$t->getImageDir());?>/someimage.jpg">
<img src="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getImageDir'))) echo $this->plugin("u%7",$t->getImageDir());?>/someimage.jpg">

<img src="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getImageDir'))) echo htmlspecialchars($t->getImageDir(),ENT_COMPAT,'UTF-8');?>/someimage.jpg">
<img src="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getImageDir'))) echo htmlspecialchars($t->getImageDir(),ENT_COMPAT,'UTF-8');?>/someimage.jpg">



<span class="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getBgnd'))) echo htmlspecialchars($t->getBgnd($t->valueArr['isConfigurable']),ENT_COMPAT,'UTF-8');?>"></span>



<h2>Full Method testing</h2>

<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo htmlspecialchars($t->abc($t->abc,$t->def,$t->hij),ENT_COMPAT,'UTF-8');?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo htmlspecialchars($t->abc($t->abc,"def","hij"),ENT_COMPAT,'UTF-8');?>

<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo htmlspecialchars($t->abc($t->abc,$t->def,"hij"),ENT_COMPAT,'UTF-8');?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo htmlspecialchars($t->abc("abc",$t->def,$t->hij),ENT_COMPAT,'UTF-8');?>

<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo $t->abc($t->abc,$t->def,$t->hij);?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo $t->abc($t->abc,"def","hij");?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo $t->abc($t->abc,$t->def,"hij");?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo $t->abc("abc",$t->def,$t->hij);?>


<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo urlencode($t->abc($t->abc,$t->def,$t->hij));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo urlencode($t->abc($t->abc,"def","hij"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo urlencode($t->abc($t->abc,$t->def,"hij"));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo urlencode($t->abc("abc",$t->def,$t->hij));?>

<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo htmlspecialchars($t->abc(123,$t->def,$t->hij),ENT_COMPAT,'UTF-8');?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo urlencode($t->abc($t->abc,123,123));?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo htmlspecialchars($t->abc($t->abc,$t->def,123),ENT_COMPAT,'UTF-8');?>
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'abc'))) echo urlencode($t->abc("abc",123,$t->hij));?>


<h2>Real life method testing </h2>
Invoice number: <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->invoice,"number"),ENT_COMPAT,'UTF-8');?> Place: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->invoice,"place"),ENT_COMPAT,'UTF-8');?> Date: <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->invoice,"date"),ENT_COMPAT,'UTF-8');?> Payment: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->invoice,"payment"),ENT_COMPAT,'UTF-8');?> Payment date: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->invoice,"payment_date"),ENT_COMPAT,'UTF-8');?> Seller: Name 1: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->seller,"name1"),ENT_COMPAT,'UTF-8');?> Name 2: <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->seller,"name2"),ENT_COMPAT,'UTF-8');?> NIP: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->seller,"nip"),ENT_COMPAT,'UTF-8');?> Street: <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->seller,"street"),ENT_COMPAT,'UTF-8');?> City: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->seller,"code"),ENT_COMPAT,'UTF-8');?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->seller,"city"),ENT_COMPAT,'UTF-8');?> Buyer: Name 1: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->buyer,"name1"),ENT_COMPAT,'UTF-8');?> Name 2: <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->buyer,"name2"),ENT_COMPAT,'UTF-8');?> NIP: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->buyer,"nip"),ENT_COMPAT,'UTF-8');?> Street: <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->buyer,"street"),ENT_COMPAT,'UTF-8');?> City: 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->buyer,"code"),ENT_COMPAT,'UTF-8');?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($t->buyer,"city"),ENT_COMPAT,'UTF-8');?>
# 	Name <?php if ($t->show_pkwiu)  {?>	PKWIU<?php }?> 	Count 	Netto 	VAT 	Brutto
<?php if ($this->options['strict'] || (is_array($t->positions)  || is_object($t->positions))) foreach($t->positions as $position) {?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($position,"nr"),ENT_COMPAT,'UTF-8');?> 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($position,"name"),ENT_COMPAT,'UTF-8');?> <?php if ($t->show_pkwiu)  {?> 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($position,"pkwiu"),ENT_COMPAT,'UTF-8');?><?php }?> 	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($position,"count"),ENT_COMPAT,'UTF-8');?> 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($position,"netto"),ENT_COMPAT,'UTF-8');?> 	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($position,"vat"),ENT_COMPAT,'UTF-8');?> 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($position,"brutto"),ENT_COMPAT,'UTF-8');?>
<?php }?> <?php if ($t->edit_positions)  {?> # 	Name <?php if ($t->show_pkwiu)  {?>	PKWIU<?php }?> 	Count 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) if ($t->getelem($t->position,"netto_mode")) { ?>	Netto<?php } else {?>	<?php }?> 	VAT 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) if ($t->getelem($t->position,"netto_mode")) { ?>	<?php } else {?>	Brutto<?php }?>
<?php if ($this->options['strict'] || (is_array($t->edit_positions)  || is_object($t->edit_positions))) foreach($t->edit_positions as $k => $position) {?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($position,"nr"),ENT_COMPAT,'UTF-8');?> 
<?php if ($t->show_pkwiu)  {?> 	<?php }?> 	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) if ($t->getelem($position,"netto_mode")) { ?> 	<?php } else {?> 
<?php }?> 	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) if ($t->getelem($position,"netto_mode")) { ?> 	<?php } else {?>	<?php }?>
<?php }?> <?php }?> # 	
<?php if ($this->options['strict'] || (is_array($t->sum)  || is_object($t->sum))) foreach($t->sum as $sum) {?> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($sum,"nr"),ENT_COMPAT,'UTF-8');?> 		<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($sum,"netto"),ENT_COMPAT,'UTF-8');?> 
<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($sum,"vat"),ENT_COMPAT,'UTF-8');?> 	<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'getelem'))) echo htmlspecialchars($t->getelem($sum,"brutto"),ENT_COMPAT,'UTF-8');?>
<?php }?>


===With data file: methods.html===

<h2>Methods</H2>
<p>Calling a method </p>
<p>or </P>
<img src="/someimage.jpg">
<img src="/someimage.jpg">
<img src="/someimage.jpg">

<img src="/someimage.jpg">
<img src="/someimage.jpg">



<span class=""></span>



<h2>Full Method testing</h2>








<h2>Real life method testing </h2>
Invoice number:  Place: 
 Date:  Payment: 
 Payment date: 
 Seller: Name 1: 
 Name 2:  NIP: 
 Street:  City: 
  Buyer: Name 1: 
 Name 2:  NIP: 
 Street:  City: 
 # 	Name  	Count 	Netto 	VAT 	Brutto
  #
