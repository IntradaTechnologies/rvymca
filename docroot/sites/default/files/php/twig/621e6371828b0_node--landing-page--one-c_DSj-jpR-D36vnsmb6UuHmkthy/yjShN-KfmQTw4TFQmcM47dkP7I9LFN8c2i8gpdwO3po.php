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

/* @openy_lily/node/include/node--landing-page--one-column.html.twig */
class __TwigTemplate_ce8a6eb52908b619a4ce0be36d234c97ecd2baba06528d39fd1251bbd4d7c7b8 extends \Twig\Template
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
        // line 1
        if ( !twig_test_empty(twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_content", [], "any", false, false, true, 1))))) {
            // line 2
            echo "  <div class=\"container\">
    <div class=\"row\">
      <article";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["header_classes"] ?? null)], "method", false, false, true, 4), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 4), 4, $this->source), "html", null, true);
            echo ">
        <div class=\"main-region col-sm-12\">
          ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_content", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
        </div>
      </article>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@openy_lily/node/include/node--landing-page--one-column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@openy_lily/node/include/node--landing-page--one-column.html.twig", "/home/sboppre/repos/rvymca/docroot/themes/contrib/openy_lily/templates/node/include/node--landing-page--one-column.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("trim" => 1, "render" => 1, "escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['trim', 'render', 'escape'],
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
