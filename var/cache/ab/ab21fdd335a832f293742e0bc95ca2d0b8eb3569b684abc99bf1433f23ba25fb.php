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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>Last Scores</h1>
<div class=\"row\">
    <div class=\"col\">
        <form class=\"form-inline\" action=\"score/add\">
            <label class=\"sr-only\" for=\"game\">Game</label>
            <select class=\"custom-select mr-sm-3\" id=\"game\" name=\"game\" required>
                <option disabled selected>game</option>
                <?php foreach (\$games as \$game): ?>
                    <option value=\"<?= \$game->getId(); ?>\"><?= \$game->getName(); ?></option>
                <?php endforeach; ?>
            </select>
            <label class=\"sr-only\" for=\"player\">Player</label>
            <select class=\"custom-select mr-sm-3\" id=\"player\" name=\"player\" required>
                <option disabled selected>player</option>
                <?php foreach (\$players as \$player): ?>
                    <option value=\"<?= \$player->getId(); ?>\"><?= \$player->getUsername(); ?></option>
                <?php endforeach; ?>
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
        <?php foreach (\$scores as \$score): ?>
            <tr>
                <td><?= \$score->getId(); ?></td>
                <td><?= \$score->getPlayer()->getUsername(); ?></td>
                <td><?= \$score->getGame()->getName(); ?></td>
                <td> <?= \$score->getScore(); ?></td>
                <td>
                    <a href=\"/score/delete?id=<?= \$score->getId(); ?>\"
                       onclick=\"return confirm('Are you sure you want to delete it?')\">
                        <i class=\"fas fa-trash\"></i>
                    </a>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>";
    }

    public function getTemplateName()
    {
        return "score/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Last Scores</h1>
<div class=\"row\">
    <div class=\"col\">
        <form class=\"form-inline\" action=\"score/add\">
            <label class=\"sr-only\" for=\"game\">Game</label>
            <select class=\"custom-select mr-sm-3\" id=\"game\" name=\"game\" required>
                <option disabled selected>game</option>
                <?php foreach (\$games as \$game): ?>
                    <option value=\"<?= \$game->getId(); ?>\"><?= \$game->getName(); ?></option>
                <?php endforeach; ?>
            </select>
            <label class=\"sr-only\" for=\"player\">Player</label>
            <select class=\"custom-select mr-sm-3\" id=\"player\" name=\"player\" required>
                <option disabled selected>player</option>
                <?php foreach (\$players as \$player): ?>
                    <option value=\"<?= \$player->getId(); ?>\"><?= \$player->getUsername(); ?></option>
                <?php endforeach; ?>
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
        <?php foreach (\$scores as \$score): ?>
            <tr>
                <td><?= \$score->getId(); ?></td>
                <td><?= \$score->getPlayer()->getUsername(); ?></td>
                <td><?= \$score->getGame()->getName(); ?></td>
                <td> <?= \$score->getScore(); ?></td>
                <td>
                    <a href=\"/score/delete?id=<?= \$score->getId(); ?>\"
                       onclick=\"return confirm('Are you sure you want to delete it?')\">
                        <i class=\"fas fa-trash\"></i>
                    </a>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>", "score/index.html.twig", "/Users/digital/Desktop/php-tp2/templates/score/index.html.twig");
    }
}
