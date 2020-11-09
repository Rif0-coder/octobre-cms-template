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

/* C:\xampp\htdocs\octobre/themes/web-rocket/partials/resume.htm */
class __TwigTemplate_253309f57667dfbd266ff6039d81676093fde9cdacf84c0c1627b89ed79ebe38 extends \Twig\Template
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
        echo "<!-- Resume Subpage -->
<section class=\"pt-page pt-page-2\" data-id=\"resume\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">Resume</h2>
    <h5 class=\"section-description\">6 Years of Experience</h5>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-6 col-md-4 subpage-block\">
      <div class=\"block-title\">
        <h3>Education</h3>
      </div>
      <div class=\"timeline\">
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">2010</h5>
          <h4 class=\"event-name\">Specialization Course</h4>
          <span class=\"event-description\">University of Studies</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">2009</h5>
          <h4 class=\"event-name\">Specialization Course</h4>
          <span class=\"event-description\">University of Studies</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">2008</h5>
          <h4 class=\"event-name\">Specialization Course</h4>
          <span class=\"event-description\">University of Studies</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
      </div>
    </div>

    <div class=\"col-sm-6 col-md-4 subpage-block\">
      <div class=\"block-title\">
        <h3>Experience</h3>
      </div>
      <div class=\"timeline\">
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">Dec 2012 - Current</h5>
          <h4 class=\"event-name\">Frontend-developer</h4>
          <span class=\"event-description\">Web Agency</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">Dec 2011 - Nov 2012</h5>
          <h4 class=\"event-name\">Web Designer</h4>
          <span class=\"event-description\">Apple Inc.</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">Jan 2010 - Dec 2011</h5>
          <h4 class=\"event-name\">Graphic Designer</h4>
          <span class=\"event-description\">Web Agency</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
      </div>
    </div>

    <div class=\"col-sm-6 col-md-4 subpage-block\">
      <div class=\"block-title\">
        <h3>Design Skills</h3>
      </div>
      <div class=\"skills-info\">
        <h4>Web Design</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-1\"></div>
        </div>

        <h4>Graphic Design</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-2\"></div>
        </div>

        <h4>Print Design</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-3\"></div>
        </div>
      </div>

      <div class=\"block-title\">
        <h3>Coding Skills</h3>
      </div>
      <div class=\"skills-info\">
        <h4>HML5</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-4\"></div>
        </div>

        <h4>CSS3</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-5\"></div>
        </div>

        <h4>jQuery</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-6\"></div>
        </div>

        <h4>Wordpress</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-7\"></div>
        </div>

        <h4>PHP</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-8\"></div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-12 col-md-12\">
      <div class=\"download-cv-block\">
        <a class=\"button\" target=\"_blank\" href=\"#\">Download CV</a>
      </div>
    </div>
  </div>
</section>
<!-- End Resume Subpage -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/resume.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Resume Subpage -->
<section class=\"pt-page pt-page-2\" data-id=\"resume\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">Resume</h2>
    <h5 class=\"section-description\">6 Years of Experience</h5>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-6 col-md-4 subpage-block\">
      <div class=\"block-title\">
        <h3>Education</h3>
      </div>
      <div class=\"timeline\">
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">2010</h5>
          <h4 class=\"event-name\">Specialization Course</h4>
          <span class=\"event-description\">University of Studies</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">2009</h5>
          <h4 class=\"event-name\">Specialization Course</h4>
          <span class=\"event-description\">University of Studies</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">2008</h5>
          <h4 class=\"event-name\">Specialization Course</h4>
          <span class=\"event-description\">University of Studies</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
      </div>
    </div>

    <div class=\"col-sm-6 col-md-4 subpage-block\">
      <div class=\"block-title\">
        <h3>Experience</h3>
      </div>
      <div class=\"timeline\">
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">Dec 2012 - Current</h5>
          <h4 class=\"event-name\">Frontend-developer</h4>
          <span class=\"event-description\">Web Agency</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">Dec 2011 - Nov 2012</h5>
          <h4 class=\"event-name\">Web Designer</h4>
          <span class=\"event-description\">Apple Inc.</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
        <!-- Single event -->
        <div class=\"timeline-event te-primary\">
          <h5 class=\"event-date\">Jan 2010 - Dec 2011</h5>
          <h4 class=\"event-name\">Graphic Designer</h4>
          <span class=\"event-description\">Web Agency</span>
          <p>
            Mauris magna sapien, pharetra consectetur fringilla vitae, interdum
            sed tortor.
          </p>
        </div>
      </div>
    </div>

    <div class=\"col-sm-6 col-md-4 subpage-block\">
      <div class=\"block-title\">
        <h3>Design Skills</h3>
      </div>
      <div class=\"skills-info\">
        <h4>Web Design</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-1\"></div>
        </div>

        <h4>Graphic Design</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-2\"></div>
        </div>

        <h4>Print Design</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-3\"></div>
        </div>
      </div>

      <div class=\"block-title\">
        <h3>Coding Skills</h3>
      </div>
      <div class=\"skills-info\">
        <h4>HML5</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-4\"></div>
        </div>

        <h4>CSS3</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-5\"></div>
        </div>

        <h4>jQuery</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-6\"></div>
        </div>

        <h4>Wordpress</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-7\"></div>
        </div>

        <h4>PHP</h4>
        <div class=\"skill-container\">
          <div class=\"skill-percentage skill-8\"></div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-12 col-md-12\">
      <div class=\"download-cv-block\">
        <a class=\"button\" target=\"_blank\" href=\"#\">Download CV</a>
      </div>
    </div>
  </div>
</section>
<!-- End Resume Subpage -->", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/resume.htm", "");
    }
}
