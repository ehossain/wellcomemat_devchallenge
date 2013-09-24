USE project_management;

SELECT * from tasks JOIN projects WHERE tasks.project_id=projects.id AND projects.name='Denver Video Project';

SELECT * from projects ORDER BY name;

SELECT * from tasks WHERE due_at > '2013-12-05';