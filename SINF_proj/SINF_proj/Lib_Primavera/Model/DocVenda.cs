using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace SINF_proj.Lib_Primavera.Model
{
    public class DocVenda
    {
        public string id
        {
            get;
            set;
        }

        public string Entidade
        {
            get;
            set;
        }

        public int NumDoc
        {
            get;
            set;
        }

        public DateTime DataInicio
        {
            get;
            set;
        }

        public DateTime DataFim
        {
            get;
            set;
        }

        public double TotalMerc
        {
            get;
            set;
        }

        public string Serie
        {
            get;
            set;
        }

        public List<LinhaDocVenda> LinhasDoc 
        { 
            get; 
            set; 
        }
    }
}
