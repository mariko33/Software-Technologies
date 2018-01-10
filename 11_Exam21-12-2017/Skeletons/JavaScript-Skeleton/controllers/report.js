const Report = require('../models/Report');

module.exports = {
    index: (req, res) => {
        Report.find().then(reports=>{
            res.render('report/index',{'reports':reports});
        })
    },
    createGet: (req, res) => {
       res.render('report/create');
    },
    createPost: (req, res) => {
        let report=req.body;
        Report.create(report).then(report=>{
            res.redirect('/')
        }).catch(err=>{
            report.error='Cannot create this report.';
            res.render('report/create',report)
        })
    },
    detailsGet: (req, res) => {
        let id=req.params.id;
        Report.findById(id).then(report=>{
            if(report){
                res.render('report/details',report);
            }
            else {
                res.redirect('/');
            }
        }).catch(err=>res.redirect('/'));
    },
    deleteGet: (req, res) => {
        let id=req.params.id;
        Report.findById(id).then(report=>{
            if(report){
                res.render('report/delete',report);
            }
            else {
                res.redirect('/');
            }

        })

    },
    deletePost: (req, res) => {
        let id=req.params.id;
        Report.findByIdAndRemove(id).then(report=>{
            res.redirect('/')
        }).catch(err=>{
            res.redirect('/')
        })
    }
};