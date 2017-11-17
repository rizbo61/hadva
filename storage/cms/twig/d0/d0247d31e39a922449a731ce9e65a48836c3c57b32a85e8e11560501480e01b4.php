<?php

/* C:\xampp\htdocs\hadva/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm */
class __TwigTemplate_fc2b1266fab2d4d6bf48ce37ad2bbbe0a54aa91b097781c63f400b9fb6a0cc70 extends Twig_Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 2
                echo "
  ";
                // line 3
                if ((($context["flashSuccess"] ?? null) == ($context["__SELF__"] ?? null))) {
                    // line 4
                    echo "  \t<div class=\"alert alert-";
                    echo twig_escape_filter($this->env, (((($context["type"] ?? null) == "error")) ? ("danger") : (($context["type"] ?? null))), "html", null, true);
                    echo "\">
  \t\t";
                    // line 5
                    echo nl2br(call_user_func_array($this->env->getFunction('html_entity_decode')->getCallable(), array(($context["message"] ?? null))));
                    echo "
  \t</div>
  ";
                }
                // line 8
                echo "
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hadva/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  32 => 5,  27 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% flash%}

  {% if flashSuccess==__SELF__ %}
  \t<div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
  \t\t{{ html_entity_decode(message)|nl2br }}
  \t</div>
  {% endif %}

{% endflash %}
", "C:\\xampp\\htdocs\\hadva/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm", "");
    }
}
