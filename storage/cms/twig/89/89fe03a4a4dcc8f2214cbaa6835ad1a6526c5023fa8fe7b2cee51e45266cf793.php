<?php

/* C:\xampp\htdocs\hadva/plugins/rainlab/blog/components/categories/items.htm */
class __TwigTemplate_0888b881abbf00eaa2df24f55ec4d9260fa9c6e59197e7e63fea72b9e679bd5b extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            $context["postCount"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "post_count", array());
            // line 3
            $context["pageMetaTitle"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array());
            // line 4
            $context["proizvodi"] = $this->env->getExtension('System\Twig\Extension')->appFilter("/proizvodi");
            // line 5
            echo "<li class=\"list-group-item\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "slug", array()) == ($context["currentCategorySlug"] ?? null))) {
                echo "class=\"active\" ";
            }
            echo ">
    ";
            // line 7
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["proizvodi"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</a>
    ";
            // line 9
            echo "    ";
            if (($context["postCount"] ?? null)) {
                // line 10
                echo "    <span class=\"badge\">";
                echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                echo "</span>
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "children", array())) {
                // line 14
                echo "    <ul>
        ";
                // line 15
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->getSourceContext(),                 // line 16
$context["category"], "children", array())                ;
                $context['__cms_partial_params']['currentCategorySlug'] =                 // line 17
($context["currentCategorySlug"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((                // line 15
($context["__SELF__"] ?? null) . "::items")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 19
                echo "    </ul>
    ";
            }
            // line 21
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/plugins/rainlab/blog/components/categories/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  71 => 19,  68 => 15,  66 => 17,  64 => 16,  62 => 15,  59 => 14,  57 => 13,  54 => 12,  48 => 10,  45 => 9,  36 => 7,  29 => 5,  27 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for category in categories %}
{% set postCount = category.post_count %}
{% set pageMetaTitle = this.page.meta_title %}
{% set proizvodi = '/proizvodi'|app %}
<li class=\"list-group-item\" {% if category.slug== currentCategorySlug %}class=\"active\" {% endif %}>
    {# if ( pageMetaTitle == 'proizvod' ) #}
    <a href=\"{{ proizvodi }}/{{ category.slug }}\">{{ category.name }}</a>
    {# endif #}
    {% if postCount %}
    <span class=\"badge\">{{ postCount }}</span>
    {% endif %}

    {% if category.children %}
    <ul>
        {% partial __SELF__ ~ \"::items\"
        categories=category.children
        currentCategorySlug=currentCategorySlug
        %}
    </ul>
    {% endif %}
</li>
{% endfor %}
", "C:\\xampp\\htdocs\\hadva/plugins/rainlab/blog/components/categories/items.htm", "");
    }
}
