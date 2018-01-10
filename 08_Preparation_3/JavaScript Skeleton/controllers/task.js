const Task = require('../models/Task');

module.exports = {
	index: (req, res) => {
	Task.find().then(tasks=>{
		res.render('task/index',{
            'openTasks':tasks.filter(t=>t.status=='Open'),
			'inProgressTasks':tasks.filter(t=>t.status=='In Progress'),
			'finishedTasks':tasks.filter(t=>t.status=='Finished')
		})
	})
	},
	createGet: (req, res) => {
		res.render('task/create');
	},
	createPost: (req, res) => {
		let task=req.body;
		Task.create(task).then(task=>{
			res.redirect('/')
		}).catch(err=>{
			task.error='Cannot create task';
			res.render('task/create',task);
		})
	},
	editGet: (req, res) => {
		let id=req.params.id;
		Task.findById(id).then(task=>{
			res.render('task/edit',task);
		})
	},
	editPost: (req, res) => {
		let id=req.params.id;
		let task=req.body;
		Task.findByIdAndUpdate(id, task, {runValidator:true}).then(tasks=>{
			res.redirect('/');
		}).catch(err=>{
			task.error='Cannot edit this task';
			res.render('task/edit', task);
		})
	}
};