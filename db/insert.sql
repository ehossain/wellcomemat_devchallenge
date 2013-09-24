USE project_management;

INSERT INTO projects (name)
VALUES ('Denver Video Project');

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ((SELECT MAX(ID) FROM projects), 'Create new video', '2013-12-01', 0 );

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ((SELECT MAX(ID) FROM projects), 'Update new video', '2013-12-15', 0 );

INSERT INTO projects (name)
VALUES ('Atlanta Video Project');

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ((SELECT MAX(ID) FROM projects), 'Create existing video', '2013-12-15', 0 );

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ((SELECT MAX(ID) FROM projects), 'Update existing video', '2013-12-15', 0 );

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ((SELECT MAX(ID) FROM projects), 'Transcode existing video', '2014-12-27', 0 );

INSERT INTO projects (name)
VALUES ('Los Angeles Video Project');

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ((SELECT MAX(ID) FROM projects), 'Update existing video', '2014-01-27', 0 );

INSERT INTO tasks (project_id, name, due_at, completed)
VALUES ((SELECT MAX(ID) FROM projects), 'Transcode existing video', '2014-01-27', 0 );