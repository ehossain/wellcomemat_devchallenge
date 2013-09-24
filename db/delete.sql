USE project_management;

DELETE from tasks WHERE exists
(SELECT * from projects WHERE projects.id=tasks.project_id and projects.name='Atlanta Video Project');