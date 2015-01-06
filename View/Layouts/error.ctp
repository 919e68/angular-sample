<!DOCTYPE html>
<html>
<head>
	<title>CakeError</title>
</head>
<body>

	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
		
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
