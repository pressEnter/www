BEGIN;

INSERT INTO users (username, password, email) VALUES ('lbaraglia', SHA1('Asps97huMroe'), 'lbaraglia@pressenter.com.ar');
INSERT INTO users (username, password, email) VALUES ('ftoledo', SHA1('gyBe48saL74'), 'ftoledo@pressenter.com.ar');
INSERT INTO users (username, password, email) VALUES ('mgarcia', SHA1('tan14LOrds'), 'mgarcia@pressenter.com.ar');
INSERT INTO users (username, password, email) VALUES ('hsanchez', SHA1('Fugal45deL'), 'hsanchez@pressenter.com.ar');

INSERT INTO deltas (number, tag, description) VALUES ('001', 'datos', 'Usuarios.');

COMMIT;
