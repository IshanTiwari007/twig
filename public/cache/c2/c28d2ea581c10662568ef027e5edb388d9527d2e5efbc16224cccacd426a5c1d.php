<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ishan.twig */
class __TwigTemplate_681bb90d2b4fed1b7510124ec17f572510a46ce9cb4af0696442711c5c49dbf0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "getLocale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap\" rel=\"stylesheet\">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class=\"antialiased\">

    <div class=\"flex-center position-ref full-height\">
           <div class=\"contents\">
           </div>

            <div class=\"content\">
                <div class=\"title m-b-md\">
                    Laravel v";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "version", [], "any", false, false, false, 74), "html", null, true);
        echo "
                </div>
                <div class=\"links\">
               ";
        // line 77
        if ((10 == 10)) {
            // line 78
            echo "                    <a href=\"https://laravel.com/docs\">Docs</a>
                    <a href=\"https://laracasts.com\">Laracasts</a>
                    <a href=\"https://laravel-news.com\">News</a>
                    <a href=\"https://blog.laravel.com\">Blog</a>
                    <a href=\"https://nova.laravel.com\">Nova</a>
                    <a href=\"https://forge.laravel.com\">Forge</a>
                    <a href=\"https://vapor.laravel.com\">Vapor</a>
                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>
                ";
        }
        // line 87
        echo "                </div>
            </div>
    </div>
    
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "ishan.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 87,  123 => 78,  121 => 77,  115 => 74,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ishan.twig", "C:\\Users\\Ishan\\OneDrive - EV Software Solutions Pvt Ltd\\Documents\\Projects\\Project1\\resources\\views\\ishan.twig");
    }
}
