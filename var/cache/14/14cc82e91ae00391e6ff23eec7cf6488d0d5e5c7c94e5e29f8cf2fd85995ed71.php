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

/* game/show.html.twig */
class __TwigTemplate_6932867e8a910958a35b44fb3afa6f33b0bcbf641771d455ea8fff4e1099b287 extends Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        <img class=\"img-responsive\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "image", [], "any", false, false, false, 3), "html", null, true);
        echo "\"/>
    </div>
    <div class=\"col-md-8\">
        <h1><";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "game/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-4\">
        <img class=\"img-responsive\" src=\"{{ game.image }}\"/>
    </div>
    <div class=\"col-md-8\">
        <h1><{{ game.name }}</h1>

        </table>
    </div>
</div>
", "game/show.html.twig", "/Users/digital/Desktop/php-tp2/templates/game/show.html.twig");
    }
}
