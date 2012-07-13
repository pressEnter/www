-- Stories
BEGIN;

INSERT INTO posts (published_date, category_id, title, slug, body, published) VALUES 
('2012-05-15', 1, 'Rediseño del sitio Web', 'rediseno-del-sitio-web', '
<p>Estamos orgullosos de anunciar el relanzamiento del sitio web de <strong>pressEnter</strong>.</p>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua.</p>
<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
', 1),
('2012-06-12', 3, 'Lanzamiento de nuevo curso de Symfony Framework', 'lanzamiento-nuevo-curso-symfony-framework', '
<p>Nos encontramos en preparación del nuevo curso de <strong>Symfony Framework desde cero</strong>.</p>
<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua.</p>
', 1),
('2012-06-24', 2, 'pressEnter en FISL 13', 'pressenter-fisl-13', '
<p>Todos los años la cobertura del fisl13 es realizada de forma colaborativa en la redacción del GT Comunicación, montado en la ção, montado en el evento. Allí, profesionales, estudiantes y entusiastas intercambian informaciones y producen el contenido que se oye, se ve y se lee entre una conferencia y otra.</p>
', 1)
;

COMMIT;
