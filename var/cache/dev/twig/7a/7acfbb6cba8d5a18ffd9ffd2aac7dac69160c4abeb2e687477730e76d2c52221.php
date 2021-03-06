<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af9cbdf9281d27d29c9eb2685babdec675385486b0f0d25b25a70a5eebf75982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa1fdd46ce5c1689a7ebd3a0b9ae0c50410922566479391fede2ceafacd6e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa1fdd46ce5c1689a7ebd3a0b9ae0c50410922566479391fede2ceafacd6e3e->enter($__internal_caa1fdd46ce5c1689a7ebd3a0b9ae0c50410922566479391fede2ceafacd6e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa1fdd46ce5c1689a7ebd3a0b9ae0c50410922566479391fede2ceafacd6e3e->leave($__internal_caa1fdd46ce5c1689a7ebd3a0b9ae0c50410922566479391fede2ceafacd6e3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8887ba31951a26fa06dc82c4bb96d0e069d918445f91ab01326717d75f53ba90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8887ba31951a26fa06dc82c4bb96d0e069d918445f91ab01326717d75f53ba90->enter($__internal_8887ba31951a26fa06dc82c4bb96d0e069d918445f91ab01326717d75f53ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8887ba31951a26fa06dc82c4bb96d0e069d918445f91ab01326717d75f53ba90->leave($__internal_8887ba31951a26fa06dc82c4bb96d0e069d918445f91ab01326717d75f53ba90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_409a2e4c690ee234a3a937096ae57adeec5437a985da1a886b67b1e94397eb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409a2e4c690ee234a3a937096ae57adeec5437a985da1a886b67b1e94397eb8d->enter($__internal_409a2e4c690ee234a3a937096ae57adeec5437a985da1a886b67b1e94397eb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_409a2e4c690ee234a3a937096ae57adeec5437a985da1a886b67b1e94397eb8d->leave($__internal_409a2e4c690ee234a3a937096ae57adeec5437a985da1a886b67b1e94397eb8d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a70275c24bf1a5b5b526f329e3ca02bebc44d923d8455054309fe5356910934d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70275c24bf1a5b5b526f329e3ca02bebc44d923d8455054309fe5356910934d->enter($__internal_a70275c24bf1a5b5b526f329e3ca02bebc44d923d8455054309fe5356910934d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a70275c24bf1a5b5b526f329e3ca02bebc44d923d8455054309fe5356910934d->leave($__internal_a70275c24bf1a5b5b526f329e3ca02bebc44d923d8455054309fe5356910934d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\MariaLuiza\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
