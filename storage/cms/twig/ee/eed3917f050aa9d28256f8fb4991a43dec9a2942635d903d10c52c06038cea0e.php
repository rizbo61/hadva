<?php

/* C:\xampp\htdocs\hadva/themes/demo/pages/hdpe-cijevi/proizvod.htm */
class __TwigTemplate_03489aec345e5e0316bb1826b5c31db451e93cd987e4585b33b472b825e0a416 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<div class=\"diagonal-bottom bg-info\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/themes/demo/pages/hdpe-cijevi/proizvod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}

<div class=\"diagonal-bottom bg-info\"></div>", "C:\\xampp\\htdocs\\hadva/themes/demo/pages/hdpe-cijevi/proizvod.htm", "");
    }
}
