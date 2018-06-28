<?php

/* __modalstk__.html */
class __TwigTemplate_8206b827ebf37150c4a3392f3c9e1918d43cf8de71ac4f7a92784598849dffdc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Stk Modal -->
<div class=\"modal fade modalstk\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"stk-modal\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
        
        <div class=\"overlay\" style=\"display:none\">
            <div class=\"row\">
                <div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\">Loading data and making graphs...</h4></div>
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
        </div>

        
        <form class=\"form addtypestk\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modal title</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body\">
                <div class = \"input-group input-group-md \">
                      <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" >Stock or ETF Ticker:</span>
                      </div>
                    <input type=\"text\" class=\"form-control form-control-md stk-ticker\" value=\"\" placeholder=\"e.g., AAPL\" >
                </div>
                
                <div class = \"input-group input-group-md\">
                      <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" >Date range:</span>
                      </div>
                    <input type=\"text\" class=\"form-control form-control-md stk-date1\" value=\"\" placeholder=\"YYYY-MM-DD\" >
                    <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" >to:</span>
                    </div>
                    <input type=\"text\" class=\"form-control form-control-md stk-date2\" value=\"\" placeholder=\"YYYY-MM-DD\" >
                </div>
    
                <div class = \"input-group input-group-md \">
                      <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">Frequency:</span>
                      </div>
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      <label class=\"btn btn-secondary btn-md active\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"d\" autocomplete=\"off\" checked>Daily
                      </label>
                      <label class=\"btn btn-secondary btn-md\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"w\" autocomplete=\"off\">Weekly
                      </label>
                      <label class=\"btn btn-secondary btn-md\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"m\" autocomplete=\"off\">Monthly
                      </label>
                      <label class=\"btn btn-secondary btn-md\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"q\" autocomplete=\"off\">Quarterly
                      </label>
                      <label class=\"btn btn-secondary btn-md\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"a\" autocomplete=\"off\">Annually
                      </label>
                    </div>
                </div>
                
                <div id=\"errormessage\" class=\"invalid-feedback\">Error Message!</div>
            <p>Sometimes contextual classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element’s content in a <code class=\"highlighter-rouge\">&lt;div&gt;</code> with the class.</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button class=\"btn btn-primary stk-submit\" type=\"button\">Submit</button>
          </div>
        </form>
        
        
        
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__modalstk__.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Stk Modal -->
<div class=\"modal fade modalstk\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"stk-modal\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
        
        <div class=\"overlay\" style=\"display:none\">
            <div class=\"row\">
                <div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\">Loading data and making graphs...</h4></div>
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
        </div>

        
        <form class=\"form addtypestk\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modal title</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body\">
                <div class = \"input-group input-group-md \">
                      <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" >Stock or ETF Ticker:</span>
                      </div>
                    <input type=\"text\" class=\"form-control form-control-md stk-ticker\" value=\"\" placeholder=\"e.g., AAPL\" >
                </div>
                
                <div class = \"input-group input-group-md\">
                      <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" >Date range:</span>
                      </div>
                    <input type=\"text\" class=\"form-control form-control-md stk-date1\" value=\"\" placeholder=\"YYYY-MM-DD\" >
                    <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" >to:</span>
                    </div>
                    <input type=\"text\" class=\"form-control form-control-md stk-date2\" value=\"\" placeholder=\"YYYY-MM-DD\" >
                </div>
    
                <div class = \"input-group input-group-md \">
                      <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">Frequency:</span>
                      </div>
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      <label class=\"btn btn-secondary btn-md active\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"d\" autocomplete=\"off\" checked>Daily
                      </label>
                      <label class=\"btn btn-secondary btn-md\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"w\" autocomplete=\"off\">Weekly
                      </label>
                      <label class=\"btn btn-secondary btn-md\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"m\" autocomplete=\"off\">Monthly
                      </label>
                      <label class=\"btn btn-secondary btn-md\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"q\" autocomplete=\"off\">Quarterly
                      </label>
                      <label class=\"btn btn-secondary btn-md\">
                        <input type=\"radio\" name=\"stk-freq\" value=\"a\" autocomplete=\"off\">Annually
                      </label>
                    </div>
                </div>
                
                <div id=\"errormessage\" class=\"invalid-feedback\">Error Message!</div>
            <p>Sometimes contextual classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element’s content in a <code class=\"highlighter-rouge\">&lt;div&gt;</code> with the class.</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            <button class=\"btn btn-primary stk-submit\" type=\"button\">Submit</button>
          </div>
        </form>
        
        
        
    </div>
  </div>
</div>
", "__modalstk__.html", "/var/www/arima/public/templates/__modalstk__.html");
    }
}
