--TEST--
Template Test: variables.html
--FILE--
<?php
require_once 'testsuite.php';
compilefile('variables.html');

--EXPECTF--
===Compiling variables.html===



===Compiled file: variables.html===
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
 
<body>
<p>Example Template for HTML_Template_Flexy</p>
 
<h2>Variables</H2>

<p>Standard variables 
<?php echo htmlspecialchars($t->hello,ENT_COMPAT,'UTF-8');?> 
<?php echo $t->world;?>
<?php echo urlencode($t->test);?>
<?php echo htmlspecialchars($t->object->var,ENT_COMPAT,'UTF-8');?>
<?php echo htmlspecialchars($t->array[0],ENT_COMPAT,'UTF-8');?>
<?php echo htmlspecialchars($t->array['entry'],ENT_COMPAT,'UTF-8');?>
<?php echo htmlspecialchars($t->multi['array'][0],ENT_COMPAT,'UTF-8');?>
<?php echo htmlspecialchars($t->object->var['array'][1],ENT_COMPAT,'UTF-8');?>
<?php echo '<pre>'; echo htmlspecialchars(print_r($t->object->var['array'][1],true),ENT_COMPAT,'UTF-8'); echo '</pre>';;?>
<?php echo $t->object->var['array'][1];?>
<?php echo $t->object->var['array'][-1];?>
<?php echo htmlspecialchars($t->object['array']->with['objects'],ENT_COMPAT,'UTF-8');?>
Long string with NL2BR + HTMLSPECIALCHARS
<?php echo nl2br(htmlspecialchars($t->longstring,ENT_COMPAT,'UTF-8'));?>

Everything: <?php echo '<pre>'; echo htmlspecialchars(print_r($t,true),ENT_COMPAT,'UTF-8'); echo '</pre>';;?>
an Object: <?php echo '<pre>'; echo htmlspecialchars(print_r($t->object,true),ENT_COMPAT,'UTF-8'); echo '</pre>';;?>


<img src="<?php echo htmlspecialchars($t->getImageDir,ENT_COMPAT,'UTF-8');?>/someimage.jpg">
<img src="<?php echo $t->getImageDir;?>/someimage.jpg">
<img src="<?php echo urlencode($t->getImageDir);?>/someimage.jpg">

<img src="<?php echo htmlspecialchars($t->getImageDir,ENT_COMPAT,'UTF-8');?>/someimage.jpg">
<img src="<?php echo htmlspecialchars($t->getImageDir,ENT_COMPAT,'UTF-8');?>/someimage.jpg">
</p>
</body>
</html>


===With data file: variables.html===
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
 
<body>
<p>Example Template for HTML_Template_Flexy</p>
 
<h2>Variables</H2>

<p>Standard variables 
 
<pre></pre>Long string with NL2BR + HTMLSPECIALCHARS

Everything: <pre>stdClass Object
(
)
</pre>an Object: <pre></pre>

<img src="/someimage.jpg">
<img src="/someimage.jpg">
<img src="/someimage.jpg">

<img src="/someimage.jpg">
<img src="/someimage.jpg">
</p>
</body>
</html>