<?php $this->pageTitle = 'pressEnter | Servicio de Hosting'; ?>
<?php $this->metaDescription = 'pressEnter ofrece una gran variedad de servicios de hosting adaptable a cualquir necesidad'; ?>
<div class="article">
	<div class="header">
		<h2>Hosting</h2>
	</div>
	<div class="body service-details">
		<p>Brindamos alojamiento web para aplicaciones que necesite acceder desde cualquier parte de mundo. <br/> Viste los planes existentes o bien consulte por una solución a medida de sus necesidades.</p> 
	</div>
	<div id="hosting-plans">
		<table summary="Planes de Hosting disponibles en pressEnter">
			<caption>Planes de Hosting</caption>
			<colgroup>
				<col />
				<col class="odd" id="hosting-plan-basic" />
				<col class="even" id="hosting-plan-medium" />
				<col class="odd" id="hosting-plan-professional" />
			</colgroup>
			<thead>
				<tr>
					<th></th>
					<th id="header-first-plan"><span>Personal/Blogger</span></th>
					<th id="header-second-plan"><span>Pyme</span></th>
					<th id="header-third-plan"><span>Corporativo</span></th>
				</tr>
			</thead>
			<tbody>
				<tr id="disk-space" class="even">
					<th scope="row">Espacio en disco</th>
					<td>100<span class="measurement-unit">MB</span></td>
					<td>500<span class="measurement-unit">MB</span></td>
					<td>1.5<span class="measurement-unit">GB</span></td>
				</tr>
				<tr id="bandwidth" class="odd">
					<th scope="row">Transferencia mensual</th>
					<td>3<span class="measurement-unit">GB</span></td>
					<td>5<span class="measurement-unit">GB</span></td>
					<td>10<span class="measurement-unit">GB</span></td>
				</tr>
				<tr id="domains" class="even">
					<th scope="row">Cantidad de dominios</th>
					<td>1</td>
					<td>3</td>
					<td>5</td>
				</tr>
				<tr id="sub-domains" class="odd">
					<th scope="row">Subdominios</th>
					<td class="false"><span>No</span></td>
					<td><span>5</span></td>
					<td><span>20</span></td>
				</tr>
				<tr id="email-accounts" class="even">
					<th scope="row">Cuentas de e-mail</th>
					<td>10</td>
					<td>30</td>
					<td>100</td>
				</tr>
				<tr id="ftp-accounts" class="odd">
					<th scope="row">Cuentas FTP</th>
					<td>3</td>
					<td>5</td>
					<td>20</td>
				</tr>
				<tr id="php-version" class="even">
					<th scope="row">Versión de PHP</th>
					<td>5.3</td>
					<td>5.3</td>
					<td>5.3</td>
				</tr>
				<tr id="database" class="odd">
					<th scope="row">Base de datos</th>
					<td>MySQL</td>
					<td>MySQL</td>
					<td>MySQL / POSTGRESQL</td>
				</tr>
				<tr id="antivirus" class="even">
					<th scope="row">Antivirus</th>
					<td class="true"><span>Sí</span></td>
					<td class="true"><span>Sí</span></td>
					<td class="true"><span>Sí</span></td>
				</tr>
				<tr id="webmail" class="odd">
					<th scope="row">Webmail</th>
					<td class="true"><span>Sí</span></td>
					<td class="true"><span>Sí</span></td>
					<td class="true"><span>Sí</span></td>
				</tr>
				<tr id="ssh-access" class="even">
					<th scope="row">Acceso SSH</th>
					<td class="false"><span>No</span></td>
					<td class="true"><span>Sí</span></td>
					<td class="true"><span>Sí</span></td>
				</tr>
				<tr id="email-aliases" class="odd">
					<th scope="row">Alias e-mail</th>
					<td class="false"><span>No</span></td>
					<td class="true"><span>Sí</span></td>
					<td class="true"><span>Sí</span></td>
				</tr>
				<tr id="python" class="even">
					<th scope="row">Python</th>
					<td class="false"><span>No</span></td>
					<td class="false"><span>No</span></td>
					<td class="true"><span>Sí</span></td>
				</tr>
				<tr id="backups" class="odd">
					<th scope="row">Backups diarios</th>
					<td class="false"><span>No</span></td>
					<td class="false"><span>No</span></td>
					<td class="true"><span>Sí</span></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4">&nbsp;</td>
				</tr>
			</tfoot>
		</table>
		<div class="footer">
			<p>Todos los planes descriptos son configurables para adaptarlos a cualquier necesidad.</p>
			<p>Para más información o contratar un servicio de <strong>Hosting</strong>, por favor comuníquese con nosotros a través de nuestra nuestra <?php echo CHtml::link('página de contacto', array('site/contact')); ?>.</p>
		</div>
	</div>
</div>

