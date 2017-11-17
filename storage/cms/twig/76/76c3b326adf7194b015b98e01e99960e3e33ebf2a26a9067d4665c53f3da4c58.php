<?php

/* C:\xampp\htdocs\hadva/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_2453b225fc652e1e4b356f6740db15c0b72a203b8eb835204ea7405f49cc91f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "post", array());
        // line 2
        echo "
<!--<div class=\"content\">";
        // line 3
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "</div>-->

<!--";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "count", array())) {
            echo "-->
<!--<div class=\"featured-images text-center\">-->
<!--";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo "-->
<!--<p>-->
<!--<img-->
<!--data-src=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()), "html", null, true);
                echo "\"-->
<!--src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                echo "\"-->
<!--alt=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()), "html", null, true);
                echo "\"-->
<!--style=\"max-width: 100%\" />-->
<!--</p>-->
<!--";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "-->
<!--</div>-->
<!--";
        }
        // line 17
        echo "-->

<!--<p class=\"info\">-->
<!--Posted-->
<!--";
        // line 21
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in-->
<!--";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "-->
<!--<a href=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                echo "-->
<!--";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "-->
<!--";
        }
        // line 25
        echo "-->
<!--on ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "-->
<!--</p>-->
<div class=\"py-5 bg-light text-left products\">
    <div class=\"container pt-5\">
        <div class=\"row\">
            <div class=\"col-md-12 mb-2 list-wrapper\">
                <h1 class=\"text-primary display-4 mb-1\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
                ";
        // line 33
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 34
        echo "            </div>
            <div class=\"category-wrapper\">
                <div class=\"col-12 my-3 p-5 category product\">
                    <div class=\"col-sm-12 col-md-6 col-lg-5 product-image\">
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 39
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
            echo "\" data-lightbox=\"1.1.jpg\" data-title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\">
                            <img class=\"img-fluid\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
            echo "\">
                        </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </div>
                    <div class=\"col-sm-12 col-md-6 col-lg-7 product-info\">
                        <div class=\"row product-description\">
                            <h3 class=\"text-primary text-uppercase pb-3\">Opis proizvoda</h3>
                            <p class=\"text-dark pb-3\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "excerpt", array()), "html", null, true);
        echo "
                            </p>
                        </div>
                        <div class=\"row product-table table-responsive\">
                            ";
        // line 51
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 51,  172 => 47,  166 => 43,  157 => 40,  150 => 39,  146 => 38,  140 => 34,  136 => 33,  132 => 32,  123 => 26,  120 => 25,  116 => 24,  94 => 23,  75 => 22,  71 => 21,  65 => 17,  60 => 15,  50 => 12,  46 => 11,  42 => 10,  34 => 7,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}

<!--<div class=\"content\">{{ post.content_html|raw }}</div>-->

<!--{% if post.featured_images.count %}-->
<!--<div class=\"featured-images text-center\">-->
<!--{% for image in post.featured_images %}-->
<!--<p>-->
<!--<img-->
<!--data-src=\"{{ image.filename }}\"-->
<!--src=\"{{ image.path }}\"-->
<!--alt=\"{{ image.description }}\"-->
<!--style=\"max-width: 100%\" />-->
<!--</p>-->
<!--{% endfor %}-->
<!--</div>-->
<!--{% endif %}-->

<!--<p class=\"info\">-->
<!--Posted-->
<!--{% if post.categories.count %} in-->
<!--{% for category in post.categories %}-->
<!--<a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}-->
<!--{% endfor %}-->
<!--{% endif %}-->
<!--on {{ post.published_at|date('M d, Y') }}-->
<!--</p>-->
<div class=\"py-5 bg-light text-left products\">
    <div class=\"container pt-5\">
        <div class=\"row\">
            <div class=\"col-md-12 mb-2 list-wrapper\">
                <h1 class=\"text-primary display-4 mb-1\">{{ post.title }}</h1>
                {% component 'blogCategories' %}
            </div>
            <div class=\"category-wrapper\">
                <div class=\"col-12 my-3 p-5 category product\">
                    <div class=\"col-sm-12 col-md-6 col-lg-5 product-image\">
                        {% for image in post.featured_images|slice(0,1) %}
                        <a href=\"{{ image.path }}\" data-lightbox=\"1.1.jpg\" data-title=\"{{ post.title }}\">
                            <img class=\"img-fluid\" src=\"{{ image.path }}\">
                        </a>
                        {% endfor %}
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-lg-7 product-info\">
                        <div class=\"row product-description\">
                            <h3 class=\"text-primary text-uppercase pb-3\">Opis proizvoda</h3>
                            <p class=\"text-dark pb-3\">{{ post.excerpt }}
                            </p>
                        </div>
                        <div class=\"row product-table table-responsive\">
                            {{ post.content_html|raw }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

", "C:\\xampp\\htdocs\\hadva/plugins/rainlab/blog/components/post/default.htm", "");
    }
}
