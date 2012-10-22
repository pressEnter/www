BEGIN;

INSERT INTO users (username, password, email) VALUES ('admin', SHA1('admin'), 'admin@example');

INSERT INTO deltas (number, tag, description) VALUES ('001', 'datos', 'Usuarios.');

COMMIT;
