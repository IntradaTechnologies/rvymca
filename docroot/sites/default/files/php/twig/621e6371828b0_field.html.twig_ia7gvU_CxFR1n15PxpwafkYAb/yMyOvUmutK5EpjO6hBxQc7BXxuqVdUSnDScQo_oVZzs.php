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

/* themes/contrib/openy_lily/templates/field/field.html.twig */
class __TwigTemplate_e8d1805468e632319376d3b457d9409cab773b8cc31bff9ff376ee1c764c2759 extends \Twig\Template
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
        // line 41
        echo "
";
        // line 42
        if (($context["label_hidden"] ?? null)) {
            // line 43
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 44
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_tag"] ?? null), 44, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ("wrapper-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 44, $this->source)))], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                echo ">
      ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 46, $this->source))], "method", false, false, true, 46), "removeClass", [0 => ("wrapper-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 46, $this->source)))], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "</div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "    </";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_tag"] ?? null), 48, $this->source), "html", null, true);
                echo ">
  ";
            } else {
                // line 50
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 51
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 51, $this->source))], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "  ";
            }
        } else {
            // line 55
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_tag"] ?? null), 55, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ("wrapper-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 55, $this->source)))], "method", false, false, true, 55), 55, $this->source), "html", null, true);
            echo ">
    <div";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ("label-for-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 56, $this->source)))], "method", false, false, true, 56), 56, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 56, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 57
            if (($context["multiple"] ?? null)) {
                // line 58
                echo "    <div>
      ";
            }
            // line 60
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 61, $this->source))], "method", false, false, true, 61), "removeClass", [0 => ("wrapper-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null), 61, $this->source)))], "method", false, false, true, 61), 61, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      ";
            if (($context["multiple"] ?? null)) {
                // line 64
                echo "    </div>
    ";
            }
            // line 66
            echo "  </";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_tag"] ?? null), 66, $this->source), "html", null, true);
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/openy_lily/templates/field/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 66,  133 => 64,  130 => 63,  119 => 61,  114 => 60,  110 => 58,  108 => 57,  102 => 56,  95 => 55,  91 => 53,  80 => 51,  75 => 50,  69 => 48,  58 => 46,  54 => 45,  47 => 44,  44 => 43,  42 => 42,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/openy_lily/templates/field/field.html.twig", "/home/sboppre/repos/rvymca/docroot/themes/contrib/openy_lily/templates/field/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42, "for" => 45);
        static $filters = array("escape" => 44, "clean_class" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'clean_class'],
                []
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
