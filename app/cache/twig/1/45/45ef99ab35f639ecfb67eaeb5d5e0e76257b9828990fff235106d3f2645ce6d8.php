<?php

/* default/admin/settings_index.tpl */
class __TwigTemplate_2d8f25d973f958af757431c435ceaea9e07fd7203afe48a7f5a72cd56cdec534 extends Twig_Template
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
        echo "<script>
    \$(document).ready(function () {
        \$.ajax({
            url: '";
        // line 4
        echo (isset($context["web_admin_ajax_url"]) ? $context["web_admin_ajax_url"] : null);
        echo "?a=version',
            success: function (version) {
                \$(\".admin-block-version\").html(version);
            }
        });

        ";
        // line 10
        if ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin", array())) {
            // line 11
            echo "            (function (CKEDITOR) {
                CKEDITOR.replace('extra_content');
    
                var extraContentEditor = CKEDITOR.instances.extra_content;
    
                \$('button.admin-edit-block').on('click', function (e) {
                    e.preventDefault();
    
                    var \$self = \$(this);
    
                    var extraContent = \$.ajax('";
            // line 21
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_ajax", array());
            echo "admin.ajax.php', {
                        type: 'post',
                        data: {
                            a: 'get_extra_content',
                            block: \$self.data('id')
                        }
                    });
    
                    \$.when(extraContent).done(function (content) {
                        extraContentEditor.setData(content);
                        \$('#extra-block').val(\$self.data('id'));
                        \$('#modal-extra-title').text(\$self.data('label'));
    
                        \$('#modal-extra').modal('show');
                    });
                });
            })(window.CKEDITOR);
        ";
        }
        // line 39
        echo "    });
</script>

<section id=\"settings\">
    ";
        // line 43
        $context["columns"] = 2;
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["block_item"]) {
            // line 45
            echo "
        ";
            // line 46
            if (($this->getAttribute($context["loop"], "first", array()) || (0 == $this->getAttribute($context["loop"], "index0", array()) % (isset($context["columns"]) ? $context["columns"] : null)))) {
                // line 47
                echo "            <div class=\"row\">
        ";
            }
            // line 49
            echo "
        <div id=\"tabs-";
            // line 50
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"col-md-6\">
            <div class=\"panel panel-default ";
            // line 51
            echo $this->getAttribute($context["block_item"], "class", array());
            echo "\">
                <div class=\"panel-heading\">
                    ";
            // line 53
            echo $this->getAttribute($context["block_item"], "icon", array());
            echo " ";
            echo $this->getAttribute($context["block_item"], "label", array());
            echo "
                    ";
            // line 54
            if (($this->getAttribute($context["block_item"], "editable", array()) && $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin", array()))) {
                // line 55
                echo "                        <button type=\"button\" class=\"btn btn-link btn-sm admin-edit-block pull-right\"
                                data-label=\"";
                // line 56
                echo $this->getAttribute($context["block_item"], "label", array());
                echo "\" data-id=\"";
                echo $this->getAttribute($context["block_item"], "class", array());
                echo "\">
                            <img src=\"";
                // line 57
                echo Template::get_icon_path("edit.png", 22);
                echo "\" width=\"22\" height=\"22\" alt=\"";
                echo get_lang("Edit");
                echo "\"
                                 title=\"";
                // line 58
                echo get_lang("Edit");
                echo "\"/>
                        </button>
                    ";
            }
            // line 61
            echo "                </div>
                <div class=\"panel-body\">
                    <div style=\"display: block;\">
                        ";
            // line 64
            echo $this->getAttribute($context["block_item"], "search_form", array());
            echo "
                    </div>
                    ";
            // line 66
            if ( !(null === $this->getAttribute($context["block_item"], "items", array()))) {
                // line 67
                echo "                        <div class=\"block-items-admin\">
                            <ul class=\"list-items-admin\">
                                ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block_item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                    // line 70
                    echo "                                    <li>
                                        <a href=\"";
                    // line 71
                    echo $this->getAttribute($context["url"], "url", array());
                    echo "\">
                                            ";
                    // line 72
                    echo $this->getAttribute($context["url"], "label", array());
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                            </ul>
                        </div>
                    ";
            }
            // line 79
            echo "
                    ";
            // line 80
            if ( !(null === $this->getAttribute($context["block_item"], "extra", array()))) {
                // line 81
                echo "                        <div>
                            ";
                // line 82
                echo $this->getAttribute($context["block_item"], "extra", array());
                echo "
                        </div>
                    ";
            }
            // line 85
            echo "
                    ";
            // line 86
            if ($this->getAttribute($context["block_item"], "extraContent", array())) {
                // line 87
                echo "                        <div>";
                echo $this->getAttribute($context["block_item"], "extraContent", array());
                echo "</div>
                    ";
            }
            // line 89
            echo "                </div>
            </div>
        </div>

        ";
            // line 93
            if (($this->getAttribute($context["loop"], "last", array()) || (0 == $this->getAttribute($context["loop"], "index", array()) % (isset($context["columns"]) ? $context["columns"] : null)))) {
                // line 94
                echo "            </div>
        ";
            }
            // line 96
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "</section>

";
        // line 99
        if ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin", array())) {
            // line 100
            echo "    <div class=\"modal fade\" id=\"modal-extra\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 104
            echo get_lang("Close");
            echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"modal-extra-title\">";
            // line 107
            echo get_lang("Blocks");
            echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 110
            echo (isset($context["extraDataForm"]) ? $context["extraDataForm"] : null);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/admin/settings_index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 110,  255 => 107,  249 => 104,  243 => 100,  241 => 99,  237 => 97,  223 => 96,  219 => 94,  217 => 93,  211 => 89,  205 => 87,  203 => 86,  200 => 85,  194 => 82,  191 => 81,  189 => 80,  186 => 79,  181 => 76,  171 => 72,  167 => 71,  164 => 70,  160 => 69,  156 => 67,  154 => 66,  149 => 64,  144 => 61,  138 => 58,  132 => 57,  126 => 56,  123 => 55,  121 => 54,  115 => 53,  110 => 51,  106 => 50,  103 => 49,  99 => 47,  97 => 46,  94 => 45,  76 => 44,  74 => 43,  68 => 39,  47 => 21,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/admin/settings_index.tpl", "C:\\wamp64\\www\\Chamilo-CVO-VOLT-1.11.4\\main\\template\\default\\admin\\settings_index.tpl");
    }
}
