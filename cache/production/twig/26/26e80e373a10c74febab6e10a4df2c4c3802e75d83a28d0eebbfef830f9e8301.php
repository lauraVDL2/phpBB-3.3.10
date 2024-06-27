<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* acp_profile.html */
class __TwigTemplate_1081a5a7367795ddfd4ea7e23042d209793e560df532d79f32e80253857144eb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_profile.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_EDIT"] ?? null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXPLAIN");
            echo "</p>

\t";
            // line 13
            if (($context["ERROR_MSG"] ?? null)) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"add_profile_field\" method=\"post\" action=\"";
            // line 20
            echo ($context["U_ACTION"] ?? null);
            echo "\"";
            echo ($context["S_FORM_ENCTYPE"] ?? null);
            echo ">

\t";
            // line 22
            if (($context["S_STEP_ONE"] ?? null)) {
                // line 23
                echo "
\t\t";
                // line 24
                // line 25
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 27
                echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
                echo "</legend>
\t\t";
                // line 28
                // line 29
                echo "\t\t<dl>
\t\t\t<dt><label>";
                // line 30
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_TYPE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><strong>";
                // line 31
                echo ($context["FIELD_TYPE"] ?? null);
                echo "</strong></dd>
\t\t</dl>
\t\t";
                // line 33
                if (($context["S_EDIT_MODE"] ?? null)) {
                    // line 34
                    echo "\t\t<dl>
\t\t\t<dt><label>";
                    // line 35
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT_EXPLAIN");
                    echo "</span></dt>
\t\t\t<dd><input type=\"hidden\" name=\"field_ident\" value=\"";
                    // line 36
                    echo ($context["FIELD_IDENT"] ?? null);
                    echo "\" /><strong>";
                    echo ($context["FIELD_IDENT"] ?? null);
                    echo "</strong></dd>
\t\t</dl>
\t\t";
                } else {
                    // line 39
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"field_ident\">";
                    // line 40
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT_EXPLAIN");
                    echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"field_ident\" name=\"field_ident\" value=\"";
                    // line 41
                    echo ($context["FIELD_IDENT"] ?? null);
                    echo "\" /></dd>
\t\t</dl>
\t\t";
                }
                // line 44
                echo "\t\t<dl>
\t\t\t<dt><label for=\"field_no_view\">";
                // line 45
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_PROFILE_FIELD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_PROFILE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"field_no_view\" name=\"field_no_view\" value=\"0\"";
                // line 46
                if ( !($context["S_FIELD_NO_VIEW"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"field_no_view\" value=\"1\"";
                // line 47
                if (($context["S_FIELD_NO_VIEW"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                echo "</label></dd>
\t\t</dl>
\t\t";
                // line 49
                // line 50
                echo "\t\t</fieldset>

\t\t";
                // line 52
                // line 53
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 55
                echo $this->extensions['phpbb\template\twig\extension']->lang("VISIBILITY_OPTION");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_profile\">";
                // line 57
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_AT_PROFILE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_AT_PROFILE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_profile\" name=\"field_show_profile\" value=\"1\"";
                // line 58
                if (($context["S_SHOW_PROFILE"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_reg\">";
                // line 61
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_AT_REGISTER");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_AT_REGISTER_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_reg\" name=\"field_show_on_reg\" value=\"1\"";
                // line 62
                if (($context["S_SHOW_ON_REG"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_pm\">";
                // line 65
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_PM");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_PM_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_pm\" name=\"field_show_on_pm\" value=\"1\"";
                // line 66
                if (($context["S_SHOW_ON_PM"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_vt\">";
                // line 69
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_VT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_VT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_vt\" name=\"field_show_on_vt\" value=\"1\"";
                // line 70
                if (($context["S_SHOW_ON_VT"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_on_ml\">";
                // line 73
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_MEMBERLIST");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_ON_MEMBERLIST_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_on_ml\" name=\"field_show_on_ml\" value=\"1\"";
                // line 74
                if (($context["S_SHOW_ON_MEMBERLIST"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_required\">";
                // line 77
                echo $this->extensions['phpbb\template\twig\extension']->lang("REQUIRED_FIELD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REQUIRED_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_required\" name=\"field_required\" value=\"1\"";
                // line 78
                if (($context["S_FIELD_REQUIRED"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_show_novalue\">";
                // line 81
                echo $this->extensions['phpbb\template\twig\extension']->lang("SHOW_NOVALUE_FIELD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SHOW_NOVALUE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_show_novalue\" name=\"field_show_novalue\" value=\"1\"";
                // line 82
                if (($context["S_FIELD_SHOW_NOVALUE"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"field_hide\">";
                // line 85
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_PROFILE_FIELD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_PROFILE_FIELD_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_hide\" name=\"field_hide\" value=\"1\"";
                // line 86
                if (($context["S_FIELD_HIDE"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t";
                // line 88
                // line 89
                echo "\t\t<dl>
\t\t\t<dt><label for=\"field_is_contact\">";
                // line 90
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IS_CONTACT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IS_CONTACT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"field_is_contact\" name=\"field_is_contact\" value=\"1\"";
                // line 91
                if (($context["S_FIELD_CONTACT"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t\t<dd><input class=\"text medium\" type=\"text\" name=\"field_contact_desc\" id=\"field_contact_desc\" value=\"";
                // line 92
                echo ($context["FIELD_CONTACT_DESC"] ?? null);
                echo "\" /> <label for=\"field_contact_desc\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_CONTACT_DESC");
                echo "</label></dd>
\t\t\t<dd><input class=\"text medium\" type=\"text\" name=\"field_contact_url\" id=\"field_contact_url\" value=\"";
                // line 93
                echo ($context["FIELD_CONTACT_URL"] ?? null);
                echo "\" /> <label for=\"field_contact_url\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_CONTACT_URL");
                echo "</label></dd>
\t\t\t";
                // line 94
                // line 95
                echo "\t\t</dl>
\t\t";
                // line 96
                // line 97
                echo "\t\t</fieldset>

\t\t";
                // line 99
                // line 100
                echo "
\t\t";
                // line 101
                if (($context["S_EDIT_MODE"] ?? null)) {
                    // line 102
                    echo "\t\t\t<fieldset class=\"quick\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"save\" value=\"";
                    // line 103
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE");
                    echo "\" />
\t\t\t</fieldset>
\t\t";
                }
                // line 106
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 108
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANG_SPECIFIC");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"lang_name\">";
                // line 110
                echo $this->extensions['phpbb\template\twig\extension']->lang("USER_FIELD_NAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"lang_name\" name=\"lang_name\" value=\"";
                // line 111
                echo ($context["LANG_NAME"] ?? null);
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"lang_explain\">";
                // line 114
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_DESCRIPTION");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_DESCRIPTION_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><textarea id=\"lang_explain\" name=\"lang_explain\" rows=\"3\" cols=\"80\">";
                // line 115
                echo ($context["LANG_EXPLAIN"] ?? null);
                echo "</textarea></dd>
\t\t</dl>
\t\t";
                // line 117
                if ((($context["S_TEXT"] ?? null) || ($context["S_STRING"] ?? null))) {
                    // line 118
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang_default_value\">";
                    // line 119
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_VALUE");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_VALUE_EXPLAIN");
                    echo "</span></dt>
\t\t\t\t<dd>";
                    // line 120
                    if (($context["S_STRING"] ?? null)) {
                        echo "<input class=\"text medium\" type=\"text\" id=\"lang_default_value\" name=\"lang_default_value\" value=\"";
                        echo ($context["LANG_DEFAULT_VALUE"] ?? null);
                        echo "\" />";
                    } else {
                        echo "<textarea id=\"lang_default_value\" name=\"lang_default_value\" rows=\"5\" cols=\"80\">";
                        echo ($context["LANG_DEFAULT_VALUE"] ?? null);
                        echo "</textarea>";
                    }
                    echo "</dd>
\t\t\t</dl>
\t\t";
                }
                // line 123
                echo "\t\t";
                if ((($context["S_BOOL"] ?? null) || ($context["S_DROPDOWN"] ?? null))) {
                    // line 124
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang_options\">";
                    // line 125
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ENTRIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label>
\t\t\t\t\t";
                    // line 126
                    if ((($context["S_EDIT_MODE"] ?? null) && ($context["S_DROPDOWN"] ?? null))) {
                        // line 127
                        echo "\t\t\t\t\t\t<br /><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_DROPDOWN_LANG_EXPLAIN");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 129
                        echo "\t\t\t\t\t\t<br /><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LANG_OPTIONS_EXPLAIN");
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 131
                    echo "\t\t\t\t</dt>
\t\t\t";
                    // line 132
                    if (($context["S_DROPDOWN"] ?? null)) {
                        // line 133
                        echo "\t\t\t\t<dd><textarea id=\"lang_options\" name=\"lang_options\" rows=\"5\" cols=\"80\">";
                        echo ($context["LANG_OPTIONS"] ?? null);
                        echo "</textarea></dd>
\t\t\t";
                    } else {
                        // line 135
                        echo "\t\t\t\t<dd><input class=\"medium\" id=\"lang_options\" name=\"lang_options[0]\" value=\"";
                        echo ($context["FIRST_LANG_OPTION"] ?? null);
                        echo "\" /> ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FIRST_OPTION");
                        echo "</dd>
\t\t\t\t<dd><input class=\"medium\" name=\"lang_options[1]\" value=\"";
                        // line 136
                        echo ($context["SECOND_LANG_OPTION"] ?? null);
                        echo "\" /> ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("SECOND_OPTION");
                        echo "</dd>
\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t</dl>
\t\t";
                }
                // line 140
                echo "\t\t";
                // line 141
                echo "\t\t</fieldset>

\t\t<fieldset class=\"quick\">
\t\t\t";
                // line 144
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 145
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"next\" value=\"";
                // line 146
                echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_TYPE_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t";
            } elseif (            // line 149
($context["S_STEP_TWO"] ?? null)) {
                // line 150
                echo "
\t\t<fieldset>
\t\t\t<legend>";
                // line 152
                echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
                echo "</legend>
\t\t";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "option", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 154
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "TITLE", [], "any", false, false, false, 155);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label>";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "EXPLAIN", [], "any", false, false, false, 155)) {
                        echo "<br /><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "EXPLAIN", [], "any", false, false, false, 155);
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "FIELD", [], "any", false, false, false, 156);
                    echo "</dd>
\t\t\t</dl>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 161
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo ";\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"prev\" value=\"";
                // line 162
                echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_BASIC_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 165
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo ";\">
\t\t\t";
                // line 166
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 167
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"next\" value=\"";
                // line 168
                echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT_STEP");
                echo "\" />
\t\t</fieldset>

\t";
            } elseif (            // line 171
($context["S_STEP_THREE"] ?? null)) {
                // line 172
                echo "
\t\t";
                // line 173
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "options", [], "any", false, false, false, 173));
                foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                    // line 174
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["options"], "LANGUAGE", [], "any", false, false, false, 175);
                    echo "</legend>
\t\t\t";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["options"], "field", [], "any", false, false, false, 176));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 177
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                        // line 178
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "L_TITLE", [], "any", false, false, false, 178);
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo "</label>";
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "L_EXPLAIN", [], "any", false, false, false, 178)) {
                            echo "<br /><span>";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "L_EXPLAIN", [], "any", false, false, false, 178);
                            echo "</span>";
                        }
                        echo "</dt>
\t\t\t\t\t";
                        // line 179
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "FIELD", [], "any", false, false, false, 179);
                        echo "
\t\t\t\t</dl>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "\t\t\t</fieldset>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "
\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 185
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo ";\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"prev\" value=\"";
                // line 186
                echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_TYPE_OPTIONS");
                echo "\" />
\t\t</fieldset>

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 189
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo ";\">
\t\t\t";
                // line 190
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t<input class=\"button1\" type=\"submit\" name=\"save\" value=\"";
                // line 191
                echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE");
                echo "\" />
\t\t\t";
                // line 192
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>

\t";
            }
            // line 196
            echo "
\t</form>

";
        } else {
            // line 200
            echo "
\t<h1>";
            // line 201
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_CUSTOM_PROFILE_FIELDS");
            echo "</h1>

\t";
            // line 203
            if (($context["S_NEED_EDIT"] ?? null)) {
                // line 204
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 205
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 206
                echo $this->extensions['phpbb\template\twig\extension']->lang("CUSTOM_FIELDS_NOT_TRANSLATED");
                echo "</p>
\t\t</div>
\t";
            }
            // line 209
            echo "
\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 213
            echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_IDENT");
            echo "</th>
\t\t<th>";
            // line 214
            echo $this->extensions['phpbb\template\twig\extension']->lang("FIELD_TYPE");
            echo "</th>
\t\t<th colspan=\"2\">";
            // line 215
            echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "fields", [], "any", false, false, false, 219));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
                // line 220
                echo "\t<tr>
\t\t<td>";
                // line 221
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "FIELD_IDENT", [], "any", false, false, false, 221);
                echo "</td>
\t\t<td>";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "FIELD_TYPE", [], "any", false, false, false, 222);
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_ACTIVATE_DEACTIVATE", [], "any", false, false, false, 223);
                echo "\" data-ajax=\"activate_deactivate\">";
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "L_ACTIVATE_DEACTIVATE", [], "any", false, false, false, 223);
                echo "</a>";
                if (twig_get_attribute($this->env, $this->source, $context["fields"], "S_NEED_EDIT", [], "any", false, false, false, 223)) {
                    echo " | <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_TRANSLATE", [], "any", false, false, false, 223);
                    echo "\" style=\"color: red;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TRANSLATE");
                    echo "</a>";
                }
                echo "</td>

\t\t<td class=\"actions\" style=\"width: 80px;\">
\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 226
                echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                echo "</span>
\t\t\t<span class=\"up\"><a href=\"";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_MOVE_UP", [], "any", false, false, false, 227);
                echo "\" data-ajax=\"row_up\">";
                echo ($context["ICON_MOVE_UP"] ?? null);
                echo "</a></span>
\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 228
                echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                echo "</span>
\t\t\t<span class=\"down\"><a href=\"";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_MOVE_DOWN", [], "any", false, false, false, 229);
                echo "\" data-ajax=\"row_down\">";
                echo ($context["ICON_MOVE_DOWN"] ?? null);
                echo "</a></span>
\t\t\t";
                // line 230
                if ( !twig_get_attribute($this->env, $this->source, $context["fields"], "S_NEED_EDIT", [], "any", false, false, false, 230)) {
                    // line 231
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_EDIT", [], "any", false, false, false, 231);
                    echo "\">";
                    echo ($context["ICON_EDIT"] ?? null);
                    echo "</a>
\t\t\t";
                } else {
                    // line 233
                    echo "\t\t\t\t";
                    echo ($context["ICON_EDIT_DISABLED"] ?? null);
                    echo "
\t\t\t";
                }
                // line 235
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["fields"], "U_DELETE", [], "any", false, false, false, 235);
                echo "\" data-ajax=\"row_delete\">";
                echo ($context["ICON_DELETE"] ?? null);
                echo "</a>
\t\t</td>

\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 240
                echo "\t<tr class=\"row3\">
\t\t<td colspan=\"4\">";
                // line 241
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_NO_ITEMS");
                echo "</td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "\t</tbody>
\t</table>

\t<form id=\"profile_fields\" method=\"post\" action=\"";
            // line 247
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t<select name=\"field_type\">";
            // line 250
            echo ($context["S_TYPE_OPTIONS"] ?? null);
            echo "</select>
\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
            // line 251
            echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_NEW_FIELD");
            echo "\" />
\t\t<input type=\"hidden\" name=\"create\" value=\"1\" />
\t\t";
            // line 253
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 258
        echo "
";
        // line 259
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_profile.html", 259)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  841 => 259,  838 => 258,  830 => 253,  825 => 251,  821 => 250,  815 => 247,  810 => 244,  801 => 241,  798 => 240,  785 => 235,  779 => 233,  771 => 231,  769 => 230,  763 => 229,  759 => 228,  753 => 227,  749 => 226,  733 => 223,  729 => 222,  725 => 221,  722 => 220,  717 => 219,  710 => 215,  706 => 214,  702 => 213,  696 => 209,  690 => 206,  686 => 205,  683 => 204,  681 => 203,  676 => 201,  673 => 200,  667 => 196,  660 => 192,  656 => 191,  652 => 190,  648 => 189,  642 => 186,  638 => 185,  635 => 184,  628 => 182,  619 => 179,  608 => 178,  605 => 177,  601 => 176,  597 => 175,  594 => 174,  590 => 173,  587 => 172,  585 => 171,  579 => 168,  575 => 167,  571 => 166,  567 => 165,  561 => 162,  557 => 161,  553 => 159,  544 => 156,  533 => 155,  530 => 154,  526 => 153,  522 => 152,  518 => 150,  516 => 149,  510 => 146,  506 => 145,  502 => 144,  497 => 141,  495 => 140,  491 => 138,  484 => 136,  477 => 135,  471 => 133,  469 => 132,  466 => 131,  460 => 129,  454 => 127,  452 => 126,  447 => 125,  444 => 124,  441 => 123,  427 => 120,  420 => 119,  417 => 118,  415 => 117,  410 => 115,  403 => 114,  397 => 111,  392 => 110,  387 => 108,  383 => 106,  377 => 103,  374 => 102,  372 => 101,  369 => 100,  368 => 99,  364 => 97,  363 => 96,  360 => 95,  359 => 94,  353 => 93,  347 => 92,  341 => 91,  334 => 90,  331 => 89,  330 => 88,  323 => 86,  316 => 85,  308 => 82,  301 => 81,  293 => 78,  286 => 77,  278 => 74,  271 => 73,  263 => 70,  256 => 69,  248 => 66,  241 => 65,  233 => 62,  226 => 61,  218 => 58,  211 => 57,  206 => 55,  202 => 53,  201 => 52,  197 => 50,  196 => 49,  187 => 47,  179 => 46,  172 => 45,  169 => 44,  163 => 41,  156 => 40,  153 => 39,  145 => 36,  138 => 35,  135 => 34,  133 => 33,  128 => 31,  121 => 30,  118 => 29,  117 => 28,  113 => 27,  109 => 25,  108 => 24,  105 => 23,  103 => 22,  96 => 20,  93 => 19,  87 => 16,  83 => 15,  80 => 14,  78 => 13,  73 => 11,  68 => 9,  59 => 7,  56 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_profile.html", "");
    }
}
