BEGIN;

INSERT INTO post_categories (id, description, slug) VALUES 
(1, 'Novedades', 'novedades'),
(2, 'Proyectos', 'proyectos'),
(3, 'Capacitación', 'capacitacion'),
(4, 'Servicios', 'servicios'),
(5, 'Notas', 'notas'),
(6, 'Eventos', 'eventos'),
(7, 'Desarrollos', 'desarrollos'),
(8, 'Sitio web', 'sitio-web')
;

INSERT INTO posts (id, published_date, title, slug, body, published) VALUES 
(1, '2012-07-16', 'Rediseño del sitio Web de pressEnter', 'rediseno-del-sitio-web-de-pressenter', 
'<p>Luego de bastante trabajo, estamos felices de anunciar el relanzamiento oficial de la imagen de <strong>pressEnter</strong>.</p>
<p>Ya habíamos iniciado el proceso hace un tiempo con la decisión de cambiar el logo, algo que siempre suele dar temor.</p>
<p>Ahora, con la renovación de nuestro sitio web después de varios años, buscamos estar a la altura de este momento que están viviendo las <strong>cooperativas de desarrollo de software</strong>.</p>
<p>En cuanto a las tecnologías usadas para desarrollarlo, nos decidimos por utilizar <a href="http://yiiframework.com" target="_blank">Yii Framework</a> como base porque nos resulta liviano, fácil de usar y extender. La alternativa era utilizar <a href="http://drupal.org" target="_blank">Drupal</a>, pero no nos daba el nivel de control que queríamos tener sobre el desarrillo del sitio.</p>
<p>Como librería javascript utilizamos <a href="http://jquery.com" target="_blank">jQuery</a> y <a href="http://jquerytools.org" target="_blank">jQuerytools</a> para los efectos.</p>
<p>La gráfica es propia, aunque utilizamos íconos de <a href="http://dryicons.com" target="_blank">Dryicons</a>, <a href="http://www.elegantthemes.com/" target="_blank">Nicholas Roach</a>, <a href="http://delacro.deviantart.com/" target="_blank">Delacro</a> y <a href="http://mysitemyway.com/" target="_blank">Mysitemyway</a>.</p>
<p>Para el mapa, utilizamos <a href="http://www.openstreetmap.org" target="_blank">OpenStreetMap</a>.</p>
<p>Prestamos especial atención a que no haya ni una sóla página dentro del sitio que no tenga código <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML válido</a>, al igual que el <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" target="_blank">CSS</a>.</p>
<p style="margin-top: 10px;">En fin...estaremos encantados de recibir comentarios, recomendaciones y/o críticas constructivas acerca de nuestra nueva imagen.</p>',
1)
;

INSERT INTO posts_categories (post_id, category_id) VALUES
(1, 1),
(1, 8)
;

INSERT INTO deltas (number, tag, description) VALUES ('002', 'datos', 'Datos iniciales de categorías de los posts y alguna noticia.');

COMMIT;
