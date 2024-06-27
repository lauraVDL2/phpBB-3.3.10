<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2022 The s9e authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
class s9e_renderer_63600d1ded3cdaec5d2db703f5f7c526bb90e2a3 extends \s9e\TextFormatter\Renderers\PHP
{
	protected $params=['L_CODE'=>'','L_COLON'=>'','L_IMAGE'=>'','L_SELECT_ALL_CODE'=>'','L_WROTE'=>'','S_VIEWFLASH'=>'','S_VIEWIMG'=>'','S_VIEWSMILIES'=>'','T_SMILIES_PATH'=>''];
	protected function renderNode(\DOMNode $node)
	{
		switch($node->nodeName){case'ATTACHMENT':$this->out.='<div class="inline-attachment"><!-- ia'.htmlspecialchars($node->getAttribute('index'),0).' -->'.htmlspecialchars($node->getAttribute('filename'),0).'<!-- ia'.htmlspecialchars($node->getAttribute('index'),0).' --></div>';break;case'B':$this->out.='<strong class="text-strong">';$this->at($node);$this->out.='</strong>';break;case'CODE':$this->out.='<div class="codebox"><p>'.htmlspecialchars($this->params['L_CODE'].$this->params['L_COLON'],0).' <a href="#" onclick="selectCode(this); return false;">'.htmlspecialchars($this->params['L_SELECT_ALL_CODE'],0).'</a></p><pre><code>';$this->at($node);$this->out.='</code></pre></div>';break;case'COLOR':$this->out.='<span style="color:'.htmlspecialchars($node->getAttribute('color'),2).'">';$this->at($node);$this->out.='</span>';break;case'DESCR_T':$this->out.='<div class="ft_technique_description">';$this->at($node);$this->out.='</div>';break;case'E':if($this->params['S_VIEWSMILIES']==='')$this->out.=htmlspecialchars($node->textContent,0);else{switch($node->textContent){case'8-)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cool.gif" width="15" height="17" alt="8-)" title="Cool">';break;case':!:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_exclaim.gif" width="15" height="17" alt=":!:" title="Exclamation">';break;case':(':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":(" title="Sad">';break;case':)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":)" title="Smile">';break;case':-(':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":-(" title="Sad">';break;case':-)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":-)" title="Smile">';break;case':-?':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":-?" title="Confused">';break;case':-D':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":-D" title="Very Happy">';break;case':-P':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":-P" title="Razz">';break;case':-o':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":-o" title="Surprised">';break;case':-x':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":-x" title="Mad">';break;case':-|':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_neutral.gif" width="15" height="17" alt=":-|" title="Neutral">';break;case':?':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":?" title="Confused">';break;case':?:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_question.gif" width="15" height="17" alt=":?:" title="Question">';break;case':???:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_confused.gif" width="15" height="17" alt=":???:" title="Confused">';break;case':D':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":D" title="Very Happy">';break;case':P':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":P" title="Razz">';break;case':arrow:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_arrow.gif" width="15" height="17" alt=":arrow:" title="Arrow">';break;case':cool:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cool.gif" width="15" height="17" alt=":cool:" title="Cool">';break;case':cry:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_cry.gif" width="15" height="17" alt=":cry:" title="Crying or Very Sad">';break;case':eek:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":eek:" title="Surprised">';break;case':evil:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_evil.gif" width="15" height="17" alt=":evil:" title="Evil or Very Mad">';break;case':geek:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_geek.gif" width="17" height="17" alt=":geek:" title="Geek">';break;case':grin:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_biggrin.gif" width="15" height="17" alt=":grin:" title="Very Happy">';break;case':idea:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_idea.gif" width="15" height="17" alt=":idea:" title="Idea">';break;case':lol:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_lol.gif" width="15" height="17" alt=":lol:" title="Laughing">';break;case':mad:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":mad:" title="Mad">';break;case':mrgreen:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mrgreen.gif" width="15" height="17" alt=":mrgreen:" title="Mr. Green">';break;case':o':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_surprised.gif" width="15" height="17" alt=":o" title="Surprised">';break;case':oops:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_redface.gif" width="15" height="17" alt=":oops:" title="Embarrassed">';break;case':razz:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_razz.gif" width="15" height="17" alt=":razz:" title="Razz">';break;case':roll:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_rolleyes.gif" width="15" height="17" alt=":roll:" title="Rolling Eyes">';break;case':sad:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_sad.gif" width="15" height="17" alt=":sad:" title="Sad">';break;case':shock:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_eek.gif" width="15" height="17" alt=":shock:" title="Shocked">';break;case':smile:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_smile.gif" width="15" height="17" alt=":smile:" title="Smile">';break;case':twisted:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_twisted.gif" width="15" height="17" alt=":twisted:" title="Twisted Evil">';break;case':ugeek:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_ugeek.gif" width="17" height="18" alt=":ugeek:" title="Uber Geek">';break;case':wink:':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=":wink:" title="Wink">';break;case':x':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_mad.gif" width="15" height="17" alt=":x" title="Mad">';break;case':|':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_neutral.gif" width="15" height="17" alt=":|" title="Neutral">';break;case';)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=";)" title="Wink">';break;case';-)':$this->out.='<img class="smilies" src="'.htmlspecialchars($this->params['T_SMILIES_PATH'],2).'/icon_e_wink.gif" width="15" height="17" alt=";-)" title="Wink">';break;default:$this->out.=htmlspecialchars($node->textContent,0);}}break;case'EMAIL':$this->out.='<a href="mailto:'.htmlspecialchars($node->getAttribute('email'),2);if($node->hasAttribute('subject')||$node->hasAttribute('body')){$this->out.='?';if($node->hasAttribute('subject'))$this->out.='subject='.htmlspecialchars($node->getAttribute('subject'),2);if($node->hasAttribute('body')){if($node->hasAttribute('subject'))$this->out.='&amp;';$this->out.='body='.htmlspecialchars($node->getAttribute('body'),2);}}$this->out.='">';$this->at($node);$this->out.='</a>';break;case'EMOJI':if($this->params['S_VIEWSMILIES']!==''){$this->out.='<img alt="'.htmlspecialchars($node->textContent,2).'" class="emoji smilies" draggable="false" src="//cdn.jsdelivr.net/gh/twitter/twemoji@latest/assets/svg/';if($node->hasAttribute('tseq'))$this->out.=htmlspecialchars($node->getAttribute('tseq'),2);else$this->out.=htmlspecialchars($node->getAttribute('seq'),2);$this->out.='.svg">';}else$this->out.=htmlspecialchars($node->textContent,0);break;case'FLASH':if($this->params['S_VIEWFLASH']!=='')$this->out.='<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="'.htmlspecialchars($node->getAttribute('width'),2).'" height="'.htmlspecialchars($node->getAttribute('height'),2).'"><param name="movie" value="'.htmlspecialchars($node->getAttribute('url'),2).'"><param name="play" value="false"><param name="loop" value="false"><param name="quality" value="high"><param name="allowScriptAccess" value="never"><param name="allowNetworking" value="internal"><embed src="'.htmlspecialchars($node->getAttribute('url'),2).'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="'.htmlspecialchars($node->getAttribute('width'),2).'" height="'.htmlspecialchars($node->getAttribute('height'),2).'" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></object>';else$this->at($node);break;case'GENJUTSU':$this->out.='<div class="ft_genjutsu">';$this->at($node);$this->out.='</div>';break;case'I':$this->out.='<em class="text-italics">';$this->at($node);$this->out.='</em>';break;case'IFRAME':$this->out.='<iframe src="'.htmlspecialchars($node->getAttribute('content'),2).'" style="width:'.htmlspecialchars($node->getAttribute('iframe0'),2).'px;height:'.htmlspecialchars($node->getAttribute('iframe1'),2).'px;border:none;display:block;margin:auto"> </iframe>';break;case'IMG':if($this->params['S_VIEWIMG']!=='')$this->out.='<img src="'.htmlspecialchars($node->getAttribute('src'),2).'" class="postimage" alt="'.htmlspecialchars($this->params['L_IMAGE'],2).'">';else$this->at($node);break;case'KG':$this->out.='<div class="ft_kekkei">';$this->at($node);$this->out.='</div>';break;case'LI':$this->out.='<li>';$this->at($node);$this->out.='</li>';break;case'LINK_TEXT':$this->out.=htmlspecialchars($node->getAttribute('text'),0);break;case'LIST':if(!$node->hasAttribute('type')){$this->out.='<ul>';$this->at($node);$this->out.='</ul>';}elseif($this->xpath->evaluate('contains(\'upperlowerdecim\',substring(@type,1,5))',$node)){$this->out.='<ol style="list-style-type:'.htmlspecialchars($node->getAttribute('type'),2).'">';$this->at($node);$this->out.='</ol>';}else{$this->out.='<ul style="list-style-type:'.htmlspecialchars($node->getAttribute('type'),2).'">';$this->at($node);$this->out.='</ul>';}break;case'NINJUTSU':$this->out.='<div class="ft_ninjutsu">';$this->at($node);$this->out.='</div>';break;case'P_CADRE':$this->out.='<div class="p_cadre">';$this->at($node);$this->out.='</div>';break;case'P_CADRE_IWA':$this->out.='<div class="p_cadre_iwa">';$this->at($node);$this->out.='</div>';break;case'P_CADRE_KIRI':$this->out.='<div class="p_cadre_kiri">';$this->at($node);$this->out.='</div>';break;case'P_CADRE_KONOHA':$this->out.='<div class="p_cadre_konoha">';$this->at($node);$this->out.='</div>';break;case'P_CADRE_KUMO':$this->out.='<div class="p_cadre_kumo">';$this->at($node);$this->out.='</div>';break;case'P_CADRE_NUKENIN':$this->out.='<div class="p_cadre_nukenin">';$this->at($node);$this->out.='</div>';break;case'P_CADRE_SUNA':$this->out.='<div class="p_cadre_suna">';$this->at($node);$this->out.='</div>';break;case'P_IWA':$this->out.='<div class="p_iwa">';$this->at($node);$this->out.='</div>';break;case'P_KIRI':$this->out.='<div class="p_kiri">';$this->at($node);$this->out.='</div>';break;case'P_KONOHA':$this->out.='<div class="p_konoha">';$this->at($node);$this->out.='</div>';break;case'P_KUMO':$this->out.='<div class="p_kumo">';$this->at($node);$this->out.='</div>';break;case'P_NUKENIN':$this->out.='<div class="p_nukenin">';$this->at($node);$this->out.='</div>';break;case'P_PREDEF':$this->out.='<div class="p_predef">';$this->at($node);$this->out.='</div>';break;case'P_SUNA':$this->out.='<div class="p_suna">';$this->at($node);$this->out.='</div>';break;case'QUOTE':$this->out.='<blockquote';if($node->hasAttribute('post_url'))$this->out.=' cite="'.htmlspecialchars($node->getAttribute('post_url'),2).'"';if(!$node->hasAttribute('author'))$this->out.=' class="uncited"';$this->out.='><div>';if($node->hasAttribute('author')){$this->out.='<cite>';if($node->hasAttribute('url'))$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" class="postlink">'.htmlspecialchars($node->getAttribute('author'),0).'</a>';elseif($node->hasAttribute('profile_url'))$this->out.='<a href="'.htmlspecialchars($node->getAttribute('profile_url'),2).'">'.htmlspecialchars($node->getAttribute('author'),0).'</a>';else$this->out.=htmlspecialchars($node->getAttribute('author'),0);$this->out.=' '.htmlspecialchars($this->params['L_WROTE'].$this->params['L_COLON'],0);if($node->hasAttribute('post_url'))$this->out.=' <a href="'.htmlspecialchars($node->getAttribute('post_url'),2).'" data-post-id="'.htmlspecialchars($node->getAttribute('post_id'),2).'" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a>';if($node->hasAttribute('msg_url'))$this->out.=' <a href="'.htmlspecialchars($node->getAttribute('msg_url'),2).'" data-msg-id="'.htmlspecialchars($node->getAttribute('msg_id'),2).'">↑</a>';if($node->hasAttribute('date'))$this->out.='<span class="responsive-hide">'.htmlspecialchars($node->getAttribute('date'),0).'</span>';$this->out.='</cite>';}$this->at($node);$this->out.='</div></blockquote>';break;case'SIZE':$this->out.='<span style="font-size:'.htmlspecialchars($node->getAttribute('size'),2).'%;line-height:116%">';$this->at($node);$this->out.='</span>';break;case'TAIJUTSU':$this->out.='<div class="ft_taijutsu">';$this->at($node);$this->out.='</div>';break;case'TITLE_TECHNIQUE':$this->out.='<div class="ft_technique_information">';$this->at($node);$this->out.='</div>';break;case'U':$this->out.='<span style="text-decoration:underline">';$this->at($node);$this->out.='</span>';break;case'URL':$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" class="postlink">';$this->at($node);$this->out.='</a>';break;case'br':$this->out.='<br>';break;case'e':case'i':case's':break;case'p':$this->out.='<p>';$this->at($node);$this->out.='</p>';break;default:$this->at($node);}
	}
	/** {@inheritdoc} */
	public $enableQuickRenderer=true;
	/** {@inheritdoc} */
	protected $static=['/B'=>'</strong>','/CODE'=>'</code></pre></div>','/COLOR'=>'</span>','/DESCR_T'=>'</div>','/EMAIL'=>'</a>','/GENJUTSU'=>'</div>','/I'=>'</em>','/KG'=>'</div>','/LI'=>'</li>','/NINJUTSU'=>'</div>','/P_CADRE'=>'</div>','/P_CADRE_IWA'=>'</div>','/P_CADRE_KIRI'=>'</div>','/P_CADRE_KONOHA'=>'</div>','/P_CADRE_KUMO'=>'</div>','/P_CADRE_NUKENIN'=>'</div>','/P_CADRE_SUNA'=>'</div>','/P_IWA'=>'</div>','/P_KIRI'=>'</div>','/P_KONOHA'=>'</div>','/P_KUMO'=>'</div>','/P_NUKENIN'=>'</div>','/P_PREDEF'=>'</div>','/P_SUNA'=>'</div>','/QUOTE'=>'</div></blockquote>','/SIZE'=>'</span>','/TAIJUTSU'=>'</div>','/TITLE_TECHNIQUE'=>'</div>','/U'=>'</span>','/URL'=>'</a>','B'=>'<strong class="text-strong">','DESCR_T'=>'<div class="ft_technique_description">','GENJUTSU'=>'<div class="ft_genjutsu">','I'=>'<em class="text-italics">','KG'=>'<div class="ft_kekkei">','LI'=>'<li>','NINJUTSU'=>'<div class="ft_ninjutsu">','P_CADRE'=>'<div class="p_cadre">','P_CADRE_IWA'=>'<div class="p_cadre_iwa">','P_CADRE_KIRI'=>'<div class="p_cadre_kiri">','P_CADRE_KONOHA'=>'<div class="p_cadre_konoha">','P_CADRE_KUMO'=>'<div class="p_cadre_kumo">','P_CADRE_NUKENIN'=>'<div class="p_cadre_nukenin">','P_CADRE_SUNA'=>'<div class="p_cadre_suna">','P_IWA'=>'<div class="p_iwa">','P_KIRI'=>'<div class="p_kiri">','P_KONOHA'=>'<div class="p_konoha">','P_KUMO'=>'<div class="p_kumo">','P_NUKENIN'=>'<div class="p_nukenin">','P_PREDEF'=>'<div class="p_predef">','P_SUNA'=>'<div class="p_suna">','TAIJUTSU'=>'<div class="ft_taijutsu">','TITLE_TECHNIQUE'=>'<div class="ft_technique_information">','U'=>'<span style="text-decoration:underline">'];
	/** {@inheritdoc} */
	protected $dynamic=['COLOR'=>['(^[^ ]+(?> (?!color=)[^=]+="[^"]*")*(?> color="([^"]*)")?.*)s','<span style="color:$1">'],'IFRAME'=>['(^[^ ]+(?> (?!(?:content|iframe[01])=)[^=]+="[^"]*")*(?> content="([^"]*)")?(?> (?!iframe[01]=)[^=]+="[^"]*")*(?> iframe0="([^"]*)")?(?> (?!iframe1=)[^=]+="[^"]*")*(?> iframe1="([^"]*)")?.*)s','<iframe src="$1" style="width:$2px;height:$3px;border:none;display:block;margin:auto"> </iframe>'],'SIZE'=>['(^[^ ]+(?> (?!size=)[^=]+="[^"]*")*(?> size="([^"]*)")?.*)s','<span style="font-size:$1%;line-height:116%">'],'URL'=>['(^[^ ]+(?> (?!url=)[^=]+="[^"]*")*(?> url="([^"]*)")?.*)s','<a href="$1" class="postlink">']];
	/** {@inheritdoc} */
	protected $quickRegexp='(<(?:(?!/)((?:ATTACHMENT|EMOJI|IFRAME|LINK_TEXT))(?: [^>]*)?>.*?</\\1|(/?(?!br/|p>)[^ />]+)[^>]*?(/)?)>)s';
	/** {@inheritdoc} */
	protected $quickRenderingTest='((?<=<)(?:[!?]|(?:E|FLASH|IMG|LIST)[ />]))';
	/** {@inheritdoc} */
	protected function renderQuickTemplate($id, $xml)
	{
		$attributes=$this->matchAttributes($xml);
		$html='';switch($id){case'ATTACHMENT':$attributes+=['index'=>null,'filename'=>null];$html.='<div class="inline-attachment"><!-- ia'.str_replace('&quot;','"',$attributes['index']??'').' -->'.str_replace('&quot;','"',$attributes['filename']??'').'<!-- ia'.str_replace('&quot;','"',$attributes['index']??'').' --></div>';break;case'CODE':$html.='<div class="codebox"><p>'.htmlspecialchars($this->params['L_CODE'].$this->params['L_COLON'],0).' <a href="#" onclick="selectCode(this); return false;">'.htmlspecialchars($this->params['L_SELECT_ALL_CODE'],0).'</a></p><pre><code>';break;case'EMAIL':$attributes+=['email'=>null,'body'=>null];$html.='<a href="mailto:'.$attributes['email'];if(isset($attributes['subject'])||isset($attributes['body'])){$html.='?';if(isset($attributes['subject']))$html.='subject='.$attributes['subject'];if(isset($attributes['body'])){if(isset($attributes['subject']))$html.='&amp;';$html.='body='.$attributes['body'];}}$html.='">';break;case'EMOJI':$attributes+=['seq'=>null];$textContent=$this->getQuickTextContent($xml);if($this->params['S_VIEWSMILIES']!==''){$html.='<img alt="'.htmlspecialchars($textContent,2).'" class="emoji smilies" draggable="false" src="//cdn.jsdelivr.net/gh/twitter/twemoji@latest/assets/svg/';if(isset($attributes['tseq']))$html.=($attributes['tseq']??'');else$html.=($attributes['seq']??'');$html.='.svg">';}else$html.=htmlspecialchars($textContent,0);break;case'LINK_TEXT':$attributes+=['text'=>null];$html.=str_replace('&quot;','"',$attributes['text']??'');break;case'QUOTE':$attributes+=['url'=>null,'author'=>null,'post_id'=>null,'msg_id'=>null];$html.='<blockquote';if(isset($attributes['post_url']))$html.=' cite="'.$attributes['post_url'].'"';if(!isset($attributes['author']))$html.=' class="uncited"';$html.='><div>';if(isset($attributes['author'])){$html.='<cite>';if(isset($attributes['url']))$html.='<a href="'.$attributes['url'].'" class="postlink">'.str_replace('&quot;','"',$attributes['author']??'').'</a>';elseif(isset($attributes['profile_url']))$html.='<a href="'.$attributes['profile_url'].'">'.str_replace('&quot;','"',$attributes['author']??'').'</a>';else$html.=str_replace('&quot;','"',$attributes['author']??'');$html.=' '.htmlspecialchars($this->params['L_WROTE'].$this->params['L_COLON'],0);if(isset($attributes['post_url']))$html.=' <a href="'.$attributes['post_url'].'" data-post-id="'.$attributes['post_id'].'" onclick="if(document.getElementById(hash.substr(1)))href=hash">↑</a>';if(isset($attributes['msg_url']))$html.=' <a href="'.$attributes['msg_url'].'" data-msg-id="'.$attributes['msg_id'].'">↑</a>';if(isset($attributes['date']))$html.='<span class="responsive-hide">'.str_replace('&quot;','"',$attributes['date']??'').'</span>';$html.='</cite>';}}

		return $html;
	}
}