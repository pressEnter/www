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

INSERT INTO posts (published_date, title, slug, body, published) VALUES 
('2012-07-16', 'Rediseño del sitio Web', 'rediseno-del-sitio-web', 
'<p>Luego de bastante trabajo, estamos felices de anunciar el relanzamiento oficial de la imagen de <strong>pressEnter</strong>.</p>
<p>Ya habíamos iniciado el proceso hace un tiempo con la decisión de cambiar el logo, algo que siempre suele dar temor.</p>
<p>Ahora, con la renovación de nuestro sitio web después de varios años, buscamos estar a la altura de este momento que están viviendo las <strong>cooperativas de desarrollo de software</strong>.</p>
<p>Estaremos encantados de recibir comentarios, recomendaciones y/o críticas constructivas acerca de nuestra nueva imagen.</p>',
1)
;

INSERT INTO posts_categories (post_id, category_id) VALUES
(1, 1),
(1, 8)
;

INSERT INTO deltas (number, tag, description) VALUES ('002', 'datos', 'Datos iniciales de categorías de los posts y alguna noticia.');

COMMIT;
