<?php

/* dataloader.html */
class __TwigTemplate_856a7618e3a93b9a78127b7599455cfc555d4c894b90ba2fa7dfd8231321c331 extends Twig_Template
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
        echo "<section class=\"container\" style=\"margin-bottom:20px\" id=\"dataloader\">
    <form class=\"form-inline\" method=\"post\" action=\"\" id=\"dataloader-form\">
            <label for=\"dataloader-dates\" style=\"font-weight:600\">Dates</label>
            <textarea class=\"form-control form-control-sm\" rows=\"5\" id=\"dataloader-dates\" style=\"width:100%\"></textarea>
            <label for=\"dataloader-values\" style=\"font-weight:600\">Values</label>
            <textarea class=\"form-control form-control-sm\" rows=\"5\" id=\"dataloader-values\" style=\"width:100%\"></textarea>

            <button class=\"btn btn-primary\" type=\"submit\" id=\"dataloader-submit\" >Enter</button>
    </form>
</section>
";
    }

    public function getTemplateName()
    {
        return "dataloader.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"container\" style=\"margin-bottom:20px\" id=\"dataloader\">
    <form class=\"form-inline\" method=\"post\" action=\"\" id=\"dataloader-form\">
            <label for=\"dataloader-dates\" style=\"font-weight:600\">Dates</label>
            <textarea class=\"form-control form-control-sm\" rows=\"5\" id=\"dataloader-dates\" style=\"width:100%\"></textarea>
            <label for=\"dataloader-values\" style=\"font-weight:600\">Values</label>
            <textarea class=\"form-control form-control-sm\" rows=\"5\" id=\"dataloader-values\" style=\"width:100%\"></textarea>

            <button class=\"btn btn-primary\" type=\"submit\" id=\"dataloader-submit\" >Enter</button>
    </form>
</section>
", "dataloader.html", "/var/www/arima/public/templates/dataloader.html");
    }
}
