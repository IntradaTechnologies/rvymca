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

/* themes/contrib/openy_lily/templates/menu/menu--account.html.twig */
class __TwigTemplate_e4d24e3fc12f1b31f732c7829a7681b9316e7ee65157b9f39bfd438b86415e56 extends \Twig\Template
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
        // line 23
        if (($context["display_search"] ?? null)) {
            // line 24
            echo " <div class=\"search-toggle\"><span class=\"glyphicon glyphicon-search\"></span></div>
";
        }
        // line 26
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        echo "
";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 32, $context, $this->getSourceContext()));
        echo "

";
        // line 35
        echo "
";
    }

    // line 36
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 37
            echo "  ";
            $macros["menus"] = $this;
            // line 38
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 39
                echo "    ";
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => [0 => "nav", 1 => "navbar-nav", 2 => "pull-right-lg"]], "method", false, false, true, 39);
                // line 40
                echo "    <ul";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 40, $this->source), "html", null, true);
                echo ">
    ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    echo "      ";
                    // line 43
                    $context["classes"] = [0 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) ? ("is-active") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "below", [], "any", false, false, true, 45)) ? ("dropdown") : (""))];
                    // line 48
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 48), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 49
                    if ( !twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49)) {
                        // line 50
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 50), 50, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
                        echo "
        ";
                    } else {
                        // line 52
                        echo "          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            ";
                        // line 53
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "
            <b class=\"caret\"></b>
          </a>
          <ul class=\"dropdown-menu\">
            ";
                        // line 57
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["inner_item"]) {
                            // line 58
                            echo "              <li>
                ";
                            // line 59
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["inner_item"], "title", [], "any", false, false, true, 59), 59, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["inner_item"], "url", [], "any", false, false, true, 59), 59, $this->source)), "html", null, true);
                            echo "
              </li>
              ";
                            // line 61
                            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 61)) {
                                // line 62
                                echo "                <li class=\"divider\"></li>
              ";
                            }
                            // line 64
                            echo "            ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inner_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 65
                        echo "          </ul>
        ";
                    }
                    // line 67
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/openy_lily/templates/menu/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 69,  171 => 67,  167 => 65,  153 => 64,  149 => 62,  147 => 61,  142 => 59,  139 => 58,  122 => 57,  115 => 53,  112 => 52,  106 => 50,  104 => 49,  99 => 48,  97 => 45,  96 => 44,  95 => 43,  93 => 42,  89 => 41,  84 => 40,  81 => 39,  78 => 38,  75 => 37,  60 => 36,  55 => 35,  50 => 32,  47 => 27,  45 => 26,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/openy_lily/templates/menu/menu--account.html.twig", "/home/sboppre/repos/rvymca/docroot/themes/contrib/openy_lily/templates/menu/menu--account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "import" => 26, "macro" => 36, "set" => 39, "for" => 41);
        static $filters = array("escape" => 40);
        static $functions = array("link" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'import', 'macro', 'set', 'for'],
                ['escape'],
                ['link']
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
