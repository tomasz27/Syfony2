<?php

/* AcmeUserBundle:Default:index.html.twig */
class __TwigTemplate_138002cad6b7570e370df32ac0ccf028c9140b3dbc9055d1679edcbe7fffcf4c extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "profileId", array()), "html", null, true);
        echo "
<br>
Hello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "firstName", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
