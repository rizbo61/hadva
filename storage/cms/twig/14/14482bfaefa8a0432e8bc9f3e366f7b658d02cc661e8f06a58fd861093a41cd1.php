<?php

/* C:\xampp\htdocs\hadva/themes/demo/pages/pp-r-cijevi.htm */
class __TwigTemplate_85ea6ea7b850513333f10f41fef1ea1483c741d39ad2dd134c47ce585f7744f3 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/themes/demo/pages/pp-r-cijevi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPosts' %}", "C:\\xampp\\htdocs\\hadva/themes/demo/pages/pp-r-cijevi.htm", "");
    }
}
