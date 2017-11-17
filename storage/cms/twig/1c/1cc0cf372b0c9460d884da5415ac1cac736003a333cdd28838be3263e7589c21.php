<?php

/* C:\xampp\htdocs\hadva/plugins/janvince/smallcontactform/components/smallcontactform/default.htm */
class __TwigTemplate_75eee968a67ce2a38daa831940ff80a1a50755f2e84beb0a5f27c2e31bddc9e5 extends Twig_Template
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
        echo "<div id=\"scf-message-";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scf-message")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>

<div id=\"scf-form-";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
\t";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scf-form")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/plugins/janvince/smallcontactform/components/smallcontactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  32 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"scf-message-{{ __SELF__ }}\">
\t{% partial __SELF__ ~ '::scf-message' %}
</div>

<div id=\"scf-form-{{ __SELF__ }}\">
\t{% partial __SELF__ ~ '::scf-form' %}
</div>
", "C:\\xampp\\htdocs\\hadva/plugins/janvince/smallcontactform/components/smallcontactform/default.htm", "");
    }
}
