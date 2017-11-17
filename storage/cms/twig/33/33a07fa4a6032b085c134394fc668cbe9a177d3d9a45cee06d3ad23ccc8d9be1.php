<?php

/* C:\xampp\htdocs\hadva/themes/demo/partials/menu-items.htm */
class __TwigTemplate_d42412ca30fd0b7b4935aa947fb680a7e5234346dae20be5b466b3bf51e84ad5 extends Twig_Template
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li 
            class=\"";
            // line 4
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array()) || twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array()))) ? ("active") : (""));
            echo " 
            ";
            // line 5
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) ? ("dropdown") : (""));
            echo " nav-item\"
        >
            <a class=\"nav-link\"
                ";
            // line 8
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                echo "class=\"dropdown-toggle\" data-toggle=\"dropdown\"";
            }
            echo " 
                href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
            echo "\"
            >
                ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
            echo "

                ";
            // line 13
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                echo "<span class=\"caret\"></span>";
            }
            // line 14
            echo "            </a>

            ";
            // line 16
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                // line 17
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "            ";
            }
            // line 19
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/themes/demo/partials/menu-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  77 => 19,  74 => 18,  67 => 17,  65 => 16,  61 => 14,  57 => 13,  52 => 11,  47 => 9,  41 => 8,  35 => 5,  31 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"{{ class }}\">
    {% for item in items %}
        <li 
            class=\"{{ item.isActive or item.isChildActive ? 'active' : '' }} 
            {{ item.items ? 'dropdown' : '' }} nav-item\"
        >
            <a class=\"nav-link\"
                {% if item.items %}class=\"dropdown-toggle\" data-toggle=\"dropdown\"{% endif %} 
                href=\"{{ item.url }}\"
            >
                {{ item.title }}

                {% if item.items %}<span class=\"caret\"></span>{% endif %}
            </a>

            {% if item.items %}
                {% partial 'menu-items' items=item.items class='dropdown-menu' %}
            {% endif %}
        </li>
    {% endfor %}
</ul>", "C:\\xampp\\htdocs\\hadva/themes/demo/partials/menu-items.htm", "");
    }
}
