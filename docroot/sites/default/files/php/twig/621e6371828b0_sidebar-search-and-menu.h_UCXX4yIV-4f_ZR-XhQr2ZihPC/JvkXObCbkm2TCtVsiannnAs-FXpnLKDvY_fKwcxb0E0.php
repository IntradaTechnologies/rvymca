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

/* @openy_lily/include/sidebar-search-and-menu.html.twig */
class __TwigTemplate_f14b5c5fbebbe974935d7d84ef76449003617d18e445c9281d0cb2a08afd62cd extends \Twig\Template
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
        // line 7
        echo "
<div id=\"search-box\" class=\"hidden-xs\">
  <form method=\"get\" action=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_view_content_path"] ?? null), 9, $this->source), "html", null, true);
        echo "\">
    <div class=\"form-group col-xs-12\">
      <div class=\"input-group\">
        <input type=\"text\" name=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_key"] ?? null), 12, $this->source), "html", null, true);
        echo "\" class=\"form-control\">
        <span class=\"input-group-btn\">
          <button class=\"btn btn-info\" aria-label=\"Search submit\" type=\"submit\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("SEARCH THE Y"));
        echo "</button>
        </span>
      </div>
    </div>
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "@openy_lily/include/sidebar-search-and-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  49 => 12,  43 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@openy_lily/include/sidebar-search-and-menu.html.twig", "/home/sboppre/repos/rvymca/docroot/themes/contrib/openy_lily/templates/include/sidebar-search-and-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9, "t" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
