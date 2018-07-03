<?php

/* _graphprepend_.html */
class __TwigTemplate_54278ab94c5117e43ff71366c9ac9b1ca8189265223b4cffa6b109f988d39980 extends Twig_Template
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
        echo "<section class=\"container-fluid\" id=\"graphprepend\">
<div class=\"bs-callout bs-callout-primary bg-white\">
    
    <h5 class=\"text-primary\">Description</h5>
    <p>
        ";
        // line 6
        echo twig_escape_filter($this->env, ($context["graphprepend_p"] ?? null), "html", null, true);
        echo "
    </p>

    <h5 class=\"text-primary\">Graphing Options</h5>
    <h6>Datasets:</h6>
    
    <div id=\"graph-options\">
        <div id=\"checkbox-div\"></div>
        <div class=\"input-group mb-3\">
          <div class=\"input-group-prepend\">
            <button class=\"btn btn-secondary disabled\" type=\"button\">Choose data transformation: </button>
          </div>
        <select class=\"custom-select\" id=\"ser-transformation\">
          <option value=\"val\" data-index=\"2\">Base Value (No Transformation)</option>
          <option value=\"pchg\" data-index=\"3\" selected=\"selected\">% Change</option>
        </select>
          
        </div>
    </div>
    
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "_graphprepend_.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"container-fluid\" id=\"graphprepend\">
<div class=\"bs-callout bs-callout-primary bg-white\">
    
    <h5 class=\"text-primary\">Description</h5>
    <p>
        {{ graphprepend_p }}
    </p>

    <h5 class=\"text-primary\">Graphing Options</h5>
    <h6>Datasets:</h6>
    
    <div id=\"graph-options\">
        <div id=\"checkbox-div\"></div>
        <div class=\"input-group mb-3\">
          <div class=\"input-group-prepend\">
            <button class=\"btn btn-secondary disabled\" type=\"button\">Choose data transformation: </button>
          </div>
        <select class=\"custom-select\" id=\"ser-transformation\">
          <option value=\"val\" data-index=\"2\">Base Value (No Transformation)</option>
          <option value=\"pchg\" data-index=\"3\" selected=\"selected\">% Change</option>
        </select>
          
        </div>
    </div>
    
</div>
</section>
", "_graphprepend_.html", "/var/www/arima/public/templates/_graphprepend_.html");
    }
}
