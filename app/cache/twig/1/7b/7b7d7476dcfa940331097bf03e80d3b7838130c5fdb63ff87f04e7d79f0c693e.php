<?php

/* default/layout/layout_1_col.tpl */
class __TwigTemplate_7a7badfbf5c0169218208818899299456e45b1cf884bad4590e62071b9d119d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page.tpl"), "default/layout/layout_1_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
    ";
        // line 5
        if ((isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null)) {
            // line 6
            echo "        <div id=\"plugin_main_top\" class=\"col-md-12\">
            ";
            // line 7
            echo (isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null);
            echo "
        </div>
    ";
        }
        // line 10
        echo "    ";
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 11
            echo "        <div id=\"plugin_content_top\" class=\"col-md-12\">
            ";
            // line 12
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
        </div>
    ";
        }
        // line 15
        echo "
    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 17
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_body.tpl"), "default/layout/layout_1_col.tpl", 17)->display($context);
        // line 18
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "        &nbsp;
    </div>

    ";
        // line 28
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            // line 29
            echo "        <div id=\"plugin_content_bottom\" class=\"col-md-12\">
            ";
            // line 30
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
        </div>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ((isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null)) {
            // line 35
            echo "        <div id=\"plugin_main_bottom\" class=\"col-md-12\">
            ";
            // line 36
            echo (isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null);
            echo "
        </div>
    ";
        }
        // line 39
        echo "    </div>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        if ( !(null === (isset($context["content"]) ? $context["content"] : null))) {
            // line 20
            echo "                <section id=\"main_content\">
                ";
            // line 21
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
                </section>
            ";
        }
        // line 24
        echo "        ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_1_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 24,  110 => 21,  107 => 20,  104 => 19,  101 => 18,  96 => 39,  90 => 36,  87 => 35,  85 => 34,  82 => 33,  76 => 30,  73 => 29,  71 => 28,  66 => 25,  63 => 18,  61 => 17,  57 => 15,  51 => 12,  48 => 11,  45 => 10,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/layout_1_col.tpl", "C:\\wamp64\\www\\Chamilo-CVO-VOLT-1.11.4\\main\\template\\default\\layout\\layout_1_col.tpl");
    }
}
