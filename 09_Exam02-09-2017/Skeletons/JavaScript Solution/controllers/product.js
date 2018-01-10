const Product = require('../models/Product');

module.exports = {
	index: (req, res) => {
       Product.find().then(entries=>{
       	res.render('product/index',{'entries':entries})
	   })
    	},
	createGet: (req, res) => {
        res.render('product/create');
	},
	createPost: (req, res) => {
	let product=req.body;
	Product.create(product).then(product=>{
		res.redirect('/')
		}).catch(err=>{
			product.error='Cannot create this product';
			res.render('product/create',product);
	})
	},
	editGet: (req, res) => {
        let id=req.params.id;
        Product.findById(id).then(product=> {
        	if(product){
        		res.render('product/edit',product)
			}
			else {
        		res.redirect('/');

			}

		}).catch(err=>res.redirect('/'));
	},
	editPost: (req, res) => {
        let product=req.body;
        let id=req.params.id;

        Product.findByIdAndUpdate(id,product,{runValidator:true}).then(product=>{
        	res.redirect('/');
		}).catch(err=>{
            product.name = id;
            product.error = "Wrong name, bruv ~";
            return res.render("product/edit", product);
		})
	}
};