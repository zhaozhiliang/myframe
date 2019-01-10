<?php

/* add.html */
class __TwigTemplate_c97d6056e0837c5d511ca8f3c1350a7ae1d8e7261db66b81733a780f4e392faf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "add.html", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<form action=\"/index/save\" method=\"POST\" class=\"am-form\">
    <input type=\"text\" name=\"title\" class=\"\" placeholder=\"请输入title\">
    <textarea name=\"content\" class=\"\" placeholder=\"请输入content\"></textarea>
    <button type=\"submit\">提交</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layout.html\" %}
{% block content %}
<form action=\"/index/save\" method=\"POST\" class=\"am-form\">
    <input type=\"text\" name=\"title\" class=\"\" placeholder=\"请输入title\">
    <textarea name=\"content\" class=\"\" placeholder=\"请输入content\"></textarea>
    <button type=\"submit\">提交</button>
</form>
{% endblock %}", "add.html", "/mnt/hgfs/work_www/myframe/app/views/add.html");
    }
}
