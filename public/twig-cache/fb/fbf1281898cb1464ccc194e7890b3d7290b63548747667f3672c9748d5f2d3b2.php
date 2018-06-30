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
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        $this->loadTemplate("_graphprepend_.html", "graphs.html", 8)->display($context);
        // line 9
        echo "
    <section class=\"container-fluid\">
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-12\" id=\"tsChart\"></div>
        </div>
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
        return array (  46 => 9,  44 => 8,  41 => 7,  38 => 6,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block staticlinks %}
{% endblock %}


{% block content %}

    {% include '_graphprepend_.html' %}

    <section class=\"container-fluid\">
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-12\" id=\"tsChart\"></div>
        </div>
    </section>
    
    
    {% endblock %}", "graphs.html", "/var/www/arima/public/templates/graphs.html");
    }
}
