<?php $this->pageTitle = 'pressEnter | Cooperativa de Software Libre'; ?>

<?php $this->renderPartial('webroot.themes.v1.views.partials.highlights.' . $rand_highlight); ?>
<div class="section" id="news-updates">
    <div class="section" id="news">
        <h2>Noticias</h2>
        
        <?php $this->widget('Posts', array(
            'minimal' => true,
            'limit' => 2,
            'showSocialLinks' => false,
            'headerTag' => 'h3',
        )); ?>
    </div>
    <div class="section" id="updates">
        <h2>Actualizaciones</h2>
        <div id="twitter-widget">
        <?php $this->renderPartial('application.views.partials._last_tweets'); ?>
        </div>
    </div>
</div>
<div class="section gallery" id="technologies">
    <?php $technologies_url = Yii::app()->request->getBaseUrl(true) . '/images/technologies/150x93/'; ?>
    <h2>Tecnologías <span>preferidas</span></h2>
    <ul class="first">
        <li><?php echo CHtml::image($technologies_url.'python.png', 'Python', array('title' => 'Python')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'django.png', 'Django', array('title' => 'Django')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'olpc.png', 'OLPC', array('title' => 'OLPC')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'apache.png', 'Apache', array('title' => 'Apache')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'gnu.png', 'GNU', array('title' => 'GNU')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'linux.png', 'Linux', array('title' => 'Linux')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'mysql.png', 'Mysql', array('title' => 'Mysql')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'postgresql.png', 'PostgreSQL', array('title' => 'PostgreSQL')); ?></li>
     </ul>
     <ul>
        <li><?php echo CHtml::image($technologies_url.'php.png', 'PHP', array('title' => 'PHP')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'yii.png', 'YII framework', array('title' => 'YII framework')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'symfony.png', 'Symfony framework', array('title' => 'Symfony framework')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'drupal.png', 'Drupal', array('title' => 'Drupal')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'joomla.png', 'Joomla', array('title' => 'Joomla')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'wordpress.png', 'Wordpress', array('title' => 'Wordpress')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'jquery.png', 'jQuery', array('title' => 'jQuery')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'moodle.png', 'jQuery', array('title' => 'Moodle')); ?></li>
        <li class="last">&nbsp;</li>
    </ul>
    <hr />
</div>
