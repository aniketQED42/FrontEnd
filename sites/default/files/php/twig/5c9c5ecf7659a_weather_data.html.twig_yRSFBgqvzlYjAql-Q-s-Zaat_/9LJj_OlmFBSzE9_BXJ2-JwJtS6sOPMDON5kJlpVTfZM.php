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
        $functions = array("attach_library" => 18, "file_url" => 19);

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

        // line 17
        echo "
";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("weather/mystyling"), "html", null, true));
        echo "
<div class=\"imageclass\" style=\"background-image:url('";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(($context["image"] ?? null))), "html", null, true));
        echo "')\">
    <div class = \"city\">
    <img src=\"modules/custom/weather/images/sunimage.png\" height=\"100px\" width=\"100px\"><br>
    ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["city"] ?? null), "html", null, true));
        echo "
    </div>
    <div class = \"description\">
    ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
        echo "
    </div>
</div>

<div class=\"flex-container\">
  <div><h5>Min. Temp</h5>";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["mintemp"] ?? null), "html", null, true));
        echo " </div>  
  <div><h5>Max. Temp</h5>";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["maxtemp"] ?? null), "html", null, true));
        echo "</div>
  <div><h5>Pressure</h5>";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pressure"] ?? null), "html", null, true));
        echo "</div>
  <div><h5>Humidity</h5>";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["humidity"] ?? null), "html", null, true));
        echo "</div>  
  <div><h5>Temp</h5>";
        // line 34
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
        return array (  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  62 => 25,  56 => 22,  50 => 19,  46 => 18,  43 => 17,);
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
/**
 * @file
 * Theme override for an item list.
 *
 * Available variables:
 * - image - Path of the image the user uploads while configuring the block.
 * - city - Variable which holds the name of the city.
 * - description - Variable which holds the description of the city.
 * - mintemp - Variable thats holds the minimum temperature of the mentioned city.
 * - maxtemp - Variable thats holds the maximum temperature of the mentioned city.
 * - pressure - Variable thats holds the air pressure of the mentioned city.
 * - humidity - Variable thats holds the humidity of the mentioned city.
 * @ingroup templates
 */
#}

{{ attach_library('weather/mystyling') }}
<div class=\"imageclass\" style=\"background-image:url('{{file_url(image)}}')\">
    <div class = \"city\">
    <img src=\"modules/custom/weather/images/sunimage.png\" height=\"100px\" width=\"100px\"><br>
    {{city}}
    </div>
    <div class = \"description\">
    {{description}}
    </div>
</div>

<div class=\"flex-container\">
  <div><h5>Min. Temp</h5>{{mintemp}} </div>  
  <div><h5>Max. Temp</h5>{{maxtemp}}</div>
  <div><h5>Pressure</h5>{{pressure}}</div>
  <div><h5>Humidity</h5>{{humidity}}</div>  
  <div><h5>Temp</h5>{{temp}}</div>
</div>
", "modules/custom/weather/templates/weather_data.html.twig", "/Applications/MAMP/htdocs/drupal/FrontEnd/modules/custom/weather/templates/weather_data.html.twig");
    }
}
