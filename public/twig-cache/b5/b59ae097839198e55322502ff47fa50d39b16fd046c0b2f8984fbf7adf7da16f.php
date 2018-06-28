<?php

/* about.html */
class __TwigTemplate_a47ae24542d75704ae8f2cbc8bc006f08444e32636aae77edfacb1e260606977 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "about.html", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"https://github.com/cye131/arima\" target=\"_blank\">https://github.com/cye131/arima</a>
<script>
\$(document).ready(function() {
    var readmeFmt = readme.replace(/(?:\\r\\n|\\r|\\n)/g, '<br>');
    \$('main a').after(readmeFmt);
    
});

</script>

";
    }

    public function getTemplateName()
    {
        return "about.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block content %}
<a href=\"https://github.com/cye131/arima\" target=\"_blank\">https://github.com/cye131/arima</a>
<script>
\$(document).ready(function() {
    var readmeFmt = readme.replace(/(?:\\r\\n|\\r|\\n)/g, '<br>');
    \$('main a').after(readmeFmt);
    
});

</script>

{% endblock %}", "about.html", "/var/www/arima/public/templates/about.html");
    }
}
