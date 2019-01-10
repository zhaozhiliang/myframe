<?php

/* index.html */
class __TwigTemplate_8cb070a68f6846da209491cd549a68d106de0ca738c5b139e2d457053bdbaa0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "index.html", 2);
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
        echo "<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "    <li class=\"am-u-sm-3\">
        <div>
            <h1>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "title", array()), "html", null, true);
            echo "</h1>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "content", array()), "html", null, true);
            echo "</p>
            <p><span>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "createtime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span></p>
            <a class=\"\" href=\"/index/info/id/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", array()), "html", null, true);
            echo "\">查看全文</a>
            <a class=\"\" href=\"/index/del/id/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", array()), "html", null, true);
            echo "\">删除留言</a>
        </div>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
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
        return array (  72 => 16,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layout.html\" %}
{% block content %}
<ul>
    {% for val in data%}
    <li class=\"am-u-sm-3\">
        <div>
            <h1>{{val.title}}</h1>
            <p>{{val.content}}</p>
            <p><span>{{val.createtime|date('Y-m-d H:i:s')}}</span></p>
            <a class=\"\" href=\"/index/info/id/{{val.id}}\">查看全文</a>
            <a class=\"\" href=\"/index/del/id/{{val.id}}\">删除留言</a>
        </div>
    </li>
    {% endfor %}
</ul>
{% endblock %}", "index.html", "/mnt/hgfs/work_www/myframe/app/views/index.html");
    }
}
