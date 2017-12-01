<?php

/* {# inline_template_start #}<div class="row succeed-banner">
    <div class="col-md-7 col-sm-6 col-xs-12">
         {{ field_image }}
    </div>
    <div class="succeed-text col-md-5 col-sm-6 hidden-xs">
     <div class="succeed-bn-img">{{ field_log_img }}</div>
     <div class="succeed-bn-text">  
        <h2 class="text-center">{{ title }}</h2>
        <p>{{ field_text }}</p>
     </div>
    </div>
</div>  */
class __TwigTemplate_509fdf7203c0f8d9fa58d8278697c7445d0f824b80dcc15ab073f7410e5d25bc extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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
        echo "<div class=\"row succeed-banner\">
    <div class=\"col-md-7 col-sm-6 col-xs-12\">
         ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
    </div>
    <div class=\"succeed-text col-md-5 col-sm-6 hidden-xs\">
     <div class=\"succeed-bn-img\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_log_img"] ?? null), "html", null, true));
        echo "</div>
     <div class=\"succeed-bn-text\">  
        <h2 class=\"text-center\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
        <p>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_text"] ?? null), "html", null, true));
        echo "</p>
     </div>
    </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row succeed-banner\">
    <div class=\"col-md-7 col-sm-6 col-xs-12\">
         {{ field_image }}
    </div>
    <div class=\"succeed-text col-md-5 col-sm-6 hidden-xs\">
     <div class=\"succeed-bn-img\">{{ field_log_img }}</div>
     <div class=\"succeed-bn-text\">  
        <h2 class=\"text-center\">{{ title }}</h2>
        <p>{{ field_text }}</p>
     </div>
    </div>
</div> ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  69 => 8,  64 => 6,  58 => 3,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"row succeed-banner\">
    <div class=\"col-md-7 col-sm-6 col-xs-12\">
         {{ field_image }}
    </div>
    <div class=\"succeed-text col-md-5 col-sm-6 hidden-xs\">
     <div class=\"succeed-bn-img\">{{ field_log_img }}</div>
     <div class=\"succeed-bn-text\">  
        <h2 class=\"text-center\">{{ title }}</h2>
        <p>{{ field_text }}</p>
     </div>
    </div>
</div> ", "");
    }
}
