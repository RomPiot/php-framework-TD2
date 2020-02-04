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

/* layout.html.twig */
class __TwigTemplate_4e8796049a1a00ca20fe162c18e329264bc652f9e515fea21ba0ddf4e215ce77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navigation' => [$this, 'block_navigation'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/lux/bootstrap.min.css\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">

    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "
</head>
<body style=\"background-color: #FAFAFA;\">
<main role=\"main\">
    <header>
    ";
        // line 14
        $this->displayBlock('navigation', $context, $blocks);
        // line 40
        echo "    </header>

    <div class=\"container\" style=\"margin-top: 24px; background: #fff;padding:24px;box-sizing: border-box;\">

        ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "        <?php include \$templateName . \".php\"; ?>

    </div> <!-- /container -->

</main>

";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\"
        integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"
        integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\"
        crossorigin=\"anonymous\"></script>

</body>
</html>

";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<title>Mon super Site</title>";
    }

    // line 14
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <a class=\"navbar-brand\" href=\"#\">My website</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
                    aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/game\">Games</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/player\">Players</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/score\">Scores</a>
                    </li>
                </ul>

            </div>
        </nav>
    ";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "
        ";
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "<footer class=\"container\">
    <hr/>
    &copy; 2019
</footer>
";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 54,  146 => 53,  141 => 45,  137 => 44,  109 => 15,  105 => 14,  98 => 8,  79 => 59,  77 => 53,  69 => 47,  67 => 44,  61 => 40,  59 => 14,  52 => 9,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/lux/bootstrap.min.css\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">

    {% block title %}<title>Mon super Site</title>{% endblock %}

</head>
<body style=\"background-color: #FAFAFA;\">
<main role=\"main\">
    <header>
    {% block navigation %}
        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <a class=\"navbar-brand\" href=\"#\">My website</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\"
                    aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/game\">Games</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/player\">Players</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/score\">Scores</a>
                    </li>
                </ul>

            </div>
        </nav>
    {% endblock %}
    </header>

    <div class=\"container\" style=\"margin-top: 24px; background: #fff;padding:24px;box-sizing: border-box;\">

        {% block content %}

        {% endblock %}
        <?php include \$templateName . \".php\"; ?>

    </div> <!-- /container -->

</main>

{% block footer %}
<footer class=\"container\">
    <hr/>
    &copy; 2019
</footer>
{% endblock %}


<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\"
        integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"
        integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\"
        crossorigin=\"anonymous\"></script>

</body>
</html>

", "layout.html.twig", "/Users/digital/Desktop/php-tp2/templates/layout.html.twig");
    }
}
