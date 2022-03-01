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

/* themes/contrib/openy_lily/templates/node/node--landing-page--full.html.twig */
class __TwigTemplate_439661723ed9f5e0034ce3b3d7b448f38d604c4d1f948be1869deab9695df4c5 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        $context["header_classes"] = [0 => "landing-header", 1 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "field_lp_layout", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), 72, $this->source))];
        // line 76
        $context["header_content_classes"] = [0 => "content"];
        // line 79
        $context["content_classes"] = [0 => "landing-content", 1 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "field_lp_layout", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81), 81, $this->source))];
        // line 85
        $context["sidebar_classes"] = [0 => "landing-sidebar"];
        // line 89
        echo "
";
        // line 90
        if ( !twig_test_empty(twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_header_content", [], "any", false, false, true, 90))))) {
            // line 91
            echo "  <article";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["header_classes"] ?? null)], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            echo ">
    <div";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["header_content_classes"] ?? null)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
            echo ">
      <div class=\"main\">
        ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_header_content", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </article>
";
        }
        // line 99
        echo "
";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_lp_layout", [], "any", false, false, true, 101), "value", [], "any", false, false, true, 101) == "one_column")) {
            // line 102
            echo "  ";
            $this->loadTemplate("@openy_lily/node/include/node--landing-page--one-column.html.twig", "themes/contrib/openy_lily/templates/node/node--landing-page--full.html.twig", 102)->display($context);
        }
        // line 104
        echo "
";
        // line 106
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_lp_layout", [], "any", false, false, true, 106), "value", [], "any", false, false, true, 106) == "one_column_clean")) {
            // line 107
            echo "  ";
            $this->loadTemplate("@openy_lily/node/include/node--landing-page--one-column-full.html.twig", "themes/contrib/openy_lily/templates/node/node--landing-page--full.html.twig", 107)->display($context);
        }
        // line 109
        echo "
";
        // line 111
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_lp_layout", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111) == "two_column") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_lp_layout", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111) == "two_column_fixed"))) {
            // line 112
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_lp_layout", [], "any", false, false, true, 112), "value", [], "any", false, false, true, 112) == "two_column_fixed")) {
                // line 113
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("openy_lily/landing"), "html", null, true);
                echo "
  ";
            }
            // line 115
            echo "  ";
            $this->loadTemplate("@openy_lily/node/include/node--landing-page--two-columns.html.twig", "themes/contrib/openy_lily/templates/node/node--landing-page--full.html.twig", 115)->display($context);
        }
        // line 117
        echo "
";
        // line 119
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_lp_layout", [], "any", false, false, true, 119), "value", [], "any", false, false, true, 119) == "two_column_left")) {
            // line 120
            echo "  ";
            $this->loadTemplate("@openy_lily/node/include/node--landing-page--two-columns-left.html.twig", "themes/contrib/openy_lily/templates/node/node--landing-page--full.html.twig", 120)->display($context);
        }
        // line 122
        echo "
";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_bottom_content", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/openy_lily/templates/node/node--landing-page--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 123,  117 => 122,  113 => 120,  111 => 119,  108 => 117,  104 => 115,  98 => 113,  95 => 112,  93 => 111,  90 => 109,  86 => 107,  84 => 106,  81 => 104,  77 => 102,  75 => 101,  72 => 99,  64 => 94,  59 => 92,  54 => 91,  52 => 90,  49 => 89,  47 => 85,  45 => 81,  44 => 79,  42 => 76,  40 => 72,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/openy_lily/templates/node/node--landing-page--full.html.twig", "/home/sboppre/repos/rvymca/docroot/themes/contrib/openy_lily/templates/node/node--landing-page--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 90, "include" => 102);
        static $filters = array("clean_class" => 72, "trim" => 90, "render" => 90, "escape" => 91);
        static $functions = array("attach_library" => 113);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'trim', 'render', 'escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
