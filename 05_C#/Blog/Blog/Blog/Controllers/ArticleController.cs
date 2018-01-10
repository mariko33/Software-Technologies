using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Blog.Models;
using Microsoft.AspNet.Identity;

namespace Blog.Controllers
{
    public class ArticleController : Controller
    {
        private BlogDbContext context;

        public ArticleController()
        {
            this.context=new BlogDbContext();
        }
        
        // GET: Article
        public ActionResult Index()
        {
           return RedirectToAction("List");
        }

        //GET: Article/List
        public ActionResult List()
        {
            var articles = this.context.Articles
                .Include(a => a.Author)
                .ToList();
            return View(articles);
        }

        //GET: Article/Details
        [Authorize]
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            var article = this.context.Articles
                .Where(a=>a.Id==id)
                .Include(a=>a.Author)
                .First();
            
            if (article==null)
            {
                return HttpNotFound();
            }
            return View(article);

        }

        //GET Article/Create
        [HttpGet]
        [Authorize]
        public ActionResult Create()
        {
            return View();
        }

        //POST: Article/Create
        [HttpPost]
        [Authorize]
        public ActionResult Create(Article article)
        {
            if (ModelState.IsValid)
            {
                // var author = this.context.Users.FirstOrDefault(u => u.UserName == User.Identity.Name);
                var authorId = this.context.Users
                    .Where(u => u.UserName == this.User.Identity.Name)
                    .First()
                    .Id;



                Article articleNew=new Article()
                {
                    Content = article.Content,
                    Title = article.Title,
                    AuthorId = authorId
                };
                this.context.Articles.Add(articleNew);
                this.context.SaveChanges();
                //return RedirectToAction("List", "Article");
                return RedirectToAction("Index");
            }

            return View(article);
        }
        
        
        //GET
        [HttpGet]
        [Authorize]
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            
            Article article = this.context.Articles.FirstOrDefault(a => a.Id == id);
            if (!IsUserAuthorizedToEdit(article))
            {
                return new HttpStatusCodeResult(HttpStatusCode.Forbidden);
            }
            return View(article);
        }
        
        
        //POST
        [HttpPost]
        [Authorize]
        public ActionResult Delete(Article article)
        {
            if (article==null)
            {
                return HttpNotFound();
            }

            Article articleNew = this.context.Articles.FirstOrDefault(a => a.Title==article.Title&&a.Content==article.Content);
            this.context.Articles.Remove(articleNew);
            this.context.SaveChanges();
            return RedirectToAction("List");
        }
        
        //GET Article/Edit
        [HttpGet]
        [Authorize]
        public ActionResult Edit(int? id)
        {
            if (id==null)
            {
                return new  HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            
            Article article=this.context.Articles.FirstOrDefault(a => a.Id == id);
            if (article==null)
            {
                return HttpNotFound();
            }

            if (!IsUserAuthorizedToEdit(article))
            {
                return new HttpStatusCodeResult(HttpStatusCode.Forbidden);
            }
            var model=new ArticleViewModel();

            model.Id = article.Id;
            model.AuthorId = article.AuthorId;
            model.Title = article.Title;
            model.Content = article.Content;
            
            return View(model);
        }

        [HttpPost]
        [Authorize]
        public ActionResult Edit(ArticleViewModel model)
        {
            if (ModelState.IsValid)
            {
                Article article = this.context.Articles.FirstOrDefault(a => a.Id == model.Id);
                article.Title = model.Title;
                article.Content = model.Content;
                this.context.Entry(article).State = EntityState.Modified;
                this.context.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(model);
        }

        private bool IsUserAuthorizedToEdit(Article article)
        {
            bool isAdmin = this.User.IsInRole("Admin");
            bool isAuthor = article.IsAuthor(this.User.Identity.Name);

            return isAdmin || isAuthor;
        }
        
    }
}