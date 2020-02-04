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

/* player/show.html.twig */
class __TwigTemplate_3a643923120639a1fb2e03ebd6083a21f9e1a2fc186b5eaae9c9a7d2f3bd1aea extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "player/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row\">
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "username", [], "any", false, false, false, 5), "html", null, true);
        echo "
        <small>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "email", [], "any", false, false, false, 6), "html", null, true);
        echo "</small>
    </h1>
</div>
<div class=\"row\">
    <form class=\"form-inline\" method=\"post\" action=\"/player/addgame?id=";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">

        <label class=\"sr-only\" for=\"game\">Game</label>
        <select class=\"custom-select mr-sm-3\" id=\"game\" required name=\"game\">
            <option disabled selected>game</option>
            <?php foreach (\$availableGames as \$game): ?>
                <option value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\"><?= \$game->getName(); ?></option>
            <?php endforeach; ?>
        </select>


        <button type=\"submit\" class=\" ml-4 btn btn-primary\">Add Game</button>
    </form>


</div>
<hr/>
<div class=\"row\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "games", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 29
            echo "        <div class=\"col-3\" style=\"margin-bottom: 16px;\">
            <a href=\"/game/show?id=";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "image", [], "any", false, false, false, 30), "html", null, true);
            echo "\"/></a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "player/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  95 => 30,  92 => 29,  88 => 28,  73 => 16,  64 => 10,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<div class=\"row\">
    <h1>{{ player.username }}
        <small>{{ player.email }}</small>
    </h1>
</div>
<div class=\"row\">
    <form class=\"form-inline\" method=\"post\" action=\"/player/addgame?id={{ player.id }}\">

        <label class=\"sr-only\" for=\"game\">Game</label>
        <select class=\"custom-select mr-sm-3\" id=\"game\" required name=\"game\">
            <option disabled selected>game</option>
            <?php foreach (\$availableGames as \$game): ?>
                <option value=\"{{ game.id }}\"><?= \$game->getName(); ?></option>
            <?php endforeach; ?>
        </select>


        <button type=\"submit\" class=\" ml-4 btn btn-primary\">Add Game</button>
    </form>


</div>
<hr/>
<div class=\"row\">
    {% for game in player.games %}
        <div class=\"col-3\" style=\"margin-bottom: 16px;\">
            <a href=\"/game/show?id={{ game.id }}\"><img class=\"img-responsive\" src=\"{{ game.image }}\"/></a>
        </div>
    {% endfor %}
</div>
{% endblock %}", "player/show.html.twig", "/Users/digital/Desktop/php-tp2/templates/player/show.html.twig");
    }
}
