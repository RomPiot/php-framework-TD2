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

/* player/index.html.twig */
class __TwigTemplate_acdfeecb2093aa175e361ce245980c477e65749f988603c8cde73586e5dbddb6 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "player/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1>Players</h1>
<table class=\"table\">
    <thead>

    <tr>
        <th class=\"\">#</th>
        <th class=\"col\">username</th>
        <th class=\"col\">email</th>
        <th class=\"col\">
            <a href=\"/player/add\">
                <i class=\"fas fa-plus\"></i>
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 22
            echo "        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "email", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>
                <a href=\"/player/show?id=";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"/player/edit?id=<";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <a href=\"/player/delete?id=";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"
                   onclick=\"return confirm('Are you sure you want to delete it?')\">
                    <i class=\"fas fa-trash\"></i>
                </a>

            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "player/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  101 => 33,  95 => 30,  89 => 27,  84 => 25,  80 => 24,  76 => 23,  73 => 22,  69 => 21,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<h1>Players</h1>
<table class=\"table\">
    <thead>

    <tr>
        <th class=\"\">#</th>
        <th class=\"col\">username</th>
        <th class=\"col\">email</th>
        <th class=\"col\">
            <a href=\"/player/add\">
                <i class=\"fas fa-plus\"></i>
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

    {% for player in players %}
        <tr>
            <td>{{ player.id }}</td>
            <td>{{ player.username }}</td>
            <td>{{ player.email }}</td>
            <td>
                <a href=\"/player/show?id={{ player.id }}\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"/player/edit?id=<{{ player.id }}\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <a href=\"/player/delete?id={{ player.id }}\"
                   onclick=\"return confirm('Are you sure you want to delete it?')\">
                    <i class=\"fas fa-trash\"></i>
                </a>

            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{% endblock %}

", "player/index.html.twig", "/Users/digital/Desktop/php-tp2/templates/player/index.html.twig");
    }
}
