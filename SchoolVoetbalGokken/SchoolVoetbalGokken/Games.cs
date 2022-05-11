using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading.Tasks;

namespace SchoolVoetbalGokken
{

    // Root myDeserializedClass = JsonConvert.DeserializeObject<Root>(myJsonResponse);
    public class Games
    {
        [JsonProperty] public int id { get; set; }
        [JsonProperty] public string team_1 { get; set; }
        [JsonProperty] public string team_2 { get; set; }
        [JsonProperty] public object score_team_1 { get; set; }
        [JsonProperty] public object score_team_2 { get; set; }
        [JsonProperty] public string referee { get; set; }
        [JsonProperty] public string start_time { get; set; }
        [JsonProperty] public string field { get; set; }
        [JsonProperty] public string created_at { get; set; }
        [JsonProperty] public string updated_at { get; set; }

        public override string ToString()
        {
            return $"{team_1} - {team_2} score: {score_team_1} - {score_team_2} {referee}";
        }
    }


}

