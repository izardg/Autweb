<?php

/* site/index.html.php */
class __TwigTemplate_7b1a9ddb8b0a34afd49cc89898ead3febb21345328063950290d6542b8b99d37 extends Twig_Template
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
        $__internal_a817ad874b1b516f92eab604ce7985ce6d40671512079edabca2404e78d502d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a817ad874b1b516f92eab604ce7985ce6d40671512079edabca2404e78d502d1->enter($__internal_a817ad874b1b516f92eab604ce7985ce6d40671512079edabca2404e78d502d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/index.html.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Bem vindo</title>
</head>
<body>
<form action=\"<?php echo \$view['router']->path('index') ?>\" method=\"POST\">
\t<label>Nome:</label>
\t<input type=\"text\" name=\"nome\">
\t<label>Senha:</label>
\t<input type=\"password\" name=\"senha\">
\t<input type=\"submit\" name=\"enviar\">
</form>
</body>
</html>";
        
        $__internal_a817ad874b1b516f92eab604ce7985ce6d40671512079edabca2404e78d502d1->leave($__internal_a817ad874b1b516f92eab604ce7985ce6d40671512079edabca2404e78d502d1_prof);

    }

    public function getTemplateName()
    {
        return "site/index.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title>Bem vindo</title>
</head>
<body>
<form action=\"<?php echo \$view['router']->path('index') ?>\" method=\"POST\">
\t<label>Nome:</label>
\t<input type=\"text\" name=\"nome\">
\t<label>Senha:</label>
\t<input type=\"password\" name=\"senha\">
\t<input type=\"submit\" name=\"enviar\">
</form>
</body>
</html>", "site/index.html.php", "C:\\wamp64\\www\\MariaLuiza\\app\\Resources\\views\\site\\index.html.php");
    }
}
