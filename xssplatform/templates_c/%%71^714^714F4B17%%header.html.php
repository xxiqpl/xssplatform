<?php /* Smarty version 2.6.26, created on 2014-11-15 13:18:21
         compiled from header.html */ ?>
<h1>XSS Platform
<?php if ($this->_tpl_vars['show']['user']['userId'] > 0): ?>
<span style="margin:20px 10px 0 0;font-weight:normal;font-size:14px" class="right">用户：<?php echo $this->_tpl_vars['show']['user']['userName']; ?>
 , <a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=login&act=logout">退出</a></span>
<?php endif; ?>
</h1>
<hr />