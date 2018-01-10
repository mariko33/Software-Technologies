using System;
using System.Linq;
using System.Web.Mvc;
using TeisterMask.Models;

namespace TeisterMask.Controllers
{
        [ValidateInput(false)]
	public class TaskController : Controller
        {
            private TeisterMaskDbContext context;

            public TaskController()
            {
                this.context=new TeisterMaskDbContext();
            }
	    
	    [HttpGet]
        [Route("")]
	    public ActionResult Index()
	    {
	        var tasks = this.context.Tasks.ToList();
	        return this.View(tasks);
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
		public ActionResult Create(Task task)
		{
		    if (ModelState.IsValid)
		    {
		        this.context.Tasks.Add(task);
		        this.context.SaveChanges();
		        return Redirect("/");
		    }
		    return this.View(task);
		}

		[HttpGet]
		[Route("edit/{id}")]
        public ActionResult Edit(int id)
		{
		    Task task = this.context.Tasks.FirstOrDefault(t => t.Id == id);
		    if (task != null)
		    {
		        return this.View(task);
		    }
		    return Redirect("/");
		}

		[HttpPost]
		[Route("edit/{id}")]
        [ValidateAntiForgeryToken]
		public ActionResult EditConfirm(int id, Task taskModel)
		{
		    Task task = this.context.Tasks.FirstOrDefault(t => t.Id == id);
		    if (task != null)
		    {
		        task.Title = taskModel.Title;
		        task.Status = taskModel.Status;
		        this.context.SaveChanges();    

		    }
		    return Redirect("/");

        }
	}
}