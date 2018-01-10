const Anime = require('../models/Anime');

module.exports = {
	index: (req, res) => {
        Anime.find().then(animes=>{
        	res.render('anime/index',{'animes':animes})
		}).catch(err=>{
			return res.send('error')
		})
	},
	createGet: (req, res) => {
        res.render('anime/create');
	},
	createPost: (req, res) => {
       let anime=req.body;
       if(anime.name==null||anime.rating==null||anime.description==null||anime.watched==null){
       	res.redirect('/');
	   }
	   Anime.create(anime).then(anime=>{
	   	res.redirect('/');
	   }).catch(err=>{
	   	anime.error='Cannot create this anime.';
	   	res.render('anime/create',anime);

	   })
	},
	deleteGet: (req, res) => {
        let id=req.params.id;
        let anime=Anime.findById(id).then(anime=>{
        	res.render('anime/delete',anime);
		}).catch(err=>{
			anime.error='Cannot find tjis anime';
			res.redirect('/');
		})
	},
	deletePost: (req, res) => {
        let id=req.params.id;
        Anime.findByIdAndRemove(id).then(anime=>{
        	res.redirect('/');
		})
	}
};