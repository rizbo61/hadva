<?php

/* C:\xampp\htdocs\hadva/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm */
class __TwigTemplate_df2b2f0e166716cb9d5dd237a1997417f869aa6fa566ab3dddea87f11deb5ebd extends Twig_Template
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
        if ((((($context["flashSuccess"] ?? null) == false) || (($context["flashSuccess"] ?? null) != ($context["__SELF__"] ?? null))) || ((($context["flashSuccess"] ?? null) == ($context["__SELF__"] ?? null)) && (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), array("form_hide_after_success", 0)) == 0)))) {
            // line 2
            echo "
\t";
            // line 3
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "getFormAttributes", array())));
            echo "

\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "
\t\t\t";
                // line 7
                echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "getFieldHtmlCode", array(0 => $context["field"]), "method");
                echo "

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
\t\t";
            // line 11
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "getAntispamFieldHtmlCode", array(0 => array()), "method");
            echo "

\t\t";
            // line 13
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "getSubmitButtonHtmlCode", array(0 => array()), "method");
            echo "

\t";
            // line 15
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  53 => 13,  48 => 11,  45 => 10,  36 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flashSuccess == false or ( flashSuccess!=__SELF__) or ( flashSuccess==__SELF__ and settingsGet('form_hide_after_success', 0) == 0 ) %}

\t{{ form_open(__SELF__.getFormAttributes) }}

\t\t{% for field in __SELF__.fields %}

\t\t\t{{ __SELF__.getFieldHtmlCode(field)|raw }}

\t\t{% endfor %}

\t\t{{ __SELF__.getAntispamFieldHtmlCode({})|raw }}

\t\t{{ __SELF__.getSubmitButtonHtmlCode({})|raw }}

\t{{ form_close() }}

{% endif %}
", "C:\\xampp\\htdocs\\hadva/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm", "");
    }
}
