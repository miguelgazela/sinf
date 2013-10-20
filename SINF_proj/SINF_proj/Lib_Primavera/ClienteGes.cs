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
//using Interop.StdBESql800;
//using Interop.StdBSSql800;

namespace SINF_proj.Lib_Primavera
{
    public class ClienteGes
    {

        # region Cliente

        public static Lib_Primavera.Model.Cliente getUtilizador(string nif, string password)
        {
            ErpBS objMotor = new ErpBS();
            //MotorPrimavera mp = new MotorPrimavera();
            StdBELista objList;

            Model.Cliente cli = new Model.Cliente();


            if (PriEngine.InitializeCompany("BELAFLOR", "", "") == true)
            {

                //objList = PriEngine.Engine.Comercial.Clientes.LstClientes();

                objList = PriEngine.Engine.Consulta("SELECT Cliente, Nome, Moeda, Fac_Mor, Fac_Local, Fac_Cp, Fac_Cploc, Fac_Tel, NumContrib as NumContribuinte FROM CLIENTES where (NumContrib = '"+ nif +"' and CDU_CampoVar1='"+ password +"')");

                while (!objList.NoFim())
                {
                    cli = new Model.Cliente();
                    cli.CodCliente = objList.Valor("Cliente");
                    cli.NomeCliente = objList.Valor("Nome");
                    cli.Moeda = objList.Valor("Moeda");
                    cli.NumContribuinte = objList.Valor("NumContribuinte");
                    cli.Morada = objList.Valor("Fac_Mor");
                    cli.Local = objList.Valor("Fac_Local");
                    if (objList.Valor("Fac_Cploc") != "")
                    {
                        cli.Codigo_Postal = objList.Valor("Fac_Cp") + "-" + objList.Valor("Fac_Cploc");
                    }
                    else
                    {
                        cli.Codigo_Postal = objList.Valor("Fac_Cp") + "-000";
                    }
                    cli.Telefone = objList.Valor("Fac_Tel");

                    objList.Seguinte();
                }

                return cli;
            }
            else
                return null;
        }


        public static List<Model.Cliente> getUtilizadores()
        {
            ErpBS objMotor = new ErpBS();
            //MotorPrimavera mp = new MotorPrimavera();
            StdBELista objList;

            Model.Cliente cli = new Model.Cliente();
            List<Model.Cliente> listClientes = new List<Model.Cliente>();


            if (PriEngine.InitializeCompany("BELAFLOR", "", "") == true)
            {

                //objList = PriEngine.Engine.Comercial.Clientes.LstClientes();

                objList = PriEngine.Engine.Consulta("SELECT Cliente, Nome, Moeda, Fac_Mor, Fac_Local, Fac_Cp, Fac_Cploc, Fac_Tel, NumContrib as NumContribuinte FROM CLIENTES");

                while (!objList.NoFim())
                {
                    cli = new Model.Cliente();
                    cli.CodCliente = objList.Valor("Cliente");
                    cli.NomeCliente = objList.Valor("Nome");
                    cli.Moeda = objList.Valor("Moeda");
                    cli.NumContribuinte = objList.Valor("NumContribuinte");
                    cli.Morada = objList.Valor("Fac_Mor");
                    cli.Local = objList.Valor("Fac_Local");
                    if (objList.Valor("Fac_Cploc") != "")
                    {
                        cli.Codigo_Postal = objList.Valor("Fac_Cp") + "-" + objList.Valor("Fac_Cploc");
                    }
                    else
                    {
                        cli.Codigo_Postal = objList.Valor("Fac_Cp") + "-000";
                    }
                    cli.Telefone = objList.Valor("Fac_Tel");

                    listClientes.Add(cli);
                    objList.Seguinte();

                }

                return listClientes;
            }
            else
                return null;
        }

        public static Lib_Primavera.Model.Cliente getInfoUtilizador(string codCliente)
        {
            ErpBS objMotor = new ErpBS();

            GcpBECliente objCli = new GcpBECliente();
            Model.Cliente myCli = new Model.Cliente();

            if (PriEngine.InitializeCompany("BELAFLOR", "", "") == true)
            {

                if (PriEngine.Engine.Comercial.Clientes.Existe(codCliente) == true)
                {
                    objCli = PriEngine.Engine.Comercial.Clientes.Edita(codCliente);
                    myCli.CodCliente = objCli.get_Cliente();
                    myCli.NomeCliente = objCli.get_Nome();
                    myCli.Moeda = objCli.get_Moeda();
                    myCli.NumContribuinte = objCli.get_NumContribuinte();
                    myCli.Telefone = objCli.get_Telefone();
                    myCli.Morada = objCli.get_Morada();
                    myCli.Local = objCli.get_Localidade();

                    if (objCli.get_LocalidadeCodigoPostal() != "")
                    {
                        myCli.Codigo_Postal = objCli.get_CodigoPostal() + "-" + objCli.get_LocalidadeCodigoPostal();
                    }
                    else
                    {
                        myCli.Codigo_Postal = objCli.get_CodigoPostal() + "-000";
                    }
                    return myCli;
                }
                else
                {
                    return null;
                }
            }
            else
                return null;
        }

        public static Tuple<Model.Cliente, List<Model.DocVenda>> getDetalhesUtilizador(string codCliente)
        {
            Tuple<Model.Cliente, List<Model.DocVenda>> user;
            user = new Tuple<Model.Cliente,List<Model.DocVenda>>(getInfoUtilizador(codCliente), EncomendasGes.getEncomendas(codCliente, 10));

            return user;
        }

        # endregion Cliente;
    }
}