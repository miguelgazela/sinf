using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace SINF_proj.Lib_Primavera.Model
{
    public class LinhaDocVenda
    {
        public string IdCabecDoc
        {
            get;
            set;
        }

        public string CodArtigo
        {
            get;
            set;
        }

        public string DescArtigo
        {
            get;
            set;
        }

        public double Quantidade
        {
            get;
            set;
        }

        public string Unidade
        {
            get;
            set;
        }

        public double Desconto
        {
            get;
            set;
        }

        public double PrecoUnitario
        {
            get;
            set;
        }

        public double TotalILiquido
        {
            get;
            set;
        }

        public double TotalLiquido
        {
            get;
            set;
        }
    }
}
