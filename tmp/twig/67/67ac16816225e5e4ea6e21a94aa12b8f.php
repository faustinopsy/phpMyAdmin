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

/* database/events/row.twig */
class __TwigTemplate_9b0fb531efd8047f579a0f7dc1340d12 extends Template
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
        echo "<tr";
        if ( !twig_test_empty(($context["row_class"] ?? null))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["row_class"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
  </td>
  <td>
    <span class='drop_sql hide'>";
        // line 6
        echo twig_escape_filter($this->env, ($context["sql_drop"] ?? null), "html", null, true);
        echo "</span>
    <strong>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong>
  </td>
  <td>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "status", [], "any", false, false, false, 10), "html", null, true);
        echo "
  </td>
  <td>
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "type", [], "any", false, false, false, 13), "html", null, true);
        echo "
  </td>
  <td>
    ";
        // line 16
        if (($context["has_privilege"] ?? null)) {
            // line 17
            echo "      <a class=\"ajax edit_anchor\" href=\"";
            echo PhpMyAdmin\Url::getFromRoute("/database/events", ["db" =>             // line 18
($context["db"] ?? null), "table" =>             // line 19
($context["table"] ?? null), "edit_item" => true, "item_name" => twig_get_attribute($this->env, $this->source,             // line 21
($context["event"] ?? null), "name", [], "any", false, false, false, 21)]);
            // line 22
            echo "\">
        ";
            // line 23
            echo PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
            echo "
      </a>
    ";
        } else {
            // line 26
            echo "      ";
            echo PhpMyAdmin\Html\Generator::getIcon("bd_edit", _gettext("Edit"));
            echo "
    ";
        }
        // line 28
        echo "  </td>
  <td>
    <a class=\"ajax export_anchor\" href=\"";
        // line 30
        echo PhpMyAdmin\Url::getFromRoute("/database/events", ["db" =>         // line 31
($context["db"] ?? null), "table" =>         // line 32
($context["table"] ?? null), "export_item" => true, "item_name" => twig_get_attribute($this->env, $this->source,         // line 34
($context["event"] ?? null), "name", [], "any", false, false, false, 34)]);
        // line 35
        echo "\">
      ";
        // line 36
        echo PhpMyAdmin\Html\Generator::getIcon("b_export", _gettext("Export"));
        echo "
    </a>
  </td>
  <td>
    ";
        // line 40
        if (($context["has_privilege"] ?? null)) {
            // line 41
            echo "      ";
            echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>             // line 44
($context["db"] ?? null), "table" =>             // line 45
($context["table"] ?? null), "sql_query" =>             // line 46
($context["sql_drop"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/database/events", ["db" =>             // line 47
($context["db"] ?? null)])], PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop")), ["class" => "ajax drop_anchor"]);
            // line 51
            echo "
    ";
        } else {
            // line 53
            echo "      ";
            echo PhpMyAdmin\Html\Generator::getIcon("bd_drop", _gettext("Drop"));
            echo "
    ";
        }
        // line 55
        echo "  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "database/events/row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 55,  130 => 53,  126 => 51,  124 => 47,  123 => 46,  122 => 45,  121 => 44,  119 => 41,  117 => 40,  110 => 36,  107 => 35,  105 => 34,  104 => 32,  103 => 31,  102 => 30,  98 => 28,  92 => 26,  86 => 23,  83 => 22,  81 => 21,  80 => 19,  79 => 18,  77 => 17,  75 => 16,  69 => 13,  63 => 10,  57 => 7,  53 => 6,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/events/row.twig", "C:\\Users\\DELL\\Downloads\\phpMyAdmin-5.2.1-all-languages\\templates\\database\\events\\row.twig");
    }
}
