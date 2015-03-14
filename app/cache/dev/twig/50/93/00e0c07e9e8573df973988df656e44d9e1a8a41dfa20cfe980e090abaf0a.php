<?php

/* AcmeTagBundle:Default:index.html.twig */
class __TwigTemplate_509300e0c07e9e8573df973988df656e44d9e1a8a41dfa20cfe980e090abaf0a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "ggNumber", array()), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "AcmeTagBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
