<?php

/* graphs.html */
class __TwigTemplate_88367d3f56f30dc647e0f8d3ef765382292b05837ee083df3c631c19e16edd4c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "graphs.html", 1);
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

    // line 2
    public function block_staticlinks($context, array $blocks = array())
    {
        // line 3
        echo "<script src=\"scripts/graphs.js\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("_transform_.html", "graphs.html", 9)->display($context);
        // line 10
        echo "    <section class=\"container-fluid\">
    <div class=\"bs-callout bs-callout-primary\">
        <h5 class=\"text-primary\">Graph Options</h5>
        <h6>Graph:</h6>
        <div id=\"checkbox-div\"></div>

        <div class=\"input-group mb-3\">
          <div class=\"input-group-prepend\">
            <button class=\"btn btn-secondary disabled\" type=\"button\">Choose data transformation: </button>
          </div>
          <select class=\"custom-select\">
            <option value=\"val\">Base Value (No Transformation)</option>
            <option value=\"pchg\" selected=\"selected\">% Change</option>
          </select>
        </div>
        
    </div>
    </section>

    <section class=\"container-fluid\">
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-12\" id=\"tsChart\"></div>
        </div>
    </section>
    
    <section class=\"container-fluid py-5\">
    <div class=\"row justify-content-md-center my-5\" id=\"card-holder\">
        
        <div class=\"card border-warning mx-2 my-2\" style=\"width: 30rem;\">
        <div class=\"card-header\">
            <button type=\"button\" class=\"btn btn-outline-danger float-right card-delete\" style=\"display:none\">Delete Series</button>
            <h5 class=\"card-title text-warning\">Loading...</h5>
            <h6 class=\"card-subtitle mb-2 text-muted\"></h6>
        </div>
        <div class=\"card-body\">
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
            <table class=\"cardTable\" width=\"100%\" style=\"display:none\">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Formatted Date</th>
                        <th>Value</th>
                        <th>Change</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            
            <div class=\"bs-callout bs-callout-primary\" style=\"display:none\">
                <h4>Online Data Sources</h4>
                <button type=\"button\" class=\"btn btn-primary btn-md btn-block text-left addbtn \">Get historical data for any stock or ETF</button>
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
                        <label>Frequency:</label>
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
        return "graphs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  47 => 9,  44 => 8,  41 => 7,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block staticlinks %}
<script src=\"scripts/graphs.js\"></script>
{% endblock %}


{% block content %}

    {% include '_transform_.html' %}
    <section class=\"container-fluid\">
    <div class=\"bs-callout bs-callout-primary\">
        <h5 class=\"text-primary\">Graph Options</h5>
        <h6>Graph:</h6>
        <div id=\"checkbox-div\"></div>

        <div class=\"input-group mb-3\">
          <div class=\"input-group-prepend\">
            <button class=\"btn btn-secondary disabled\" type=\"button\">Choose data transformation: </button>
          </div>
          <select class=\"custom-select\">
            <option value=\"val\">Base Value (No Transformation)</option>
            <option value=\"pchg\" selected=\"selected\">% Change</option>
          </select>
        </div>
        
    </div>
    </section>

    <section class=\"container-fluid\">
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-12\" id=\"tsChart\"></div>
        </div>
    </section>
    
    <section class=\"container-fluid py-5\">
    <div class=\"row justify-content-md-center my-5\" id=\"card-holder\">
        
        <div class=\"card border-warning mx-2 my-2\" style=\"width: 30rem;\">
        <div class=\"card-header\">
            <button type=\"button\" class=\"btn btn-outline-danger float-right card-delete\" style=\"display:none\">Delete Series</button>
            <h5 class=\"card-title text-warning\">Loading...</h5>
            <h6 class=\"card-subtitle mb-2 text-muted\"></h6>
        </div>
        <div class=\"card-body\">
            <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
            <table class=\"cardTable\" width=\"100%\" style=\"display:none\">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Formatted Date</th>
                        <th>Value</th>
                        <th>Change</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            
            <div class=\"bs-callout bs-callout-primary\" style=\"display:none\">
                <h4>Online Data Sources</h4>
                <button type=\"button\" class=\"btn btn-primary btn-md btn-block text-left addbtn \">Get historical data for any stock or ETF</button>
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
                        <label>Frequency:</label>
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

    
    {% endblock %}", "graphs.html", "/var/www/arima/public/templates/graphs.html");
    }
}
