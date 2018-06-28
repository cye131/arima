<?php
class DataScraperFid {
        
    public function __construct($series) {
        $this->lookup_code = $series['lookup_code'];
        $this->url = '';

        $freqArray = ['d' => 1 ,'w' => 2, 'm' => 3, 'q' => 4, 'a' => 5];
        $this->freq = $freqArray[$series['freq']];
        $this->min_date = isset( $series['min_date']) && is_string($series['min_date']) && strlen($series['min_date']) > 0 ? $series['min_date'] : '1990/01/01';
        $this->max_date = isset( $series['max_date']) && is_string($series['max_date']) && strlen($series['max_date']) > 0 ? $series['max_date'] : date('Y/m/d');
    }
    
    
    public function return_results () {
        //Pulls data via curl
        $results = array();
        
        $html = $this->fetchData($this->min_date,NULL);
        
        $json = $this->cleanAndDecodeData($html);
        $data = $this->createTSArrayFromJsonArray($json);
        
        $results['data'] = $data;
        $results['url'] = $this->url;
        $results['errorMsg'] = $this->errorMsg ?? NULL;
        return $results;
    }
    
    
    
    /* Pulls data from Fidelity website
     *
     *
     *
     */
    public function fetchData($mindate = NULL,$maxdate = NULL) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POST, 0);

        $headers = array(
            'Host: fastquote.fidelity.com',
            'Referer: https://eresearch.fidelity.com/eresearch/markets_sectors/sectors/sectors_in_market.jhtml',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $this->url = "https://fastquote.fidelity.com/service/historical/chart/lite/json?productid=research&symbols={$this->lookup_code}&dateMin={$this->min_date}:00:00:00&dateMax={$this->max_date}:00:00:00&intraday=n&granularity={$this->freq}&incextendedhours=n&dd=y";
        //echo $url;
         // exit();

        curl_setopt($ch, CURLOPT_URL, $this->url);
        $html = curl_exec($ch);
        curl_close($ch);
        
        //echo $html;
        return $html;
    }
    
    
    
    /* Parses data into array
     *
     *
     *
     */
    public function cleanAndDecodeData($html) {
        
        if (strlen($html) == 0) {
            $this->errorMsg = 'No HTML entered.';
            exit();
        } else {
            $clean = substr($html,0,-2); //remove opening and closing ( in data
            $clean = substr($clean,2);
            $clean = json_decode($clean,true);
            $json = $clean['SYMBOL'];
            
            //print_r ($json);
            return $json;
        }

    }

    /* Converts the array into an associative array indexed by date
     *
     *
     *
     */
    public function createTSArrayFromJsonArray($json) {
        
        $tsarray = array();
        foreach ($json as $row) {
            if (!isset($row['IDENTIFIER']) || !isset($row['BARS']['CB'])) {
                $this->errorMsg = 'Error: Missing Identifier or Historical Data';
                continue;
            }
            
            $identifier = $row['IDENTIFIER'];
            
            foreach ($row['BARS']['CB'] as $k => $point) {
                $date = (string) $this->fid_date($point['lt']);
                
                $tsarray[] = array(//'h_id' => $id,
                                        0 => $date,
                                        1 => $this->date_cleaner( $date ),
                                        2 => (float) $point['cl'],
                                        3 => ($k>0) ? (float) round(($point['cl']-$lastprice)/$lastprice,4) : (float)  0
                                    );
                
                $lastprice = (float) $point['cl'];
            }
        }
        
        return $tsarray;
        
    }
    
        
    private function fid_date($str) {
        $timestamp = new DateTime();
        $timestamp = DateTime::createFromFormat('!m-d-Y::H:i:s',$str)->getTimestamp();
        return (string) date('Y-m-d',$timestamp);
    }
    
    
    private function date_cleaner($date) {
        if ($this->freq === 1) return $date;
        elseif ($this->freq === 2) {
            if ( date('N', strtotime($date)) == 1 ) return $date;
            else return date('Y-m-d', strtotime('previous monday',strtotime($date)));
        }
        elseif ($this->freq === 3) {
            return date('Y-m-01', strtotime($date));
        }
        elseif ($this->freq === 4)  {
            return date('Y-m-01', strtotime($date));
        }
        elseif ($this->freq === 5) {
            return date('Y-01-01', strtotime($date));
        }
    }


}