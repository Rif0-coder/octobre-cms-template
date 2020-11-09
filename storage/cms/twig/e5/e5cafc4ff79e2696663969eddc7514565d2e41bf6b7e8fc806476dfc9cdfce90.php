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

/* C:\xampp\htdocs\octobre/themes/web-rocket/partials/blog.htm */
class __TwigTemplate_395d937896b143a1cd40d5fa07324e9829b76e1e7d3c5db150afc7d8b1d72369 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 10);
        $filters = array("escape" => 6, "slice" => 15, "date" => 25);
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
        echo "

<section class=\"pt-page pt-page-4\" data-id=\"blog\">
  <div class=\"section-title-block\">
    <h2 class=\"section-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
    <h5 class=\"section-description\">";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h5>
  </div>
  <div class=\"blog-masonry\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "    <div class=\"item\">
      <div class=\"blog-card\">
        <div class=\"media-block\">
          <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 15), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 16
                echo "              <img
              class=\"post-image img-responsive\"
              src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\"
              alt=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\"
            />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            
            <div class=\"mask\"></div>
            <div class=\"post-date\">
              <span class=\"day\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 25), 25, $this->source), "d"), "html", null, true);
            echo "</span>
              <span class=\"month\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 26), 26, $this->source), "M"), "html", null, true);
            echo "</span>
              <span class=\"year\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 27), 27, $this->source), "Y"), "html", null, true);
            echo "</span>
            </div>
          </a>
        </div>
        <div class=\"post-info\">
          <ul class=\"category\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, true, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 34
                echo "              <li><a href=\"\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "          </ul>
          <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">
            <h4 class=\"blog-item-title\">
              ";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
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
        // line 46
        echo "  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 46,  157 => 39,  152 => 37,  149 => 36,  140 => 34,  136 => 33,  127 => 27,  123 => 26,  119 => 25,  114 => 22,  105 => 19,  101 => 18,  97 => 16,  93 => 15,  89 => 14,  84 => 11,  80 => 10,  74 => 7,  70 => 6,  64 => 2,  62 => 1,);
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
</section>", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/partials/blog.htm", "");
    }
}
