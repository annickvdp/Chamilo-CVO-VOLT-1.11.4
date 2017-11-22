<?php

/* default/layout/menu.tpl */
class __TwigTemplate_f14cb24a808486f3aa827c04e5bf1b0a4421948596f22cad01645cf52b9784c9 extends Twig_Template
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
        echo "
<nav id=\"menubar\" class=\"navbar navbar-default\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#menuone\"
                    aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web", array());
        echo "\">";
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "site_name", array());
        echo "</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"menuone\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                    <li class=\"";
            echo $this->getAttribute($context["item"], "key", array());
            echo " ";
            echo $this->getAttribute($context["item"], "current", array());
            echo "\">
                        <a href=\"";
            // line 19
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" ";
            echo (($this->getAttribute($context["item"], "target", array())) ? ((("target=\"" . $this->getAttribute($context["item"], "target", array())) . "\"")) : (""));
            echo " title=\"";
            echo $this->getAttribute($context["item"], "title", array());
            echo "\">
                            ";
            // line 20
            echo $this->getAttribute($context["item"], "title", array());
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </ul>
            ";
        // line 25
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged", array()) == 1)) {
            // line 26
            echo "                <script>
                    \$(document).ready(function () {
                        \$.get('";
            // line 28
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main", array());
            echo "inc/ajax/message.ajax.php?a=get_count_message', function(data){
                            var message = data;
                            if( message === \"0\"){
                                \$(\"#count_message_li\").addClass('hidden');
                            } else {
                                \$(\"#count_message_li\").removeClass('hidden');
                                \$(\"#count_message\").append(message);
                            }
                        });
                    });
                </script>
                
                <ul class=\"nav navbar-nav navbar-right\">
                    <li id=\"count_message_li\" class=\"hidden\">
                        <a href=\"";
            // line 42
            echo (isset($context["message_url"]) ? $context["message_url"] : null);
            echo "\">
                            <span id=\"count_message\" class=\"badge badge-warning\"></span>
                        </a>
                    </li>
                    ";
            // line 46
            if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "status", array()) != 6)) {
                // line 47
                echo "                        <li class=\"dropdown avatar-user\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                               aria-expanded=\"false\">
                                
                                <img class=\"img-circle\" src=\"";
                // line 51
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_small", array());
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "\"/>
                                <span class=\"username-movil\">";
                // line 52
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "</span>
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li class=\"user-header\">
                                    <div class=\"text-center\">
                                        <img class=\"img-circle\" src=\"";
                // line 58
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_medium", array());
                echo "\"
                                             alt=\"";
                // line 59
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "\"/>
                                        <p class=\"name\"><a href=\"";
                // line 60
                echo (isset($context["profile_url"]) ? $context["profile_url"] : null);
                echo "\">";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name", array());
                echo "</a></p>
                                        <p><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> ";
                // line 61
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "email", array());
                echo "</p>
                                    </div>
                                </li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"user-body\">
                                    <a title=\"";
                // line 66
                echo get_lang("Inbox");
                echo "\" href=\"";
                echo (isset($context["message_url"]) ? $context["message_url"] : null);
                echo "\">
                                        <em class=\"fa fa-envelope\" aria-hidden=\"true\"></em> ";
                // line 67
                echo get_lang("Inbox");
                echo "
                                    </a>
                                </li>
                                ";
                // line 70
                if ((isset($context["certificate_url"]) ? $context["certificate_url"] : null)) {
                    // line 71
                    echo "                                    <li class=\"user-body\">
                                        <a title=\"";
                    // line 72
                    echo get_lang("MyCertificates");
                    echo "\" href=\"";
                    echo (isset($context["certificate_url"]) ? $context["certificate_url"] : null);
                    echo "\">
                                            <em class=\"fa fa-graduation-cap\"
                                                aria-hidden=\"true\"></em> ";
                    // line 74
                    echo get_lang("MyCertificates");
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                // line 78
                echo "
                                <li class=\"user-body\">
                                    <a id=\"logout_button\" title=\"";
                // line 80
                echo get_lang("Logout");
                echo "\" href=\"";
                echo (isset($context["logout_link"]) ? $context["logout_link"] : null);
                echo "\">
                                        <em class=\"fa fa-sign-out\"></em> ";
                // line 81
                echo get_lang("Logout");
                echo "
                                    </a>
                                </li>
                            </ul>
                        </li>
                    ";
            }
            // line 87
            echo "                </ul>
            ";
        }
        // line 89
        echo "        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 89,  199 => 87,  190 => 81,  184 => 80,  180 => 78,  173 => 74,  166 => 72,  163 => 71,  161 => 70,  155 => 67,  149 => 66,  141 => 61,  135 => 60,  131 => 59,  127 => 58,  118 => 52,  112 => 51,  106 => 47,  104 => 46,  97 => 42,  80 => 28,  76 => 26,  74 => 25,  71 => 24,  61 => 20,  53 => 19,  46 => 18,  42 => 17,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/menu.tpl", "C:\\wamp64\\www\\Chamilo-CVO-VOLT-1.11.4\\main\\template\\default\\layout\\menu.tpl");
    }
}
