using Interop.ErpBS800;
using Interop.StdBE800;
using Interop.StdPlatBS800;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace EstadoEncomenda.Lib_estado_encomenda
{
    public class PriEngine
    {
        public static StdPlatBS Platform { get; set; }
        public static ErpBS Engine { get; set; }

        public static bool InitializeCompany(string Company, string User, string Password)
        {
            StdBSConfApl objAplConf = new StdBSConfApl();
            StdPlatBS Plataforma = new StdPlatBS();
            ErpBS MotorLE = new ErpBS();

            EnumTipoPlataforma objTipoPlataforma = new EnumTipoPlataforma();
            objTipoPlataforma = EnumTipoPlataforma.tpProfissional;

            objAplConf.Instancia = "Default";
            objAplConf.AbvtApl = "GCP";
            objAplConf.PwdUtilizador = Password;
            objAplConf.Utilizador = User;

            StdBETransaccao objStdTransac = new StdBETransaccao();

            //Opem platform.
            Plataforma.AbrePlataformaEmpresaIntegrador(ref Company, ref objStdTransac, ref objAplConf, ref objTipoPlataforma);

            if (Plataforma.Inicializada)
            {
                Platform = Plataforma;

                bool blnModoPrimario = true;

                MotorLE.AbreEmpresaTrabalho(EnumTipoPlataforma.tpProfissional, ref Company, ref User, ref Password, ref objStdTransac, "Default", ref blnModoPrimario);

                Engine = MotorLE;

                return true;
            }
            else
            {
                return false;
            }


            
        }
    }
}