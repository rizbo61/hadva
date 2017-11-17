<?php

/* C:\xampp\htdocs\hadva/themes/demo/partials/kontakt.htm */
class __TwigTemplate_5bc99245cc8e2b7ea2f1ba16e2656a7300ff65b0051091a5f65f6f13f0cecc90 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/themes/demo/partials/kontakt.htm";
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
        return new Twig_Source("{% component 'contactForm' %}", "C:\\xampp\\htdocs\\hadva/themes/demo/partials/kontakt.htm", "");
    }
}
