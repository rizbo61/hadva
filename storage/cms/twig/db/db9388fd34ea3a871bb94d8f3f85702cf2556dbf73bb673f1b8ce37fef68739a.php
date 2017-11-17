<?php

/* C:\xampp\htdocs\hadva/themes/demo/partials/site/header.htm */
class __TwigTemplate_ac805975733f16e348ba95cab56a5f7d60ab45ffaab57633dcf34ba6f94ba94b extends Twig_Template
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
        echo "<!-- Nav -->
<nav class=\"navbar navbar-expand-md navbar-dark fixed-top navbar-main\">
  <div class=\"container\">
    <a class=\"navbar-brand navbar-logo\" href=\"/hadva\">
      <img src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo/hadva-logo-horizontal-white.svg");
        echo "\" class=\"img-fluid\"> </a>
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarMain\"
            aria-controls=\"navbarMain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
      class=\"navbar-toggler-icon\"></span></button>
    <div class=\"collapse navbar-collapse text-center justify-content-end\" id=\"navbarMain\">
      ";
        // line 10
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "navbar-nav"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav class=\"navbar navbar-expand-md navbar-dark fixed-top navbar-main\">
  <div class=\"container\">
    <a class=\"navbar-brand navbar-logo\" href=\"/hadva\">
      <img src=\"{{ 'assets/images/logo/hadva-logo-horizontal-white.svg'|theme }}\" class=\"img-fluid\"> </a>
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarMain\"
            aria-controls=\"navbarMain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
      class=\"navbar-toggler-icon\"></span></button>
    <div class=\"collapse navbar-collapse text-center justify-content-end\" id=\"navbarMain\">
      {% partial 'menu-items' items=staticMenu.menuItems class='navbar-nav' %}
    </div>
  </div>
</nav>", "C:\\xampp\\htdocs\\hadva/themes/demo/partials/site/header.htm", "");
    }
}
