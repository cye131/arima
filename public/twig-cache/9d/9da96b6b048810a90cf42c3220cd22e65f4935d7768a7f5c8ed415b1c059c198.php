<?php

/* adddata.html */
class __TwigTemplate_4b1ad307d229d8dd00b805c4de8e5f2d512a10323db1392c31e321d8f09f879d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "adddata.html", 1);
        $this->blocks = array(
            'staticlinks' => array($this, 'block_staticlinks'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_staticlinks($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"//code.highcharts.com/stock/highstock.js\"></script>
<script src=\"//code.highcharts.com/modules/heatmap.js\"></script>

<script src=\"//cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.6/proj4.js\"></script>
<script src=\"//code.highcharts.com/maps/modules/map.js\"></script>
<script src=\"//code.highcharts.com/mapdata/custom/world-robinson.js\"></script>
<script src=\"//code.highcharts.com/mapdata/custom/europe.js\"></script>

<script src=\"//code.highcharts.com/stock/indicators/indicators.js\"></script>
<script src=\"//code.highcharts.com/stock/indicators/ema.js\"></script>
<script src=\"//code.highcharts.com/stock/indicators/bollinger-bands.js\"></script>

<script src=\"//evanplaice.github.io/jquery-csv/src/jquery.csv.js\"></script>


<script src=\"scripts/adddata.js\"></script>

";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <section class=\"container-fluid\">
        <div class=\"card\" style=\"\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Add Datasets</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                <p class=\"card-text\">You can add up to 5 datasets. They will be stored for 30 days after your last visit to the site, or whenever you clear your browser cookies.</p>
                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
            </div>
        </div>
    </section>
    
    <section class=\"container-fluid py-5\">
    <div class=\"row justify-content-md-center my-5\" id=\"card-holder\">
        
        <div class=\"card border-danger mx-2 my-2\" style=\"width: 26rem;\">
        <div class=\"card-body\">
            <h5 class=\"card-title\"></h5>
            <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
            <div class=\"bs-callout bs-callout-primary\">
                <h4>Online Data Sources</h4>
                <button type=\"button\" class=\"btn btn-primary btn-md btn-block text-left addbtn \">Get Historical Data for any Stock or ETF</button>
                <form class=\"form addtypestk py-3\" style=\"display:none\">
                    <div class = \"form-group\">
                        <label>Date Range:</label>
                        <input type=\"text\" class=\"form-control form-control-sm stk-date1\" value=\"\" placeholder=\"YYYY-MM-DD\" > to 
                        <input type=\"text\" class=\"form-control form-control-sm stk-date2\" value=\"\" placeholder=\"YYYY-MM-DD\" >
                    </div>
                    <div class = \"form-group\">
                        <label>Stock Ticker:</label>
                        <input type=\"text\" class=\"form-control form-control-sm stk-ticker\" value=\"\" placeholder=\"e.g., AAPL\" >
                    </div>
                    <div class = \"form-group\">
                        <label>Frequency</label>
                        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                          <label class=\"btn btn-secondary btn-sm active\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"d\" autocomplete=\"off\" checked>  Daily
                          </label>
                          <label class=\"btn btn-secondary btn-sm\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"w\" autocomplete=\"off\"> Weekly
                          </label>
                          <label class=\"btn btn-secondary btn-sm\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"m\" autocomplete=\"off\"> Monthly
                          </label>
                          <label class=\"btn btn-secondary btn-sm\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"q\" autocomplete=\"off\"> Quarterly
                          </label>
                          <label class=\"btn btn-secondary btn-sm\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"a\" autocomplete=\"off\"> Annually
                          </label>
                        </div>
                    </div>
                    
                    
                    <button class=\"btn btn-outline-primary btn-block stk-submit\" type=\"button\">Submit</button>
                    <div id=\"errormessage\" class=\"invalid-feedback\">Error Message!</div>
                </form>
                <button type=\"button\" class=\"btn btn-primary btn-md btn-block text-left btn-adddata\">Get Economic Indicator Data</button>
                <p>Sometimes contextual classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element’s content in a <code class=\"highlighter-rouge\">&lt;div&gt;</code> with the class.</p>

            </div>
            

        <a href=\"\" class=\"card-link\">Card link</a>
        <a href=\"\" class=\"card-link\">Another link</a>
        </div>
        </div>
        
    </div>
    </section>



    ";
        // line 100
        $this->loadTemplate("dataloader.html", "adddata.html", 100)->display($context);
        // line 101
        echo "    
    <div class=\"overlay\" hidden=\"hidden\"></div>
    <section class=\"container-fluid\" id=\"spinnercontainer\" style=\"\" hidden=\"hidden\">
        <div class=\"row\">
            <div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\"></h4></div>
        </div>
        <div class=\"row\">
            <div class=\"sk-circle\">
                <div class=\"sk-circle1 sk-child\"></div>
                <div class=\"sk-circle2 sk-child\"></div>
                <div class=\"sk-circle3 sk-child\"></div>
                <div class=\"sk-circle4 sk-child\"></div>
                <div class=\"sk-circle5 sk-child\"></div>
                <div class=\"sk-circle6 sk-child\"></div>
                <div class=\"sk-circle7 sk-child\"></div>
                <div class=\"sk-circle8 sk-child\"></div>
                <div class=\"sk-circle9 sk-child\"></div>
                <div class=\"sk-circle10 sk-child\"></div>
                <div class=\"sk-circle11 sk-child\"></div>
                <div class=\"sk-circle12 sk-child\"></div>
            </div>
        </div>
    </section>
    
    <section class=\"container-fluid\" style=\"margin-bottom:20px\">
        <form class=\"form-inline\" method=\"post\" action=\"\" id=\"corrselector\">
            <div class = \"form-group\">
                <label for=\"freqtrail\" style=\"font-weight:600\" >Data frequency</label>
                <select class=\"form-control form-control-sm\" id=\"freqtrail\"></select>
                <input type=\"hidden\" id=\"freq\" name=\"freq\"></input>
                <input type=\"hidden\" id=\"trail\" name=\"trail\"></input>
            </div>
            <div class = \"form-group\" style=\"margin-left:10px\">
                <label for=\"corr_type\" style=\"font-weight:600\" >Correlation Type</label>
                <select class=\"form-control form-control-sm\" name=\"corr_type\" id=\"corr_type\"></select>
                <button class=\"btn btn-primary btn-sm\" type=\"submit\" id=\"submitcorrselector\" >Change</button>
            </div>
        </form>
    </section>

    <section class=\"container-fluid\" id=\"resultscontainer\">
        <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
            
          <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#heatmaptab\" role=\"tab\" aria-selected=\"true\">Correlation Matrix</a>
          </li>

            
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#maptab\" role=\"tab\">Correlation Map</a>
          </li>
          
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tstab\" role=\"tab\">Historical Correlation Data</a>
          </li>

        </ul>
        
        
        <div class=\"tab-content\" id=\"myTabContent\">
            
          <div class=\"tab-pane fade show active\" id=\"heatmaptab\" role=\"tabpanel\" >
            <div class=\"container\">    
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div id=\"heatmap\"></div>
                    </div>
                </div>
            </div>
          </div>

            
          <div class=\"tab-pane fade\" id=\"maptab\" role=\"tabpanel\" style=\"background:url('static/bg-parchment.png') no-repeat center center fixed;background-size: cover;\">
                <form class=\"form-inline\">
                    <div class = \"form-group\">
                        <label for=\"showLines\" style=\"font-weight:600\" >Draw connections between closely correlated countries?</label>
                        <input type=\"checkbox\" checked=\"checked\" name=\"showLines\" id=\"showLines\">
                    </div>
                </form>
                <form class=\"form-inline\">
                    <div class = \"form-group\">
                        <label for=\"minLines\"  style=\"font-weight:600\"  >Minimum correlation (0 to 1):</label>
                        <input type=\"text\" class=\"form-control form-control-sm\" id=\"minLines\" value=\"0.75\" style=\"max-width:80px\">
                        <button class=\"btn btn-primary btn-sm\" type=\"button\" id=\"submitLines\" >Submit</button>
                        <div id=\"errormessageLines\" class=\"invalid-feedback\">Error Message!</div>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-lg-12\" id=\"highMap\"></div>
                </div>
                
                <div class=\"row\">
                    <div></div>
                    <div class=\"col-lg-12 float-right\" id=\"highMapEurope\"></div>
                </div>
          </div>
          
          <div class=\"tab-pane fade\" id=\"tstab\" role=\"tabpanel\" style=\"\">
                <form class=\"form-inline\">
                    <div class = \"form-group\">
                        <label for=\"corr_1\" style=\"font-weight:600\" >Get historical correlation for: </label>
                        <select class=\"selectcorr form-control form-control-sm\" id=\"corr_1\">
                        </select>
                        <label for=\"corr_2\" style=\"font-weight:600\" > and </label>
                        <select class=\"selectcorr form-control form-control-sm\" id=\"corr_2\">
                        </select>
                        <button class=\"btn btn-primary btn-sm\" type=\"button\" id=\"submitTS\" >Go</button>
                        <div id=\"errormessageTS\" class=\"invalid-feedback\">Error Message!</div>
                    </div>
                </form>
                
                
                <div class=\"row\">
                    <div class=\"col-lg-12\" id=\"tsChart\"></div>
                </div>
          </div>
          

          
        </div>
    </section>
    
    <section class=\"container\">
    </section>

    
    ";
    }

    public function getTemplateName()
    {
        return "adddata.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 101,  138 => 100,  60 => 24,  57 => 23,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block staticlinks %}
<script src=\"//code.highcharts.com/stock/highstock.js\"></script>
<script src=\"//code.highcharts.com/modules/heatmap.js\"></script>

<script src=\"//cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.6/proj4.js\"></script>
<script src=\"//code.highcharts.com/maps/modules/map.js\"></script>
<script src=\"//code.highcharts.com/mapdata/custom/world-robinson.js\"></script>
<script src=\"//code.highcharts.com/mapdata/custom/europe.js\"></script>

<script src=\"//code.highcharts.com/stock/indicators/indicators.js\"></script>
<script src=\"//code.highcharts.com/stock/indicators/ema.js\"></script>
<script src=\"//code.highcharts.com/stock/indicators/bollinger-bands.js\"></script>

<script src=\"//evanplaice.github.io/jquery-csv/src/jquery.csv.js\"></script>


<script src=\"scripts/adddata.js\"></script>

{% endblock %}

{% block content %}

    <section class=\"container-fluid\">
        <div class=\"card\" style=\"\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Add Datasets</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                <p class=\"card-text\">You can add up to 5 datasets. They will be stored for 30 days after your last visit to the site, or whenever you clear your browser cookies.</p>
                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
            </div>
        </div>
    </section>
    
    <section class=\"container-fluid py-5\">
    <div class=\"row justify-content-md-center my-5\" id=\"card-holder\">
        
        <div class=\"card border-danger mx-2 my-2\" style=\"width: 26rem;\">
        <div class=\"card-body\">
            <h5 class=\"card-title\"></h5>
            <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
            <div class=\"bs-callout bs-callout-primary\">
                <h4>Online Data Sources</h4>
                <button type=\"button\" class=\"btn btn-primary btn-md btn-block text-left addbtn \">Get Historical Data for any Stock or ETF</button>
                <form class=\"form addtypestk py-3\" style=\"display:none\">
                    <div class = \"form-group\">
                        <label>Date Range:</label>
                        <input type=\"text\" class=\"form-control form-control-sm stk-date1\" value=\"\" placeholder=\"YYYY-MM-DD\" > to 
                        <input type=\"text\" class=\"form-control form-control-sm stk-date2\" value=\"\" placeholder=\"YYYY-MM-DD\" >
                    </div>
                    <div class = \"form-group\">
                        <label>Stock Ticker:</label>
                        <input type=\"text\" class=\"form-control form-control-sm stk-ticker\" value=\"\" placeholder=\"e.g., AAPL\" >
                    </div>
                    <div class = \"form-group\">
                        <label>Frequency</label>
                        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                          <label class=\"btn btn-secondary btn-sm active\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"d\" autocomplete=\"off\" checked>  Daily
                          </label>
                          <label class=\"btn btn-secondary btn-sm\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"w\" autocomplete=\"off\"> Weekly
                          </label>
                          <label class=\"btn btn-secondary btn-sm\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"m\" autocomplete=\"off\"> Monthly
                          </label>
                          <label class=\"btn btn-secondary btn-sm\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"q\" autocomplete=\"off\"> Quarterly
                          </label>
                          <label class=\"btn btn-secondary btn-sm\">
                            <input type=\"radio\" name=\"stk-freq\" value=\"a\" autocomplete=\"off\"> Annually
                          </label>
                        </div>
                    </div>
                    
                    
                    <button class=\"btn btn-outline-primary btn-block stk-submit\" type=\"button\">Submit</button>
                    <div id=\"errormessage\" class=\"invalid-feedback\">Error Message!</div>
                </form>
                <button type=\"button\" class=\"btn btn-primary btn-md btn-block text-left btn-adddata\">Get Economic Indicator Data</button>
                <p>Sometimes contextual classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element’s content in a <code class=\"highlighter-rouge\">&lt;div&gt;</code> with the class.</p>

            </div>
            

        <a href=\"\" class=\"card-link\">Card link</a>
        <a href=\"\" class=\"card-link\">Another link</a>
        </div>
        </div>
        
    </div>
    </section>



    {% include 'dataloader.html' %}
    
    <div class=\"overlay\" hidden=\"hidden\"></div>
    <section class=\"container-fluid\" id=\"spinnercontainer\" style=\"\" hidden=\"hidden\">
        <div class=\"row\">
            <div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\"></h4></div>
        </div>
        <div class=\"row\">
            <div class=\"sk-circle\">
                <div class=\"sk-circle1 sk-child\"></div>
                <div class=\"sk-circle2 sk-child\"></div>
                <div class=\"sk-circle3 sk-child\"></div>
                <div class=\"sk-circle4 sk-child\"></div>
                <div class=\"sk-circle5 sk-child\"></div>
                <div class=\"sk-circle6 sk-child\"></div>
                <div class=\"sk-circle7 sk-child\"></div>
                <div class=\"sk-circle8 sk-child\"></div>
                <div class=\"sk-circle9 sk-child\"></div>
                <div class=\"sk-circle10 sk-child\"></div>
                <div class=\"sk-circle11 sk-child\"></div>
                <div class=\"sk-circle12 sk-child\"></div>
            </div>
        </div>
    </section>
    
    <section class=\"container-fluid\" style=\"margin-bottom:20px\">
        <form class=\"form-inline\" method=\"post\" action=\"\" id=\"corrselector\">
            <div class = \"form-group\">
                <label for=\"freqtrail\" style=\"font-weight:600\" >Data frequency</label>
                <select class=\"form-control form-control-sm\" id=\"freqtrail\"></select>
                <input type=\"hidden\" id=\"freq\" name=\"freq\"></input>
                <input type=\"hidden\" id=\"trail\" name=\"trail\"></input>
            </div>
            <div class = \"form-group\" style=\"margin-left:10px\">
                <label for=\"corr_type\" style=\"font-weight:600\" >Correlation Type</label>
                <select class=\"form-control form-control-sm\" name=\"corr_type\" id=\"corr_type\"></select>
                <button class=\"btn btn-primary btn-sm\" type=\"submit\" id=\"submitcorrselector\" >Change</button>
            </div>
        </form>
    </section>

    <section class=\"container-fluid\" id=\"resultscontainer\">
        <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
            
          <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#heatmaptab\" role=\"tab\" aria-selected=\"true\">Correlation Matrix</a>
          </li>

            
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#maptab\" role=\"tab\">Correlation Map</a>
          </li>
          
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tstab\" role=\"tab\">Historical Correlation Data</a>
          </li>

        </ul>
        
        
        <div class=\"tab-content\" id=\"myTabContent\">
            
          <div class=\"tab-pane fade show active\" id=\"heatmaptab\" role=\"tabpanel\" >
            <div class=\"container\">    
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div id=\"heatmap\"></div>
                    </div>
                </div>
            </div>
          </div>

            
          <div class=\"tab-pane fade\" id=\"maptab\" role=\"tabpanel\" style=\"background:url('static/bg-parchment.png') no-repeat center center fixed;background-size: cover;\">
                <form class=\"form-inline\">
                    <div class = \"form-group\">
                        <label for=\"showLines\" style=\"font-weight:600\" >Draw connections between closely correlated countries?</label>
                        <input type=\"checkbox\" checked=\"checked\" name=\"showLines\" id=\"showLines\">
                    </div>
                </form>
                <form class=\"form-inline\">
                    <div class = \"form-group\">
                        <label for=\"minLines\"  style=\"font-weight:600\"  >Minimum correlation (0 to 1):</label>
                        <input type=\"text\" class=\"form-control form-control-sm\" id=\"minLines\" value=\"0.75\" style=\"max-width:80px\">
                        <button class=\"btn btn-primary btn-sm\" type=\"button\" id=\"submitLines\" >Submit</button>
                        <div id=\"errormessageLines\" class=\"invalid-feedback\">Error Message!</div>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-lg-12\" id=\"highMap\"></div>
                </div>
                
                <div class=\"row\">
                    <div></div>
                    <div class=\"col-lg-12 float-right\" id=\"highMapEurope\"></div>
                </div>
          </div>
          
          <div class=\"tab-pane fade\" id=\"tstab\" role=\"tabpanel\" style=\"\">
                <form class=\"form-inline\">
                    <div class = \"form-group\">
                        <label for=\"corr_1\" style=\"font-weight:600\" >Get historical correlation for: </label>
                        <select class=\"selectcorr form-control form-control-sm\" id=\"corr_1\">
                        </select>
                        <label for=\"corr_2\" style=\"font-weight:600\" > and </label>
                        <select class=\"selectcorr form-control form-control-sm\" id=\"corr_2\">
                        </select>
                        <button class=\"btn btn-primary btn-sm\" type=\"button\" id=\"submitTS\" >Go</button>
                        <div id=\"errormessageTS\" class=\"invalid-feedback\">Error Message!</div>
                    </div>
                </form>
                
                
                <div class=\"row\">
                    <div class=\"col-lg-12\" id=\"tsChart\"></div>
                </div>
          </div>
          

          
        </div>
    </section>
    
    <section class=\"container\">
    </section>

    
    {% endblock %}", "adddata.html", "/var/www/arima/public/templates/adddata.html");
    }
}
