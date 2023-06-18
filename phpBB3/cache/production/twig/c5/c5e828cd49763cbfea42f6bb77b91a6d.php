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

/* acp_users_prefs.html */
class __TwigTemplate_b65093d09ed1fded0f1a0404ecccc5ae extends \Twig\Template
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
        echo "<script>
// <![CDATA[
\tvar default_dateformat = '";
        // line 3
        echo ($context["A_DEFAULT_DATEFORMAT"] ?? null);
        echo "';
// ]]>
</script>

\t<form id=\"user_prefs\" method=\"post\" action=\"";
        // line 7
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t";
        // line 8
        // line 9
        echo "\t<fieldset>
\t\t<legend>";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_PREFS_PERSONAL");
        echo "</legend>
\t";
        // line 11
        // line 12
        echo "\t<dl> 
\t\t<dt><label for=\"viewemail\">";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("SHOW_EMAIL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"viewemail\" value=\"1\"";
        // line 14
        if (($context["VIEW_EMAIL"] ?? null)) {
            echo " id=\"viewemail\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"viewemail\" value=\"0\"";
        // line 15
        if ( !($context["VIEW_EMAIL"] ?? null)) {
            echo " id=\"viewemail\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"massemail\">";
        // line 18
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADMIN_EMAIL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"massemail\" value=\"1\"";
        // line 19
        if (($context["MASS_EMAIL"] ?? null)) {
            echo " id=\"massemail\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"massemail\" value=\"0\"";
        // line 20
        if ( !($context["MASS_EMAIL"] ?? null)) {
            echo " id=\"massemail\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"allowpm\">";
        // line 23
        echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOW_PM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOW_PM_EXPLAIN");
        echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"allowpm\" value=\"1\"";
        // line 24
        if (($context["ALLOW_PM"] ?? null)) {
            echo " id=\"allowpm\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"allowpm\" value=\"0\"";
        // line 25
        if ( !($context["ALLOW_PM"] ?? null)) {
            echo " id=\"allowpm\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"hideonline\">";
        // line 28
        echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_ONLINE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"hideonline\" value=\"1\"";
        // line 29
        if (($context["HIDE_ONLINE"] ?? null)) {
            echo " id=\"hideonline\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"hideonline\" value=\"0\"";
        // line 30
        if ( !($context["HIDE_ONLINE"] ?? null)) {
            echo " id=\"hideonline\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"notifymethod\">";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"notifymethod\" value=\"0\"";
        // line 34
        if (($context["NOTIFY_EMAIL"] ?? null)) {
            echo " id=\"notifymethod\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD_EMAIL");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"notifymethod\" value=\"1\"";
        // line 35
        if (($context["NOTIFY_IM"] ?? null)) {
            echo " id=\"notifymethod\" checked=\"checked\"";
        }
        if (($context["S_JABBER_DISABLED"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD_IM");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"notifymethod\" value=\"2\"";
        // line 36
        if (($context["NOTIFY_BOTH"] ?? null)) {
            echo " id=\"notifymethod\" checked=\"checked\"";
        }
        if (($context["S_JABBER_DISABLED"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD_BOTH");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"notifypm\">";
        // line 39
        echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_ON_PM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"notifypm\" value=\"1\"";
        // line 40
        if (($context["NOTIFY_PM"] ?? null)) {
            echo " id=\"notifypm\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"notifypm\" value=\"0\"";
        // line 41
        if ( !($context["NOTIFY_PM"] ?? null)) {
            echo " id=\"notifypm\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"lang\">";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_LANGUAGE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><select id=\"lang\" name=\"lang\">";
        // line 45
        echo ($context["S_LANG_OPTIONS"] ?? null);
        echo "</select></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"style\">";
        // line 48
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_STYLE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><select id=\"style\" name=\"style\">";
        // line 49
        echo ($context["S_STYLE_OPTIONS"] ?? null);
        echo "</select></dd>
\t</dl>
\t";
        // line 51
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "acp_users_prefs.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 52
        echo "\t<dl> 
\t\t<dt><label for=\"dateoptions\">";
        // line 53
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DATE_FORMAT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DATE_FORMAT_EXPLAIN");
        echo "</span></dt>
\t\t<dd><select name=\"dateoptions\" id=\"dateoptions\" onchange=\"if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('dateformat').value = default_dateformat; } else { document.getElementById('dateformat').value = this.value; }\">";
        // line 54
        echo ($context["S_DATEFORMAT_OPTIONS"] ?? null);
        echo "</select></dd>
\t\t<dd><div id=\"custom_date\"";
        // line 55
        if ( !($context["S_CUSTOM_DATEFORMAT"] ?? null)) {
            echo " style=\"display:none;\"";
        }
        echo "><input type=\"text\" name=\"dateformat\" id=\"dateformat\" value=\"";
        echo ($context["DATE_FORMAT"] ?? null);
        echo "\" maxlength=\"64\" /></div></dd>
\t</dl>
\t";
        // line 57
        // line 58
        echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 61
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_PREFS_POST");
        echo "</legend>
\t";
        // line 62
        // line 63
        echo "\t<dl> 
\t\t<dt><label for=\"bbcode\">";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_BBCODE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"bbcode\" value=\"1\"";
        // line 65
        if (($context["BBCODE"] ?? null)) {
            echo " id=\"bbcode\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"bbcode\" value=\"0\"";
        // line 66
        if ( !($context["BBCODE"] ?? null)) {
            echo " id=\"bbcode\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"smilies\">";
        // line 69
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_SMILIES");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"smilies\" value=\"1\"";
        // line 70
        if (($context["SMILIES"] ?? null)) {
            echo " id=\"smilies\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"smilies\" value=\"0\"";
        // line 71
        if ( !($context["SMILIES"] ?? null)) {
            echo " id=\"smilies\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"sig\">";
        // line 74
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_ADD_SIG");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"sig\" value=\"1\"";
        // line 75
        if (($context["ATTACH_SIG"] ?? null)) {
            echo " id=\"sig\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"sig\" value=\"0\"";
        // line 76
        if ( !($context["ATTACH_SIG"] ?? null)) {
            echo " id=\"sig\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"notify\">";
        // line 79
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEFAULT_NOTIFY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"notify\" value=\"1\"";
        // line 80
        if (($context["NOTIFY"] ?? null)) {
            echo " id=\"notify\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"notify\" value=\"0\"";
        // line 81
        if ( !($context["NOTIFY"] ?? null)) {
            echo " id=\"notify\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t";
        // line 83
        // line 84
        echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 87
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_PREFS_VIEW");
        echo "</legend>
\t";
        // line 88
        // line 89
        echo "\t<dl> 
\t\t<dt><label for=\"view_images\">";
        // line 90
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_IMAGES");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"view_images\" value=\"1\"";
        // line 91
        if (($context["VIEW_IMAGES"] ?? null)) {
            echo " id=\"view_images\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"view_images\" value=\"0\"";
        // line 92
        if ( !($context["VIEW_IMAGES"] ?? null)) {
            echo " id=\"view_images\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"view_flash\">";
        // line 95
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_FLASH");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"view_flash\" value=\"1\"";
        // line 96
        if (($context["VIEW_FLASH"] ?? null)) {
            echo " id=\"view_flash\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"view_flash\" value=\"0\"";
        // line 97
        if ( !($context["VIEW_FLASH"] ?? null)) {
            echo " id=\"view_flash\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"view_smilies\">";
        // line 100
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_SMILIES");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"view_smilies\" value=\"1\"";
        // line 101
        if (($context["VIEW_SMILIES"] ?? null)) {
            echo " id=\"view_smilies\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"view_smilies\" value=\"0\"";
        // line 102
        if ( !($context["VIEW_SMILIES"] ?? null)) {
            echo " id=\"view_smilies\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"view_sigs\">";
        // line 105
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_SIGS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"view_sigs\" value=\"1\"";
        // line 106
        if (($context["VIEW_SIGS"] ?? null)) {
            echo " id=\"view_sigs\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"view_sigs\" value=\"0\"";
        // line 107
        if ( !($context["VIEW_SIGS"] ?? null)) {
            echo " id=\"view_sigss\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"view_avatars\">";
        // line 110
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_AVATARS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"view_avatars\" value=\"1\"";
        // line 111
        if (($context["VIEW_AVATARS"] ?? null)) {
            echo " id=\"view_avatars\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"view_avatars\" value=\"0\"";
        // line 112
        if ( !($context["VIEW_AVATARS"] ?? null)) {
            echo " id=\"view_avatars\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"view_wordcensor\">";
        // line 115
        echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_CENSORS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"view_wordcensor\" value=\"1\"";
        // line 116
        if (($context["VIEW_WORDCENSOR"] ?? null)) {
            echo " id=\"view_wordcensor\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"view_wordcensor\" value=\"0\"";
        // line 117
        if ( !($context["VIEW_WORDCENSOR"] ?? null)) {
            echo " id=\"view_wordcensor\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label>";
        // line 120
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPICS_DAYS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 121
        echo ($context["S_TOPIC_SORT_DAYS"] ?? null);
        echo "</dd>
\t</dl>
\t<dl> 
\t\t<dt><label>";
        // line 124
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPICS_KEY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 125
        echo ($context["S_TOPIC_SORT_KEY"] ?? null);
        echo "</dd>
\t</dl>
\t<dl> 
\t\t<dt><label>";
        // line 128
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPICS_DIR");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 129
        echo ($context["S_TOPIC_SORT_DIR"] ?? null);
        echo "</dd>
\t</dl>
\t<dl> 
\t\t<dt><label>";
        // line 132
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_POSTS_DAYS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 133
        echo ($context["S_POST_SORT_DAYS"] ?? null);
        echo "</dd>
\t</dl>
\t<dl> 
\t\t<dt><label>";
        // line 136
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_POSTS_KEY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 137
        echo ($context["S_POST_SORT_KEY"] ?? null);
        echo "</dd>
\t</dl>
\t<dl> 
\t\t<dt><label>";
        // line 140
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_POSTS_DIR");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 141
        echo ($context["S_POST_SORT_DIR"] ?? null);
        echo "</dd>
\t</dl>
\t";
        // line 143
        // line 144
        echo "\t</fieldset>
\t";
        // line 145
        // line 146
        echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 147
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />
\t\t";
        // line 148
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>

\t</form>
";
    }

    public function getTemplateName()
    {
        return "acp_users_prefs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 148,  606 => 147,  603 => 146,  602 => 145,  599 => 144,  598 => 143,  593 => 141,  588 => 140,  582 => 137,  577 => 136,  571 => 133,  566 => 132,  560 => 129,  555 => 128,  549 => 125,  544 => 124,  538 => 121,  533 => 120,  523 => 117,  515 => 116,  510 => 115,  500 => 112,  492 => 111,  487 => 110,  477 => 107,  469 => 106,  464 => 105,  454 => 102,  446 => 101,  441 => 100,  431 => 97,  423 => 96,  418 => 95,  408 => 92,  400 => 91,  395 => 90,  392 => 89,  391 => 88,  387 => 87,  382 => 84,  381 => 83,  372 => 81,  364 => 80,  359 => 79,  349 => 76,  341 => 75,  336 => 74,  326 => 71,  318 => 70,  313 => 69,  303 => 66,  295 => 65,  290 => 64,  287 => 63,  286 => 62,  282 => 61,  277 => 58,  276 => 57,  267 => 55,  263 => 54,  256 => 53,  253 => 52,  241 => 51,  236 => 49,  231 => 48,  225 => 45,  220 => 44,  210 => 41,  202 => 40,  197 => 39,  184 => 36,  173 => 35,  165 => 34,  158 => 33,  148 => 30,  140 => 29,  135 => 28,  125 => 25,  117 => 24,  110 => 23,  100 => 20,  92 => 19,  87 => 18,  77 => 15,  69 => 14,  64 => 13,  61 => 12,  60 => 11,  56 => 10,  53 => 9,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_users_prefs.html", "");
    }
}
