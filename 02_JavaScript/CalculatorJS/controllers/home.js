const Calculator=require('../models/Calculator');

module.exports = {
    indexGet: (req, res) => {
        res.render('home/index');
    },
    indexPost:(req,res)=>{
        let calculatorBody=req.body;
        //req.body['calculator'] !!!
        let calculatorPrams=calculatorBody['calculator'];

        let calculator=new Calculator();
        calculator.leftOperand=Number(calculatorPrams.leftOperand);
        calculator.rightOperand=Number(calculatorPrams.rightOperand);
        calculator.operator=calculatorPrams.operator;
        let result=calculator.calculateResult();

        res.render('home/index', {'calculator':calculator,'result':result});
    }
};