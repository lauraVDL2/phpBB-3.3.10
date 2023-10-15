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
\t<div id=\"flex_footer\">
\t\t<div id=\"lp_case\">
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "lp_loop", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["lp_loop"]) {
            // line 13
            echo "\t\t\t<div class=\"f_lastpost\">
\t\t\t\t<a class=\"f_lastmessage\" href=\"./viewtopic.php?t=";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_TOPIC_ID", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_SUBJECT", [], "any", false, false, false, 14);
            echo "</a>
\t\t\t\t<div class=\"f_time\">";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_TIME", [], "any", false, false, false, 15);
            echo "</div>
\t\t\t\t<div style=\"color:#";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_COLOUR", [], "any", false, false, false, 16);
            echo "\" class=\"f_username\">";
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_USERNAME", [], "any", false, false, false, 16);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lp_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</div>
\t\t<div id=\"f_hours\">
\t\t\t<div id=\"connected_title\">Connectés ces dernières <span style=\"color:red;\">48</span> h</div>
\t\t\t<div id=\"connected_block\">";
        // line 22
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "</div>
\t\t</div>
\t\t<div id=\"f_stats\">
\t\t\t<div id=\"f_total_posts\">";
        // line 25
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</div>
\t\t\t<div id=\"f_members\">";
        // line 26
        echo ($context["TOTAL_USERS"] ?? null);
        echo "</div>
\t\t\t<div id=\"f_total_topics\">";
        // line 27
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "</div>
\t\t</div>
\t\t<div id=\"f_groups\">
\t\t\t<div class=\"group_d\" id=\"kiri_d\">Kiri : ";
        // line 30
        echo ($context["KIRI_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"iwa_d\">Iwa : ";
        // line 31
        echo ($context["IWA_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"suna_d\">Suna : ";
        // line 32
        echo ($context["SUNA_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"kumo_d\">Kumo : ";
        // line 33
        echo ($context["KUMO_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"konoha_d\">Konoha : ";
        // line 34
        echo ($context["KONOHA_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div class=\"group_d\" id=\"nukenin_d\">Nukenin : ";
        // line 35
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo " ninjas</div>
\t\t\t<div id=\"f_reverse\">
\t\t\t\t<progress id=\"kiri_p\" class=\"progress_p\" value=\"";
        // line 37
        echo ($context["KIRI_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>

\t\t\t\t<progress id=\"iwa_p\" class=\"progress_p\" value=\"";
        // line 39
        echo ($context["IWA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress> 

\t\t\t\t<progress id=\"suna_p\" class=\"progress_p\" value=\"";
        // line 41
        echo ($context["SUNA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>

\t\t\t\t<progress id=\"kumo_p\" class=\"progress_p\" value=\"";
        // line 43
        echo ($context["KUMO_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>

\t\t\t\t<progress id=\"konoha_p\" class=\"progress_p\" value=\"";
        // line 45
        echo ($context["KONOHA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>

\t\t\t\t<progress id=\"nukenin_p\" class=\"progress_p\" value=\"";
        // line 47
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 51
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 52
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 54
        // line 55
        echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
        // line 56
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t</p>
\t\t";
        // line 58
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 59
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
            // line 60
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 63
        echo "\t\t";
        // line 64
        echo "\t\t<p class=\"footer-row\" role=\"menu\">
\t\t\t<a class=\"footer-link\" href=\"";
        // line 65
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 66
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t</a>
\t\t\t|
\t\t\t<a class=\"footer-link\" href=\"";
        // line 69
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 70
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</span>
\t\t\t</a>
\t\t</p>
\t\t";
        // line 73
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 74
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 75
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 78
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 79
            echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 80
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "</a>
\t\t</p>
\t\t";
        }
        // line 83
        echo "\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 85
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
        // line 89
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
        // line 107
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 108
        echo "</div>

<script src=\"";
        // line 110
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 111
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 112
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 113
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
        $this->env->get_assets_bag()->add_script($asset);        // line 114
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
        $this->env->get_assets_bag()->add_script($asset);        // line 115
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 116
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 121
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 128
        echo "
";
        // line 129
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 130
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
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 148
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t</script>
";
        }
        // line 155
        echo "
";
        // line 156
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 157
        echo "
";
        // line 158
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 158)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 159
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 159);
        echo "

";
        // line 161
        // line 162
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
        return array (  475 => 162,  474 => 161,  469 => 159,  455 => 158,  452 => 157,  447 => 156,  444 => 155,  434 => 148,  430 => 147,  426 => 146,  422 => 145,  401 => 130,  399 => 129,  396 => 128,  386 => 121,  379 => 116,  377 => 115,  363 => 114,  349 => 113,  342 => 112,  334 => 111,  330 => 110,  326 => 108,  322 => 107,  299 => 89,  284 => 85,  280 => 83,  272 => 80,  269 => 79,  266 => 78,  260 => 75,  257 => 74,  255 => 73,  249 => 70,  243 => 69,  237 => 66,  231 => 65,  228 => 64,  226 => 63,  220 => 60,  217 => 59,  215 => 58,  210 => 56,  207 => 55,  206 => 54,  202 => 52,  190 => 51,  181 => 47,  174 => 45,  167 => 43,  160 => 41,  153 => 39,  146 => 37,  141 => 35,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  115 => 27,  111 => 26,  107 => 25,  101 => 22,  96 => 19,  85 => 16,  81 => 15,  75 => 14,  72 => 13,  68 => 12,  62 => 8,  48 => 7,  45 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
