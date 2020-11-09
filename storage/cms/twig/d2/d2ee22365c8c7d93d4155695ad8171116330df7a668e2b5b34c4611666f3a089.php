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

/* C:\xampp\htdocs\octobre/themes/web-rocket/partials/header.htm */
class __TwigTemplate_2aa6141d402f7f93c60ce5fc430b38e038d7acc3df56611ccf3e9bb7b32af103 extends \Twig\Template
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
        $tags = array("for" => 16);
        $filters = array("theme" => 3, "escape" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['theme', 'escape'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header id=\"site_header\" class=\"header mobile-menu-hide\">
  <div class=\"my-photo\">
    <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/my_photo.png");
        echo "\" alt=\"image\">
    <div class=\"mask\"></div>
  </div>

  <div class=\"site-title-block\">
    <h1 class=\"site-title\">web-rocket.by</h1>
    <p class=\"site-description\">Создание и сопровождение сайтов на Modx</p>
  </div>

  <!-- Navigation & Social buttons -->
  <div class=\"site-nav\">
    <!-- Main menu -->
    <ul id=\"nav\" class=\"site-main-menu\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "        <li class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 17)) ? ("active") : (""));
            echo "\"><a class=\"pt-trigger\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" data-animation=\"58\" data-goto=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
    <!-- /Main menu -->

    <!-- Social buttons -->
    <ul class=\"social-links\">
      <li><a class=\"tip social-button\" href=\"#\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
      <li><a class=\"tip social-button\" href=\"#\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
      <li><a class=\"tip social-button\" href=\"#\" title=\"Google Plus\"><i class=\"fa fa-google-plus\"></i></a></li>
      <!--<li><a class=\"tip social-button\" href=\"#\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>-->
      <!--<li><a class=\"tip social-button\" href=\"#\" title=\"last.fm\"><i class=\"fa fa-lastfm\"></i></a></li>-->
      <!--<li><a class=\"tip social-button\" href=\"#\" title=\"Dribbble\"><i class=\"fa fa-dribbble\"></i></a></li>-->
    </ul>
    <!-- /Social buttons -->
  </div>
  <!-- Navigation & Social buttons -->
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  86 => 17,  82 => 16,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"site_header\" class=\"header mobile-menu-hide\">
  <div class=\"my-photo\">
    <img src=\"{{ 'assets/images/my_photo.png' | theme }}\" alt=\"image\">
    <div class=\"mask\"></div>
  </div>

  <div class=\"site-title-block\">
    <h1 class=\"site-title\">web-rocket.by</h1>
    <p class=\"site-description\">Создание и сопровождение сайтов на Modx</p>
  </div>

  <!-- Navigation & Social buttons -->
  <div class=\"site-nav\">
    <!-- Main menu -->
    <ul id=\"nav\" class=\"site-main-menu\">
      {% for item in staticMenu.menuItems %}
        <li class=\"{{ item.isActive ? 'active' }}\"><a class=\"pt-trigger\" href=\"{{ item.url }}\" data-animation=\"58\" data-goto=\"{{ item.code }}\">{{ item.title }}</a></li>
      {% endfor %}
    </ul>
    <!-- /Main menu -->

    <!-- Social buttons -->
    <ul class=\"social-links\">
      <li><a class=\"tip social-button\" href=\"#\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
      <li><a class=\"tip social-button\" href=\"#\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
      <li><a class=\"tip social-button\" href=\"#\" title=\"Google Plus\"><i class=\"fa fa-google-plus\"></i></a></li>
      <!--<li><a class=\"tip social-button\" href=\"#\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>-->
      <!--<li><a class=\"tip social-button\" href=\"#\" title=\"last.fm\"><i class=\"fa fa-lastfm\"></i></a></li>-->
      <!--<li><a class=\"tip social-button\" href=\"#\" title=\"Dribbble\"><i class=\"fa fa-dribbble\"></i></a></li>-->
    </ul>
    <!-- /Social buttons -->
  </div>
  <!-- Navigation & Social buttons -->
</header>", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/header.htm", "");
    }
}
