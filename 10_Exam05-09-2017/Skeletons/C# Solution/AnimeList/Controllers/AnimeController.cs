using System.Linq;
using System.Web.Mvc;
using AnimeList.Models;
using System.Collections.Generic;

namespace AnimeList.Controllers
{
    [ValidateInput(false)]
    public class AnimeController : Controller
    {
        private AnimeListDbContext context;

        public AnimeController()
        {
            this.context=new AnimeListDbContext();
        }
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            List<Anime>animes = this.context.Animes.ToList();
            return this.View(animes);

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
        public ActionResult Create(Anime anime)
        {
            if (this.ModelState.IsValid)
            {
                this.context.Animes.Add(anime);
                this.context.SaveChanges();
                return Redirect("/");
            }

            return View(anime);

        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            Anime anime = this.context.Animes.Find(id);
            if (anime != null)
            {
                return this.View(anime);

            }
            return this.Redirect("/");

        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Anime animeModel)
        {
            Anime anime = this.context.Animes.Find(id);
            if (anime == null) return HttpNotFound();

            this.context.Animes.Remove(anime);
            this.context.SaveChanges();
            return this.Redirect("/");
        }
    }
}