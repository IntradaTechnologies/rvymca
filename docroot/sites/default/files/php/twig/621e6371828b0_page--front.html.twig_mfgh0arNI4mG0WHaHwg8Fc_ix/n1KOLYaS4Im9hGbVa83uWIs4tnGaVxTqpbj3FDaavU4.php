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

/* themes/contrib/openy_lily/templates/page/page--front.html.twig */
class __TwigTemplate_178c190b0ef7dfb7b0358c5b5aaafd59d257a15263896bc614c9807370c58a94 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'home_heading' => [$this, 'block_home_heading'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@openy_lily/page/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@openy_lily/page/page.html.twig", "themes/contrib/openy_lily/templates/page/page--front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_home_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <section class=\"masthead\">
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-lg-7 col-sm-7\">
          <a class=\"masthead-brand\" href=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 8, $this->source), "html", null, true);
        echo "</a>
        </div>
        <div class=\"col-lg-1 col-sm-1 col-xs-12\">
          ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_phone"] ?? null), 11, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"col-lg-4 col-sm-4 location-search-column\">
          <form class=\"find-locations\" action=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["locations_path"] ?? null), 14, $this->source), "html", null, true);
        echo "\">
            <div class=\"form-group location-search\">
              <div class=\"col-xs-12 control-label text-center location-search-collapse in collapse\">
                <a href=\"#\" data-target=\".location-search-collapse\" class=\"btn btn-block btn-info\"
                   data-toggle=\"collapse\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Find Y and Camp Locations"));
        echo "</a>
              </div>
              <label class=\"sr-only\" for=\"location-search\">
                ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Find Y and Camp Locations"));
        echo "
              </label>
              <div class=\"form-group collapse location-search-collapse\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control\" id=\"location-search\" name=\"map_location\"
                         placeholder=\"Enter ZIP Code\">
                      <span class=\"input-group-btn\">
                      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go"));
        echo "</button>
                    </span>
                </div>
              </div>
            </div>
          </form>
          <div class=\"col-xs-12 text-center newsletter-link-wrapper\">
            ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["newsletter_link"] ?? null), 35, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/openy_lily/templates/page/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  95 => 28,  85 => 21,  79 => 18,  72 => 14,  66 => 11,  58 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/openy_lily/templates/page/page--front.html.twig", "/home/sboppre/repos/rvymca/docroot/themes/contrib/openy_lily/templates/page/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 8, "t" => 18);
        static $functions = array("url" => 8);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['url']
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
