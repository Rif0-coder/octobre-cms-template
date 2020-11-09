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

/* C:\xampp\htdocs\octobre/themes/web-rocket/partials/contact.htm */
class __TwigTemplate_cfe3d4fac3e9fa1e980b1362356859a5b29685bf13d957c098ed7de44b1d8526 extends \Twig\Template
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
        echo "<!-- Contact Subpage -->
<section class=\"pt-page pt-page-6\" data-id=\"contact\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">Contact</h2>
    <h5 class=\"section-description\">Get in Touch</h5>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-6 col-md-6 subpage-block\">
      <div class=\"block-title\">
        <h3>Get in Touch</h3>
      </div>
      <p>
        Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae
        tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed
        justo vehicula, eget tincidunt tortor tempus.
      </p>
      <div class=\"contact-info-block\">
        <div class=\"ci-icon\">
          <i class=\"pe-7s-icon pe-7s-map-marker\"></i>
        </div>
        <div class=\"ci-text\">
          <h5>Los Angeles, USA</h5>
        </div>
      </div>
      <div class=\"contact-info-block\">
        <div class=\"ci-icon\">
          <i class=\"pe-7s-icon pe-7s-mail\"></i>
        </div>
        <div class=\"ci-text\">
          <h5>alexsmith@example.com</h5>
        </div>
      </div>
      <div class=\"contact-info-block\">
        <div class=\"ci-icon\">
          <i class=\"pe-7s-icon pe-7s-call\"></i>
        </div>
        <div class=\"ci-text\">
          <h5>+123 654 78900</h5>
        </div>
      </div>
      <div class=\"contact-info-block\">
        <div class=\"ci-icon\">
          <i class=\"pe-7s-icon pe-7s-check\"></i>
        </div>
        <div class=\"ci-text\">
          <h5>Freelance Available</h5>
        </div>
      </div>
    </div>

    <div class=\"col-sm-6 col-md-6 subpage-block\">
      <div class=\"block-title\">
        <h3>Contact Form</h3>
      </div>
      <form
        id=\"contact-form\"
        method=\"post\"
        action=\"contact_form/contact_form.php\"
      >
        <div class=\"messages\"></div>

        <div class=\"controls\">
          <div class=\"form-group\">
            <input
              id=\"form_name\"
              type=\"text\"
              name=\"name\"
              class=\"form-control\"
              placeholder=\"Full Name\"
              required=\"required\"
              data-error=\"Name is required.\"
            />
            <div class=\"form-control-border\"></div>
            <i class=\"form-control-icon fa fa-user\"></i>
            <div class=\"help-block with-errors\"></div>
          </div>

          <div class=\"form-group\">
            <input
              id=\"form_email\"
              type=\"email\"
              name=\"email\"
              class=\"form-control\"
              placeholder=\"Email Address\"
              required=\"required\"
              data-error=\"Valid email is required.\"
            />
            <div class=\"form-control-border\"></div>
            <i class=\"form-control-icon fa fa-envelope\"></i>
            <div class=\"help-block with-errors\"></div>
          </div>

          <div class=\"form-group\">
            <textarea
              id=\"form_message\"
              name=\"message\"
              class=\"form-control\"
              placeholder=\"Message for me\"
              rows=\"4\"
              required=\"required\"
              data-error=\"Please, leave me a message.\"
            ></textarea>
            <div class=\"form-control-border\"></div>
            <i class=\"form-control-icon fa fa-comment\"></i>
            <div class=\"help-block with-errors\"></div>
          </div>

          <div
            class=\"g-recaptcha\"
            data-sitekey=\"6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI\"
            data-callback=\"correctCaptcha\"
          ></div>

          <input type=\"submit\" class=\"button btn-send\" value=\"Send message\" />
        </div>
      </form>
    </div>
  </div>
</section>
<!-- End Contact Subpage -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Contact Subpage -->
<section class=\"pt-page pt-page-6\" data-id=\"contact\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">Contact</h2>
    <h5 class=\"section-description\">Get in Touch</h5>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-6 col-md-6 subpage-block\">
      <div class=\"block-title\">
        <h3>Get in Touch</h3>
      </div>
      <p>
        Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae
        tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed
        justo vehicula, eget tincidunt tortor tempus.
      </p>
      <div class=\"contact-info-block\">
        <div class=\"ci-icon\">
          <i class=\"pe-7s-icon pe-7s-map-marker\"></i>
        </div>
        <div class=\"ci-text\">
          <h5>Los Angeles, USA</h5>
        </div>
      </div>
      <div class=\"contact-info-block\">
        <div class=\"ci-icon\">
          <i class=\"pe-7s-icon pe-7s-mail\"></i>
        </div>
        <div class=\"ci-text\">
          <h5>alexsmith@example.com</h5>
        </div>
      </div>
      <div class=\"contact-info-block\">
        <div class=\"ci-icon\">
          <i class=\"pe-7s-icon pe-7s-call\"></i>
        </div>
        <div class=\"ci-text\">
          <h5>+123 654 78900</h5>
        </div>
      </div>
      <div class=\"contact-info-block\">
        <div class=\"ci-icon\">
          <i class=\"pe-7s-icon pe-7s-check\"></i>
        </div>
        <div class=\"ci-text\">
          <h5>Freelance Available</h5>
        </div>
      </div>
    </div>

    <div class=\"col-sm-6 col-md-6 subpage-block\">
      <div class=\"block-title\">
        <h3>Contact Form</h3>
      </div>
      <form
        id=\"contact-form\"
        method=\"post\"
        action=\"contact_form/contact_form.php\"
      >
        <div class=\"messages\"></div>

        <div class=\"controls\">
          <div class=\"form-group\">
            <input
              id=\"form_name\"
              type=\"text\"
              name=\"name\"
              class=\"form-control\"
              placeholder=\"Full Name\"
              required=\"required\"
              data-error=\"Name is required.\"
            />
            <div class=\"form-control-border\"></div>
            <i class=\"form-control-icon fa fa-user\"></i>
            <div class=\"help-block with-errors\"></div>
          </div>

          <div class=\"form-group\">
            <input
              id=\"form_email\"
              type=\"email\"
              name=\"email\"
              class=\"form-control\"
              placeholder=\"Email Address\"
              required=\"required\"
              data-error=\"Valid email is required.\"
            />
            <div class=\"form-control-border\"></div>
            <i class=\"form-control-icon fa fa-envelope\"></i>
            <div class=\"help-block with-errors\"></div>
          </div>

          <div class=\"form-group\">
            <textarea
              id=\"form_message\"
              name=\"message\"
              class=\"form-control\"
              placeholder=\"Message for me\"
              rows=\"4\"
              required=\"required\"
              data-error=\"Please, leave me a message.\"
            ></textarea>
            <div class=\"form-control-border\"></div>
            <i class=\"form-control-icon fa fa-comment\"></i>
            <div class=\"help-block with-errors\"></div>
          </div>

          <div
            class=\"g-recaptcha\"
            data-sitekey=\"6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI\"
            data-callback=\"correctCaptcha\"
          ></div>

          <input type=\"submit\" class=\"button btn-send\" value=\"Send message\" />
        </div>
      </form>
    </div>
  </div>
</section>
<!-- End Contact Subpage -->", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/contact.htm", "");
    }
}
