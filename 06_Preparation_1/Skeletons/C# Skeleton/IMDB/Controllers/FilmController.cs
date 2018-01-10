using System.Linq;
using System.Net;
using System.Web.Mvc;
using IMDB.Models;

namespace IMDB.Controllers
{
    [ValidateInput(false)]
    public class FilmController : Controller
    {
        private IMDBDbContext context;

        public FilmController()
        {
            this.context=new IMDBDbContext();
                
        }

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var films = this.context.Films.ToList();
            
            return View(films);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Film film)
        {
            if (ModelState.IsValid)
            {
                
                this.context.Films.Add(film);
                this.context.SaveChanges();
                return Redirect("/");

            }
            return this.View(film);

        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            Film film = this.context.Films.FirstOrDefault(f=>f.Id==id);
            if (film!=null)
            {
                return this.View(film);
            }
            return Redirect("/");
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Film filmModel)
        {
            Film film = this.context.Films.FirstOrDefault(f => f.Id == id);
            if (ModelState.IsValid)
            {
                film.Name = filmModel.Name;
                film.Director = filmModel.Director;
                film.Genre = filmModel.Genre;
                film.Year = filmModel.Year;
                this.context.SaveChanges();
                return Redirect("/");
            }
            return Redirect("edit/{id}");
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            Film film = this.context.Films.FirstOrDefault(f => f.Id == id);
            if (film != null)
            {
                return this.View(film);
            }

            return Redirect("/");
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Film filmModel)
        {
            Film film = this.context.Films.FirstOrDefault(f => f.Id == id);
            if (film != null)
            {
                this.context.Films.Remove(film);
                this.context.SaveChanges();
                return Redirect("/");
            }
            return Redirect("delete/{id}");
        }
    }
}