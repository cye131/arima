<?php

/* _transform_.html */
class __TwigTemplate_eb89d69b67f1f81736bfc333433698087646f01c7b39afd59938f9ed2b6e1254 extends Twig_Template
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
        echo "<section class=\"container-fluid\">
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
";
    }

    public function getTemplateName()
    {
        return "_transform_.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"container-fluid\">
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
", "_transform_.html", "/var/www/arima/public/templates/_transform_.html");
    }
}
