<?php $this->pageTitle = 'pressEnter | Capacitación en GNU/Linux'; ?>
<div class="article">
	<div class="header">
		<h1>GNU/Linux</h1>
	</div>
	<div class="figure">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/linux-logo-100x100.png', 'Linux logo', array()); ?>
	</div>
	<div class="body">
                <p>Actualmente <strong>GNU/Linux</strong> es un sistema operativo muy utilizado en las empresas para brindar servicios, como así también en computadoras personales y dispositivos portátiles.</p>
            <p>Proponemos capacitarte para que puedas dominar este sistema, conociendo su arquitectura, funcionamiento interno, configuración y servicios, para poder adaptarlo a tus necesides, acompañado por un profesional experto en el tema.</p>
	</div>
	<div class="syllabus">
		<h2>Temario del curso</h2>
		<ul>
			<li>Introducción</li>
			<li>Instalación de software en Linux (rpm, make, sources, fhs)</li>
			<li>El Kernel de Linux (compilar, personalizar, instalar)</li>
			<li>Manejo de recursos del sistema</li>
			<li>Administración de discos y filesystem</li>
			<li>Periféricos (usb, pci, scsi, etc)</li>
			<li>Iniciando/finalizando</li>
			<li>Usuarios</li>
			<li>Herramientas administrativas</li>
			<li>Introducción a redes TCP/IP</li>
			<li>Administración remota (ssh, rsh, etc)</li>
			<li>Configuración de servidores FTP y NFS</li>
			<li>Configuración de un servidor LDAP</li>
			<li>Configuración de un servidor de mail</li>
			<li>Configuración de un servidor de Samba</li>
			<li>Configuración DHCP</li>
		</ul>
	</div>
	<div class="audience">
		<h3>A quién está dirigido?</h3>
		<p>Aspirantes a técnicos/administradores de sistemas</p>
	</div>
	<div class="prerequisites">
		<h3>Pre requisitos</h3>
		<p>Es conveniente tener conceptos básicos en redes</p>
	</div>
	<div class="footer"></div>
</div>
<?php echo $this->renderPartial('instructors/_fernando_toledo'); ?>
<hr />
