using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using Interop.ErpBS800;
using Interop.StdPlatBS800;
using Interop.StdBE800;
using Interop.GcpBE800;
using ADODB;
using Interop.IGcpBS800;


namespace SINF_proj.Lib_Primavera
{
    public class EncomendasGes
    {
        # region Encomendas

        public static List<Model.DocVenda> Encomendas_Lista()
        {
            ErpBS objMotor = new ErpBS();
            StdBELista objListCab;
            StdBELista objListLin;
            Model.DocVenda dv = new Model.DocVenda();
            List<Model.DocVenda> listdv = new List<Model.DocVenda>();
            Model.LinhaDocVenda lindv = new Model.LinhaDocVenda();
            List<Model.LinhaDocVenda> listlindv = new List<Model.LinhaDocVenda>();

            if (PriEngine.InitializeCompany("BELAFLOR", "", "") == true)
            {
                objListCab = PriEngine.Engine.Consulta("SELECT id, Entidade, Data, DataUltimaActualizacao, NumDoc, TotalMerc, Serie From CabecDoc where TipoDoc='ECL'");
                //objListCab = objMotor.Consulta("SELECT * From CabecDoc where TipoDoc='ECL'");

                while (!objListCab.NoFim())
                {
                    dv = new Model.DocVenda();
                    dv.id = objListCab.Valor("id");
                    dv.Entidade = objListCab.Valor("Entidade");
                    dv.NumDoc = objListCab.Valor("NumDoc");
                    dv.DataInicio = objListCab.Valor("Data");
                    dv.DataFim = objListCab.Valor("DataUltimaActualizacao");
                    dv.TotalMerc = objListCab.Valor("TotalMerc");
                    dv.Serie = objListCab.Valor("Serie");
                    objListLin = PriEngine.Engine.Consulta("SELECT idCabecDoc, Artigo, Descricao, Quantidade, Unidade, PrecUnit, Desconto1, TotalILiquido, PrecoLiquido from LinhasDoc where IdCabecDoc='" + dv.id + "' order By NumLinha");
                    listlindv = new List<Model.LinhaDocVenda>();

                    while (!objListLin.NoFim())
                    {
                        lindv = new Model.LinhaDocVenda();
                        lindv.IdCabecDoc = objListLin.Valor("idCabecDoc");
                        lindv.CodArtigo = objListLin.Valor("Artigo");
                        lindv.DescArtigo = objListLin.Valor("Descricao");
                        lindv.Quantidade = objListLin.Valor("Quantidade");
                        lindv.Unidade = objListLin.Valor("Unidade");
                        lindv.Desconto = objListLin.Valor("Desconto1");
                        lindv.PrecoUnitario = objListLin.Valor("PrecUnit");
                        lindv.TotalILiquido = objListLin.Valor("TotalILiquido");
                        lindv.TotalLiquido = objListLin.Valor("PrecoLiquido");
                        listlindv.Add(lindv);
                        objListLin.Seguinte();
                    }

                    dv.LinhasDoc = listlindv;
                    listdv.Add(dv);
                    objListCab.Seguinte();

                }

                return listdv;
            }
            else
            {
                return null;
            }
        }

        public static List<Model.DocVenda> getEncomendas(string codCliente, int quantidade)
        {
            ErpBS objMotor = new ErpBS();
            StdBELista objListCab;
            StdBELista objListLin;
            Model.DocVenda dv = new Model.DocVenda();
            List<Model.DocVenda> listdv = new List<Model.DocVenda>();
            Model.LinhaDocVenda lindv = new Model.LinhaDocVenda();
            List<Model.LinhaDocVenda> listlindv = new List<Model.LinhaDocVenda>();
            int i = 0;

            if (PriEngine.InitializeCompany("BELAFLOR", "", "") == true)
            {

                string st = "SELECT id, Entidade, Data, DataUltimaActualizacao, NumDoc, TotalMerc, Serie From CabecDoc where (TipoDoc='ECL' and Entidade ='" + codCliente + "')";
                objListCab = PriEngine.Engine.Consulta(st);
                
                while (!objListCab.NoFim())
                {
                    if (i < quantidade)
                    {
                        dv = new Model.DocVenda();
                        dv.id = objListCab.Valor("id");
                        dv.Entidade = objListCab.Valor("Entidade");
                        dv.NumDoc = objListCab.Valor("NumDoc");
                        dv.DataInicio = objListCab.Valor("Data");
                        dv.DataFim = objListCab.Valor("DataUltimaActualizacao");
                        dv.TotalMerc = objListCab.Valor("TotalMerc");
                        dv.Serie = objListCab.Valor("Serie");
                        objListLin = PriEngine.Engine.Consulta("SELECT idCabecDoc, Artigo, Descricao, Quantidade, Unidade, PrecUnit, Desconto1, TotalILiquido, PrecoLiquido from LinhasDoc where IdCabecDoc='" + dv.id + "' order By NumLinha");
                        listlindv = new List<Model.LinhaDocVenda>();

                        while (!objListLin.NoFim())
                        {
                            lindv = new Model.LinhaDocVenda();
                            lindv.IdCabecDoc = objListLin.Valor("idCabecDoc");
                            lindv.CodArtigo = objListLin.Valor("Artigo");
                            lindv.DescArtigo = objListLin.Valor("Descricao");
                            lindv.Quantidade = objListLin.Valor("Quantidade");
                            lindv.Unidade = objListLin.Valor("Unidade");
                            lindv.Desconto = objListLin.Valor("Desconto1");
                            lindv.PrecoUnitario = objListLin.Valor("PrecUnit");
                            lindv.TotalILiquido = objListLin.Valor("TotalILiquido");
                            lindv.TotalLiquido = objListLin.Valor("PrecoLiquido");
                            listlindv.Add(lindv);
                            objListLin.Seguinte();
                        }

                        dv.LinhasDoc = listlindv;
                        listdv.Add(dv);
                        objListCab.Seguinte();
                        i++;
                    }
                    else
                    {
                        break;
                    }
                }

                return listdv;
            }
            else
            {
                return null;
            }
        }

        public static Lib_Primavera.Model.DocVenda getEncomenda(string idEncomenda)
        {
            ErpBS objMotor = new ErpBS();
            StdBELista objListCab;
            StdBELista objListLin;
            Model.DocVenda dv = new Model.DocVenda();
            Model.LinhaDocVenda lindv = new Model.LinhaDocVenda();
            List<Model.LinhaDocVenda> listlindv = new List<Model.LinhaDocVenda>();

            if (PriEngine.InitializeCompany("BELAFLOR", "", "") == true)
            {

                string st = "SELECT id, Entidade, Data, DataUltimaActualizacao NumDoc, TotalMerc, Serie From CabecDoc where (TipoDoc='ECL' and NumDoc='" + idEncomenda + "')";
                objListCab = PriEngine.Engine.Consulta(st);
                dv = new Model.DocVenda();
                dv.id = objListCab.Valor("id");
                dv.Entidade = objListCab.Valor("Entidade");
                dv.NumDoc = objListCab.Valor("NumDoc");
                dv.DataInicio = objListCab.Valor("Data");
                dv.DataFim = objListCab.Valor("DataUltimaActualizacao");
                dv.TotalMerc = objListCab.Valor("TotalMerc");
                dv.Serie = objListCab.Valor("Serie");
                objListLin = PriEngine.Engine.Consulta("SELECT idCabecDoc, Artigo, Descricao, Quantidade, Unidade, PrecUnit, Desconto1, TotalILiquido, PrecoLiquido from LinhasDoc where IdCabecDoc='" + dv.id + "' order By NumLinha");

                listlindv = new List<Model.LinhaDocVenda>();
                while (!objListLin.NoFim())
                {
                    lindv = new Model.LinhaDocVenda();
                    lindv.IdCabecDoc = objListLin.Valor("idCabecDoc");
                    lindv.CodArtigo = objListLin.Valor("Artigo");
                    lindv.DescArtigo = objListLin.Valor("Descricao");
                    lindv.Quantidade = objListLin.Valor("Quantidade");
                    lindv.Unidade = objListLin.Valor("Unidade");
                    lindv.Desconto = objListLin.Valor("Desconto1");
                    lindv.PrecoUnitario = objListLin.Valor("PrecUnit");
                    lindv.TotalILiquido = objListLin.Valor("TotalILiquido");
                    lindv.TotalLiquido = objListLin.Valor("PrecoLiquido");
                    listlindv.Add(lindv);
                    objListLin.Seguinte();
                }

                dv.LinhasDoc = listlindv;
                return dv;
            }
            else
            {
                return null;
            }
        }

        public static List<Model.DocVenda> getEncomendasNoIntervalo(string codCliente, string dataIni, string dataFim)
        {
            List<Model.DocVenda> encomendas = getEncomendas(codCliente, 100000);
            List<Model.DocVenda> retorno = new List<Model.DocVenda>();
            
            DateTime dI = Convert.ToDateTime(dataIni);
            DateTime dF = Convert.ToDateTime(dataFim);

            for (int i = 0; i < encomendas.Count(); i++)
            {
                if (encomendas.ElementAt(i).DataFim <= dF && encomendas.ElementAt(i).DataInicio >= dI)
                {
                    retorno.Add(encomendas.ElementAt(i));
                }
            }

            return retorno;
        }

        # endregion Encomendas;
    }    
}