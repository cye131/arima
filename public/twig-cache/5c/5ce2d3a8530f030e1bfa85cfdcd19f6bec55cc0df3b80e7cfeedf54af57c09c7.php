<?php

/* boxjenkins.html */
class __TwigTemplate_3bfc9630c26cd09fe70dfd9fa2ad4a9e17ccb27a4c128db38a58799c45fbda45 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "boxjenkins.html", 1);
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

<script src=\"scripts/boxjenkins.js\"></script>

";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
    <section class=\"container-fluid\">
        <div class=\"card\" style=\"\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Box-Jenkins Analyzer</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                <p class=\"card-text\">The Box-Jenkins Method is a modeling approach to identify whether an autoregressive moving average (ARMA) or an autoregressive integrated moving average (ARIMA) model can be properly used to fit a set of time series data, and if so, identifies possible AR and MA parameters.</p>
                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
            </div>
        </div>
    </section>

    ";
        // line 34
        $this->loadTemplate("dataloader.html", "boxjenkins.html", 34)->display($context);
        // line 35
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
            <div class=\"container-fluid\">    
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
    

    
    ";
    }

    public function getTemplateName()
    {
        return "boxjenkins.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  72 => 34,  57 => 21,  54 => 20,  36 => 4,  33 => 3,  15 => 1,);
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

<script src=\"scripts/boxjenkins.js\"></script>

{% endblock %}

{% block content %}

    <section class=\"container-fluid\">
        <div class=\"card\" style=\"\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Box-Jenkins Analyzer</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                <p class=\"card-text\">The Box-Jenkins Method is a modeling approach to identify whether an autoregressive moving average (ARMA) or an autoregressive integrated moving average (ARIMA) model can be properly used to fit a set of time series data, and if so, identifies possible AR and MA parameters.</p>
                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
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
            <div class=\"container-fluid\">    
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
    

    
    {% endblock %}", "boxjenkins.html", "/var/www/arima/public/templates/boxjenkins.html");
    }
}
