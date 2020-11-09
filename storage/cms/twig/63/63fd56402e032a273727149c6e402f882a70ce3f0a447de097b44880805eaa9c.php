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

/* C:\xampp\htdocs\octobre/themes/web-rocket/partials/portfolio.htm */
class __TwigTemplate_df0bc7d5257493886359d459af529e8ece339e598307a7283e9f6111032dd00c extends \Twig\Template
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
        echo "<!-- Portfolio Subpage -->
<section class=\"pt-page pt-page-3\" data-id=\"portfolio\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">Portfolio</h2>
    <h5 class=\"section-description\">My Best Works</h5>
  </div>

  <!-- Portfolio Content -->
  <div class=\"portfolio-content\">
    <!-- Portfolio filter -->
    <ul id=\"portfolio_filters\" class=\"portfolio-filters\">
      <li class=\"active\">
        <a class=\"filter btn btn-sm btn-link active\" data-group=\"all\">All</a>
      </li>
      <li>
        <a class=\"filter btn btn-sm btn-link\" data-group=\"media\">Media</a>
      </li>
      <li>
        <a class=\"filter btn btn-sm btn-link\" data-group=\"illustration\">
          Illustration
        </a>
      </li>
      <li>
        <a class=\"filter btn btn-sm btn-link\" data-group=\"video\">Video</a>
      </li>
    </ul>
    <!-- End of Portfolio filter -->

    <!-- Portfolio Grid -->
    <div
      id=\"portfolio_grid\"
      class=\"portfolio-grid portfolio-masonry masonry-grid-3\"
    >
      <!-- Portfolio Item 1 -->
      <figure class=\"item\" data-groups='[\"all\", \"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/1.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 1 -->

      <!-- Portfolio Item 2 -->
      <figure class=\"item\" data-groups='[\"all\", \"video\"]'>
        <a
          href=\"https://player.vimeo.com/video/97102654?autoplay=1\"
          title=\"Praesent Dolor Ex\"
          class=\"lightbox mfp-iframe\"
        >
          <img src=\"images/portfolio/2.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Video</small>
            <i class=\"fa fa-video-camera\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 2 -->

      <!-- Portfolio Item 3 -->
      <figure class=\"item\" data-groups='[\"all\",\"illustration\"]'>
        <a
          href=\"images/portfolio/3.jpg\"
          class=\"lightbox\"
          title=\"Duis Eu Eros Viverra\"
        >
          <img src=\"images/portfolio/3.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Illustration</small>
            <i class=\"fa fa-image\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 3 -->

      <!-- Portfolio Item 4 -->
      <figure class=\"item\" data-groups='[\"all\", \"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/4.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 4 -->

      <!-- Portfolio Item 5 -->
      <figure class=\"item\" data-groups='[\"all\", \"illustration\"]'>
        <a
          href=\"images/portfolio/5.jpg\"
          class=\"lightbox\"
          title=\"Aliquam Condimentum Magna Rhoncus\"
        >
          <img src=\"images/portfolio/5.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Illustration</small>
            <i class=\"fa fa-image\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 5 -->

      <!-- Portfolio Item 6 -->
      <figure class=\"item\" data-groups='[\"all\", \"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/6.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 6 -->

      <!-- Portfolio Item 7 -->
      <figure class=\"item\" data-groups='[\"all\", \"video\"]'>
        <a
          href=\"https://player.vimeo.com/video/97102654?autoplay=1\"
          title=\"Nulla Facilisi\"
          class=\"lightbox mfp-iframe\"
        >
          <img src=\"images/portfolio/7.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Video</small>
            <i class=\"fa fa-video-camera\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 7 -->

      <!-- Portfolio Item 8 -->
      <figure class=\"item\" data-groups='[\"all\",  \"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/8.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 8 -->

      <!-- Portfolio Item 9 -->
      <figure class=\"item\" data-groups='[\"all\",\"illustration\"]'>
        <a
          href=\"images/portfolio/9.jpg\"
          class=\"lightbox\"
          title=\"Mauris Neque Dolor\"
        >
          <img src=\"images/portfolio/9.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Illustration</small>
            <i class=\"fa fa-image\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 9 -->

      <!-- Portfolio Item 10 -->
      <figure class=\"item\" data-groups='[\"all\", \"video\"]'>
        <a
          href=\"https://player.vimeo.com/video/97102654?autoplay=1\"
          title=\"Donec Lectus Arcu\"
          class=\"lightbox mfp-iframe\"
        >
          <img src=\"images/portfolio/10.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Video</small>
            <i class=\"fa fa-video-camera\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 10 -->

      <!-- Portfolio Item 11 -->
      <figure class=\"item\" data-groups='[\"all\",\"illustration\"]'>
        <a
          href=\"images/portfolio/11.jpg\"
          class=\"lightbox\"
          title=\"Duis Eu Eros Viverra\"
        >
          <img src=\"images/portfolio/11.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Illustration</small>
            <i class=\"fa fa-image\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 11 -->

      <!-- Portfolio Item 12 -->
      <figure class=\"item\" data-groups='[\"all\",\"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/12.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 12 -->
    </div>
    <!-- /Portfolio Grid -->
  </div>
  <!-- /Portfolio Content -->
</section>
<!-- /Portfolio Subpage -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/portfolio.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Portfolio Subpage -->
<section class=\"pt-page pt-page-3\" data-id=\"portfolio\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">Portfolio</h2>
    <h5 class=\"section-description\">My Best Works</h5>
  </div>

  <!-- Portfolio Content -->
  <div class=\"portfolio-content\">
    <!-- Portfolio filter -->
    <ul id=\"portfolio_filters\" class=\"portfolio-filters\">
      <li class=\"active\">
        <a class=\"filter btn btn-sm btn-link active\" data-group=\"all\">All</a>
      </li>
      <li>
        <a class=\"filter btn btn-sm btn-link\" data-group=\"media\">Media</a>
      </li>
      <li>
        <a class=\"filter btn btn-sm btn-link\" data-group=\"illustration\">
          Illustration
        </a>
      </li>
      <li>
        <a class=\"filter btn btn-sm btn-link\" data-group=\"video\">Video</a>
      </li>
    </ul>
    <!-- End of Portfolio filter -->

    <!-- Portfolio Grid -->
    <div
      id=\"portfolio_grid\"
      class=\"portfolio-grid portfolio-masonry masonry-grid-3\"
    >
      <!-- Portfolio Item 1 -->
      <figure class=\"item\" data-groups='[\"all\", \"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/1.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 1 -->

      <!-- Portfolio Item 2 -->
      <figure class=\"item\" data-groups='[\"all\", \"video\"]'>
        <a
          href=\"https://player.vimeo.com/video/97102654?autoplay=1\"
          title=\"Praesent Dolor Ex\"
          class=\"lightbox mfp-iframe\"
        >
          <img src=\"images/portfolio/2.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Video</small>
            <i class=\"fa fa-video-camera\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 2 -->

      <!-- Portfolio Item 3 -->
      <figure class=\"item\" data-groups='[\"all\",\"illustration\"]'>
        <a
          href=\"images/portfolio/3.jpg\"
          class=\"lightbox\"
          title=\"Duis Eu Eros Viverra\"
        >
          <img src=\"images/portfolio/3.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Illustration</small>
            <i class=\"fa fa-image\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 3 -->

      <!-- Portfolio Item 4 -->
      <figure class=\"item\" data-groups='[\"all\", \"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/4.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 4 -->

      <!-- Portfolio Item 5 -->
      <figure class=\"item\" data-groups='[\"all\", \"illustration\"]'>
        <a
          href=\"images/portfolio/5.jpg\"
          class=\"lightbox\"
          title=\"Aliquam Condimentum Magna Rhoncus\"
        >
          <img src=\"images/portfolio/5.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Illustration</small>
            <i class=\"fa fa-image\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 5 -->

      <!-- Portfolio Item 6 -->
      <figure class=\"item\" data-groups='[\"all\", \"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/6.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 6 -->

      <!-- Portfolio Item 7 -->
      <figure class=\"item\" data-groups='[\"all\", \"video\"]'>
        <a
          href=\"https://player.vimeo.com/video/97102654?autoplay=1\"
          title=\"Nulla Facilisi\"
          class=\"lightbox mfp-iframe\"
        >
          <img src=\"images/portfolio/7.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Video</small>
            <i class=\"fa fa-video-camera\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 7 -->

      <!-- Portfolio Item 8 -->
      <figure class=\"item\" data-groups='[\"all\",  \"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/8.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 8 -->

      <!-- Portfolio Item 9 -->
      <figure class=\"item\" data-groups='[\"all\",\"illustration\"]'>
        <a
          href=\"images/portfolio/9.jpg\"
          class=\"lightbox\"
          title=\"Mauris Neque Dolor\"
        >
          <img src=\"images/portfolio/9.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Illustration</small>
            <i class=\"fa fa-image\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 9 -->

      <!-- Portfolio Item 10 -->
      <figure class=\"item\" data-groups='[\"all\", \"video\"]'>
        <a
          href=\"https://player.vimeo.com/video/97102654?autoplay=1\"
          title=\"Donec Lectus Arcu\"
          class=\"lightbox mfp-iframe\"
        >
          <img src=\"images/portfolio/10.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Video</small>
            <i class=\"fa fa-video-camera\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 10 -->

      <!-- Portfolio Item 11 -->
      <figure class=\"item\" data-groups='[\"all\",\"illustration\"]'>
        <a
          href=\"images/portfolio/11.jpg\"
          class=\"lightbox\"
          title=\"Duis Eu Eros Viverra\"
        >
          <img src=\"images/portfolio/11.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Illustration</small>
            <i class=\"fa fa-image\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 11 -->

      <!-- Portfolio Item 12 -->
      <figure class=\"item\" data-groups='[\"all\",\"media\"]'>
        <a class=\"ajax-page-load\" href=\"portfolio-1.html\">
          <img src=\"images/portfolio/12.jpg\" alt=\"\" />
          <div>
            <h5 class=\"name\">Project Name</h5>
            <small>Media</small>
            <i class=\"fa fa-file-text-o\"></i>
          </div>
        </a>
      </figure>
      <!-- /Portfolio Item 12 -->
    </div>
    <!-- /Portfolio Grid -->
  </div>
  <!-- /Portfolio Content -->
</section>
<!-- /Portfolio Subpage -->", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/portfolio.htm", "");
    }
}
