namespace ProjectRider.Controllers
{
    using System.Collections.Generic;
    using System.Linq;
    using System.Web.Mvc;
    using Models;

    [ValidateInput(false)]
    public class ProjectController : Controller
    {
        private ProjectRiderDbContext context;

        public ProjectController()
        {
            this.context=new ProjectRiderDbContext();
                
        }
        
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            List<Project>projects = this.context.Projects.ToList();
            return this.View(projects);
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
        public ActionResult Create(Project project)
        {
            if (ModelState.IsValid)
            {
                Project projectCurr=new Project();
                projectCurr.Title = project.Title;
                projectCurr.Budget = project.Budget;
                projectCurr.Description = project.Description;
                this.context.Projects.Add(projectCurr);
                this.context.SaveChanges();
                return this.Redirect("/");

            }
            return this.Create(project);
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            Project project = this.context.Projects.Find(id);
            if (project != null)
            {
                return this.View(project);
            }
            return this.Redirect("/");
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Project project)
        {
            Project projectCurr = this.context.Projects.Find(id);
            
            if (!ModelState.IsValid)
            {
                return this.Edit(id);
            }
        
                projectCurr.Budget = project.Budget;
                projectCurr.Description = project.Description;
                projectCurr.Title = project.Title;
                this.context.SaveChanges();
                return this.Redirect("/");
        
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            Project project = this.context.Projects.Find(id);
            if (project != null)
            {
                return this.View(project);
            }
            return this.Redirect("/");
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Project reportModel)
        {
            Project project = this.context.Projects.Find(id);
            if (project != null)
            {
                this.context.Projects.Remove(project);
                this.context.SaveChanges();
            }
            return this.Redirect("/");
        }
    }
}