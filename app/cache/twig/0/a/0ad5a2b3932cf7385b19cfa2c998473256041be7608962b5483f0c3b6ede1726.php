<?php

/* bookshelf/author/books.twig */
class __TwigTemplate_0ad5a2b3932cf7385b19cfa2c998473256041be7608962b5483f0c3b6ede1726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "bookshelf/author/books.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = ("Books by " . $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "name", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>

<ul>
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 11
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>

<p><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("list-authors"), "html", null, true);
        echo "\">Return</a></p>

";
    }

    public function getTemplateName()
    {
        return "bookshelf/author/books.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 13,  52 => 11,  48 => 10,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 3,  11 => 1,);
    }
}
