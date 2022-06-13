using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json;

namespace SchoolVoetbalGokken
{
    [Serializable]
    class matches
    {
        public static matches FromJson(string json)
        {
            return JsonConvert.DeserializeObject<matches>(json);
        }
        [JsonProperty] public string MatchList;
    }
}
