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

/* profiles/contrib/openy/modules/custom/advanced_help_block/templates/advanced-help-block-list-render.html.twig */
class __TwigTemplate_b3ad249805c1704a08ced7f5e260970fd3e81441241df86a81457e60f97d37d9 extends \Twig\Template
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
        // line 15
        echo "
";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("advanced_help_block/ahb_modal"), "html", null, true);
        echo "
";
        // line 17
        if (array_key_exists("render_type", $context)) {
            // line 18
            echo "    ";
            if ((array_key_exists("blocks", $context) && (twig_length_filter($this->env, ($context["blocks"] ?? null)) > 0))) {
                // line 19
                echo "        <div id=\"block-help\" role=\"complementary\" class=\"block block-help block-help-block\">
            ";
                // line 20
                if ((($context["render_type"] ?? null) == "block")) {
                    // line 21
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
                    foreach ($context['_seq'] as $context["i"] => $context["block"]) {
                        // line 22
                        echo "                    <div class=\"block-help-item block-help-item-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 22, $this->source), "html", null, true);
                        echo " messages messages--info hidden\" data-block-id=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 22, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 23
                        if (twig_get_attribute($this->env, $this->source, $context["block"], "title", [], "any", true, true, true, 23)) {
                            // line 24
                            echo "                            <strong>";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["block"], "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                            echo "</strong>
                        ";
                        }
                        // line 26
                        echo "                        <a href=\"#\" class=\"help-more\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show more"));
                        echo "</a>
                        <a href=\"#\" class=\"help-close\">×</a>
                        <div class=\"help-content hidden\">
                            ";
                        // line 29
                        if (twig_get_attribute($this->env, $this->source, $context["block"], "description", [], "any", true, true, true, 29)) {
                            // line 30
                            echo "                                ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["block"], "description", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                            echo "
                            ";
                        }
                        // line 32
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["block"], "youtube_link", [], "any", true, true, true, 32)) {
                            // line 33
                            echo "                                <p>";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["block"], "youtube_link", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                            echo "</p>
                            ";
                        }
                        // line 35
                        echo "                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['block'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "            ";
                }
                // line 39
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/openy/modules/custom/advanced_help_block/templates/advanced-help-block-list-render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 39,  108 => 38,  100 => 35,  94 => 33,  91 => 32,  85 => 30,  83 => 29,  76 => 26,  70 => 24,  68 => 23,  61 => 22,  56 => 21,  54 => 20,  51 => 19,  48 => 18,  46 => 17,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/openy/modules/custom/advanced_help_block/templates/advanced-help-block-list-render.html.twig", "/home/sboppre/repos/rvymca/docroot/profiles/contrib/openy/modules/custom/advanced_help_block/templates/advanced-help-block-list-render.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "for" => 21);
        static $filters = array("escape" => 16, "length" => 18, "t" => 26);
        static $functions = array("attach_library" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 't'],
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
