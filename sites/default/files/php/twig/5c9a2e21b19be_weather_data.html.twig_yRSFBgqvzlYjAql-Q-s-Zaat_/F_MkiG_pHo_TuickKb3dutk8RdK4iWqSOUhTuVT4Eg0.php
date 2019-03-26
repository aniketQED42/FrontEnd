<?php

/* modules/custom/weather/templates/weather_data.html.twig */
class __TwigTemplate_6f12534ed237c8144c781e7f5ef062bc62c1518383daac489afdabecda3f5456 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 1, "file_url" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('attach_library', 'file_url')
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

        // line 1
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("weather/mystyling"), "html", null, true));
        echo "
<div class=\"myclass\" style=\"background-image:url('";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(($context["image"] ?? null))), "html", null, true));
        echo "')\">
";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["city"] ?? null), "html", null, true));
        echo "
";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
        echo "
</div>
<div class=\"flex-container\">
  <div>  <h5>Min. Temp  </h5>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["mintemp"] ?? null), "html", null, true));
        echo " </div>  
  <div>  <h5>Max. Temp  </h5>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["maxtemp"] ?? null), "html", null, true));
        echo "</div>
  <div>  <h5>Pressure  </h5>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pressure"] ?? null), "html", null, true));
        echo "</div>
  <div>  <h5>Humidity  </h5>";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["humidity"] ?? null), "html", null, true));
        echo "</div>  
  <div>  <h5>Temp  </h5>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["temp"] ?? null), "html", null, true));
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/weather/templates/weather_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('weather/mystyling') }}
<div class=\"myclass\" style=\"background-image:url('{{file_url(image)}}')\">
{{city}}
{{description}}
</div>
<div class=\"flex-container\">
  <div>  <h5>Min. Temp  </h5>{{mintemp}} </div>  
  <div>  <h5>Max. Temp  </h5>{{maxtemp}}</div>
  <div>  <h5>Pressure  </h5>{{pressure}}</div>
  <div>  <h5>Humidity  </h5>{{humidity}}</div>  
  <div>  <h5>Temp  </h5>{{temp}}</div>
</div>
", "modules/custom/weather/templates/weather_data.html.twig", "/Applications/MAMP/htdocs/drupal/FrontEnd/modules/custom/weather/templates/weather_data.html.twig");
    }
}
