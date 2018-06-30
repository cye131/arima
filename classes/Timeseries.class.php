<?php

class Timeseries {
    
    /* the data parameter takes an array of time series or 
     *
     *
     *
     */
    public function __construct(array $data, array $optional_dates = NULL,  string $optional_names = NULL, string $optional_start = NULL, string $optional_end = NULL, string $optional_freq = NULL,  string $optional_deltat = NULL) {
        $this->_validateInputs ($data, $optional_dates, $optional_names, $optional_start, $optional_end, $optional_freq, $optional_deltat);
    }
    
    /* parameter checking
     *
     *
     *
     */
    protected function _validateInputs( $data, $optional_dates, $optional_names, $optional_start, $optional_end, $optional_freq, $optional_deltat) {
        $argGuide = '';
        
        if ( count($data) === 0 ) throw new InvalidArgumentException ('$values vector cannot be empty!');
        
        if ( $optional_dates != false  && count($optional_dates) == 0 ) throw new InvalidArgumentException ('if the $optional_dates argument is set (use NULL if you do not wish to set this), it cannot be an empty vector. ');

        if ( $optional_dates != false  && count($data) !== count($optional_dates) ) throw new InvalidArgumentException ('if the $optional_dates argument is set (use NULL if you do not wish to set this), it must have a count equal to the $values vector. ');

        
        $this -> data = $data;
        
        if ( $optional_dates ) {
            $this -> dates = $optional_dates;
        } else {
            //calculation of dates based off other parameters
        }
        /*
        $this-> dataframe = [];
        for ($i=0; $i<count($data);$i++) {
            $this-> dataframe[$i] = [
                0 => $this-> dates[$i],
                1 => $this-> data[$i]
            ];
        }*/
    
    }
    
    
    

    
    
    /* Autocorrelation Function
     *  Data must be sorted by date ascending
     * 
     *
     */
    public  function acf() {
        $y = $this->data;
    

        $N = count($y);
        $ybar = array_sum($y)/$N;

        $rho = [];
        
        //$k is the lag -> will run from 1 to 
/*        for ($k = 1; $k <= $N-1 ; $k++ ) {*/
        for ($k = 0; $k <= $N - 1; $k++ ) {

            $denom = 0;
            for ($i=0;$i<=$N-1;$i++) {
                $denom +=  pow( $y[$i] - $ybar, 2 );
            }
            if ($denom === 0) continue;
            
            $num = 0;
            for ($i=0; $i<=$N-$k-1; $i++) {
                    $num += ( ($y[$i] - $ybar) * ($y[$i + $k] - $ybar) );  
            }
            
            
            $se = ($N-$k) !== 0 ? 1.96/sqrt($N-$k) : 0;
            
            $rho[] = [
                      0 => $k,
                      1 => round($num/$denom, 8),
                      2 => $se
                      ];            
            //https://stats.stackexchange.com/questions/185425/how-to-determine-the-critical-values-of-acf
        }
        
    return $rho;
        
        
    }
    
    
    
    
    
    
    
}