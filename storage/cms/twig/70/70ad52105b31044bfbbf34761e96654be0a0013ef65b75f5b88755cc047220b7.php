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

/* C:\xampp\htdocs\octobre/themes/web-rocket/pages/bog-grid.htm */
class __TwigTemplate_2d17150c67982f34fd4dc4666bb2c07853d568161a41d9c4ba59ab3ce7466af2 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 8);
        $filters = array("escape" => 4, "slice" => 13, "date" => 23);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'slice', 'date'],
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "<section class=\"pt-page pt-page-4\" data-id=\"blog\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
    <h5 class=\"section-description\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h5>
  </div>
  <div class=\"blog-masonry\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "    <div class=\"item\">
      <div class=\"blog-card\">
        <div class=\"media-block\">
          <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 13), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "              <img
              class=\"post-image img-responsive\"
              src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\"
              alt=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\"
            />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            
            <div class=\"mask\"></div>
            <div class=\"post-date\">
              <span class=\"day\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 23), 23, $this->source), "d"), "html", null, true);
            echo "</span>
              <span class=\"month\">";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 24), 24, $this->source), "M"), "html", null, true);
            echo "</span>
              <span class=\"year\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 25), 25, $this->source), "Y"), "html", null, true);
            echo "</span>
            </div>
          </a>
        </div>
        <div class=\"post-info\">
          <ul class=\"category\">
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, true, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 32
                echo "              <li><a href=\"\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          </ul>
          <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\">
            <h4 class=\"blog-item-title\">
              ";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
            </h4>
          </a>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/pages/bog-grid.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 44,  155 => 37,  150 => 35,  147 => 34,  138 => 32,  134 => 31,  125 => 25,  121 => 24,  117 => 23,  112 => 20,  103 => 17,  99 => 16,  95 => 14,  91 => 13,  87 => 12,  82 => 9,  78 => 8,  72 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPosts.posts  %}
<section class=\"pt-page pt-page-4\" data-id=\"blog\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">{{ post.categories }}</h2>
    <h5 class=\"section-description\">{{ post.excerpt }}</h5>
  </div>
  <div class=\"blog-masonry\">
    {% for post in posts %}
    <div class=\"item\">
      <div class=\"blog-card\">
        <div class=\"media-block\">
          <a href=\"{{ post.url }}\">
            {% for image in post.featured_images|slice(0,1) %}
              <img
              class=\"post-image img-responsive\"
              src=\"{{ image.path }}\"
              alt=\"{{ post.title }}\"
            />
            {% endfor %}
            
            <div class=\"mask\"></div>
            <div class=\"post-date\">
              <span class=\"day\">{{ post.created_at | date('d') }}</span>
              <span class=\"month\">{{ post.created_at | date('M')  }}</span>
              <span class=\"year\">{{ post.created_at | date('Y') }}</span>
            </div>
          </a>
        </div>
        <div class=\"post-info\">
          <ul class=\"category\">
            {% for tag in post.tags %}
              <li><a href=\"\">{{ tag.name }}</a></li>
            {% endfor %}
          </ul>
          <a href=\"{{ post.url }}\">
            <h4 class=\"blog-item-title\">
              {{ post.title }}
            </h4>
          </a>
        </div>
      </div>
    </div>
    {% endfor %}
  </div>
</section>", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/pages/bog-grid.htm", "");
    }
}
