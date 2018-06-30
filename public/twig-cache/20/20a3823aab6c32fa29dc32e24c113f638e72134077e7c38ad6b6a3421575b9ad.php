<?php

/* layout.html */
class __TwigTemplate_67552a73ce0761e65f5b7d5c91174c5c5f8b81ae993a8c7c3a3318eeaae97406 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'staticlinks' => array($this, 'block_staticlinks'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">

<head>
    <meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null));
        echo "</title>
    <link rel=\"icon\" type=image/ico href=\"/static/favicon.ico\"/>
    <meta name=description content=\"Content.\" />
    <meta name=keywords content=\"sectors, gics sectors, gics groups, gics lookup, stock sector correlation, correlation\" />
    
    <link rel=\"stylesheet\" href=\"static/style.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\"/> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css\"/> 

    <script src=\"//code.jquery.com/jquery-git.min.js\"></script>
    
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    
    <script src=\"//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js\"></script>
    <script src=\"//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js\"></script>
    
    <script src=\"//code.highcharts.com/stock/highstock.js\"></script>
    <script src=\"//code.highcharts.com/stock/highcharts-more.js\"></script>
    <script src=\"//code.highcharts.com/modules/exporting.js\"></script>
    
    
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/latest.js?config=TeX-MML-AM_CHTML' ></script>

  <script type=\"text/x-mathjax-config\">
  MathJax.Hub.Config({
    TeX: { equationNumbers: { autoNumber: \"AMS\" } },
      tex2jax: {
    inlineMath: [['\$','\$'], ['\\\\(','\\\\)']],
    processEscapes: true
  }

  });
  </script>

    ";
        // line 48
        echo ($context["pageJS"] ?? null);
        echo "

    ";
        // line 50
        $this->displayBlock('staticlinks', $context, $blocks);
        // line 51
        echo "

    
</head>
<body>
    <header class=\"clearfix\">
        <div class=\"container-fluid\" style=\"height:10px;background-color:rgba(10, 24, 66,1);\"></div>        
        <nav class=\"navbar navbar-expand-sm navbar-dark\">

            <div class=\"navbar-nav-scroll container-fluid\">
                <a class=\"navbar-brand\" href=\"/\">Time Series Calculator</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbarLg\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"navbar-collapse collapse\" id=\"collapsingNavbarLg\">
                    <ul class=\"navbar-nav\" id=\"header\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/about\">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    
    <div class=\"container-fluid\">
    <div class=\"row\">
      <nav class=\"col-sm-4 col-md-3 col-xl-2 d-none d-sm-block bg-light sidebar px-0\" id=\"sidebar\">
          <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link font-weight-bold\" href=\"/adddata\">DATASETS</a>
              <ul id=\"ser-list\">
                <li id=\"ser1\">Dataset 1 <span class=\"badge badge-warning\">Loading...</span></li>
                <li id=\"ser2\">Dataset 2 <span class=\"badge badge-warning\">Loading...</span></li>
                <li id=\"ser3\">Dataset 3 <span class=\"badge badge-warning\">Loading...</span></li>
                <li id=\"ser4\">Dataset 4 <span class=\"badge badge-warning\">Loading...</span></li>
                <li id=\"ser5\">Dataset 5 <span class=\"badge badge-warning\">Loading...</span></li>
              </ul>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link font-weight-bold\" href=\"/graphs\">Graphs</a>
              <a class=\"nav-link pl-4\" href=\"/graphs\" >Basic Chart Comparison</a>
              <a class=\"nav-link pl-4\" href=\"/acf\" >Autocorrelation Function</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Analytics</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Export</a>
            </li>
          </ul>

        </nav>
      
      <main class=\"col-sm-8 col-md-9 col-xl-10 ml-sm-auto pt-3 px-4\" id=\"main\">
      ";
        // line 110
        $this->displayBlock('content', $context, $blocks);
        // line 112
        echo "          <footer class=\"page-footer font-small pt-4\" style=\"background: rgba(10, 24, 66,1);\">
          
            <div class=\"container text-center text-md-left\">
          
              <div class=\"row\">
          
                <div class=\"col-md-6 mt-md-0 mt-3\">
          
                  <h5 class=\"text-uppercase\">Stuff I haven't finished yet</h5>
                  <p>Blah blah blah.</p>
          
                </div>
          
                <hr class=\"clearfix w-100 d-md-none pb-3\">
          
                <div class=\"col-md-6 mb-md-0 mb-3\">
          
                  <h5 class=\"text-uppercase\">Links</h5>
          
                  <ul class=\"list-unstyled\">
                    <li>
                      <a href=\"#!\">Link 1</a>
                    </li>
                    <li>
                      <a href=\"#!\">Link 2</a>
                    </li>
                    <li>
                      <a href=\"#!\">Link 3</a>
                    </li>
                    <li>
                      <a href=\"#!\">Link 4</a>
                    </li>
                  </ul>
          
                </div>
          
              </div>
          
            </div>
          
            <div class=\"footer-copyright text-center py-3\">© 2018 Copyright Charles Ye
              <a href=\"mailto:cye@outlook.com\">Email</a>
            </div>
              <div class=\"container-fluid\" style=\"height:100px\"></div>
          
          </footer>

      </main>
      
    </div>
    </div>

        
        
        
<div class=\"overlay h-100\" id=\"overlay\" style=\"display:none\">
    <div class=\"row h-25\">
        <div class=\"\"></div>
    </div>
    <div class=\"row\">
        <div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\">Loading ...</h4></div>
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


<script>
  ";
        // line 194
        echo ($context["bodyScript"] ?? null);
        echo "
</script>

</body>

</html>";
    }

    // line 50
    public function block_staticlinks($context, array $blocks = array())
    {
    }

    // line 110
    public function block_content($context, array $blocks = array())
    {
        // line 111
        echo "      ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 111,  246 => 110,  241 => 50,  231 => 194,  147 => 112,  145 => 110,  84 => 51,  82 => 50,  77 => 48,  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en-US\">

<head>
    <meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>{{ title|e }}</title>
    <link rel=\"icon\" type=image/ico href=\"/static/favicon.ico\"/>
    <meta name=description content=\"Content.\" />
    <meta name=keywords content=\"sectors, gics sectors, gics groups, gics lookup, stock sector correlation, correlation\" />
    
    <link rel=\"stylesheet\" href=\"static/style.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\"/> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css\"/> 

    <script src=\"//code.jquery.com/jquery-git.min.js\"></script>
    
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    
    <script src=\"//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js\"></script>
    <script src=\"//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"//cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js\"></script>
    
    <script src=\"//code.highcharts.com/stock/highstock.js\"></script>
    <script src=\"//code.highcharts.com/stock/highcharts-more.js\"></script>
    <script src=\"//code.highcharts.com/modules/exporting.js\"></script>
    
    
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/latest.js?config=TeX-MML-AM_CHTML' ></script>

  <script type=\"text/x-mathjax-config\">
  MathJax.Hub.Config({
    TeX: { equationNumbers: { autoNumber: \"AMS\" } },
      tex2jax: {
    inlineMath: [['\$','\$'], ['\\\\(','\\\\)']],
    processEscapes: true
  }

  });
  </script>

    {{ pageJS | raw }}

    {% block staticlinks %}{% endblock %}


    
</head>
<body>
    <header class=\"clearfix\">
        <div class=\"container-fluid\" style=\"height:10px;background-color:rgba(10, 24, 66,1);\"></div>        
        <nav class=\"navbar navbar-expand-sm navbar-dark\">

            <div class=\"navbar-nav-scroll container-fluid\">
                <a class=\"navbar-brand\" href=\"/\">Time Series Calculator</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbarLg\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"navbar-collapse collapse\" id=\"collapsingNavbarLg\">
                    <ul class=\"navbar-nav\" id=\"header\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/about\">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    
    <div class=\"container-fluid\">
    <div class=\"row\">
      <nav class=\"col-sm-4 col-md-3 col-xl-2 d-none d-sm-block bg-light sidebar px-0\" id=\"sidebar\">
          <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link font-weight-bold\" href=\"/adddata\">DATASETS</a>
              <ul id=\"ser-list\">
                <li id=\"ser1\">Dataset 1 <span class=\"badge badge-warning\">Loading...</span></li>
                <li id=\"ser2\">Dataset 2 <span class=\"badge badge-warning\">Loading...</span></li>
                <li id=\"ser3\">Dataset 3 <span class=\"badge badge-warning\">Loading...</span></li>
                <li id=\"ser4\">Dataset 4 <span class=\"badge badge-warning\">Loading...</span></li>
                <li id=\"ser5\">Dataset 5 <span class=\"badge badge-warning\">Loading...</span></li>
              </ul>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link font-weight-bold\" href=\"/graphs\">Graphs</a>
              <a class=\"nav-link pl-4\" href=\"/graphs\" >Basic Chart Comparison</a>
              <a class=\"nav-link pl-4\" href=\"/acf\" >Autocorrelation Function</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Analytics</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Export</a>
            </li>
          </ul>

        </nav>
      
      <main class=\"col-sm-8 col-md-9 col-xl-10 ml-sm-auto pt-3 px-4\" id=\"main\">
      {% block content %}
      {% endblock %}
          <footer class=\"page-footer font-small pt-4\" style=\"background: rgba(10, 24, 66,1);\">
          
            <div class=\"container text-center text-md-left\">
          
              <div class=\"row\">
          
                <div class=\"col-md-6 mt-md-0 mt-3\">
          
                  <h5 class=\"text-uppercase\">Stuff I haven't finished yet</h5>
                  <p>Blah blah blah.</p>
          
                </div>
          
                <hr class=\"clearfix w-100 d-md-none pb-3\">
          
                <div class=\"col-md-6 mb-md-0 mb-3\">
          
                  <h5 class=\"text-uppercase\">Links</h5>
          
                  <ul class=\"list-unstyled\">
                    <li>
                      <a href=\"#!\">Link 1</a>
                    </li>
                    <li>
                      <a href=\"#!\">Link 2</a>
                    </li>
                    <li>
                      <a href=\"#!\">Link 3</a>
                    </li>
                    <li>
                      <a href=\"#!\">Link 4</a>
                    </li>
                  </ul>
          
                </div>
          
              </div>
          
            </div>
          
            <div class=\"footer-copyright text-center py-3\">© 2018 Copyright Charles Ye
              <a href=\"mailto:cye@outlook.com\">Email</a>
            </div>
              <div class=\"container-fluid\" style=\"height:100px\"></div>
          
          </footer>

      </main>
      
    </div>
    </div>

        
        
        
<div class=\"overlay h-100\" id=\"overlay\" style=\"display:none\">
    <div class=\"row h-25\">
        <div class=\"\"></div>
    </div>
    <div class=\"row\">
        <div class=\"text-center col-12\"><h4 style=\"text-align:center\" id=\"loadmessage\">Loading ...</h4></div>
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


<script>
  {{ bodyScript |raw }}
</script>

</body>

</html>", "layout.html", "/var/www/arima/public/templates/layout.html");
    }
}
