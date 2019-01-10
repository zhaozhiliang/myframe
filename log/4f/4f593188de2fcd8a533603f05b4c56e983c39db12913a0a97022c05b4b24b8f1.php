<?php

/* index.html */
class __TwigTemplate_8cb070a68f6846da209491cd549a68d106de0ca738c5b139e2d457053bdbaa0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title><?php echo \$title?></title>
</head>
<body>
    this is 试图
    ";
        // line 9
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "
<?php echo \$data; ?>
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
        return array (  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title><?php echo \$title?></title>
</head>
<body>
    this is 试图
    {{data}}
<?php echo \$data; ?>
</body>
</html>", "index.html", "/mnt/hgfs/work_www/myframe/app/views/index.html");
    }
}
