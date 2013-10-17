using Interop.ErpBS800;
using Interop.StdBE800;
using Interop.StdPlatBS800;
using Interop.GcpBE800;
using ADODB;

using Interop.IGcpBS800;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace EstadoEncomenda.Lib_estado_encomenda.Model
{
    public class Encomenda
    {
        public int Id;
        public string testCliente;

        internal static List<Model.Encomenda> getEncomendas()
        {
            ErpBS objMotor = new ErpBS();
            StdBELista objList;
            Model.Encomenda enc = new Model.Encomenda();
            List<Model.Encomenda> listaEncomendas = new List<Model.Encomenda>();

            if (PriEngine.InitializeCompany("BELAFLOR", "", "") == true)
            {
                objList = PriEngine.Engine.Consulta("SELECT * FROM Vendas_Encomendas");

                while (!objList.NoFim())
                {
                    enc = new Model.Encomenda();
                    enc.testCliente = objList.Valor("Documento");
                    
                    listaEncomendas.Add(enc);
                    objList.Seguinte();
                }
                return listaEncomendas;
            }
            else
            {

                return null;
            }
        }
    }
}