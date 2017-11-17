<?php

/* C:\xampp\htdocs\hadva/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_5303506a825bdf6b63cfd88868daaf039f624e2651ba888634bace70cf80963f extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "
<!--<ul class=\"post-list\">-->
<!--";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "-->
<!--<li>-->
<!--<h3><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h3>-->

<!--<p class=\"info\">-->
<!--Posted-->
<!--";
            // line 10
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            echo "-->
<!--";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categories", array()));
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
                // line 12
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
            // line 13
            echo "-->
<!--on ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "-->
<!--</p>-->

<!--<p class=\"excerpt\">";
            // line 17
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array());
            echo "</p>-->
<!--</li>-->
<!--";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "-->
<!--<li class=\"no-data\">";
            // line 20
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>-->
<!--";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "-->
<!--</ul>-->
<div class=\"py-5 bg-light text-center products\">
    <div class=\"container pt-5\">
        <div class=\"row\">
            <div class=\"col-md-12 mb-5\">

                <h1 class=\"text-primary display-4 mb-2\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"category-wrapper post-list\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 32
            echo "                <div class=\"col-sm-10 col-md-5 col-lg-2 col-xl-auto my-3 category category-products\"><a class=\"category-link\"
                                                                                                        href=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\"><div
                  class=\"card\">";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 35
                echo "                    <div class=\"image-wrapper\">
                        <img
                          class=\"card-img-top img-fluid fr-fic fr-dii\" src=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                echo "\" alt=\"Card image cap\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
                    </div>
                    <div class=\"card-block card-main\"><h4 class=\"card-title text-info\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</h4>
                        <p class=\"card-text text-dark\">";
            // line 41
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "excerpt", array()), 100));
            echo "</p></div>
                </div>
                </a></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>
        </div>
    </div>
</div>
<div class=\"diagonal-bottom bg-info\">
    <br>
</div>

";
        // line 53
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 54
            echo "<ul class=\"pagination\">
    ";
            // line 55
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 56
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 58
            echo "
    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 60
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 61
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
    ";
            // line 65
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()))) {
                // line 66
                echo "    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 68
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 68,  227 => 66,  225 => 65,  222 => 64,  211 => 61,  206 => 60,  202 => 59,  199 => 58,  193 => 56,  191 => 55,  188 => 54,  186 => 53,  176 => 45,  166 => 41,  162 => 40,  158 => 38,  151 => 37,  147 => 35,  143 => 34,  139 => 33,  136 => 32,  132 => 31,  126 => 28,  117 => 21,  109 => 20,  106 => 19,  98 => 17,  92 => 14,  89 => 13,  67 => 12,  48 => 11,  42 => 10,  33 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

<!--<ul class=\"post-list\">-->
<!--{% for post in posts %}-->
<!--<li>-->
<!--<h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>-->

<!--<p class=\"info\">-->
<!--Posted-->
<!--{% if post.categories.count %} in {% endif %}-->
<!--{% for category in post.categories %}-->
<!--<a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}-->
<!--{% endfor %}-->
<!--on {{ post.published_at|date('M d, Y') }}-->
<!--</p>-->

<!--<p class=\"excerpt\">{{ post.summary|raw }}</p>-->
<!--</li>-->
<!--{% else %}-->
<!--<li class=\"no-data\">{{ noPostsMessage }}</li>-->
<!--{% endfor %}-->
<!--</ul>-->
<div class=\"py-5 bg-light text-center products\">
    <div class=\"container pt-5\">
        <div class=\"row\">
            <div class=\"col-md-12 mb-5\">

                <h1 class=\"text-primary display-4 mb-2\">{{ this.page.title }}</h1>
            </div>
            <div class=\"category-wrapper post-list\">
                {% for post in posts %}
                <div class=\"col-sm-10 col-md-5 col-lg-2 col-xl-auto my-3 category category-products\"><a class=\"category-link\"
                                                                                                        href=\"{{ post.url }}\"><div
                  class=\"card\">{% for image in post.featured_images|slice(0,1) %}
                    <div class=\"image-wrapper\">
                        <img
                          class=\"card-img-top img-fluid fr-fic fr-dii\" src=\"{{ image.path }}\" alt=\"Card image cap\">{% endfor %}

                    </div>
                    <div class=\"card-block card-main\"><h4 class=\"card-title text-info\">{{ post.title }}</h4>
                        <p class=\"card-text text-dark\">{{ str_limit(post.excerpt, 100) }}</p></div>
                </div>
                </a></div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
<div class=\"diagonal-bottom bg-info\">
    <br>
</div>

{% if posts.lastPage > 1 %}
<ul class=\"pagination\">
    {% if posts.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
    {% endif %}

    {% for page in 1..posts.lastPage %}
    <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if posts.lastPage > posts.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
    {% endif %}
</ul>
{% endif %}", "C:\\xampp\\htdocs\\hadva/plugins/rainlab/blog/components/posts/default.htm", "");
    }
}
