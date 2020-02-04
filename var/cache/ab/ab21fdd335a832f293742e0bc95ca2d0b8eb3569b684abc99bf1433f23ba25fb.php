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

/* score/index.html.twig */
class __TwigTemplate_0cba1afeb5ca7cb075e93d2869ffccd442295f37fc804b5ff9df3863432c9ee7 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "score/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1>Last Scores</h1>
<div class=\"row\">
    <div class=\"col\">
        <form class=\"form-inline\" action=\"score/add\">
            <label class=\"sr-only\" for=\"game\">Game</label>
            <select class=\"custom-select mr-sm-3\" id=\"game\" name=\"game\" required>
                <option disabled selected>game</option>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["games"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 12
            echo "
                    <option value=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
            <label class=\"sr-only\" for=\"player\">Player</label>
            <select class=\"custom-select mr-sm-3\" id=\"player\" name=\"player\" required>
                <option disabled selected>player</option>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 20
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 20), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>
            <label class=\"sr-only\" for=\"score\">Score</label>
            <input type=\"number\" class=\"form-control mr-sm-3 pull-right\" name=\"score\" id=\"score\" placeholder=\"score\" value=\"0\">


            <button type=\"submit\" name=\"submit\" class=\" ml-4 btn btn-primary\">Add Score</button>
        </form>
    </div>
</div>
<br/>
<div class=\"row\">
    <table class=\"table\">
        <thead>

        <tr>
            <th class=\"\">#</th>
            <th class=\"col\">user</th>
            <th class=\"col\">game</th>
            <th class=\"col\">score</th>
            <th class=\"col\"></th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 47
            echo "            <tr>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "player", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "game", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"/score/delete?id=";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\"
                       onclick=\"return confirm('Are you sure you want to delete it?')\">
                        <i class=\"fas fa-trash\"></i>
                    </a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>


</div>
";
    }

    public function getTemplateName()
    {
        return "score/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 61,  147 => 53,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  127 => 47,  123 => 46,  97 => 22,  86 => 20,  82 => 19,  76 => 15,  66 => 13,  63 => 12,  59 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<h1>Last Scores</h1>
<div class=\"row\">
    <div class=\"col\">
        <form class=\"form-inline\" action=\"score/add\">
            <label class=\"sr-only\" for=\"game\">Game</label>
            <select class=\"custom-select mr-sm-3\" id=\"game\" name=\"game\" required>
                <option disabled selected>game</option>
                {% for game in games %}

                    <option value=\"{{ game.id }}\">{{ game.name }}</option>
                {% endfor %}
            </select>
            <label class=\"sr-only\" for=\"player\">Player</label>
            <select class=\"custom-select mr-sm-3\" id=\"player\" name=\"player\" required>
                <option disabled selected>player</option>
                {% for player in players %}
                    <option value=\"{{ player.id }}\">{{ player.username }}</option>
                {% endfor %}
            </select>
            <label class=\"sr-only\" for=\"score\">Score</label>
            <input type=\"number\" class=\"form-control mr-sm-3 pull-right\" name=\"score\" id=\"score\" placeholder=\"score\" value=\"0\">


            <button type=\"submit\" name=\"submit\" class=\" ml-4 btn btn-primary\">Add Score</button>
        </form>
    </div>
</div>
<br/>
<div class=\"row\">
    <table class=\"table\">
        <thead>

        <tr>
            <th class=\"\">#</th>
            <th class=\"col\">user</th>
            <th class=\"col\">game</th>
            <th class=\"col\">score</th>
            <th class=\"col\"></th>

        </tr>
        </thead>
        <tbody>
        {% for score in scores %}
            <tr>
                <td>{{ score.id }}</td>
                <td>{{ score.player.username }}</td>
                <td>{{ score.game.username }}</td>
                <td>{{ score.score }}</td>
                <td>
                    <a href=\"/score/delete?id={{ score.id }}\"
                       onclick=\"return confirm('Are you sure you want to delete it?')\">
                        <i class=\"fas fa-trash\"></i>
                    </a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


</div>
{% endblock %}", "score/index.html.twig", "/Users/digital/Desktop/php-tp2/templates/score/index.html.twig");
    }
}
