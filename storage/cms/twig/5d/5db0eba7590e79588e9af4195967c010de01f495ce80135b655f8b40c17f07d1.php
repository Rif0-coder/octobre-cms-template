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

/* C:\xampp\htdocs\octobre/themes/web-rocket/partials/home.htm */
class __TwigTemplate_7c79d7992ae889f3cd7c50fa6b1a9eedd84d9f5f6723187ddce788520e191d6e extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<!-- Home Subpage -->
<section class=\"pt-page  section-with-bg section-paddings-0\"
    style=\"background-image: url(https://i.gifer.com/24Br.gif);\">
    <div class=\"home-page-block-bg\">
        <div class=\"mask\"></div>
    </div>
    <div class=\"home-page-block\">
        <div class=\"v-align\">
            <h2>web-rocket.by</h2>
            <div id=\"rotate\" class=\"text-rotate\">
                <div>
                    <p class=\"home-page-description\">Создание и сопровождение сайтов на Modx</p>
                </div>
                <div>
                    <p class=\"home-page-description\">SEO</p>
                </div>
            </div>

            <div class=\"block end\" style=\"text-align: center;\">
                <ul class=\"info-list\">
                    <li><span class=\"title\">E-mail</span><span class=\"value\"><a href=\"mailto:admin@web-rocket.by\">admin@web-rocket.by</a></span></li>
                    <li><span class=\"title\">Velcom</span><span class=\"value\">+ 375 (29) 33 25 681</span></li>
                    <li><span class=\"title\">Life</span><span class=\"value\">+ 375 (25) 77 96 366</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of Home Subpage -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Home Subpage -->
<section class=\"pt-page  section-with-bg section-paddings-0\"
    style=\"background-image: url(https://i.gifer.com/24Br.gif);\">
    <div class=\"home-page-block-bg\">
        <div class=\"mask\"></div>
    </div>
    <div class=\"home-page-block\">
        <div class=\"v-align\">
            <h2>web-rocket.by</h2>
            <div id=\"rotate\" class=\"text-rotate\">
                <div>
                    <p class=\"home-page-description\">Создание и сопровождение сайтов на Modx</p>
                </div>
                <div>
                    <p class=\"home-page-description\">SEO</p>
                </div>
            </div>

            <div class=\"block end\" style=\"text-align: center;\">
                <ul class=\"info-list\">
                    <li><span class=\"title\">E-mail</span><span class=\"value\"><a href=\"mailto:admin@web-rocket.by\">admin@web-rocket.by</a></span></li>
                    <li><span class=\"title\">Velcom</span><span class=\"value\">+ 375 (29) 33 25 681</span></li>
                    <li><span class=\"title\">Life</span><span class=\"value\">+ 375 (25) 77 96 366</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of Home Subpage -->", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/home.htm", "");
    }
}
