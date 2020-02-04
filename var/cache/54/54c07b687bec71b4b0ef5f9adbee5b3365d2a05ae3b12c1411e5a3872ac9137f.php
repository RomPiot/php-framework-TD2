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

/* game/form.html.twig */
class __TwigTemplate_d31a29c5d236311eb98838522d78a3a51b10f244db883a181714cfad71878001 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "game/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1></h1>

<form method=\"POST\" action=\"#\">
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input type=\"string\" name=\"name\" class=\"form-control\" id=\"name\" aria-describedby=\"name\" placeholder=\"\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"image\">Image</label>
        <input type=\"string\" name=\"image\" class=\"form-control\" id=\"image\" aria-describedby=\"image\" placeholder=\"\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    </div>

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">Save</button>


</form>

";
    }

    public function getTemplateName()
    {
        return "game/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<h1></h1>

<form method=\"POST\" action=\"#\">
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input type=\"string\" name=\"name\" class=\"form-control\" id=\"name\" aria-describedby=\"name\" placeholder=\"\" value=\"{{ game.name }}\">
    </div>
    <div class=\"form-group\">
        <label for=\"image\">Image</label>
        <input type=\"string\" name=\"image\" class=\"form-control\" id=\"image\" aria-describedby=\"image\" placeholder=\"\" value=\"{{ game.image }}\">
    </div>

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">Save</button>


</form>

{% endblock %}", "game/form.html.twig", "/Users/digital/Desktop/php-tp2/templates/game/form.html.twig");
    }
}
