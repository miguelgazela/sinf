using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Http;
using System.Web.Mvc;
using System.Net;
using System.Net.Http;
using EstadoEncomenda.Lib_estado_encomenda.Model;

namespace EstadoEncomenda.Controllers
{
    public class EncomendasController : ApiController
    {
        //
        // GET: /Encomendas/
        public IEnumerable<Lib_estado_encomenda.Model.Encomenda> GET()
        {
            
            return Lib_estado_encomenda.Model.Encomenda.getEncomendas();
        }

        /*
        public ActionResult Index()
        {
            return View();
        }*/

    }
}
