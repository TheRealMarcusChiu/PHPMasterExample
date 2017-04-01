<?php

/* index.html */
class __TwigTemplate_7b1946fb3e87264984882de211e10a063d6a1e8898454db8de51adb2667eec19 extends Twig_Template
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
        echo "<html>
<head>
    <title>TWIG</title>
</head>
<body>
<h1>TWIG EXAMPLE</h1>
<p>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["the"]) ? $context["the"] : null), "html", null, true);
        echo "</p>
<p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["go"]) ? $context["go"] : null), "html", null, true);
        echo "</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/Users/marcus.chiu/ComputerScience/PHP/PHPStorm/PHPStormProjects/Example/BasicPHP/src/third_party/twig/templates/index.html");
    }
}
