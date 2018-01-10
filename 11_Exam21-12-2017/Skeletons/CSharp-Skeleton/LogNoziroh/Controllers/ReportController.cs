using WebGrease.Css;

namespace LogNoziroh.Controllers
{
    using System.Collections.Generic;
    using System.Linq;
    using System.Web.Mvc;
    using Models;

    [ValidateInput(false)]
    public class ReportController : Controller
    {
        private LogNozirohDbContext context;

        public ReportController()
        {
            this.context=new LogNozirohDbContext();
        }
        
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var reports = this.context.Reports.ToList();
            return this.View(reports);
        }

        [HttpGet]
        [Route("details/{id}")]
        public ActionResult Details(int id)
        {
            var report = this.context.Reports.Find(id);
            if (report != null)
            {
                return this.View(report);
            }
            return this.Redirect("/");
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
        public ActionResult Create(Report report)
        {
            var repordDb=new Report();
            if (ModelState.IsValid)
            {
                repordDb.Message = report.Message;
                repordDb.Origin = report.Origin;
                repordDb.Status = report.Status;
                this.context.Reports.Add(repordDb);
                this.context.SaveChanges();
            }
            return this.Redirect("/");
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            var report = this.context.Reports.Find(id);
            if (report != null)
            {
                return this.View(report);
            }
            return this.Redirect("/");
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Report reportModel)
        {
            var report = this.context.Reports.Find(id);
            if (report != null)
            {
                this.context.Reports.Remove(report);
                this.context.SaveChanges();
                return this.Redirect("/");
            }

            return this.Delete(id);
        }
    }
}