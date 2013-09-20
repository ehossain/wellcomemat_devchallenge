USE project_management;

INSERT INTO projects (name)
VALUES ('Denver Video Project');

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ('80012', 'Create new video', '2013-12-01', 0 );

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ('80012', 'Update new video', '2013-12-15', 0 );

INSERT INTO projects (name)
VALUES ('Atlanta Video Project');

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ('30332', 'Create existing video', '2013-12-15', 0 );

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ('30332', 'Update existing video', '2013-12-15', 0 );

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ('30332', 'Transcode existing video', '2014-12-27', 0 );

INSERT INTO projects (name)
VALUES ('Los Angeles Video Project');

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ('90036', 'Update existing video', '2014-01-27', 0 );

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ('90036', 'Transcode existing video', '2014-01-27', 0 );