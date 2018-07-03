<?php

/* pacf.html */
class __TwigTemplate_a57e80acd3c2dfadf4e4a5a598d93b21f1a6c8852c983ff57c7be2cde1d0fac3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "pacf.html", 1);
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
        $this->loadTemplate("_graphprepend_.html", "pacf.html", 17)->display(array_merge($context, array("graphprepend_p" => ($context["graphprepend_p"] ?? null))));
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
    
";
    }

    public function getTemplateName()
    {
        return "pacf.html";
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
    
{% endblock %}", "pacf.html", "/var/www/arima/public/templates/pacf.html");
    }
}
