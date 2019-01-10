<?php

/* layout.html */
class __TwigTemplate_ee400d17e16f17662b9459aa6c22031be6644fc7370cc6287f5dcf8b9d2fe56d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<header>
    <h1>超简单留言板</h1>
    <div class=\"am-g\">
        <a class=\"am-btn-default\" href=\"/\">所有留言</a>
        <a class=\"am-btn-default\" href=\"/index/add\">添加留言</a>
    </div>
</header>

<content>
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</content>

<footer>footer</footer>

</body>
</html>";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  53 => 17,  44 => 19,  42 => 17,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<header>
    <h1>超简单留言板</h1>
    <div class=\"am-g\">
        <a class=\"am-btn-default\" href=\"/\">所有留言</a>
        <a class=\"am-btn-default\" href=\"/index/add\">添加留言</a>
    </div>
</header>

<content>
    {% block content %}
    {% endblock%}
</content>

<footer>footer</footer>

</body>
</html>", "layout.html", "/mnt/hgfs/work_www/myframe/app/views/layout.html");
    }
}
