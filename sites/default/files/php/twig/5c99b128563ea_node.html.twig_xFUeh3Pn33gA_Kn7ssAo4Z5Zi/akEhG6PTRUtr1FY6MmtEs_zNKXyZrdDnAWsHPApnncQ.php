<?php

/* themes/custom/myboot/templates/node/node.html.twig */
class __TwigTemplate_3e260bb9d108e20571d73eab56a2dfe0d11ffe3cb1893e0bab199bc7bebfc6df extends Twig_Template
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
        $tags = array("set" => 11);
        $filters = array();
        $functions = array("file_url" => 11);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array(),
                array('file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 10
        echo "
";
        // line 11
        $context["img"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_myimage", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array())));
        // line 12
        echo "<div class=\"myclass\" style=\"background-image:url('";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["img"] ?? null), "html", null, true));
        echo "')\">
";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_heading", array()), "html", null, true));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/myboot/templates/node/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  48 => 12,  46 => 11,  43 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
{% set align = content.field_options[0]['#markup'] %}
{{ align }}
<div{{ attributes.addClass(align)}}>
{{content.field_textfield}}
</div>
{{content.field_options}}
{{content}}
#}

{% set img = file_url(content.field_myimage['#items'].entity.uri.value) %}
<div class=\"myclass\" style=\"background-image:url('{{img}}')\">
{{ content.field_heading }}
</div>", "themes/custom/myboot/templates/node/node.html.twig", "/Applications/MAMP/htdocs/drupal/FrontEnd/themes/custom/myboot/templates/node/node.html.twig");
    }
}
