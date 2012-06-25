BEGIN;

INSERT INTO post_categories (id, description, slug) VALUES 
(1, 'Novedades', 'novedades'),
(2, 'Proyectos', 'proyectos'),
(3, 'Capacitación', 'capacitacion'),
(4, 'Servicios', 'servicios'),
(5, 'Notas', 'notas'),
(6, 'Eventos', 'eventos')
;

INSERT INTO deltas (number, tag, description) VALUES (1, 'datos', '');

COMMIT;
