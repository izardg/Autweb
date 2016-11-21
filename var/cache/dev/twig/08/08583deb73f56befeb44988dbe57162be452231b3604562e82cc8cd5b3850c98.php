<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8a8965157ebe70085f14242e1e07b4c6ff38ff82594d11864f7b45d82a1475d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1074e7c4a91fc8dca2d2be8abcf19d52ebaacf087a0306456f6629843dff179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1074e7c4a91fc8dca2d2be8abcf19d52ebaacf087a0306456f6629843dff179->enter($__internal_a1074e7c4a91fc8dca2d2be8abcf19d52ebaacf087a0306456f6629843dff179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1074e7c4a91fc8dca2d2be8abcf19d52ebaacf087a0306456f6629843dff179->leave($__internal_a1074e7c4a91fc8dca2d2be8abcf19d52ebaacf087a0306456f6629843dff179_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_638a353c4882ebb4c6cf4a828e838624f88f524f57073a16b5ecf4bf3a28ae8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638a353c4882ebb4c6cf4a828e838624f88f524f57073a16b5ecf4bf3a28ae8d->enter($__internal_638a353c4882ebb4c6cf4a828e838624f88f524f57073a16b5ecf4bf3a28ae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_638a353c4882ebb4c6cf4a828e838624f88f524f57073a16b5ecf4bf3a28ae8d->leave($__internal_638a353c4882ebb4c6cf4a828e838624f88f524f57073a16b5ecf4bf3a28ae8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6d6603403f8eeff96bc3117298c6ea4b1c878ba0b6903727d27f4bf6e720419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d6603403f8eeff96bc3117298c6ea4b1c878ba0b6903727d27f4bf6e720419->enter($__internal_c6d6603403f8eeff96bc3117298c6ea4b1c878ba0b6903727d27f4bf6e720419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6d6603403f8eeff96bc3117298c6ea4b1c878ba0b6903727d27f4bf6e720419->leave($__internal_c6d6603403f8eeff96bc3117298c6ea4b1c878ba0b6903727d27f4bf6e720419_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2feffd1f1ec9f65a3b1c81f67935fd24fa26f830572723dd8f0e0575c0ec6254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2feffd1f1ec9f65a3b1c81f67935fd24fa26f830572723dd8f0e0575c0ec6254->enter($__internal_2feffd1f1ec9f65a3b1c81f67935fd24fa26f830572723dd8f0e0575c0ec6254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2feffd1f1ec9f65a3b1c81f67935fd24fa26f830572723dd8f0e0575c0ec6254->leave($__internal_2feffd1f1ec9f65a3b1c81f67935fd24fa26f830572723dd8f0e0575c0ec6254_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\MariaLuiza\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
