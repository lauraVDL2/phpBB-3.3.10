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
class __TwigTemplate_d1588a931cc9d6664e20d98c740294a6 extends \Twig\Template
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
<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
\t<div id=\"flex_footer\">
\t\t<div>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "lp_loop", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["lp_loop"]) {
            // line 11
            echo "\t\t\t<div class=\"f_lastpost\">
\t\t\t\t<a class=\"f_lastmessage\" href=\"./viewtopic.php?t=";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_TOPIC_ID", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_SUBJECT", [], "any", false, false, false, 12);
            echo "</a>
\t\t\t\t<div class=\"f_time\">";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_TIME", [], "any", false, false, false, 13);
            echo "</div>
\t\t\t\t<div style=\"color:#";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_COLOUR", [], "any", false, false, false, 14);
            echo "\" class=\"f_username\">";
            echo twig_get_attribute($this->env, $this->source, $context["lp_loop"], "LP_USERNAME", [], "any", false, false, false, 14);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lp_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t</div>
\t\t<div id=\"f_hours\">
\t\t\t<div id=\"connected_title\">Connectés ces dernières <span style=\"color:red;\">48</span> h</div>
\t\t\t<div id=\"connected_block\">";
        // line 20
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
\t";
        // line 23
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 23)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 24
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 26
        // line 27
        echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
        // line 28
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t</p>
\t\t";
        // line 30
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 31
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
            // line 32
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 35
        echo "\t\t";
        // line 36
        echo "\t\t<p class=\"footer-row\" role=\"menu\">
\t\t\t<a class=\"footer-link\" href=\"";
        // line 37
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 38
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t</a>
\t\t\t|
\t\t\t<a class=\"footer-link\" href=\"";
        // line 41
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 42
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</span>
\t\t\t</a>
\t\t</p>
\t\t";
        // line 45
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 46
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 47
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 50
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 51
            echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 52
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "</a>
\t\t</p>
\t\t";
        }
        // line 55
        echo "\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 57
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
        // line 61
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
        // line 79
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 80
        echo "</div>

<script src=\"";
        // line 82
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 83
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 84
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 85
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
        $this->env->get_assets_bag()->add_script($asset);        // line 86
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
        $this->env->get_assets_bag()->add_script($asset);        // line 87
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 88
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 93
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 100
        echo "
";
        // line 101
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 102
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
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 120
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t</script>
";
        }
        // line 127
        echo "
";
        // line 128
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 129
        echo "
";
        // line 130
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 130)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 131
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 131);
        echo "

";
        // line 133
        // line 134
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
        return array (  375 => 134,  374 => 133,  369 => 131,  355 => 130,  352 => 129,  347 => 128,  344 => 127,  334 => 120,  330 => 119,  326 => 118,  322 => 117,  301 => 102,  299 => 101,  296 => 100,  286 => 93,  279 => 88,  277 => 87,  263 => 86,  249 => 85,  242 => 84,  234 => 83,  230 => 82,  226 => 80,  222 => 79,  199 => 61,  184 => 57,  180 => 55,  172 => 52,  169 => 51,  166 => 50,  160 => 47,  157 => 46,  155 => 45,  149 => 42,  143 => 41,  137 => 38,  131 => 37,  128 => 36,  126 => 35,  120 => 32,  117 => 31,  115 => 30,  110 => 28,  107 => 27,  106 => 26,  102 => 24,  90 => 23,  84 => 20,  79 => 17,  68 => 14,  64 => 13,  58 => 12,  55 => 11,  51 => 10,  45 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
