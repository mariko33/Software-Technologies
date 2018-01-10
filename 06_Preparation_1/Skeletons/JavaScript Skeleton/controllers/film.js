const Film = require('../models/Film');

module.exports = {
	index: (req, res) => {
        Film.find().then(films => {
            res.render('film/index', {'films': films});
        });
	},
	createGet: (req, res) => {
        res.render('film/create')	},
	createPost: (req, res) => {
        let filmArgs=req.body;
        let erorrMsg='';
        if(!filmArgs.name){
        	erorrMsg='Invalid name!';
		}else if(!filmArgs.genre){
        	erorrMsg='Invalid genre!'
		}else if(!filmArgs.director){
			erorrMsg='Invalid director!'
		}else if(!filmArgs.year){
			erorrMsg='Invalid year!'
		}
		if(erorrMsg){
			res.render('film/create',{error:erorrMsg});
			return;
		}

		filmArgs.year=Number(filmArgs.year);
        Film.create(filmArgs).then(film => {
            res.redirect("/");
        }).catch(err => {
            film.error = 'Cannot create film.';
            res.render('film/create', film);
        });
	},
	editGet: (req, res) => {
        let filmId=req.params.id;
        Film.findById(filmId).then(film=>{
        	if(film){
        		res.render('film/edit',film)
			}
			else {
        		res.render('/')
			}
		}).catch(err=>res.redirect('/'));
	},
	editPost: (req, res) => {
        let filmId=req.params.id;
        let film=req.body;
        film.year=Number(film.year);

        Film.findByIdAndUpdate(filmId,film,{runValidators:true}).then(film=>{
        	res.redirect('/');
		}).catch(err=>{
			film.id=filmId;
			film.error='Cannot edit this film!';
			res.render('film/edit',film);
		})
	},
	deleteGet: (req, res) => {
        let filmId=req.params.id;
        let film=Film.findById(filmId).then(film=>{
        	if(film){
                res.render('film/delete',film)
			}
			else {
        		res.redirect('/');
			}
		}).catch(err=>res.redirect('/'));
	},
	deletePost: (req, res) => {
        let filmId=req.params.id;
        Film.findByIdAndRemove(filmId).then(film=>
		res.redirect('/')).catch(err=>res.redirect('/'))
	}
};