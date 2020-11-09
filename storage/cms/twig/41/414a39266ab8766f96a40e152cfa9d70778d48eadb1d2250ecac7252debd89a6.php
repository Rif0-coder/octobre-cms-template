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

/* C:\xampp\htdocs\octobre/themes/web-rocket/layouts/default.htm */
class __TwigTemplate_fc5207d9c5671fcbdf5f1e0e89c41b50497a28fa8986d2eabc7358027ea17930 extends \Twig\Template
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
        $tags = array("styles" => 20, "partial" => 26, "page" => 29, "framework" => 42, "scripts" => 43);
        $filters = array("escape" => 6, "theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> 
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_description", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" />
    <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"web-rocket\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon.png");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/normalize.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/transition-animations.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" type=\"text/css\">
    ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-2.1.3.min.js");
        echo "\"></script>
    <script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/modernizr.custom.js");
        echo "\"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("loading"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "    <div id=\"page\" class=\"page\">
      ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "      ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 30
        echo "    </div>
    <!-- Script includes--> 
    <script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/page-transition.js");
        echo "\"></script>
    <script src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.pkgd.min.js");
        echo "\"></script>
    <script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/validator.js");
        echo "\"></script>
    <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.shuffle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/masonry.pkgd.min.js");
        echo "\"></script>
    <script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.hoverdir.js");
        echo "\"></script>
    <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    ";
        // line 42
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 43
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 44
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 44,  203 => 43,  192 => 42,  188 => 41,  184 => 40,  180 => 39,  176 => 38,  172 => 37,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 30,  145 => 29,  141 => 28,  138 => 27,  134 => 26,  127 => 22,  122 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  78 => 9,  74 => 8,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> 
    <title>{{ this.page.title }}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\" />
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"web-rocket\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png' | theme }}\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/icon.png' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/normalize.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/transition-animations.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css' | theme  }}\" type=\"text/css\">
    {% styles %}
    <script src=\"{{ 'assets/js/jquery-2.1.3.min.js' | theme}}\"></script>
    <script src=\"{{ 'assets/js/modernizr.custom.js' | theme}}\"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    {% partial 'loading' %}
    <div id=\"page\" class=\"page\">
      {% partial 'header' %}
      {% page %}
    </div>
    <!-- Script includes--> 
    <script src=\"{{ 'assets/js/bootstrap.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/page-transition.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/imagesloaded.pkgd.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/validator.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.shuffle.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/masonry.pkgd.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/owl.carousel.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.magnific-popup.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.hoverdir.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js' | theme }}\"></script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/layouts/default.htm", "");
    }
}
