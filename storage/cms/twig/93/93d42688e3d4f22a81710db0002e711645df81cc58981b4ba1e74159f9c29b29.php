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

/* C:\xampp\htdocs\octobre/themes/web-rocket/pages/solo-blog-item.htm */
class __TwigTemplate_d7b56edfa241765df84ef179fd694bbde5c4c17ce66c0a804f00999970558fb0 extends \Twig\Template
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
        $tags = array("for" => 5, "if" => 20);
        $filters = array("slice" => 5, "escape" => 8, "raw" => 23);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['slice', 'escape', 'raw'],
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
        echo "<div id=\"main\" class=\"site-main\">
    <div class=\"page-wrapper\">
        <a class=\"blog-back-button\" href=\"index.html#blog\"><i class=\"fa fa-angle-left\"></i></a>
        <div class=\"blog-post-main-image\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 5), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "              <img
              class=\"post-image img-responsive\"
              src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\"
              alt=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\"
            />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>
        <div class=\"blog-post-content\">
            <h1>Bootstrap is the Most Popular HTML, CSS, and JS Framework</h1>
            <ul class=\"tags\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "tags", [], "any", false, false, true, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "                    <li><a href=\"\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
            ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, true, 20) != "")) {
            // line 21
            echo "            <p class=\"lead\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</p>
            ";
        }
        // line 22
        echo " 
            ";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 23), 23, $this->source);
        echo "

            <div class=\"post-info\">
                <span class=\"autor\"><i class=\"fa fa-fw fa-user\"></i> John Doe</span>
                <span class=\"divider\">|</span>
                <span class=\"date\"><i class=\"fa fa-fw fa-clock-o\"></i> 12 December, 2016</span>
                <!-- Share Buttons -->
                <div class=\"btn-group share-buttons pull-right hidden-xs\">
                    <a href=\"#\" target=\"_blank\" class=\"btn\"><i class=\"fa fa-facebook\"></i> </a>
                    <a href=\"#\" target=\"_blank\" class=\"btn\"><i class=\"fa fa-twitter\"></i> </a>
                    <a href=\"#\" target=\"_blank\" class=\"btn\"><i class=\"fa fa-dribbble\"></i> </a>
                </div>
                <!-- /Share Buttons -->
            </div>
            <div class=\"post-comments\">
                <div class=\"block-title\">
                    <h3>Comments (3)</h3>
                </div>

                <div class=\"media\">
                    <a class=\"pull-left\" href=\"#\">
                        <img class=\"media-object\" src=\"images/blog/comments/comment_photo_1.png\" alt=\"\">
                    </a>
                    <div class=\"media-body\">
                        <div class=\"media-heading\">
                            <a href=\"#\">John Doe</a> <span class=\"divider\">|</span> <span class=\"light-gray\">1 hour
                                ago</span>
                        </div>
                        <p>Nam pellentesque laoreet augue sed facilisis. Suspendisse nec sollicitudin mauris. Integer
                            fringilla a odio sit amet fermentum. Nunc nibh mauris, pretium eu risus et, finibus
                            facilisis lorem.</p>
                        <div class=\"media-footer\">
                            <a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                            <span class=\"divider\"></span>
                            <i class=\"fa fa-thumbs-up\"></i>
                            <span>0</span>
                            <i class=\"fa fa-thumbs-down\"></i>
                        </div>

                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"#\">
                                <img class=\"media-object\" src=\"images/blog/comments/comment_photo_2.png\" alt=\"\">
                            </a>
                            <div class=\"media-body\">
                                <div class=\"media-heading\">
                                    <a href=\"#\">Bryan Morris</a> <span class=\"divider\">|</span> <span
                                        class=\"light-gray\">5 hours ago</span>
                                </div>
                                <p>Donec fermentum elementum massa nec imperdiet. Quisque iaculis accumsan elit eget
                                    porttitor.</p>
                                <div class=\"media-footer\">
                                    <a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                    <span class=\"divider\"></span>
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    <span>0</span>
                                    <i class=\"fa fa-thumbs-down\"></i>
                                </div>
                            </div>
                        </div>

                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"#\">
                                <img class=\"media-object\" src=\"images/blog/comments/comment_photo_1.png\" alt=\"\">
                            </a>
                            <div class=\"media-body\">
                                <div class=\"media-heading\">
                                    <a href=\"#\">John Doe</a> <span class=\"divider\">|</span> <span class=\"light-gray\">12
                                        hours ago</span>
                                </div>
                                <p>Nulla tincidunt augue lacinia purus scelerisque fringilla. Donec venenatis volutpat
                                    lacus, ac efficitur ligula imperdiet id. Nunc gravida ullamcorper metus, ut gravida
                                    velit condimentum vel.</p>
                                <div class=\"media-footer\">
                                    <a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                    <span class=\"divider\"></span>
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    <span>0</span>
                                    <i class=\"fa fa-thumbs-down\"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"post-comment-add\">
                <div class=\"block-title\">
                    <h3>Leave a Comment</h3>
                </div>
                <form class=\"form-add-comment\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" placeholder=\"Your name\" name=\"name\">
                        <div class=\"form-control-border\"></div>
                        <i class=\"form-control-icon fa fa-user\"></i>
                    </div>
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" placeholder=\"Message...\" name=\"message\"></textarea>
                        <div class=\"form-control-border\"></div>
                        <i class=\"form-control-icon fa fa-comment\"></i>
                    </div>
                    <button class=\"button\" type=\"submit\">Add comment</button>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/web-rocket/pages/solo-blog-item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 23,  119 => 22,  113 => 21,  111 => 20,  108 => 19,  99 => 17,  95 => 16,  89 => 12,  80 => 9,  76 => 8,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"main\" class=\"site-main\">
    <div class=\"page-wrapper\">
        <a class=\"blog-back-button\" href=\"index.html#blog\"><i class=\"fa fa-angle-left\"></i></a>
        <div class=\"blog-post-main-image\">
            {% for image in post.featured_images|slice(0,1) %}
              <img
              class=\"post-image img-responsive\"
              src=\"{{ image.path }}\"
              alt=\"{{ post.title }}\"
            />
            {% endfor %}
        </div>
        <div class=\"blog-post-content\">
            <h1>Bootstrap is the Most Popular HTML, CSS, and JS Framework</h1>
            <ul class=\"tags\">
                {% for tag in post.tags %}
                    <li><a href=\"\">{{ tag.name }}</a></li>
                {% endfor %}
            </ul>
            {% if post.excerpt != '' %}
            <p class=\"lead\">{{ post.excerpt }}</p>
            {% endif %} 
            {{ post.content_html |raw }}

            <div class=\"post-info\">
                <span class=\"autor\"><i class=\"fa fa-fw fa-user\"></i> John Doe</span>
                <span class=\"divider\">|</span>
                <span class=\"date\"><i class=\"fa fa-fw fa-clock-o\"></i> 12 December, 2016</span>
                <!-- Share Buttons -->
                <div class=\"btn-group share-buttons pull-right hidden-xs\">
                    <a href=\"#\" target=\"_blank\" class=\"btn\"><i class=\"fa fa-facebook\"></i> </a>
                    <a href=\"#\" target=\"_blank\" class=\"btn\"><i class=\"fa fa-twitter\"></i> </a>
                    <a href=\"#\" target=\"_blank\" class=\"btn\"><i class=\"fa fa-dribbble\"></i> </a>
                </div>
                <!-- /Share Buttons -->
            </div>
            <div class=\"post-comments\">
                <div class=\"block-title\">
                    <h3>Comments (3)</h3>
                </div>

                <div class=\"media\">
                    <a class=\"pull-left\" href=\"#\">
                        <img class=\"media-object\" src=\"images/blog/comments/comment_photo_1.png\" alt=\"\">
                    </a>
                    <div class=\"media-body\">
                        <div class=\"media-heading\">
                            <a href=\"#\">John Doe</a> <span class=\"divider\">|</span> <span class=\"light-gray\">1 hour
                                ago</span>
                        </div>
                        <p>Nam pellentesque laoreet augue sed facilisis. Suspendisse nec sollicitudin mauris. Integer
                            fringilla a odio sit amet fermentum. Nunc nibh mauris, pretium eu risus et, finibus
                            facilisis lorem.</p>
                        <div class=\"media-footer\">
                            <a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                            <span class=\"divider\"></span>
                            <i class=\"fa fa-thumbs-up\"></i>
                            <span>0</span>
                            <i class=\"fa fa-thumbs-down\"></i>
                        </div>

                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"#\">
                                <img class=\"media-object\" src=\"images/blog/comments/comment_photo_2.png\" alt=\"\">
                            </a>
                            <div class=\"media-body\">
                                <div class=\"media-heading\">
                                    <a href=\"#\">Bryan Morris</a> <span class=\"divider\">|</span> <span
                                        class=\"light-gray\">5 hours ago</span>
                                </div>
                                <p>Donec fermentum elementum massa nec imperdiet. Quisque iaculis accumsan elit eget
                                    porttitor.</p>
                                <div class=\"media-footer\">
                                    <a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                    <span class=\"divider\"></span>
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    <span>0</span>
                                    <i class=\"fa fa-thumbs-down\"></i>
                                </div>
                            </div>
                        </div>

                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"#\">
                                <img class=\"media-object\" src=\"images/blog/comments/comment_photo_1.png\" alt=\"\">
                            </a>
                            <div class=\"media-body\">
                                <div class=\"media-heading\">
                                    <a href=\"#\">John Doe</a> <span class=\"divider\">|</span> <span class=\"light-gray\">12
                                        hours ago</span>
                                </div>
                                <p>Nulla tincidunt augue lacinia purus scelerisque fringilla. Donec venenatis volutpat
                                    lacus, ac efficitur ligula imperdiet id. Nunc gravida ullamcorper metus, ut gravida
                                    velit condimentum vel.</p>
                                <div class=\"media-footer\">
                                    <a href=\"#\"><i class=\"fa fa-reply\"></i> Reply</a>
                                    <span class=\"divider\"></span>
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    <span>0</span>
                                    <i class=\"fa fa-thumbs-down\"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"post-comment-add\">
                <div class=\"block-title\">
                    <h3>Leave a Comment</h3>
                </div>
                <form class=\"form-add-comment\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" placeholder=\"Your name\" name=\"name\">
                        <div class=\"form-control-border\"></div>
                        <i class=\"form-control-icon fa fa-user\"></i>
                    </div>
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" placeholder=\"Message...\" name=\"message\"></textarea>
                        <div class=\"form-control-border\"></div>
                        <i class=\"form-control-icon fa fa-comment\"></i>
                    </div>
                    <button class=\"button\" type=\"submit\">Add comment</button>
                </form>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\octobre/themes/web-rocket/pages/solo-blog-item.htm", "");
    }
}
