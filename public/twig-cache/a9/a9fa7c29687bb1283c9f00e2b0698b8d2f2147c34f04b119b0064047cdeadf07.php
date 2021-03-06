<?php

/* acf.html */
class __TwigTemplate_2db0e37e310685631023eb7a0a7b80e609788f46acdcdcc552de75301844ad75 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "acf.html", 1);
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
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    
    ";
        // line 9
        $context["graphprepend_p"] = ('' === $tmp = "            The autocorrelation function (\$ACF\$) at lag \$l\$ is given by
            \\begin{equation}  ACF(l) = \\frac{\\sum^{N-l}_{i=0} (x_i - \\bar{x})(x_{i+l} - \\bar{x})}{\\sum^N_{i=0} (x_i-\\bar{x})^2} \\end{equation}
            \$\$\\text{for a time series } x_0,x_1,...,x_N \$\$
            

    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    
    ";
        // line 17
        $this->loadTemplate("_graphprepend_.html", "acf.html", 17)->display(array_merge($context, array("graphprepend_p" => ($context["graphprepend_p"] ?? null))));
        // line 18
        echo "
    <section class=\"container-fluid\">
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-12\" id=\"tsChart\"></div>
        </div>
    </section>
    
    <section class=\"container-fluid\">
        <div class=\"row justify-content-md-center my-2\">
            <table class=\"col-md-12 w-100\" id=\"tsTable\"></table>
        </div>
    </section>
        
";
    }

    public function getTemplateName()
    {
        return "acf.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  55 => 17,  52 => 16,  45 => 9,  41 => 7,  38 => 6,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block staticlinks %}
{% endblock %}


{% block content %}

    
    {% set graphprepend_p %}
            The autocorrelation function (\$ACF\$) at lag \$l\$ is given by
            \\begin{equation}  ACF(l) = \\frac{\\sum^{N-l}_{i=0} (x_i - \\bar{x})(x_{i+l} - \\bar{x})}{\\sum^N_{i=0} (x_i-\\bar{x})^2} \\end{equation}
            \$\$\\text{for a time series } x_0,x_1,...,x_N \$\$
            

    {% endset %}
    
    {% include '_graphprepend_.html' with {'graphprepend_p': graphprepend_p} %}

    <section class=\"container-fluid\">
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-12\" id=\"tsChart\"></div>
        </div>
    </section>
    
    <section class=\"container-fluid\">
        <div class=\"row justify-content-md-center my-2\">
            <table class=\"col-md-12 w-100\" id=\"tsTable\"></table>
        </div>
    </section>
        
{% endblock %}", "acf.html", "/var/www/arima/public/templates/acf.html");
    }
}
