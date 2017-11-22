<?php

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_bbbc6a1529ebba606562e2e2c358da0801d84d3ba6b44c7b67ced2ee9fdcd221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'page_body' => array($this, 'block_page_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page.tpl"), "default/layout/layout_2_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
    ";
        // line 5
        if ((isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null)) {
            // line 6
            echo "        <div class=\"page-main-top\" class=\"col-md-12\">
            ";
            // line 7
            echo (isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null);
            echo "
        </div>
    ";
        }
        // line 10
        echo "    <div class=\"col-md-3\">
        <div class=\"sidebar\">
            ";
        // line 12
        if ((isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null)) {
            // line 13
            echo "                <div class=\"siderbar-menu-top\">
                    ";
            // line 14
            echo (isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null);
            echo "
                </div>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/login_form.tpl"), "default/layout/layout_2_col.tpl", 18)->display($context);
        // line 19
        echo "
            ";
        // line 20
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 1)) {
            // line 21
            echo "                ";
            echo (isset($context["user_image_block"]) ? $context["user_image_block"] : null);
            echo "
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        echo (isset($context["profile_block"]) ? $context["profile_block"] : null);
        echo "
            ";
        // line 25
        echo (isset($context["course_block"]) ? $context["course_block"] : null);
        echo "
            ";
        // line 26
        echo (isset($context["teacher_block"]) ? $context["teacher_block"] : null);
        echo "
            ";
        // line 27
        echo (isset($context["skills_block"]) ? $context["skills_block"] : null);
        echo "
            ";
        // line 28
        echo (isset($context["certificates_search_block"]) ? $context["certificates_search_block"] : null);
        echo "
            ";
        // line 29
        echo (isset($context["notice_block"]) ? $context["notice_block"] : null);
        echo "
            ";
        // line 30
        echo (isset($context["help_block"]) ? $context["help_block"] : null);
        echo "
            ";
        // line 31
        echo (isset($context["navigation_course_links"]) ? $context["navigation_course_links"] : null);
        echo "
            ";
        // line 32
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "
            ";
        // line 33
        echo (isset($context["classes_block"]) ? $context["classes_block"] : null);
        echo "

            ";
        // line 35
        if ((isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null)) {
            // line 36
            echo "                <div class=\"sidebar-menu-bottom\">
                    ";
            // line 37
            echo (isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null);
            echo "
                </div>
            ";
        }
        // line 40
        echo "        </div>
    </div>
    <div class=\"col-md-9\">
        <div class=\"page-content\">

            ";
        // line 45
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 46
            echo "                <div class=\"page-content-top\">
                    ";
            // line 47
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
                </div>
            ";
        }
        // line 50
        echo "
            ";
        // line 51
        echo (isset($context["sniff_notification"]) ? $context["sniff_notification"] : null);
        echo "

            ";
        // line 53
        if ((isset($context["home_page_block"]) ? $context["home_page_block"] : null)) {
            // line 54
            echo "                <article id=\"homepage-home\">
                    ";
            // line 55
            echo (isset($context["home_page_block"]) ? $context["home_page_block"] : null);
            echo "
                </article>
            ";
        }
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('page_body', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        if ((isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null)) {
            // line 64
            echo "                <article id=\"homepage-course\">
                ";
            // line 65
            echo (isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null);
            echo "
                </article>
            ";
        }
        // line 68
        echo "
            ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
            ";
        // line 77
        if ((isset($context["announcements_block"]) ? $context["announcements_block"] : null)) {
            // line 78
            echo "                <article id=\"homepage-announcements\">
                ";
            // line 79
            echo (isset($context["announcements_block"]) ? $context["announcements_block"] : null);
            echo "
                </article>
            ";
        }
        // line 82
        echo "
            ";
        // line 83
        if ((isset($context["course_category_block"]) ? $context["course_category_block"] : null)) {
            // line 84
            echo "                <article id=\"homepage-course-category\">
                    ";
            // line 85
            echo (isset($context["course_category_block"]) ? $context["course_category_block"] : null);
            echo "
                </article>
            ";
        }
        // line 88
        echo "
            ";
        // line 89
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/hot_courses.tpl"), "default/layout/layout_2_col.tpl", 89)->display($context);
        // line 90
        echo "
            ";
        // line 91
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            // line 92
            echo "                <div id=\"plugin_content_bottom\">
                    ";
            // line 93
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
                </div>
            ";
        }
        // line 96
        echo "        </div>
    </div>
    ";
        // line 98
        if ((isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null)) {
            // line 99
            echo "        <div class=\"page-main-bottom\" class=\"col-md-12\">
            ";
            // line 100
            echo (isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null);
            echo "
        </div>
    ";
        }
        // line 103
        echo "</div>
";
    }

    // line 59
    public function block_page_body($context, array $blocks = array())
    {
        // line 60
        echo "                ";
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/page_body.tpl"), "default/layout/layout_2_col.tpl", 60)->display($context);
        // line 61
        echo "            ";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        // line 70
        echo "                ";
        if ( !(null === (isset($context["content"]) ? $context["content"] : null))) {
            // line 71
            echo "                    <section id=\"page\" class=\"";
            echo (isset($context["course_history_page"]) ? $context["course_history_page"] : null);
            echo "\">
                        ";
            // line 72
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
                    </section>
                ";
        }
        // line 75
        echo "            ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 75,  281 => 72,  276 => 71,  273 => 70,  270 => 69,  266 => 61,  263 => 60,  260 => 59,  255 => 103,  249 => 100,  246 => 99,  244 => 98,  240 => 96,  234 => 93,  231 => 92,  229 => 91,  226 => 90,  224 => 89,  221 => 88,  215 => 85,  212 => 84,  210 => 83,  207 => 82,  201 => 79,  198 => 78,  196 => 77,  193 => 76,  191 => 69,  188 => 68,  182 => 65,  179 => 64,  177 => 63,  174 => 62,  172 => 59,  169 => 58,  163 => 55,  160 => 54,  158 => 53,  153 => 51,  150 => 50,  144 => 47,  141 => 46,  139 => 45,  132 => 40,  126 => 37,  123 => 36,  121 => 35,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  71 => 21,  69 => 20,  66 => 19,  64 => 18,  61 => 17,  55 => 14,  52 => 13,  50 => 12,  46 => 10,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/layout_2_col.tpl", "C:\\wamp64\\www\\Chamilo-CVO-VOLT-1.11.4\\main\\template\\default\\layout\\layout_2_col.tpl");
    }
}
