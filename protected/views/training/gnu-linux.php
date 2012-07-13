<?php $this->pageTitle = 'pressEnter | Capacitación en GNU/Linux'; ?>
<div class="article">
	<div class="header">
		<h1>GNU/Linux</h1>
	</div>
	<div class="figure">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/linux-logo-100x100.png', 'Linux logo', array()); ?>
	</div>
	<div class="body">
		<p>GNU/Linux a Unix-like operating system, intiated by Linus Torvalds, in 1991. After it was released under GNU GPL, the support Free Software Foundation (FSF) and the community helped Linux establish as a a free/very low-cost operating system. Though Linux set off as a server OS, it has eventually evolved into various platforms, like desktops to super computers. Linux has also found its place in embedded devices and recently in handheld devices, with the introduction of Android.</p>
	</div>
	<div class="syllabus">
		<h2>Temario del curso</h2>
		<ul>
			<li>Introduction</li>
			<li>Linux and software installation (rpm, make, sources, fhs)</li>
			<li>The Linux kernel (build, customize, install)</li>
			<li>System resources management</li>
			<li>Hard disks and file systems management</li>
			<li>Peripherals (usb, pci, scsi, etc)</li>
			<li>Starting/Stopping</li>
			<li>Users</li>
			<li>Administration tools</li>
			<li>Introduction to TCP/IP network</li>
			<li>Remote commands (ssh, rsh, etc)</li>
			<li>FTP server Configuration</li>
			<li>NFS server Configuration</li>
			<li>LDAP server Configuration</li>
			<li>Email server Configuration</li>
			<li>Samba Configuration</li>
			<li>DHCP Configuration</li>
		</ul>
	</div>
	<div class="footer"></div>
	<div class="audience">
		<h3>A quién está dirigido?</h3>
		<p>Desarrolladores web - programadores</p>
	</div>
	<div class="prerequisites">
		<h3>Pre requisitos</h3>
		<p>Conocimientos básicos de PHP</p>
	</div>
	<div class="footer"></div>
</div>
<?php echo $this->renderPartial('instructors/_fernando_toledo'); ?>
<hr />
