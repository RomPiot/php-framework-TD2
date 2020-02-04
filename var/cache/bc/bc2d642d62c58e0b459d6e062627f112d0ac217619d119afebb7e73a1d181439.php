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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
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
    <?php foreach (\$games as \$game): ?>
        <tr>
            <td><?= \$game->getId(); ?></td>
            <td>
                <img class=\"img-thumbnail\" style=\"max-width: 64px;\" src=\"<?= \$game->getImage(); ?>\"/>
                <?= \$game->getName(); ?></td>
            <td>
                <a href=\"/game/show?id=<?= \$game->getId(); ?>\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"/game/edit?id=<?= \$game->getId(); ?>\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <a href=\"/game/delete?id=<?= \$game->getId(); ?>\" onclick=\"return confirm('Are you sure you want to delete it?')\">
                    <i class=\"fas fa-trash\"></i>
                </a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "game/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Games</h1>
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
    <?php foreach (\$games as \$game): ?>
        <tr>
            <td><?= \$game->getId(); ?></td>
            <td>
                <img class=\"img-thumbnail\" style=\"max-width: 64px;\" src=\"<?= \$game->getImage(); ?>\"/>
                <?= \$game->getName(); ?></td>
            <td>
                <a href=\"/game/show?id=<?= \$game->getId(); ?>\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"/game/edit?id=<?= \$game->getId(); ?>\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <a href=\"/game/delete?id=<?= \$game->getId(); ?>\" onclick=\"return confirm('Are you sure you want to delete it?')\">
                    <i class=\"fas fa-trash\"></i>
                </a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
", "game/index.html.twig", "/Users/digital/Desktop/php-tp2/templates/game/index.html.twig");
    }
}
