﻿using System.Web.Mvc;
using Calculator_CSharp.Models;

namespace Calculator_CSharp.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index(Calculator calculator)
        {
            return View(calculator);
        }

        [HttpPost]
        public ActionResult Calculate(Calculator calculator)
        {
            calculator.Result = CalculateResult(calculator);

            return RedirectToAction("Index", calculator);
        }

        private decimal CalculateResult(Calculator calculator)
        {
            switch (calculator.Operator)
            {
                case "+":
                    return calculator.LeftOperand + calculator.RightOperand;
                    break;
                case "-":
                    return calculator.LeftOperand - calculator.RightOperand;
                    break;
                case "*":
                    return calculator.LeftOperand * calculator.RightOperand;
                    break;
                case "/":
                    return calculator.LeftOperand / calculator.RightOperand;
                    break;
                    default: return 0m;
            }
        }
    }
}