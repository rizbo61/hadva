<?php

/* C:\xampp\htdocs\hadva/plugins/rainlab/blog/components/categories/default.htm */
class __TwigTemplate_fdc47fd08a60849ae431927ac39bf6508cf078d6ff52a4d7ff18027bbef2f55d extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "categories", array())) {
            // line 2
            echo "<ul class=\"category-list list-group\">
    ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->getSourceContext(),             // line 4
($context["__SELF__"] ?? null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->getSourceContext(),             // line 5
($context["__SELF__"] ?? null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 3
($context["__SELF__"] ?? null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/plugins/rainlab/blog/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 3,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if __SELF__.categories %}
<ul class=\"category-list list-group\">
    {% partial __SELF__ ~ \"::items\"
    categories = __SELF__.categories
    currentCategorySlug = __SELF__.currentCategorySlug
    %}
</ul>
{% endif %}
", "C:\\xampp\\htdocs\\hadva/plugins/rainlab/blog/components/categories/default.htm", "");
    }
}
