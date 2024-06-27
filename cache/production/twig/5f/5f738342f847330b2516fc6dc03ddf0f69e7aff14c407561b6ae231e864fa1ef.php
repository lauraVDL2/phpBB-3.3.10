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

/* overall_footer.html */
class __TwigTemplate_ca5c70f84136b23c019f9a998add7002fca0aa1ef0255e5572270ed47a4012d1 extends \Twig\Template
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
        echo "\t\t";
        // line 2
        echo "\t</div>


";
        // line 5
        // line 6
        echo "
";
        // line 7
        $asset_file = "footer.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 8
        echo "
<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
\t<div id=\"last_username\">Bienvenue à ";
        // line 10
        echo ($context["LAST_USERNAME"] ?? null);
        echo "</div>
\t<div id=\"flex_footer\">
\t\t<div id=\"lp_case\">
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "lp_loop", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["lp_loop"]) {
            // line 14
            echo "\t\t\t<div class=\"f_lastpost\">
\t\t\t\t<a class=\"f_lastmessage\" href=\"./viewtopic.php?t=";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_TOPIC_ID", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_SUBJECT", [], "any", false, false, false, 15);
            echo "</a>
\t\t\t\t<div class=\"f_time\">";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_TIME", [], "any", false, false, false, 16);
            echo "</div>
\t\t\t\t<div style=\"color:#";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_COLOUR", [], "any", false, false, false, 17);
            echo "\" class=\"f_username\">";
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_USERNAME", [], "any", false, false, false, 17);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lp_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</div>
\t\t<div id=\"f_hours\">
\t\t\t<div id=\"connected_title\">Connectés ces dernières <span style=\"color:red;\">48</span> h</div>
\t\t\t<div id=\"connected_block\">";
        // line 23
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "</div>
\t\t</div>
\t\t<div id=\"f_stats\">
\t\t\t<div id=\"f_total_posts\">";
        // line 26
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</div>
\t\t\t<div id=\"f_members\">";
        // line 27
        echo ($context["TOTAL_USERS"] ?? null);
        echo "</div>
\t\t\t<div id=\"f_total_topics\">";
        // line 28
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "</div>
\t\t</div>
\t\t<div id=\"f_groups\">
\t\t\t<div class=\"group_d\" id=\"kiri_d\">Kiri : ";
        // line 31
        echo ($context["KIRI_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"iwa_d\">Iwa : ";
        // line 32
        echo ($context["IWA_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"suna_d\">Suna : ";
        // line 33
        echo ($context["SUNA_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"kumo_d\">Kumo : ";
        // line 34
        echo ($context["KUMO_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"konoha_d\">Konoha : ";
        // line 35
        echo ($context["KONOHA_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"nukenin_d\">Nukenin : ";
        // line 36
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div id=\"f_reverse\">
\t\t\t\t<progress id=\"kiri_p\" class=\"progress_p\" value=\"";
        // line 38
        echo ($context["KIRI_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>

\t\t\t\t<progress id=\"iwa_p\" class=\"progress_p\" value=\"";
        // line 40
        echo ($context["IWA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress> 

\t\t\t\t<progress id=\"suna_p\" class=\"progress_p\" value=\"";
        // line 42
        echo ($context["SUNA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>

\t\t\t\t<progress id=\"kumo_p\" class=\"progress_p\" value=\"";
        // line 44
        echo ($context["KUMO_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>

\t\t\t\t<progress id=\"konoha_p\" class=\"progress_p\" value=\"";
        // line 46
        echo ($context["KONOHA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>

\t\t\t\t<progress id=\"nukenin_p\" class=\"progress_p\" value=\"";
        // line 48
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 52
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 52)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 53
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 55
        // line 56
        echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
        // line 57
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t</p>
\t\t";
        // line 59
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 60
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
            // line 61
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 64
        echo "\t\t";
        // line 65
        echo "\t\t<p class=\"footer-row\" role=\"menu\">
\t\t\t<a class=\"footer-link\" href=\"";
        // line 66
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 67
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t</a>
\t\t\t|
\t\t\t<a class=\"footer-link\" href=\"";
        // line 70
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 71
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</span>
\t\t\t</a>
\t\t</p>
\t\t";
        // line 74
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 75
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 76
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 79
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 80
            echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 81
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "</a>
\t\t</p>
\t\t";
        }
        // line 84
        echo "\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 86
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 90
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 108
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 109
        echo "</div>

<script src=\"";
        // line 111
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 112
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 113
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 114
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 115
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 116
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 117
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 122
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 129
        echo "
";
        // line 130
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 131
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\tif (typeof window.cookieconsent === \"object\") {
\t\t\twindow.addEventListener(\"load\", function(){
\t\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\t\"palette\": {
\t\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\t\"content\": {
\t\t\t\t\t\t\"message\": \"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 149
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t</script>
";
        }
        // line 156
        echo "
";
        // line 157
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 158
        echo "
";
        // line 159
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 159)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 160
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 160);
        echo "

";
        // line 162
        // line 163
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 163,  478 => 162,  473 => 160,  459 => 159,  456 => 158,  451 => 157,  448 => 156,  438 => 149,  434 => 148,  430 => 147,  426 => 146,  405 => 131,  403 => 130,  400 => 129,  390 => 122,  383 => 117,  381 => 116,  367 => 115,  353 => 114,  346 => 113,  338 => 112,  334 => 111,  330 => 109,  326 => 108,  303 => 90,  288 => 86,  284 => 84,  276 => 81,  273 => 80,  270 => 79,  264 => 76,  261 => 75,  259 => 74,  253 => 71,  247 => 70,  241 => 67,  235 => 66,  232 => 65,  230 => 64,  224 => 61,  221 => 60,  219 => 59,  214 => 57,  211 => 56,  210 => 55,  206 => 53,  194 => 52,  185 => 48,  178 => 46,  171 => 44,  164 => 42,  157 => 40,  150 => 38,  145 => 36,  141 => 35,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  119 => 28,  115 => 27,  111 => 26,  105 => 23,  100 => 20,  89 => 17,  85 => 16,  79 => 15,  76 => 14,  72 => 13,  66 => 10,  62 => 8,  48 => 7,  45 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
