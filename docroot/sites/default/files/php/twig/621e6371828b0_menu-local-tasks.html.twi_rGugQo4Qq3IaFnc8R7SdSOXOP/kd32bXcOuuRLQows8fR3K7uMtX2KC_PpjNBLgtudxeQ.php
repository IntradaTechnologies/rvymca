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

/* themes/contrib/openy_lily/templates/menu/menu-local-tasks.html.twig */
class __TwigTemplate_fa0d03232dd3db4ecf9c12286f3cc8d1c91d6d0a4c615f9e71faf7efb93c1610 extends \Twig\Template
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
        // line 18
        echo "<div class=\"row\">
  <div class=\"container\">
    ";
        // line 20
        if (($context["primary"] ?? null)) {
            // line 21
            echo "      <h5 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            echo "</h5>
      <ul class=\"tabs--primary nav nav-tabs\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 22, $this->source), "html", null, true);
            echo "</ul>
    ";
        }
        // line 24
        echo "    ";
        if (($context["secondary"] ?? null)) {
            // line 25
            echo "      <h5 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h5>
      <ul class=\"tabs--secondary pagination pagination-sm\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null), 26, $this->source), "html", null, true);
            echo "</ul>
    ";
        }
        // line 28
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/openy_lily/templates/menu/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  63 => 26,  58 => 25,  55 => 24,  50 => 22,  45 => 21,  43 => 20,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/openy_lily/templates/menu/menu-local-tasks.html.twig", "/home/sboppre/repos/rvymca/docroot/themes/contrib/openy_lily/templates/menu/menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array("t" => 21, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
