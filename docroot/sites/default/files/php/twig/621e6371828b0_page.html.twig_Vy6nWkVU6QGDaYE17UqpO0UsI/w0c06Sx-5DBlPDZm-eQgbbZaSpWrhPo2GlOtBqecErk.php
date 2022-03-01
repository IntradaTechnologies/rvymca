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

/* @openy_lily/page/page.html.twig */
class __TwigTemplate_61cf8c216d7ed2756f5c7220f914acacbe1481aad1bc8c7224659882abebd04d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'mobile_menu' => [$this, 'block_mobile_menu'],
            'page_logo' => [$this, 'block_page_logo'],
            'home_heading' => [$this, 'block_home_heading'],
            'primary_menu' => [$this, 'block_primary_menu'],
            'pageheader' => [$this, 'block_pageheader'],
            'pagebreadcrumb' => [$this, 'block_pagebreadcrumb'],
            'pagecontent' => [$this, 'block_pagecontent'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<div class=\"layout-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_class"] ?? null), 59, $this->source), "html", null, true);
        echo "\">

  ";
        // line 61
        $this->loadTemplate("@openy_lily/include/sidebar-search-and-menu.html.twig", "@openy_lily/page/page.html.twig", 61)->display($context);
        // line 62
        echo "  <div id=\"side-area\" aria-hidden=\"true\">
    <div class=\"top-side\">
      ";
        // line 64
        if (($context["display_search"] ?? null)) {
            // line 65
            echo "        <form class=\"clearfix\" method=\"get\" action=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_view_content_path"] ?? null), 65, $this->source), "html", null, true);
            echo "\">
          <div class=\"form-group\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_key"] ?? null), 68, $this->source), "html", null, true);
            echo "\" class=\"form-control\">
              <span class=\"input-group-btn\">
              <button class=\"btn btn-info\" type=\"submit\">";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("SEARCH"));
            echo "</button>
            </span>
            </div>
          </div>
        </form>
      ";
        }
        // line 76
        echo "    </div>
    ";
        // line 77
        $this->displayBlock('mobile_menu', $context, $blocks);
        // line 80
        echo "  </div>";
        // line 81
        echo "
  <div class=\"viewport\">
    <header id=\"page-head\" class=\"page-head\">
      <div class=\"top-navs\">
        <nav class=\"nav-global navbar-default navbar\">
          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <button class=\"navbar-toggler\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"sr-only\">";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle Menu"));
        echo "</span>
              </button>
              ";
        // line 94
        $this->displayBlock('page_logo', $context, $blocks);
        // line 103
        echo "            </div>
            ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
          </div>
        </nav>

        ";
        // line 108
        if (($context["is_front"] ?? null)) {
            // line 109
            echo "          ";
            $this->displayBlock('home_heading', $context, $blocks);
            // line 110
            echo "        ";
        }
        // line 111
        echo "
        ";
        // line 112
        $this->displayBlock('primary_menu', $context, $blocks);
        // line 119
        echo "      </div>
    </header>";
        // line 121
        echo "
    ";
        // line 122
        $this->displayBlock('pageheader', $context, $blocks);
        // line 125
        echo "
    ";
        // line 126
        $this->displayBlock('pagebreadcrumb', $context, $blocks);
        // line 133
        echo "
    ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "

    <main id=\"main\" role=\"main\" class=\"page-middle\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 138
        echo "
      <div class=\"layout-content\">
        ";
        // line 140
        $this->displayBlock('pagecontent', $context, $blocks);
        // line 143
        echo "      </div>";
        // line 144
        echo "    </main>";
        // line 145
        echo "
    <div class=\"pre-footer\">
      ";
        // line 147
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_footer", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
        echo "
    </div>";
        // line 149
        echo "
    <footer id=\"page-footer\" class=\"page-footer text-center footer-themes-b\">
      <div class=\"container\">
        ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 152)) {
            // line 153
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 155
        echo "        <div class=\"col-sm-12 social-disclaimer\">
          ";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_social", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </footer>";
        // line 160
        echo "
    <div class=\"text-center return-to-top\" data-spy=\"affix\" data-offset-top=\"52\">
      <a href=\"#main-content\" title=\"";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Scroll to top"));
        echo "\" class=\"btn btn-default\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Scroll to top"));
        echo "\">
        <span class=\"glyphicon glyphicon-chevron-up\"></span>
      </a>
    </div>";
        // line 166
        echo "  </div>";
        // line 167
        echo "
</div>";
    }

    // line 77
    public function block_mobile_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 94
    public function block_page_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "                ";
        if (((($context["page_class"] ?? null) == "is-camp") &&  !twig_test_empty(($context["camp_section_image"] ?? null)))) {
            // line 96
            echo "                  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 96, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("YMCA Twin Cities"));
            echo "\" rel=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("YMCA Twin Cities"));
            echo "\">
                    <img src=\"";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["camp_section_image"] ?? null), 97, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("YMCA Twin Cities"));
            echo "\">
                  </a>
                ";
        } else {
            // line 100
            echo "                  <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 100, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("OpenY"));
            echo "\" rel=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("OpenY"));
            echo "\"></a>
                ";
        }
        // line 102
        echo "              ";
    }

    // line 109
    public function block_home_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 112
    public function block_primary_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "          <div class=\"nav-wrapper\">
            <div class=\"main-nav\" data-spy=\"affix\" data-offset-top=\"10\">
              ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
            </div>
          </div>
        ";
    }

    // line 122
    public function block_pageheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 126
    public function block_pagebreadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "      <div class=\"row breadcrumb-container hidden-xs\">
      <div class=\"container-fluid\">
        ";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "
      </div>
      </div>";
        // line 132
        echo "    ";
    }

    // line 140
    public function block_pagecontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@openy_lily/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 141,  311 => 140,  307 => 132,  302 => 129,  298 => 127,  294 => 126,  287 => 123,  283 => 122,  275 => 115,  271 => 113,  267 => 112,  261 => 109,  257 => 102,  247 => 100,  239 => 97,  230 => 96,  227 => 95,  223 => 94,  216 => 78,  212 => 77,  207 => 167,  205 => 166,  197 => 162,  193 => 160,  187 => 156,  184 => 155,  178 => 153,  176 => 152,  171 => 149,  167 => 147,  163 => 145,  161 => 144,  159 => 143,  157 => 140,  153 => 138,  147 => 134,  144 => 133,  142 => 126,  139 => 125,  137 => 122,  134 => 121,  131 => 119,  129 => 112,  126 => 111,  123 => 110,  120 => 109,  118 => 108,  111 => 104,  108 => 103,  106 => 94,  101 => 92,  88 => 81,  86 => 80,  84 => 77,  81 => 76,  72 => 70,  67 => 68,  60 => 65,  58 => 64,  54 => 62,  52 => 61,  46 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "@openy_lily/page/page.html.twig", "/home/sboppre/repos/rvymca/docroot/themes/contrib/openy_lily/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 61, "if" => 64, "block" => 77);
        static $filters = array("escape" => 59, "t" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'block'],
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
