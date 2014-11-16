<?php /* Smarty version 2.6.26, created on 2014-11-15 14:41:40
         compiled from user_invite.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'user_invite.html', 16, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XSS Platform</title>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/screen.css" type="text/css" media="screen, projection"> 
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/print.css" type="text/css" media="print"> 
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/style/style.css" type="text/css" media="screen, projection">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['root']; ?>
/source/js/jquery.js"></script>
</head>
<body>
<div class="container">
	<h1>未使用的邀请码</h1>
	<table border="0" cellspacing="0" cellpadding="0">
		<caption><b>乌云币奖品邀请码 (<?php echo count($this->_tpl_vars['codesWooyun']); ?>
)</b> <a class="right" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=user&act=createinvite&isWooyun=1">生成奖品邀请码</a></caption>
		<thead>
			<tr>
				<th>邀请码 (生成时间倒序排列)</th>
			</tr>
		</thead>
		<tbody>
			<?php $_from = $this->_tpl_vars['codesWooyun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['v']['code']; ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>

	<table border="0" cellspacing="0" cellpadding="0">
		<caption><b>其它邀请码 (<?php echo count($this->_tpl_vars['codesOther']); ?>
)</b> <a class="right" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=user&act=createinvite&isWooyun=0">生成其它邀请码</a></caption>
		<thead>
			<tr>
				<th>邀请码 (生成时间倒序排列)</th>
			</tr>
		</thead>
		<tbody>
			<?php $_from = $this->_tpl_vars['codesOther']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['v']['code']; ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
</div>
</body>
</html>