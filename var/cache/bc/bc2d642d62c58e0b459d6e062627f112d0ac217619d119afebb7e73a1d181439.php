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

/* game/index.html.twig */
class __TwigTemplate_5444aa3cef0c33fc4fd4ae9ca17a3a6b776a4c533e823651755b96f4a4e6b99a extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "game/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1>Games</h1>
<table class=\"table\">
    <thead>

    <tr>
        <th class=\"\">#</th>
        <th class=\"col\">name</th>
        <th class=\"col\">
            <a href=\"/game/add\">
                <i class=\"fas fa-plus\"></i>
            </a>
        </th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["games"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 20
            echo "        <tr>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>
                <img class=\"img-thumbnail\" style=\"max-width: 64px;\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "image", [], "any", false, false, false, 23), "html", null, true);
            echo "\"/>
                ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>
                <a href=\"/game/show?id=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"/game/edit?id=";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <a href=\"/game/delete?id=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete it?')\">
                    <i class=\"fas fa-trash\"></i>
                </a>

            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  100 => 32,  94 => 29,  88 => 26,  83 => 24,  79 => 23,  74 => 21,  71 => 20,  67 => 19,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<h1>Games</h1>
<table class=\"table\">
    <thead>

    <tr>
        <th class=\"\">#</th>
        <th class=\"col\">name</th>
        <th class=\"col\">
            <a href=\"/game/add\">
                <i class=\"fas fa-plus\"></i>
            </a>
        </th>
    </tr>
    </thead>
    <tbody>
    {% for game in games %}
        <tr>
            <td>{{ game.id }}</td>
            <td>
                <img class=\"img-thumbnail\" style=\"max-width: 64px;\" src=\"{{ game.image }}\"/>
                {{ game.name }}</td>
            <td>
                <a href=\"/game/show?id={{ game.id }}\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"/game/edit?id={{ game.id }}\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <a href=\"/game/delete?id={{ game.id }}\" onclick=\"return confirm('Are you sure you want to delete it?')\">
                    <i class=\"fas fa-trash\"></i>
                </a>

            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
{% endblock %}
", "game/index.html.twig", "/Users/digital/Desktop/php-tp2/templates/game/index.html.twig");
    }
}
