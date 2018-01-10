using System.Linq;
using System.Web.Mvc;
using ShoppingList.Models;

namespace ShoppingList.Controllers
{
    [ValidateInput(false)]
    public class ProductController : Controller
    {
        private ShoppingListDbContext context;

        public ProductController()
        {
            this.context=new ShoppingListDbContext();
        }
        
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var reports = this.context.Products.ToList();
            return this.View(reports);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return this.View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Product product)
        {
            if (ModelState.IsValid)
            {
                this.context.Products.Add(product);
                this.context.SaveChanges();
                return this.Redirect("/");
            }

            return this.View(product);
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            Product product = this.context.Products.FirstOrDefault(p => p.Id == id);
            if (product == null)
            {
                return this.Redirect("/");
            }
            return this.View(product);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Product productModel)
        {
            Product product = this.context.Products.FirstOrDefault(p => p.Id == id);
            if (product == null)
            {
                return this.Redirect("/");
            }

            if (ModelState.IsValid)
            {
                product.Name = productModel.Name;
                product.Priority = productModel.Priority;
                product.Quantity = productModel.Quantity;
                product.Status = productModel.Status;
                this.context.SaveChanges();
                return this.Redirect("/");
            }

            return this.Edit(id);

        }
    }
}