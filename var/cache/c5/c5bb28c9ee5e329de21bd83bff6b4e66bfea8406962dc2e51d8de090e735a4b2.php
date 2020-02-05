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

/* player/form.html.twig */
class __TwigTemplate_9b2275e2dcf9e1d32dc67310e4de75a9bb59d64741b3d6b5a8f3747fc49b686e extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "player/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<h1></h1>
<form method=\"POST\" action=\"#\">
    <div class=\"form-group\">
        <label for=\"username\">Username</label>
        <input type=\"string\" class=\"form-control\" id=\"username\" name=\"username\" aria-describedby=\"username\" placeholder=\"\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email</label>
        <input type=\"string\" class=\"form-control\" id=\"email\" aria-describedby=\"email\" name=\"email\" placeholder=\"\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "email", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    </div>

    <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\">Save</button>


</form>
";
    }

    public function getTemplateName()
    {
        return "player/form.html.twig";
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
        <label for=\"username\">Username</label>
        <input type=\"string\" class=\"form-control\" id=\"username\" name=\"username\" aria-describedby=\"username\" placeholder=\"\" value=\"{{ player.username }}\">
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email</label>
        <input type=\"string\" class=\"form-control\" id=\"email\" aria-describedby=\"email\" name=\"email\" placeholder=\"\" value=\"{{ player.email }}\">
    </div>

    <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\">Save</button>


</form>
{% endblock %}", "player/form.html.twig", "/Users/digital/Desktop/php-tp2/templates/player/form.html.twig");
    }
}
