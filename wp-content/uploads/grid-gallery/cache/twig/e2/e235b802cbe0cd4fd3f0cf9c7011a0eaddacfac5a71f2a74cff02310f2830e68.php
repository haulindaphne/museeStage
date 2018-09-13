<?php

/* @galleries/settings.twig */
class __TwigTemplate_73f327324eb98f7a2a8af35ef283ba7fdb5c5661a3b6962dfcb6549a04ebe357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'gallery_preview_figure_attributes' => array($this, 'block_gallery_preview_figure_attributes'),
            'gallery_preview_image_attributes' => array($this, 'block_gallery_preview_image_attributes'),
            'settginsFigCaption' => array($this, 'block_settginsFigCaption'),
            'content' => array($this, 'block_content'),
            'proHiddenSettings' => array($this, 'block_proHiddenSettings'),
            'area' => array($this, 'block_area'),
            'galleryTypeSelectorItems' => array($this, 'block_galleryTypeSelectorItems'),
            'openByLink' => array($this, 'block_openByLink'),
            'browserUrlTooltipHide' => array($this, 'block_browserUrlTooltipHide'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'mosaicImagesCount' => array($this, 'block_mosaicImagesCount'),
            'mosaicGalleryImageCountText' => array($this, 'block_mosaicGalleryImageCountText'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupLinkedImageText' => array($this, 'block_popupLinkedImageText'),
            'disableSourceImageForLi' => array($this, 'block_disableSourceImageForLi'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'lazyload' => array($this, 'block_lazyload'),
            'preload' => array($this, 'block_preload'),
            'attributes' => array($this, 'block_attributes'),
            'additionalCaptionSettings' => array($this, 'block_additionalCaptionSettings'),
            'post' => array($this, 'block_post'),
            'captionSettingsType' => array($this, 'block_captionSettingsType'),
            'overlaySettings' => array($this, 'block_overlaySettings'),
            'backgroundImageForHoverEffect' => array($this, 'block_backgroundImageForHoverEffect'),
            'backgroundColorForShowOnHover' => array($this, 'block_backgroundColorForShowOnHover'),
            'icons' => array($this, 'block_icons'),
            'proCaptionAndIconSettings' => array($this, 'block_proCaptionAndIconSettings'),
            'exifCaptionSettings' => array($this, 'block_exifCaptionSettings'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'captionEffectInPro' => array($this, 'block_captionEffectInPro'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
            'icon_wrap_item_class' => array($this, 'block_icon_wrap_item_class'),
            'settingsOtherPro' => array($this, 'block_settingsOtherPro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        // line 19
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 38
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions and icons")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories and Pagination")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 70
        $this->displayBlock('tabs', $context, $blocks);
        // line 71
        echo "    </h2>
";
    }

    // line 70
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 74
    public function block_preview($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        if ($this->getAttribute(($context["settings"] ?? null), "watermark", array(), "any", true, true)) {
            // line 76
            echo "        ";
            $context["settingsWatermark"] = twig_array_merge($this->getAttribute(($context["settings"] ?? null), "watermark", array()), array("galleryId" => $this->getAttribute(($context["gallery"] ?? null), "id", array())));
            // line 77
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", ($context["settingsWatermark"] ?? null))), "html", null, true);
            echo "
    ";
        }
        // line 79
        echo "    ";
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 79);
        // line 80
        echo "    ";
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 80);
        // line 81
        echo "\t";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 81);
        // line 82
        echo "
\t";
        // line 83
        ob_start();
        // line 84
        echo "\t\t";
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 86
        echo "\t";
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 87
        echo "\t";
        // line 88
        echo "\t";
        ob_start();
        // line 89
        echo "\t\t<div class=\"sggFigCaptionIconsEntry ggSettingsDisplNone

\t\t\thi-icon-wrap ";
        // line 91
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), 0, (($context["length"] ?? null) - 1)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
        echo "\">

\t\t\t";
        // line 93
        $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "video", array()))) ? ("fa-youtube-play") : ("fa-vimeo"));
        // line 94
        echo "\t\t\t";
        ob_start();
        // line 95
        echo "\t\t\t\t";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()))) {
            // line 96
            echo "\t\t\t\t\tmargin-left:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
            echo "px;
\t\t\t\t\tmargin-right:";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
            echo "px;
\t\t\t\t";
        }
        // line 99
        echo "\t\t\t";
        $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 100
        echo "\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-video fa ";
        echo twig_escape_filter($this->env, ($context["videoIcon"] ?? null), "html", null, true);
        echo "\" style=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-link fa fa-link\" style=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-popup fa fa-expand\" style=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t</div>
\t";
        $context["simpleIconsEntryVal"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 105
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 116
        echo "
                <li title=\"";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 128
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 135
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 140
        if ( !twig_test_empty($this->getAttribute(($context["gallery"] ?? null), "photos", array()))) {
            // line 141
            echo "            <div style=\"
            ";
            // line 142
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width", array())))) {
                // line 143
                echo "                width:";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width", array()) + 40), "html", null, true);
                echo "px;
            ";
            }
            // line 145
            echo "            margin: 10px auto;
            max-width: 330px;
            clear:both;
            \">
                <figure
\t\t\t\t\t";
            // line 150
            $this->displayBlock('gallery_preview_figure_attributes', $context, $blocks);
            // line 156
            echo "\t\t\t\t\t>
\t\t\t\t\t";
            // line 157
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 158
            echo "
                    ";
            // line 159
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0)) {
                // line 160
                echo "                        ";
                $context["width"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array());
                // line 161
                echo "                    ";
            }
            // line 162
            echo "
                    ";
            // line 163
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0)) {
                // line 164
                echo "                        ";
                $context["height"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array());
                // line 165
                echo "                    ";
            }
            // line 166
            echo "
                    ";
            // line 167
            if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3"))) {
                // line 168
                echo "                        ";
                $context["crop"] = 1;
                // line 169
                echo "                    ";
            } else {
                // line 170
                echo "                        ";
                $context["height"] = null;
                // line 171
                echo "                    ";
            }
            // line 172
            echo "
                    ";
            // line 173
            if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 174
                echo "                        ";
                $context["cropQuality"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "cropQuality", array());
                // line 175
                echo "                    ";
            } else {
                // line 176
                echo "                        ";
                $context["cropQuality"] = null;
                // line 177
                echo "                    ";
            }
            // line 178
            echo "                    <img
\t\t\t\t\t\t";
            // line 179
            $this->displayBlock('gallery_preview_image_attributes', $context, $blocks);
            // line 195
            echo "\t\t\t\t\t\t/>
\t\t\t\t\t";
            // line 196
            ob_start();
            // line 197
            echo "\t\t\t\t\t\t<figcaption style=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div style=\"display: table; height: 100%; width: 100%;\" class=\"sggFigcaptionCaptionWrapper\">
\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
\t\t\t\t\t\t\t\t\t<span ";
            // line 200
            if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                echo "dir=\"rtl\" class=\"ggRtlClass\"";
            }
            echo ">Gallery by Supsystic</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 203
            echo twig_escape_filter($this->env, ($context["simpleIconsEntryVal"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t";
            // line 205
            echo twig_escape_filter($this->env, ($context["var_figcaption_after"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t";
            $context["figcaptionBlockFree"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 207
            echo "
\t\t\t\t\t";
            // line 208
            $this->displayBlock('settginsFigCaption', $context, $blocks);
            // line 211
            echo "                </figure>
            </div>
        ";
        } else {
            // line 214
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 216
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 220
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
\t\t\t<div class=\"shortcode\">";
        // line 224
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo "
\t\t\t\t<input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly>
\t\t\t\t";
        // line 226
        echo $context["form"]->getshow_tooltip("sgg-shortcode");
        echo "
\t\t\t</div>
\t\t\t<div class=\"shortcode\">";
        // line 228
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo "
\t\t\t\t<input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute(($context["gallery"] ?? null), "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly>
\t\t\t\t";
        // line 230
        echo $context["form"]->getshow_tooltip("sgg-php-code");
        echo "
\t\t\t</div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\" class=\"gg-preview-bottom-bar\">
\t\t\t<a class=\"button button-primary\" target=\"_blank\"
\t\t\t   href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-fw fa-eye\"></i>
\t\t\t\t";
        // line 241
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
\t\t\t</a>

            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 244
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
\t\t\t<a class=\"button\" id=\"ggCreateClone\" href=\"#\" target=\"_blank\" data-url=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-clone\"></i>
\t\t\t\t";
        // line 247
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone")), "html", null, true);
        echo "
\t\t\t</a>
        </div>
\t\t<div class=\"gg-sett-preview-other-plugin\">
\t\t\t<label for=\"enableForMembership\" class=\"gg-sett-plugin-member-lbl\">";
        // line 251
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable for Membership:")), "html", null, true);
        echo "</label>
\t\t\t";
        // line 252
        if (($this->getAttribute(($context["pageOptions"] ?? null), "isMembershipPluginActive", array()) == "true")) {
            // line 253
            echo "\t\t\t\t<select id=\"enableForMembership\" style=\"width: auto;\" name=\"plugins[membership][enable]\" ";
            echo twig_escape_filter($this->env, ($context["disableMembershipOpt"] ?? null), "html", null, true);
            echo " >
\t\t\t\t\t<option value=\"0\" ";
            // line 254
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "plugins", array()), "membership", array()), "enable", array()) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 255
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"1\" ";
            // line 257
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "plugins", array()), "membership", array()), "enable", array()) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 258
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t</select>
\t\t\t";
        } else {
            // line 262
            echo "\t\t\t\t<div class=\"gg-membership-plug-info\">
\t\t\t\t\t";
            // line 263
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Membership by Supsystic to use this feature. ")), "html", null, true);
            echo "
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pageOptions"] ?? null), "membershipInstallUrl", array()), "html", null, true);
            echo "\">Install</a>
\t\t\t\t\t";
            // line 265
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" plugin from your admin area, or visit it's official page on Wordpress.org ")), "html", null, true);
            echo "
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pageOptions"] ?? null), "membershipInstallWpUrl", array()), "html", null, true);
            echo "\">here</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 269
        echo "\t\t</div>
    </div>
\t<input type=\"hidden\" id=\"ggMsgCloningGallery\" value=\"";
        // line 271
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cloning gallery...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgServerInternalError\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Server internal error")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImgOptimizationErrorOcured\" value=\"";
        // line 273
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery image optimization error ocured.")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggIoParams\" value=\"";
        // line 274
        echo twig_escape_filter($this->env, ($context["ioServiceParams"] ?? null), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggCdnParams\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, ($context["cdnServiceParams"] ?? null), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOptimized\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimized")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgTransfer\" value=\"";
        // line 277
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfered")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOf\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImages\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryImageOptimizing\" value=\"";
        // line 280
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Image optimizing...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryTransferToCnd\" value=\"";
        // line 281
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tranfer images to CDN")), "html", null, true);
        echo "\"/>

\t<div id=\"ggCloneModalWndId\" style=\"display: none;\">
\t\t<label for=\"ggCloneTypeSelector\">";
        // line 284
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type:")), "html", null, true);
        echo "</label>
\t\t";
        // line 285
        echo $context["form"]->getselect("CloneTypeSelector", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone with images")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone without images"))), 0, array("style" => "width: auto;", "id" => "ggCloneTypeSelector"));
        // line 293
        echo "
\t</div>

";
    }

    // line 84
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 85
        echo "\t\t";
    }

    // line 150
    public function block_gallery_preview_figure_attributes($context, array $blocks = array())
    {
        // line 151
        echo "\t\t\t\t\t\tclass=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\"
\t\t\t\t\t\t";
        // line 152
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 153
            echo "\t\t\t\t\t\t\tdata-thumb-overlay-personal=\"1\"
\t\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t";
    }

    // line 179
    public function block_gallery_preview_image_attributes($context, array $blocks = array())
    {
        // line 180
        echo "\t\t\t\t\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), ($context["width"] ?? null), ($context["height"] ?? null), ($context["crop"] ?? null), ($context["cropQuality"] ?? null))), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute(($context["gallery"] ?? null), "title", array())), "html", null, true);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
        echo "\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\tmax-width: 290px; max-height: 290px;
\t\t\t\t\t\t\t\t";
        // line 183
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
            // line 184
            echo "\t\t\t\t\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 186
            echo "\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array())))) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\theight: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 191
            echo "\t\t\t\t\t\t\t\t\theight: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t";
    }

    // line 208
    public function block_settginsFigCaption($context, array $blocks = array())
    {
        // line 209
        echo "\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ($context["figcaptionBlockFree"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t";
    }

    // line 298
    public function block_content($context, array $blocks = array())
    {
        // line 299
        echo "    ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 299);
        // line 300
        echo "    ";
        $context["f"] = $this;
        // line 301
        echo "
\t<div class=\"gg-wraper-anchor-nav-links\" style=\"display: none;\">
\t\t<a href=\"#gg-anl-main\" class=\"gg-anchor-nav-links\">";
        // line 303
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Type")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-mosaic-image-count-text-wrapper\" class=\"gg-anchor-nav-links ggSettingsDisplNone\" id=\"gg-anl-mosaic-settings-link\">";
        // line 304
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Count Settings")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-soc-share\" class=\"gg-anchor-nav-links\">";
        // line 305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-load-more\" class=\"gg-anchor-nav-links\" id=\"gg-anl-load-more-link\">";
        // line 306
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load More")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-cust-button\" class=\"gg-anchor-nav-links\">";
        // line 307
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons")), "html", null, true);
        echo "</a>
        <a href=\"#gg-anl-horiz-scroll\" class=\"gg-anchor-nav-links\">";
        // line 308
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-border-type\" class=\"gg-anchor-nav-links\">";
        // line 309
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-shadow\" class=\"gg-anchor-nav-links\">";
        // line 310
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-popup\" class=\"gg-anchor-nav-links\">";
        // line 311
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lightbox")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-lazyload\" class=\"gg-anchor-nav-links\">";
        // line 312
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("LazyLoad")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-preloader\" class=\"gg-anchor-nav-links\">";
        // line 313
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loader")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-attributes\" class=\"gg-anchor-nav-links\">";
        // line 314
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Attributes")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-caption-add-sett\" class=\"gg-anchor-nav-links\">";
        // line 315
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption Transformations")), "html", null, true);
        echo "</a>
\t</div>
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 317
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 318
        echo $context["form"]->getopen("post", $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()), "_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), array("id" => "form-settings", "class" => "form-gall-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 319
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>
\t\t";
        // line 323
        echo $context["form"]->gethidden("plugins[membership][enable]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "plugins", array()), "membership", array()), "enable", array()), array("id" => "hiddenInpMembershipEnableVal"));
        echo "
\t\t";
        // line 324
        $this->displayBlock('proHiddenSettings', $context, $blocks);
        // line 325
        echo "
        <div data-tab=\"area\">
            ";
        // line 327
        $this->displayBlock('area', $context, $blocks);
        // line 505
        echo "
            ";
        // line 506
        $this->displayBlock('mosaicImagesCount', $context, $blocks);
        // line 508
        echo "
\t\t\t";
        // line 509
        $this->displayBlock('mosaicGalleryImageCountText', $context, $blocks);
        // line 511
        echo "
            ";
        // line 512
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 683
        echo "
            <div class=\"load-more-button-preview\" id=\"gg-anl-load-more\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 686
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 688
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 691
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\" id=\"gg-anl-cust-button\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 701
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")),         // line 702
$context["form"]->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

\t\t\t";
        // line 708
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 776
        echo "
            ";
        // line 777
        $this->displayBlock('border', $context, $blocks);
        // line 810
        echo "
            ";
        // line 811
        $this->displayBlock('shadow', $context, $blocks);
        // line 880
        echo "
            ";
        // line 881
        $this->displayBlock('popup', $context, $blocks);
        // line 1246
        echo "
\t\t\t";
        // line 1247
        $this->displayBlock('lazyload', $context, $blocks);
        // line 1280
        echo "
            ";
        // line 1281
        $this->displayBlock('preload', $context, $blocks);
        // line 1333
        echo "
            ";
        // line 1334
        $this->displayBlock('attributes', $context, $blocks);
        // line 1348
        echo "
\t\t\t";
        // line 1349
        $this->displayBlock('additionalCaptionSettings', $context, $blocks);
        // line 1379
        echo "\t\t\t";
        echo $context["form"]->gethidden("adminPage[slimScrollStartPos]", (($this->getAttribute($this->getAttribute(        // line 1381
($context["settings"] ?? null), "adminPage", array(), "any", false, true), "slimScrollStartPos", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "adminPage", array(), "any", false, true), "slimScrollStartPos", array()), 0)) : (0)), array("id" => "slimScrollStartPos"));
        // line 1383
        echo "
        </div>

        ";
        // line 1386
        $this->displayBlock('post', $context, $blocks);
        // line 1403
        echo "
\t\t<div data-tab=\"overlay\">
\t\t\t";
        // line 1406
        echo "\t\t\t";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-disappear" => "Disappear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "revolving-door-original-left" => "Revolving Door Original Left", "revolving-door-original-right" => "Revolving Door Original Right", "revolving-door-original-top" => "Revolving Door Original Top", "revolving-door-original-bottom" => "Revolving Door Original Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Skwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phosphorus Rotate", "phophorus-offset" => "Phosphorus Offset", "phophorus-scale" => "Phosphorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube", "show-on-hover" => "Show on Hover", "swing" => "Swing");
        // line 1442
        echo "\t\t\t";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 1449
        echo "\t\t\t";
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1450
        echo "\t\t\t";
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 1451
        echo "
            ";
        // line 1452
        $this->displayBlock('captionSettingsType', $context, $blocks);
        // line 1482
        echo "\t\t\t";
        echo $context["form"]->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1484
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"));
        // line 1486
        echo "
\t\t\t";
        // line 1487
        echo         // line 1488
$context["form"]->gethidden("icons[effect]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), array("id" => "iconsEffectName"));
        // line 1489
        echo "

\t\t\t<div class=\"ggCaptionBuilderWrap\">
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"captions-icons\">
\t\t\t\t\t";
        // line 1493
        $this->displayBlock('overlaySettings', $context, $blocks);
        // line 1736
        echo "
\t\t\t\t\t";
        // line 1737
        $this->displayBlock('icons', $context, $blocks);
        // line 1876
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"caption-builder\">
\t\t\t\t\t";
        // line 1878
        $this->displayBlock('proCaptionAndIconSettings', $context, $blocks);
        // line 1880
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"exit-info\">
\t\t\t\t\t";
        // line 1882
        $this->displayBlock('exifCaptionSettings', $context, $blocks);
        // line 1898
        echo "\t\t\t\t</div>
\t\t\t</div>
        </div>

        ";
        // line 1902
        $this->displayBlock('categories', $context, $blocks);
        // line 1933
        echo "
        ";
        // line 1934
        $this->displayBlock('watermark', $context, $blocks);
        // line 1949
        echo "
        ";
        // line 1950
        $this->displayBlock('form', $context, $blocks);
        // line 1952
        echo "
        ";
        // line 1953
        echo $context["form"]->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1955
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1958
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1962
        echo twig_escape_filter($this->env, $this->getAttribute(($context["preset"] ?? null), "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1963
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1967
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1969
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute(($context["preset"] ?? null), "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1971
        echo twig_escape_filter($this->env, $this->getAttribute(($context["preset"] ?? null), "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1974
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1976
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1983
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1987
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1992
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1994
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
\t\t\t<div class=\"popupPlacementTypeWrapper\">
\t\t\t\t";
        // line 1997
        $context["popupPlacementType"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "placementType", array()) == null)) ? (0) : ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "placementType", array())));
        // line 1998
        echo "\t\t\t\t<h4>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("How to fit image in lightbox")), "html", null, true);
        echo "</h4>
\t\t\t\t";
        // line 1999
        echo ((((((((        // line 2000
$context["form"]->getradio("popup[placementType]", "0", twig_array_merge(array("id" => "popupPlacementTypeFts", "class" => "popupPlacementTypeRadio"), (((        // line 2003
($context["popupPlacementType"] ?? null) == 0)) ? (array("checked" => "checked")) : (array())))) .         // line 2005
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fit To Screen")), "popupPlacementTypeFts")) . "<br/>") .         // line 2009
$context["form"]->getradio("popup[placementType]", "1", twig_array_merge(array("id" => "popupPlacementTypeFw", "class" => "popupPlacementTypeRadio"), (((        // line 2012
($context["popupPlacementType"] ?? null) == 1)) ? (array("checked" => "checked")) : (array()))))) .         // line 2014
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fit Width")), "popupPlacementTypeFw")) . "<br/>") .         // line 2018
$context["form"]->getradio("popup[placementType]", "2", twig_array_merge(array("id" => "popupPlacementTypeSo", "class" => "popupPlacementTypeRadio"), (((        // line 2021
($context["popupPlacementType"] ?? null) == 2)) ? (array("checked" => "checked")) : (array()))))) .         // line 2023
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Original")), "popupPlacementTypeSo")) . "<br/>");
        // line 2028
        echo "
\t\t\t</div>
            <div>
                ";
        // line 2031
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 2040
        echo "
                ";
        // line 2041
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 2042
            echo "                    ";
            $context["bigImageThemes"] = twig_array_merge(($context["bigImageThemes"] ?? null), array("theme_1_pro" => "Fullscreen popup"));
            // line 2043
            echo "                ";
        }
        // line 2044
        echo "
                ";
        // line 2045
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bigImageThemes"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 2046
            echo "                    <div class=\"grid-gallery-caption ";
            if (($context["value"] == $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "theme", array()))) {
                echo "gg-active";
            }
            echo "\">
                        <img data-name=\"";
            // line 2047
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-val=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 2048
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $context["value"]), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"
                             title=\"";
            // line 2049
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 2051
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
\t\t\t\t\t\t<div class=\"gg-selected-theme\">
\t\t\t\t\t\t\t<div class=\"gg-selected-theme-txt\">";
            // line 2054
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(("Selected " . $context["name"]))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2058
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 2062
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 2064
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["effects"] ?? null));
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
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 2065
            echo "                    ";
            if (($context["type"] == "direction-aware")) {
                // line 2066
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2074
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 2077
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 2080
$context["type"], array(0 => "show-on-hover", 1 => "fade-in", 2 => "grow", 3 => "shrink", 4 => "rotate-z", 5 => "square-to-circle"))) {
                // line 2081
                echo "\t\t\t\t\t\t";
                $this->displayBlock('captionEffectInPro', $context, $blocks);
                // line 2098
                echo "                    ";
            } elseif (($context["type"] == "3d-cube")) {
                // line 2099
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2110
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 2112
                echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span ";
                // line 2114
                if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                    echo "dir=\"rtl\" class=\"ggRtlClass\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 2120
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 2124
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2125
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 2126
                echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span ";
                // line 2129
                if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                    echo "dir=\"rtl\" class=\"ggRtlClass\"";
                }
                echo " style=\"display:table-cell;font-size:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 2134
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 2138
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2139
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
\t\t\t\t";
        // line 2140
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) != "1")) {
            // line 2141
            echo "\t\t\t\t\t<div class=\"captions-effect-with-icons\" data-confirm=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h3>Captions effects with icons</h3>
\t\t\t\t\t\t";
            // line 2143
            $this->displayBlock('iconsEffects', $context, $blocks);
            // line 2167
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 2169
        echo "            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 2172
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 2174
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 2177
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 2249
        echo "

                ";
        // line 2251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shadowPresets"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 2252
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 2253
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 2254
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 2255
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 2258
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2262
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\">
                <p>";
        // line 2285
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 2289
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
        </div>

\t\t<div id=\"videoUrlAddDialog\" title=\"";
        // line 2293
        echo "Add video url";
        echo "\" style=\"display:none;\" data-gallery-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t\t<div class=\"sggVideoUrlAddWr\">
\t\t\t\t<div class=\"sggTableRow\">
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t<div class=\"sggDlgVideoTypeH3\">";
        // line 2297
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video type:")), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t";
        // line 2300
        echo ((((        // line 2301
$context["form"]->getradio("sggDlgVideoType", "youtube", array("id" => "sggDlgYoutubeVideoType", "class" => "sggDlgVideoTypeRadio", "checked" => "checked")) .         // line 2306
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Youtube url")), "sggDlgYoutubeVideoType")) . "<br/>") .         // line 2310
$context["form"]->getradio("sggDlgVideoType", "vimeo", array("id" => "sggDlgVimeoVideoType", "class" => "sggDlgVideoTypeRadio"))) .         // line 2315
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Vimeo url")), "sggDlgVimeoVideoType"));
        // line 2319
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sggTableRow\">
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t<div class=\"sggDlgVideoTypeH3\">";
        // line 2324
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video url:")), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t";
        // line 2327
        echo         // line 2328
$context["form"]->getinput("text", "sggDlgUrlVideoValue", "", array("id" => "sggDlgUrlVideoInp", "class" => ""));
        // line 2334
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sggTableRow sggAduHiden\" id=\"sggAduErrorText\"></div>
\t\t\t</div>
\t\t</div>

        ";
        // line 2341
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 2341);
        // line 2342
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 2343
        echo $context["importTypes"]->getshow(400, $this->getAttribute(($context["gallery"] ?? null), "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 2346
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 2347
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 2348
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>

        <div class=\"loader-dialog-preview\" title=\"";
        // line 2352
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 2354
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 2361
        $this->displayBlock('modals', $context, $blocks);
        // line 2417
        echo "
\t";
        // line 2418
        $this->displayBlock('settingsOtherPro', $context, $blocks);
    }

    // line 324
    public function block_proHiddenSettings($context, array $blocks = array())
    {
    }

    // line 327
    public function block_area($context, array $blocks = array())
    {
        // line 328
        echo "                <table class=\"form-table\" name=\"area\" id=\"gg-anl-main\">
                    <thead>
\t\t\t\t\t\t";
        // line 330
        $this->displayBlock('galleryTypeSelectorItems', $context, $blocks);
        // line 349
        echo "
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 353
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 354
        echo $context["form"]->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 360
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 364
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), (((((((((((((        // line 365
$context["form"]->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $context["form"]->getspan("", "px")) .         // line 366
$context["form"]->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 368
$context["form"]->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 369
$context["form"]->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 371
$context["form"]->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 372
($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 373
$context["form"]->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")), "responsive-columns");
        echo "

                        ";
        // line 377
        echo "    \t\t\t\t\t
    \t\t\t\t\t";
        // line 378
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")),         // line 379
$context["form"]->getinput("text", "title", $this->getAttribute(($context["gallery"] ?? null), "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 380
        echo "

\t\t\t\t\t\t";
        // line 382
        echo $context["form"]->getrow($this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Gallery alignment"), "method"),         // line 383
$context["form"]->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")), "gallery-align");
        echo "


\t\t\t\t\t\t";
        // line 386
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between images")), (        // line 387
$context["form"]->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) .         // line 388
$context["form"]->getspan("", "pixels")), "distance");
        echo "

                        ";
        // line 390
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), (        // line 391
$context["form"]->getinput("number", "area[width]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()), array("style" => array("width" => "140px"))) .         // line 392
$context["form"]->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        echo "

                        ";
        // line 395
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")),         // line 396
$context["form"]->getcheckbox("fullscreen", "1", (($this->getAttribute(        // line 399
($context["settings"] ?? null), "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "full-screen-width");
        // line 402
        echo "

                        ";
        // line 404
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), (        // line 405
$context["form"]->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $context["form"]->getspan("", "pixels")), "area-padding");
        echo "

                        ";
        // line 412
        echo "
                        ";
        // line 413
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), (        // line 414
$context["form"]->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) .         // line 415
$context["form"]->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        echo "


                        ";
        // line 418
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), (        // line 419
$context["form"]->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) .         // line 420
$context["form"]->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        echo "

                        ";
        // line 422
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), (        // line 423
$context["form"]->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) .         // line 424
$context["form"]->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        echo "

                        ";
        // line 427
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 439
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")),         // line 440
$context["form"]->getselect("thumbnail[cropQuality]",         // line 442
($context["qualityList"] ?? null), (($this->getAttribute($this->getAttribute(        // line 443
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 446
        echo "

                        ";
        // line 448
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")),         // line 449
$context["form"]->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute(        // line 452
($context["settings"] ?? null), "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo", null, "display-first-photo-row");
        // line 457
        echo "

                        ";
        // line 459
        $this->displayBlock('openByLink', $context, $blocks);
        // line 467
        echo "
\t\t\t\t\t\t";
        // line 468
        $this->displayBlock('browserUrlTooltipHide', $context, $blocks);
        // line 477
        echo "
\t\t\t\t\t\t";
        // line 478
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable image title")),         // line 479
$context["form"]->getcheckbox("disableImageTitle", 1, ((($this->getAttribute(        // line 482
($context["settings"] ?? null), "disableImageTitle", array()) == 1)) ? (array("checked" => "checked")) : (array()))), null, null, null);
        // line 485
        echo "

                        ";
        // line 487
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 489
        echo "
\t\t\t\t\t\t";
        // line 490
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use these settings by default")),         // line 491
$context["form"]->getcheckbox("defaultsettings", "1", (($this->getAttribute(        // line 494
($context["settings"] ?? null), "defaultsettings", array())) ? (array("checked" => "checked")) : (array()))), "default-settings");
        // line 497
        echo "



                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 330
    public function block_galleryTypeSelectorItems($context, array $blocks = array())
    {
        // line 331
        echo "\t\t\t\t\t\t\t";
        $context["galleryTypeObj"] = array(0 => array("value" => "0", "title" => "Fixed"), 1 => array("value" => "1", "title" => "Vertical"), 2 => array("value" => "2", "title" => "Horizontal"), 3 => array("value" => "3", "title" => "Fixed Columns"), 4 => array("value" => "4", "title" => (("Mosaic(" . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Available in Pro"))) . ")"), "disabled" => 1));
        // line 338
        echo "
\t\t\t\t\t\t\t";
        // line 339
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")),         // line 340
$context["form"]->getselectWithElem("area[grid]",         // line 342
($context["galleryTypeObj"] ?? null), $this->getAttribute($this->getAttribute(        // line 343
($context["settings"] ?? null), "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        // line 347
        echo "
\t\t\t\t\t\t";
    }

    // line 459
    public function block_openByLink($context, array $blocks = array())
    {
        // line 460
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link",         // line 463
$context["form"]->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
        // line 465
        echo "
                        ";
    }

    // line 468
    public function block_browserUrlTooltipHide($context, array $blocks = array())
    {
        // line 469
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide browser url tooltip on image hover")), "utm_source=plugin&utm_medium=browser-url-tooltip-hide&utm_campaign=gallery", "browserUrlTooltipHideFree",         // line 472
$context["form"]->getcheckbox("browserUrlTooltipHideFree", "on", array("disabled" => "disabled")));
        // line 474
        echo "

\t\t\t\t\t\t";
    }

    // line 487
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 488
        echo "                        ";
    }

    // line 506
    public function block_mosaicImagesCount($context, array $blocks = array())
    {
        // line 507
        echo "            ";
    }

    // line 509
    public function block_mosaicGalleryImageCountText($context, array $blocks = array())
    {
        // line 510
        echo "\t\t\t";
    }

    // line 512
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 513
        echo "                <table class=\"form-table\" id=\"gg-anl-soc-share\">
                    <thead>
                    ";
        // line 515
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), (((        // line 516
$context["form"]->getradio("socialSharing[enabled]", true, twig_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) .         // line 517
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) .         // line 518
$context["form"]->getradio("socialSharing[enabled]", false, twig_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) .         // line 519
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
        echo "
                    </thead>
                    <tbody style=\"display: none;\">
                    ";
        // line 522
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "pluginInstalled", array())) {
            // line 523
            echo "                        ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "projectsList", array()))) {
                // line 524
                echo "

                            ";
                // line 526
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Buttons Project")),                 // line 527
$context["form"]->getselect("socialSharing[projectId]", $this->getAttribute($this->getAttribute(                // line 528
($context["settings"] ?? null), "socialSharing", array()), "projectsList", array()), $this->getAttribute($this->getAttribute(                // line 529
($context["settings"] ?? null), "socialSharing", array()), "projectId", array()), array("style" => "width: 200px")), "social-buttons-project");
                // line 531
                echo "

                            ";
                // line 534
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social setup")),                 // line 535
$context["form"]->getbutton("button-social-setup", "Show social setup", array("class" => "button button-primary")), "social-setup-dialog", false);
                // line 536
                echo "


                            ";
                // line 539
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")),                 // line 540
$context["form"]->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 543
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing", "h4");
                // line 547
                echo "

                            ";
                // line 549
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 550
$context["form"]->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 556
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
                // line 558
                echo "

                            ";
                // line 560
                echo $context["form"]->getrow("",                 // line 561
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
                echo "

                            ";
                // line 563
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "enabled", array());
                // line 564
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")),                 // line 565
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", true, (((                // line 568
($context["enabled"] ?? null) != "0")) ? (array("checked" => "checked")) : (array()))), "image-social-sharing", "h4");
                // line 572
                echo "

                            ";
                // line 574
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 575
$context["form"]->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 582
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
                // line 584
                echo "

                            ";
                // line 586
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 587
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 593
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
                // line 595
                echo "

                            ";
                // line 597
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 598
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 604
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
                // line 606
                echo "

                            ";
                // line 608
                echo $context["form"]->getrow("",                 // line 609
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
                echo "

                            ";
                // line 611
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
                // line 612
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")),                 // line 613
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", true, (((                // line 616
($context["enabled"] ?? null) != "0")) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing", "h4");
                // line 620
                echo "

                            ";
                // line 622
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 623
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 630
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
                // line 632
                echo "

                            ";
                // line 634
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 635
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 641
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
                // line 643
                echo "

                            ";
                // line 645
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 646
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 652
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
                // line 654
                echo "

                        ";
            } else {
                // line 657
                echo "                            <tr>
                                <td colspan=\"2\">
                                    <span>";
                // line 659
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no Social Sharing projects for now.")), "html", null, true);
                echo " </span>
                                    <a href=\"/wp-admin/admin.php?page=supsystic-social-sharing&module=projects&action=add\"
                                       target=\"_blank\" rel=\"noopener noreferrer\"
                                    >";
                // line 662
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create your first project")), "html", null, true);
                echo "</a>
                                    <span> ";
                // line 663
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("then just reload page with your Gallery settings, and you will see list with available Social Projects for your Gallery.")), "html", null, true);
                echo "</span>
                                </td>
                            </tr>
                        ";
            }
            // line 667
            echo "                    ";
        } else {
            // line 668
            echo "                        <tr>
                            <td colspan=\"2\">
                                <span>";
            // line 670
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Social Share Buttons by Supsystic to use this feature.")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/wp-admin/plugin-install.php?tab=search&type=term&s=Social+Share+Buttons+by+Supsystic\"
                                >";
            // line 672
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Install plugin")), "html", null, true);
            echo "</a>
                                <span> ";
            // line 673
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("from your admin area, or visit it's official page on Wordpress.org")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://wordpress.org/plugins/social-share-buttons-by-supsystic/\"> ";
            // line 674
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("here.")), "html", null, true);
            echo "</a>
                            </td>

                        </tr>
                    ";
        }
        // line 679
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 708
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 709
        echo "\t\t\t\t<table class=\"form-table\" id=\"gg-anl-horiz-scroll\">
\t\t\t\t\t<thead>
\t\t\t\t\t";
        // line 711
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 712
        echo "\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), (((        // line 713
$context["form"]->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), ((($context["horizontalScrollEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 714
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) .         // line 715
$context["form"]->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), ((($context["horizontalScrollEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 716
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        echo "
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 719
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")),         // line 720
$context["form"]->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        echo "

\t\t\t\t\t";
        // line 722
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")),         // line 723
$context["form"]->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 737
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 738
        echo "

\t\t\t\t\t";
        // line 740
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mouse Wheel Scroll Step")),         // line 741
$context["form"]->gettext("horizontalScroll[mouseWheelStep]", (($this->getAttribute($this->getAttribute(        // line 743
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "mouseWheelStep", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "mouseWheelStep", array()), 20)) : (20)), array()), "hscroll-mouse-wheel");
        // line 747
        echo "

\t\t\t\t\t";
        // line 749
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Touch Scroll Step")),         // line 750
$context["form"]->gettext("horizontalScroll[touchStep]", (($this->getAttribute($this->getAttribute(        // line 752
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "touchStep", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "touchStep", array()), 200)) : (200)), array()), "hscroll-touch-gest");
        // line 756
        echo "

\t\t\t\t\t";
        // line 758
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive Mode")),         // line 759
$context["form"]->getselect("horizontalScroll[responsiveMode]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("None")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("One by One"))), (($this->getAttribute($this->getAttribute(        // line 764
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "responsiveMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "responsiveMode", array()), "0")) : ("0")), array("style" => "width: auto")), "hScrollResponsiveMode");
        // line 768
        echo "

\t\t\t\t\t";
        // line 770
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 772
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"separator\"></div>
\t\t\t";
    }

    // line 770
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 771
        echo "\t\t\t\t\t";
    }

    // line 777
    public function block_border($context, array $blocks = array())
    {
        // line 778
        echo "                <table class=\"form-table\" name=\"border\" id=\"gg-anl-border-type\">
                    <thead>
                        ";
        // line 795
        echo "
                        ";
        // line 796
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), (        // line 797
$context["form"]->getselect("thumbnail[border][type]", ($context["borderTypes"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) .         // line 798
$context["form"]->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        echo "

                        ";
        // line 800
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")),         // line 801
$context["form"]->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
        echo "

                        ";
        // line 803
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), (        // line 804
$context["form"]->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .         // line 805
$context["form"]->getspan("", "pixels")), "border-width");
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 811
    public function block_shadow($context, array $blocks = array())
    {
        // line 812
        echo "                <table class=\"form-table\" name=\"shadow\" id=\"gg-anl-shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 817
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 818
        echo $context["form"]->getshow_tooltip("sgg-t-shadow");
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 822
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 823
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 824
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 825
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 832
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow effect preset")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 833
        echo $context["form"]->getshow_tooltip("sgg-t-shadow-eff-preset");
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 837
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 844
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                                ";
        // line 845
        echo $context["form"]->getshow_tooltip("when-mouse-is-over");
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 849
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 850
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 852
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 853
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 855
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 856
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 862
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")),         // line 863
$context["form"]->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        echo "

                        ";
        // line 865
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")),         // line 866
$context["form"]->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        echo "

                        ";
        // line 868
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")),         // line 869
$context["form"]->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        echo "

                        ";
        // line 871
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")),         // line 872
$context["form"]->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        echo "

                        ";
        // line 874
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")),         // line 875
$context["form"]->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 881
    public function block_popup($context, array $blocks = array())
    {
        // line 882
        echo "                <table class=\"form-table\" id=\"gg-anl-popup\">
                    <thead>
                        ";
        // line 885
        echo "                        ";
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 886
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), (((        // line 887
$context["form"]->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), ((        // line 890
($context["popUpEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 892
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) .         // line 896
$context["form"]->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), ((        // line 899
($context["popUpEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 901
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 905
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 909
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), ((        // line 910
$context["form"]->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) .         // line 915
$context["form"]->gethidden("box[type]", $this->getAttribute($this->getAttribute(        // line 917
($context["settings"] ?? null), "box", array()), "type", array()))) .         // line 919
$context["form"]->gethidden("box[theme]", $this->getAttribute($this->getAttribute(        // line 921
($context["settings"] ?? null), "box", array()), "theme", array()), array("id" => "bigImageTheme"))), "sgg-t-popup-theme");
        // line 924
        echo "

                        ";
        // line 927
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable popup border")),         // line 928
$context["form"]->getcheckbox("popup[border][enable]", "on", ((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 931
($context["settings"] ?? null), "popup", array()), "border", array()), "enable", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "popup-border-enable");
        // line 934
        echo "

                        ";
        // line 936
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border type")),         // line 937
$context["form"]->getselect("popup[border][type]", ($context["borderTypes"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "type", array()), array("style" => "width: auto;")), "border-type-popup");
        // line 938
        echo "

                        ";
        // line 940
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border color")),         // line 941
$context["form"]->getinput("text", "popup[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color-popup");
        echo "

                        ";
        // line 943
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border width")), (        // line 944
$context["form"]->getinput("number", "popup[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .         // line 945
$context["form"]->getspan("", "pixels")), "border-width-popup");
        echo "

                        ";
        // line 948
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")),         // line 949
$context["form"]->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute(        // line 952
($context["settings"] ?? null), "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 955
        echo "

                        ";
        // line 958
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")),         // line 959
$context["form"]->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute(        // line 967
($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")), "popup-image-text");
        // line 970
        echo "

                        ";
        // line 973
        echo "                        ";
        $this->displayBlock('popupLinkedImageText', $context, $blocks);
        // line 997
        echo "
\t\t\t\t\t\t";
        // line 999
        echo "\t\t\t\t\t\t";
        $this->displayBlock('disableSourceImageForLi', $context, $blocks);
        // line 1017
        echo "
                        ";
        // line 1019
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")),         // line 1020
$context["form"]->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute(        // line 1023
($context["settings"] ?? null), "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 1026
        echo "

\t\t\t\t\t\t";
        // line 1028
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long captions")),         // line 1029
$context["form"]->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute(        // line 1032
($context["settings"] ?? null), "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 1034
        echo "

                        ";
        // line 1037
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1038
$context["form"]->gettext("box[background]", $this->getAttribute($this->getAttribute(        // line 1040
($context["settings"] ?? null), "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 1044
        echo "
                        
                        ";
        // line 1047
        echo "\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background transparency")),         // line 1048
$context["form"]->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 1063
($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 1066
        echo "

                        ";
        // line 1069
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")),         // line 1070
$context["form"]->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute(        // line 1073
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow", "h4");
        // line 1078
        echo "

                        ";
        // line 1081
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")),         // line 1082
$context["form"]->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute(        // line 1085
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"), "sgg-t-popup-slide-show-speed");
        // line 1089
        echo "

                        ";
        // line 1092
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")),         // line 1093
$context["form"]->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 1096
($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array()), "true")) : ("true")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 1101
        echo "

                        ";
        // line 1104
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")),         // line 1105
$context["form"]->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 1108
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"), "sgg-t-popup-slideshow-autostart");
        // line 1112
        echo "

                        ";
        // line 1115
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), (((        // line 1116
$context["form"]->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute(        // line 1119
($context["settings"] ?? null), "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) .         // line 1122
$context["form"]->getspan("", "x")) .         // line 1123
$context["form"]->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute(        // line 1126
($context["settings"] ?? null), "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) .         // line 1129
$context["form"]->getspan("", "pixels")), "box-popupsize");
        // line 1131
        echo "


                        ";
        // line 1135
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")),         // line 1137
$context["form"]->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute(        // line 1140
($context["settings"] ?? null), "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 1143
        echo "

                        ";
        // line 1146
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable change url")),         // line 1148
$context["form"]->getcheckbox("box[disableChangeUrl]", "true", ((($this->getAttribute($this->getAttribute(        // line 1151
($context["settings"] ?? null), "box", array()), "disableChangeUrl", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableChangeUrl");
        // line 1154
        echo "

                        ";
        // line 1157
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 1237
        echo "                    </tbody>
                </table>
\t\t\t\t";
        // line 1239
        echo $context["form"]->gethidden("popup[placementType]", (($this->getAttribute($this->getAttribute(        // line 1241
($context["settings"] ?? null), "popup", array(), "any", false, true), "placementType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "placementType", array()), 0)) : (0)), array("id" => "popupPlacementTypeHidden"));
        // line 1243
        echo "
                <div class=\"separator\"></div>
            ";
    }

    // line 973
    public function block_popupLinkedImageText($context, array $blocks = array())
    {
        // line 974
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">
                                        ";
        // line 977
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Linked Image Text")), "html", null, true);
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 979
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>
                                    ";
        // line 983
        echo $context["form"]->getselect("box[linkedImageTextFree]", array("data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), "data-title", array("style" => "width: 150px", "disabled" => "", "id" => "ptsLinkTextChoose"));
        // line 993
        echo "
                                </td>
                            </tr>
                        ";
    }

    // line 999
    public function block_disableSourceImageForLi($context, array $blocks = array())
    {
        // line 1000
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label style=\"margin: 0 !important;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1003
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable source image for Linked Images")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<label><a href=\"";
        // line 1005
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 1009
        echo $context["form"]->getcheckbox("box[disableSourceImageForLiFree]", "1", array("disabled" => "disabled"));
        // line 1013
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
    }

    // line 1157
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 1158
        echo "                            ";
        // line 1159
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", (((        // line 1162
$context["form"]->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1164
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) .         // line 1167
$context["form"]->getspan("", "x")) .         // line 1168
$context["form"]->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1170
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) .         // line 1173
$context["form"]->getspan("", "pixels")));
        // line 1174
        echo "

                            ";
        // line 1177
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay",         // line 1180
$context["form"]->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1183
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 1186
        echo "
                            
                            ";
        // line 1189
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd",         // line 1192
$context["form"]->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1199
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 1202
        echo "

\t\t\t\t\t\t\t";
        // line 1204
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show rotate button")), "utm_source=plugin&utm_medium=popup_show_rotate_btn&utm_campaign=gallery", "box[freeSRB]",         // line 1207
$context["form"]->getcheckbox("box[freeSRB]", 1, array("disabled" => "")));
        // line 1212
        echo "

\t\t\t\t\t\t\t";
        // line 1214
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show details button")), "utm_source=plugin&utm_medium=popup_show_details_button&utm_campaign=gallery", "box[freeSLB]",         // line 1217
$context["form"]->getcheckbox("box[freeSLB]", 1, array("disabled" => "")));
        // line 1222
        echo "



\t\t\t\t\t\t\t";
        // line 1226
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show On hover thumbnail")), "utm_source=plugin&utm_medium=popup_show_thumbnail_on_hover&utm_campaign=gallery", "box[freeSTFOH]",         // line 1229
$context["form"]->getcheckbox("box[freeSTFOH]", 1, array("disabled" => "")));
        // line 1234
        echo "

                        ";
    }

    // line 1247
    public function block_lazyload($context, array $blocks = array())
    {
        // line 1248
        echo "\t\t\t\t<table class=\"form-table\" id=\"gg-anl-lazyload\">
\t\t\t\t\t<thead>
\t\t\t\t\t";
        // line 1251
        echo "\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lazy Load")), (((        // line 1252
$context["form"]->getradio("lazyload[enabled]", "1", twig_array_merge(array("id" => "lazyLoadEnabled"), ((($this->getAttribute($this->getAttribute(        // line 1255
($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) ? (array("checked" => "checked")) : (array())))) .         // line 1257
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "lazyLoadEnabled")) .         // line 1261
$context["form"]->getradio("lazyload[enabled]", "0", twig_array_merge(array("id" => "lazyLoadDisabled"), ((($this->getAttribute($this->getAttribute(        // line 1264
($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) ? (array()) : (array("checked" => "checked")))))) .         // line 1266
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "lazyLoadDisabled")), "sgg-t-lazyload-enable", true, "sggLazyLoadEnableRow");
        // line 1273
        echo "
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 1276
        echo twig_escape_filter($this->env, (($context["pluginUrl"] ?? null) . "/assets/img/loading.gif"), "html", null, true);
        echo "\" name=\"lazyload[defaultImgUrl]\"/>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
    }

    // line 1281
    public function block_preload($context, array $blocks = array())
    {
        // line 1282
        echo "                <table class=\"form-table\" name=\"preload\" id=\"gg-anl-preloader\">
                    <thead>
                        ";
        // line 1284
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1285
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), (((        // line 1286
$context["form"]->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), ((($context["preloadEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1287
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) .         // line 1288
$context["form"]->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), ((($context["preloadEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1289
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        echo "
                    </thead>
                ";
        // line 1291
        if ( !$this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 1292
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 1296
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1298
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 1302
            echo $context["form"]->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 1305
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 1315
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 1319
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1321
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 1325
            echo $context["form"]->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 1326
            echo twig_escape_filter($this->env, ($context["piconImg"] ?? null), "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 1331
        echo "                </table>
            ";
    }

    // line 1334
    public function block_attributes($context, array $blocks = array())
    {
        // line 1335
        echo "                <table class=\"form-table\" name=\"attributes\" id=\"gg-anl-attributes\">
                    <thead>
                    \t";
        // line 1337
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Attributes")), "utm_source=plugin&utm_campaign=gallery", "customAttributes", (((        // line 1340
$context["form"]->getradio("attributes[enabled]", "true", array("id" => "attributes-enable", "disabled" => "disabled")) .         // line 1341
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "attributes-enable")) .         // line 1342
$context["form"]->getradio("attributes[enabled]", "false", array("id" => "attributes-disable", "checked" => "checked", "disabled" => "disabled"))) .         // line 1343
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "attributes-disable")), true, 1);
        // line 1344
        echo "
                    </thead>
                </table>
            ";
    }

    // line 1349
    public function block_additionalCaptionSettings($context, array $blocks = array())
    {
        // line 1350
        echo "\t\t\t\t<table class=\"form-table\" name=\"captionAdditSett\" id=\"gg-anl-caption-add-sett\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t";
        // line 1352
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thumbnail transformations")), "utm_source=plugin&utm_medium=additinalCaptionSettings&utm_campaign=gallery", "additionalCaptionSettingInPro", (((        // line 1355
$context["form"]->getradio("captionEffectSettings[Enable]", 1, array("id" => "captEffSettEnable", "class" => "captAdditEffectSettEnbl", "disabled" => "disabled")) .         // line 1360
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "captEffSettEnable")) .         // line 1364
$context["form"]->getradio("captionEffectSettings[Enable]", 0, array("id" => "captEffDisable", "class" => "captAdditEffectSettEnbl", "checked" => "checked", "disabled" => "disabled"))) .         // line 1369
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "captEffDisable")), true, 1);
        // line 1375
        echo "
\t\t\t\t\t</thead>
\t\t\t\t</table>
\t\t\t";
    }

    // line 1386
    public function block_post($context, array $blocks = array())
    {
        // line 1387
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1389
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Posts and Pages")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 1392
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 29\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1397
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 1398
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1452
    public function block_captionSettingsType($context, array $blocks = array())
    {
        // line 1453
        echo "\t\t\t\t<table class=\"form-table captions-settings-type\" name=\"captionSettingsType\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 1455
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Caption Builder")), "utm_source=plugin&utm_medium=caption_settings_type&utm_campaign=gallery", "caption-settings-type-pro", (((        // line 1458
$context["form"]->getradio("captionBuilder[enabled]", 1, array("id" => "ggsShowUserCaptionBuilder", "class" => "ggUserCaptionBuilderCl", "disabled" => "disabled")) .         // line 1463
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "ggsShowUserCaptionBuilder")) .         // line 1467
$context["form"]->getradio("captionBuilder[enabled]", 0, array("id" => "ggsHideUserCaptionBuilder", "class" => "ggUserCaptionBuilderCl", "disabled" => "disabled", "checked" => "checked"))) .         // line 1472
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "ggsHideUserCaptionBuilder")), "useCaptionBuilder", true);
        // line 1478
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
    }

    // line 1493
    public function block_overlaySettings($context, array $blocks = array())
    {
        // line 1494
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"captions\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 1497
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), (((        // line 1498
$context["form"]->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), ((        // line 1501
($context["enableCaptions"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1503
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) .         // line 1507
$context["form"]->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), ((        // line 1510
($context["enableCaptions"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1512
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "sgg-ci-caption-enable", true, "useCaptions");
        // line 1517
        echo "

\t\t\t\t\t\t\t";
        // line 1520
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")),         // line 1521
$context["form"]->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")), "chooseEffect");
        // line 1527
        echo "

\t\t\t\t\t\t\t";
        // line 1530
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('backgroundImageForHoverEffect', $context, $blocks);
        // line 1545
        echo "
\t\t\t\t\t\t\t";
        // line 1547
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('backgroundColorForShowOnHover', $context, $blocks);
        // line 1560
        echo "
\t\t\t\t\t\t\t";
        // line 1562
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")),         // line 1563
$context["form"]->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1566
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1570
        echo "

\t\t\t\t\t\t\t";
        // line 1573
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")),         // line 1574
$context["form"]->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))),         // line 1577
($context["polaroidIsEnable"] ?? null), array("style" => "width: auto;", "class" => "polaroid-effect-class")), "polaroid-effect", "h4");
        // line 1582
        echo "

\t\t\t\t\t\t\t";
        // line 1585
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")),         // line 1586
$context["form"]->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1589
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1593
        echo "

\t\t\t\t\t\t\t";
        // line 1596
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")),         // line 1597
$context["form"]->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1600
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1604
        echo "

\t\t\t\t\t\t\t";
        // line 1607
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")),         // line 1608
$context["form"]->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1611
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width", null, "polaroid-fram-width-row");
        // line 1617
        echo "

\t\t\t\t\t\t\t";
        // line 1620
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1621
$context["form"]->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1623
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1627
        echo "

\t\t\t\t\t\t\t";
        // line 1630
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")),         // line 1631
$context["form"]->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1633
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1637
        echo "

\t\t\t\t\t\t\t";
        // line 1640
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 1641
$context["form"]->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1644
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1648
        echo "

\t\t\t\t\t\t\t";
        // line 1651
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), (        // line 1652
$context["form"]->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1655
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) .         // line 1658
$context["form"]->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1661
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1665
        echo "

\t\t\t\t\t\t\t";
        // line 1668
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")),         // line 1669
$context["form"]->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1672
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1676
        echo "

\t\t\t\t\t\t\t";
        // line 1679
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")),         // line 1680
$context["form"]->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1683
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1687
        echo "

\t\t\t\t\t\t\t";
        // line 1690
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")),         // line 1691
$context["form"]->getselectv("thumbnail[overlay][font_family]",         // line 1693
($context["fontList"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1694
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1698
        echo "


\t\t\t\t\t\t\t";
        // line 1702
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title")),         // line 1703
$context["form"]->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute(        // line 1706
($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1710
        echo "

\t\t\t\t\t\t\t";
        // line 1713
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Always show captions on mobile")),         // line 1714
$context["form"]->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1717
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1720
        echo "

\t\t\t\t\t\t\t";
        // line 1723
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")),         // line 1724
$context["form"]->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1727
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1730
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t";
    }

    // line 1530
    public function block_backgroundImageForHoverEffect($context, array $blocks = array())
    {
        // line 1531
        echo "\t\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover")), "utm_source=plugin&utm_medium=hover_caption_image_bg&utm_campaign=gallery", "overlay-effect-image-on-hover-enable",         // line 1534
$context["form"]->getselect("thumbnail[overlay][imageOnHoverEnable]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable"))), "0", array("disabled" => "disabled")));
        // line 1543
        echo "
\t\t\t\t\t\t\t";
    }

    // line 1547
    public function block_backgroundColorForShowOnHover($context, array $blocks = array())
    {
        // line 1548
        echo "\t\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color for \"Show on hover\"")), "utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery", "backgroundColorForShowOnHoverFree",         // line 1551
$context["form"]->getselect("thumbnail[overlay][backgroundFoShowOnHover]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), 0, array("disabled" => "disabled")));
        // line 1558
        echo "
\t\t\t\t\t\t\t";
    }

    // line 1737
    public function block_icons($context, array $blocks = array())
    {
        // line 1738
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"icons\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 1740
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1741
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons")), (((        // line 1742
$context["form"]->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), ((($context["iconsEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1743
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) .         // line 1744
$context["form"]->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), ((($context["iconsEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1745
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        // line 1746
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 1749
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation effects")),         // line 1750
$context["form"]->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")), "ci-icons-animation-effects");
        // line 1752
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1756
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1757
        echo $context["form"]->getshow_tooltip("ci-icons-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1761
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsHoverColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1767
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1768
        echo $context["form"]->getshow_tooltip("ci-icons-hover-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1772
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1778
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1779
        echo $context["form"]->getshow_tooltip("ci-icons-bg-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1783
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundHoverColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1789
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1790
        echo $context["form"]->getshow_tooltip("ci-icons-hover-bg-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1794
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsSize\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1800
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1801
        echo $context["form"]->getshow_tooltip("ci-icons-hover-size");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1805
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsMargin\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1811
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1812
        echo $context["form"]->getshow_tooltip("ci-icons-distance");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1816
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlay\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1822
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1823
        echo $context["form"]->getshow_tooltip("ci-icons-show-overlay");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"true\" ";
        // line 1828
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()), "true");
        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1829
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"false\" ";
        // line 1831
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()), "false");
        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1832
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1840
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1841
        echo $context["form"]->getshow_tooltip("ci-icons-overlay-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1845
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayTransparency\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1851
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 1852
        echo $context["form"]->getshow_tooltip("ci-icons-overlay-transparency");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 1857
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1858
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1859
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 1860
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 1861
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\" ";
        // line 1862
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 5);
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\" ";
        // line 1863
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"7\" ";
        // line 1864
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"8\" ";
        // line 1865
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"9\" ";
        // line 1866
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"10\" ";
        // line 1867
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 1871
        echo $this->getAttribute($this, "showFewIconsBy", array(0 => ($context["settings"] ?? null), 1 => ($context["form"] ?? null), 2 => 0), "method");
        echo "
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t";
    }

    // line 1878
    public function block_proCaptionAndIconSettings($context, array $blocks = array())
    {
        // line 1879
        echo "\t\t\t\t\t";
    }

    // line 1882
    public function block_exifCaptionSettings($context, array $blocks = array())
    {
        // line 1883
        echo "\t\t\t\t\t<table class=\"form-table\" name=\"captions\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h1 style=\"line-height: 1;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1888
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show EXIF data")), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t\t<a class=\"button get-pro\" href=\"";
        // line 1889
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=exif-data&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1890
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("GetPRO for 29\$")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t";
    }

    // line 1902
    public function block_categories($context, array $blocks = array())
    {
        // line 1903
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1905
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categorize images in the gallery")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 1908
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1912
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 1913
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" />
                    </a>
                </div>
                ";
        // line 1916
        $this->displayBlock('pagination', $context, $blocks);
        // line 1931
        echo "            </div>
        ";
    }

    // line 1916
    public function block_pagination($context, array $blocks = array())
    {
        // line 1917
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1918
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Let user switch gallery pages")), "html", null, true);
        echo "
                        </br>
                        <a class=\"button get-pro\" target=\"_blank\"
                           href=\"";
        // line 1921
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1925
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                                <img src=\"";
        // line 1926
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1934
    public function block_watermark($context, array $blocks = array())
    {
        // line 1935
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    ";
        // line 1937
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add watermarks to your photos")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 1940
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 29\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 1943
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 1944
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro.png\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1950
    public function block_form($context, array $blocks = array())
    {
        // line 1951
        echo "        ";
    }

    // line 2081
    public function block_captionEffectInPro($context, array $blocks = array())
    {
        // line 2082
        echo "\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption available-in-pro\" data-grid-gallery-type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
        // line 2083
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery")), "html", null, true);
        echo "\" class=\"caption-available-in-pro-link\">
\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
        // line 2084
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t<figcaption style=\"";
        // line 2085
        echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:table;width:100%;height:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span ";
        // line 2088
        if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
            echo "dir=\"rtl\" class=\"ggRtlClass\"";
        }
        echo " style=\"display:table-cell;font-size:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo ";padding:10px;vertical-align:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
        echo ";\">Caption</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t<div class=\"get-in-pro-element\">
\t\t\t\t\t\t\t\t\t\t";
        // line 2093
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pro Feature")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t";
    }

    // line 2143
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 2144
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iconsWithCaptionsEffects"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 2145
            echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 2146
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
\t\t\t\t\t\t\t\t\t<figcaption style=\"";
            // line 2147
            echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t<div class=\"caption-with-";
            // line 2153
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
            // line 2155
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\tvertical-align:";
            // line 2156
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\tCaption
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t";
            // line 2162
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2166
        echo "\t\t\t\t\t\t";
    }

    // line 2361
    public function block_modals($context, array $blocks = array())
    {
        // line 2362
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 2364
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 2381
        echo "            ";
        ob_start();
        // line 2382
        echo "                ";
        $this->displayBlock('icon_wrap_item_class', $context, $blocks);
        // line 2385
        echo "            ";
        $context["var_icon_wrap_item_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 2386
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iconsEffects"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 2387
            echo "                <div class=\"hi-icon-wrap ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["name"], 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background-color: #434A52; background-repeat: no-repeat; overflow: hidden;\">
                    <a href=\"#\" class=\"hi-icon ";
            // line 2388
            echo twig_escape_filter($this->env, ($context["var_icon_wrap_item_class"] ?? null), "html", null, true);
            echo "\" data-effect=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-effect-base=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["name"], 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $context["name"]), "html", null, true);
            echo "\" style=\"\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2391
        echo "        </div>
\t\t<style id=\"sggSettingsIconSizeStyle\">
\t\t\t.hi-icon {
\t\t\t\twidth: ";
        // line 2394
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t\theight: ";
        // line 2395
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t}
\t\t</style>
\t\t<style id=\"sggSettingsIconColorStyle\">
\t\t\t.hi-icon {color: ";
        // line 2399
        echo twig_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()) / 10))), "html", null, true);
        echo " !important;}
\t\t</style>
\t\t<style id=\"sggSettingsIconBgColorStyle\">
\t\t\t.hi-icon { background: ";
        // line 2402
        echo twig_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "bgTransparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconHoverColorStyle\">
\t\t\t.hi-icon:hover { color: ";
        // line 2405
        echo twig_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconHoverBgStyle\">
\t\t\t.hi-icon:hover { background: ";
        // line 2408
        echo twig_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "bgTransparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconBeforeFontSizeStyle\">
\t\t\t.hi-icon:before {
\t\t\t\tfont-size: ";
        // line 2412
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
\t\t\t\tline-height: ";
        // line 2413
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t}
\t\t</style>
    ";
    }

    // line 2382
    public function block_icon_wrap_item_class($context, array $blocks = array())
    {
        // line 2383
        echo "\t\t\t\t\ticon-fullscreen
                ";
    }

    // line 2418
    public function block_settingsOtherPro($context, array $blocks = array())
    {
        // line 2419
        echo "\t";
    }

    // line 2
    public function getlabel($__label__ = null, $__for__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, ($context["for"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 2422
    public function getshowFewIconsBy($__settings__ = null, $__form__ = null, $__isCaptionBuilder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "settings" => $__settings__,
            "form" => $__form__,
            "isCaptionBuilder" => $__isCaptionBuilder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2423
            echo "
\t";
            // line 2424
            $context["isShowRow"] = 0;
            // line 2425
            echo "\t";
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) == 1) && (($context["isCaptionBuilder"] ?? null) == 1))) {
                // line 2426
                echo "\t\t";
                $context["isShowRow"] = 1;
                // line 2427
                echo "\t";
            } elseif ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) != 1) && (($context["isCaptionBuilder"] ?? null) != 1))) {
                // line 2428
                echo "\t\t";
                $context["isShowRow"] = 1;
                // line 2429
                echo "\t";
            }
            // line 2430
            echo "
\t";
            // line 2431
            if ((($context["isShowRow"] ?? null) == 1)) {
                // line 2432
                echo "\t\t";
                echo $this->getAttribute(                // line 2433
($context["form"] ?? null), "row", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show few icons by")), 1 => $this->getAttribute(                // line 2435
($context["form"] ?? null), "select", array(0 => "icons[showFewIcons]", 1 => array("default" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default")), "params" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("By params"))), 2 => (($this->getAttribute($this->getAttribute(                // line 2441
($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array()), "default")) : ("default")), 3 => array("style" => "width: auto;", "id" => "showFewIconsSel")), "method"), 2 => "capt-showt-few-icons-by", 3 => "h4"), "method");
                // line 2447
                echo "
\t\t";
                // line 2448
                echo $this->getAttribute(                // line 2449
($context["form"] ?? null), "row", array(0 => "", 1 => ((((($this->getAttribute(                // line 2451
($context["form"] ?? null), "checkbox", array(0 => "icons[isVideoIcon]", 1 => "1", 2 => twig_array_merge(array("id" => "showVideoIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2454
($context["settings"] ?? null), "icons", array()), "isVideoIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method") . $this->getAttribute(                // line 2455
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show video icon, if exists")), 1 => "showVideoIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")) . $this->getAttribute(                // line 2460
($context["form"] ?? null), "checkbox", array(0 => "icons[isLinkIcon]", 1 => "1", 2 => twig_array_merge(array("id" => "showLinkIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2463
($context["settings"] ?? null), "icons", array()), "isLinkIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method")) . $this->getAttribute(                // line 2464
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show link icon, if exists")), 1 => "showLinkIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")) . $this->getAttribute(                // line 2469
($context["form"] ?? null), "checkbox", array(0 => "icons[isPopupIcon]", 1 => "1", 2 => twig_array_merge(array("id" => "showPopupIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2472
($context["settings"] ?? null), "icons", array()), "isPopupIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method")) . $this->getAttribute(                // line 2473
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show popup")), 1 => "showPopupIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")), 2 => "capt-showv-few-icons-by", 3 => null, 4 => "sggFewIconsShowingRow"), "method");
                // line 2482
                echo "
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3727 => 2482,  3725 => 2473,  3724 => 2472,  3723 => 2469,  3722 => 2464,  3721 => 2463,  3720 => 2460,  3719 => 2455,  3718 => 2454,  3717 => 2451,  3716 => 2449,  3715 => 2448,  3712 => 2447,  3710 => 2441,  3709 => 2435,  3708 => 2433,  3706 => 2432,  3704 => 2431,  3701 => 2430,  3698 => 2429,  3695 => 2428,  3692 => 2427,  3689 => 2426,  3686 => 2425,  3684 => 2424,  3681 => 2423,  3667 => 2422,  3647 => 3,  3634 => 2,  3630 => 2419,  3627 => 2418,  3622 => 2383,  3619 => 2382,  3611 => 2413,  3607 => 2412,  3600 => 2408,  3594 => 2405,  3588 => 2402,  3582 => 2399,  3575 => 2395,  3571 => 2394,  3566 => 2391,  3551 => 2388,  3542 => 2387,  3537 => 2386,  3534 => 2385,  3531 => 2382,  3528 => 2381,  3526 => 2364,  3521 => 2362,  3518 => 2361,  3514 => 2166,  3504 => 2162,  3495 => 2156,  3491 => 2155,  3486 => 2153,  3477 => 2147,  3473 => 2146,  3468 => 2145,  3463 => 2144,  3460 => 2143,  3451 => 2093,  3436 => 2088,  3430 => 2085,  3426 => 2084,  3422 => 2083,  3417 => 2082,  3414 => 2081,  3410 => 1951,  3407 => 1950,  3398 => 1944,  3394 => 1943,  3388 => 1940,  3382 => 1937,  3378 => 1935,  3375 => 1934,  3366 => 1926,  3362 => 1925,  3355 => 1921,  3349 => 1918,  3346 => 1917,  3343 => 1916,  3338 => 1931,  3336 => 1916,  3330 => 1913,  3326 => 1912,  3319 => 1908,  3313 => 1905,  3309 => 1903,  3306 => 1902,  3294 => 1890,  3290 => 1889,  3286 => 1888,  3279 => 1883,  3276 => 1882,  3272 => 1879,  3269 => 1878,  3260 => 1871,  3253 => 1867,  3249 => 1866,  3245 => 1865,  3241 => 1864,  3237 => 1863,  3230 => 1862,  3226 => 1861,  3222 => 1860,  3218 => 1859,  3214 => 1858,  3210 => 1857,  3202 => 1852,  3198 => 1851,  3189 => 1845,  3182 => 1841,  3178 => 1840,  3167 => 1832,  3163 => 1831,  3158 => 1829,  3154 => 1828,  3146 => 1823,  3142 => 1822,  3133 => 1816,  3126 => 1812,  3122 => 1811,  3113 => 1805,  3106 => 1801,  3102 => 1800,  3093 => 1794,  3086 => 1790,  3082 => 1789,  3073 => 1783,  3066 => 1779,  3062 => 1778,  3053 => 1772,  3046 => 1768,  3042 => 1767,  3033 => 1761,  3026 => 1757,  3022 => 1756,  3016 => 1752,  3014 => 1750,  3013 => 1749,  3008 => 1746,  3006 => 1745,  3005 => 1744,  3004 => 1743,  3003 => 1742,  3001 => 1741,  2999 => 1740,  2995 => 1738,  2992 => 1737,  2987 => 1558,  2985 => 1551,  2983 => 1548,  2980 => 1547,  2975 => 1543,  2973 => 1534,  2971 => 1531,  2968 => 1530,  2959 => 1730,  2957 => 1727,  2956 => 1724,  2954 => 1723,  2950 => 1720,  2948 => 1717,  2947 => 1714,  2945 => 1713,  2941 => 1710,  2939 => 1706,  2938 => 1703,  2936 => 1702,  2931 => 1698,  2929 => 1694,  2928 => 1693,  2927 => 1691,  2925 => 1690,  2921 => 1687,  2919 => 1683,  2918 => 1680,  2916 => 1679,  2912 => 1676,  2910 => 1672,  2909 => 1669,  2907 => 1668,  2903 => 1665,  2901 => 1661,  2900 => 1658,  2899 => 1655,  2898 => 1652,  2896 => 1651,  2892 => 1648,  2890 => 1644,  2889 => 1641,  2887 => 1640,  2883 => 1637,  2881 => 1633,  2880 => 1631,  2878 => 1630,  2874 => 1627,  2872 => 1623,  2871 => 1621,  2869 => 1620,  2865 => 1617,  2863 => 1611,  2862 => 1608,  2860 => 1607,  2856 => 1604,  2854 => 1600,  2853 => 1597,  2851 => 1596,  2847 => 1593,  2845 => 1589,  2844 => 1586,  2842 => 1585,  2838 => 1582,  2836 => 1577,  2835 => 1574,  2833 => 1573,  2829 => 1570,  2827 => 1566,  2826 => 1563,  2824 => 1562,  2821 => 1560,  2818 => 1547,  2815 => 1545,  2812 => 1530,  2808 => 1527,  2806 => 1521,  2804 => 1520,  2800 => 1517,  2798 => 1512,  2797 => 1510,  2796 => 1507,  2795 => 1503,  2794 => 1501,  2793 => 1498,  2791 => 1497,  2787 => 1494,  2784 => 1493,  2777 => 1478,  2775 => 1472,  2774 => 1467,  2773 => 1463,  2772 => 1458,  2771 => 1455,  2767 => 1453,  2764 => 1452,  2755 => 1398,  2751 => 1397,  2743 => 1392,  2737 => 1389,  2733 => 1387,  2730 => 1386,  2723 => 1375,  2721 => 1369,  2720 => 1364,  2719 => 1360,  2718 => 1355,  2717 => 1352,  2713 => 1350,  2710 => 1349,  2703 => 1344,  2701 => 1343,  2700 => 1342,  2699 => 1341,  2698 => 1340,  2697 => 1337,  2693 => 1335,  2690 => 1334,  2685 => 1331,  2677 => 1326,  2673 => 1325,  2666 => 1321,  2661 => 1319,  2655 => 1315,  2645 => 1305,  2639 => 1302,  2632 => 1298,  2627 => 1296,  2621 => 1292,  2619 => 1291,  2614 => 1289,  2613 => 1288,  2612 => 1287,  2611 => 1286,  2609 => 1285,  2607 => 1284,  2603 => 1282,  2600 => 1281,  2592 => 1276,  2587 => 1273,  2585 => 1266,  2584 => 1264,  2583 => 1261,  2582 => 1257,  2581 => 1255,  2580 => 1252,  2578 => 1251,  2574 => 1248,  2571 => 1247,  2565 => 1234,  2563 => 1229,  2562 => 1226,  2556 => 1222,  2554 => 1217,  2553 => 1214,  2549 => 1212,  2547 => 1207,  2546 => 1204,  2542 => 1202,  2540 => 1199,  2539 => 1192,  2537 => 1189,  2533 => 1186,  2531 => 1183,  2530 => 1180,  2528 => 1177,  2524 => 1174,  2522 => 1173,  2521 => 1170,  2520 => 1168,  2519 => 1167,  2518 => 1164,  2517 => 1162,  2515 => 1159,  2513 => 1158,  2510 => 1157,  2503 => 1013,  2501 => 1009,  2494 => 1005,  2489 => 1003,  2484 => 1000,  2481 => 999,  2474 => 993,  2472 => 983,  2465 => 979,  2460 => 977,  2455 => 974,  2452 => 973,  2446 => 1243,  2444 => 1241,  2443 => 1239,  2439 => 1237,  2436 => 1157,  2432 => 1154,  2430 => 1151,  2429 => 1148,  2427 => 1146,  2423 => 1143,  2421 => 1140,  2420 => 1137,  2418 => 1135,  2413 => 1131,  2411 => 1129,  2410 => 1126,  2409 => 1123,  2408 => 1122,  2407 => 1119,  2406 => 1116,  2404 => 1115,  2400 => 1112,  2398 => 1108,  2397 => 1105,  2395 => 1104,  2391 => 1101,  2389 => 1096,  2388 => 1093,  2386 => 1092,  2382 => 1089,  2380 => 1085,  2379 => 1082,  2377 => 1081,  2373 => 1078,  2371 => 1073,  2370 => 1070,  2368 => 1069,  2364 => 1066,  2362 => 1063,  2361 => 1048,  2359 => 1047,  2355 => 1044,  2353 => 1040,  2352 => 1038,  2350 => 1037,  2346 => 1034,  2344 => 1032,  2343 => 1029,  2342 => 1028,  2338 => 1026,  2336 => 1023,  2335 => 1020,  2333 => 1019,  2330 => 1017,  2327 => 999,  2324 => 997,  2321 => 973,  2317 => 970,  2315 => 967,  2314 => 959,  2312 => 958,  2308 => 955,  2306 => 952,  2305 => 949,  2303 => 948,  2298 => 945,  2297 => 944,  2296 => 943,  2291 => 941,  2290 => 940,  2286 => 938,  2284 => 937,  2283 => 936,  2279 => 934,  2277 => 931,  2276 => 928,  2274 => 927,  2270 => 924,  2268 => 921,  2267 => 919,  2266 => 917,  2265 => 915,  2264 => 910,  2262 => 909,  2257 => 905,  2255 => 901,  2254 => 899,  2253 => 896,  2252 => 892,  2251 => 890,  2250 => 887,  2248 => 886,  2245 => 885,  2241 => 882,  2238 => 881,  2229 => 875,  2228 => 874,  2223 => 872,  2222 => 871,  2217 => 869,  2216 => 868,  2211 => 866,  2210 => 865,  2205 => 863,  2204 => 862,  2195 => 856,  2189 => 855,  2184 => 853,  2178 => 852,  2173 => 850,  2167 => 849,  2160 => 845,  2156 => 844,  2146 => 837,  2139 => 833,  2135 => 832,  2125 => 825,  2119 => 824,  2115 => 823,  2109 => 822,  2102 => 818,  2098 => 817,  2091 => 812,  2088 => 811,  2079 => 805,  2078 => 804,  2077 => 803,  2072 => 801,  2071 => 800,  2066 => 798,  2065 => 797,  2064 => 796,  2061 => 795,  2057 => 778,  2054 => 777,  2050 => 771,  2047 => 770,  2040 => 772,  2038 => 770,  2034 => 768,  2032 => 764,  2031 => 759,  2030 => 758,  2026 => 756,  2024 => 752,  2023 => 750,  2022 => 749,  2018 => 747,  2016 => 743,  2015 => 741,  2014 => 740,  2010 => 738,  2008 => 737,  2007 => 723,  2006 => 722,  2001 => 720,  2000 => 719,  1994 => 716,  1993 => 715,  1992 => 714,  1991 => 713,  1989 => 712,  1987 => 711,  1983 => 709,  1980 => 708,  1973 => 679,  1965 => 674,  1961 => 673,  1957 => 672,  1952 => 670,  1948 => 668,  1945 => 667,  1938 => 663,  1934 => 662,  1928 => 659,  1924 => 657,  1919 => 654,  1917 => 652,  1916 => 646,  1915 => 645,  1911 => 643,  1909 => 641,  1908 => 635,  1907 => 634,  1903 => 632,  1901 => 630,  1900 => 623,  1899 => 622,  1895 => 620,  1893 => 616,  1892 => 613,  1890 => 612,  1888 => 611,  1883 => 609,  1882 => 608,  1878 => 606,  1876 => 604,  1875 => 598,  1874 => 597,  1870 => 595,  1868 => 593,  1867 => 587,  1866 => 586,  1862 => 584,  1860 => 582,  1859 => 575,  1858 => 574,  1854 => 572,  1852 => 568,  1851 => 565,  1849 => 564,  1847 => 563,  1842 => 561,  1841 => 560,  1837 => 558,  1835 => 556,  1834 => 550,  1833 => 549,  1829 => 547,  1827 => 543,  1826 => 540,  1825 => 539,  1820 => 536,  1818 => 535,  1816 => 534,  1812 => 531,  1810 => 529,  1809 => 528,  1808 => 527,  1807 => 526,  1803 => 524,  1800 => 523,  1798 => 522,  1792 => 519,  1791 => 518,  1790 => 517,  1789 => 516,  1788 => 515,  1784 => 513,  1781 => 512,  1777 => 510,  1774 => 509,  1770 => 507,  1767 => 506,  1763 => 488,  1760 => 487,  1754 => 474,  1752 => 472,  1750 => 469,  1747 => 468,  1742 => 465,  1740 => 463,  1738 => 460,  1735 => 459,  1730 => 347,  1728 => 343,  1727 => 342,  1726 => 340,  1725 => 339,  1722 => 338,  1719 => 331,  1716 => 330,  1705 => 497,  1703 => 494,  1702 => 491,  1701 => 490,  1698 => 489,  1696 => 487,  1692 => 485,  1690 => 482,  1689 => 479,  1688 => 478,  1685 => 477,  1683 => 468,  1680 => 467,  1678 => 459,  1674 => 457,  1672 => 452,  1671 => 449,  1670 => 448,  1666 => 446,  1664 => 443,  1663 => 442,  1662 => 440,  1660 => 439,  1657 => 427,  1652 => 424,  1651 => 423,  1650 => 422,  1645 => 420,  1644 => 419,  1643 => 418,  1637 => 415,  1636 => 414,  1635 => 413,  1632 => 412,  1627 => 405,  1626 => 404,  1622 => 402,  1620 => 399,  1619 => 396,  1617 => 395,  1612 => 392,  1611 => 391,  1610 => 390,  1605 => 388,  1604 => 387,  1603 => 386,  1597 => 383,  1596 => 382,  1592 => 380,  1590 => 379,  1589 => 378,  1586 => 377,  1581 => 373,  1580 => 372,  1579 => 371,  1578 => 369,  1577 => 368,  1576 => 366,  1575 => 365,  1574 => 364,  1567 => 360,  1558 => 354,  1554 => 353,  1548 => 349,  1546 => 330,  1542 => 328,  1539 => 327,  1534 => 324,  1530 => 2418,  1527 => 2417,  1525 => 2361,  1515 => 2354,  1510 => 2352,  1503 => 2348,  1499 => 2347,  1495 => 2346,  1489 => 2343,  1484 => 2342,  1482 => 2341,  1473 => 2334,  1471 => 2328,  1470 => 2327,  1464 => 2324,  1457 => 2319,  1455 => 2315,  1454 => 2310,  1453 => 2306,  1452 => 2301,  1451 => 2300,  1445 => 2297,  1436 => 2293,  1429 => 2289,  1422 => 2285,  1397 => 2262,  1387 => 2258,  1381 => 2255,  1371 => 2254,  1361 => 2253,  1358 => 2252,  1354 => 2251,  1350 => 2249,  1348 => 2177,  1342 => 2174,  1337 => 2172,  1332 => 2169,  1328 => 2167,  1326 => 2143,  1320 => 2141,  1318 => 2140,  1315 => 2139,  1301 => 2138,  1294 => 2134,  1279 => 2129,  1273 => 2126,  1269 => 2125,  1264 => 2124,  1257 => 2120,  1244 => 2114,  1239 => 2112,  1234 => 2110,  1219 => 2099,  1216 => 2098,  1213 => 2081,  1211 => 2080,  1205 => 2077,  1199 => 2074,  1187 => 2066,  1184 => 2065,  1167 => 2064,  1162 => 2062,  1156 => 2058,  1146 => 2054,  1140 => 2051,  1135 => 2049,  1129 => 2048,  1123 => 2047,  1116 => 2046,  1112 => 2045,  1109 => 2044,  1106 => 2043,  1103 => 2042,  1101 => 2041,  1098 => 2040,  1096 => 2031,  1091 => 2028,  1089 => 2023,  1088 => 2021,  1087 => 2018,  1086 => 2014,  1085 => 2012,  1084 => 2009,  1083 => 2005,  1082 => 2003,  1081 => 2000,  1080 => 1999,  1075 => 1998,  1073 => 1997,  1067 => 1994,  1062 => 1992,  1054 => 1987,  1047 => 1983,  1037 => 1976,  1032 => 1974,  1026 => 1971,  1021 => 1969,  1016 => 1967,  1009 => 1963,  1005 => 1962,  998 => 1958,  992 => 1955,  987 => 1953,  984 => 1952,  982 => 1950,  979 => 1949,  977 => 1934,  974 => 1933,  972 => 1902,  966 => 1898,  964 => 1882,  960 => 1880,  958 => 1878,  954 => 1876,  952 => 1737,  949 => 1736,  947 => 1493,  941 => 1489,  939 => 1488,  938 => 1487,  935 => 1486,  933 => 1484,  931 => 1482,  929 => 1452,  926 => 1451,  923 => 1450,  920 => 1449,  917 => 1442,  914 => 1406,  910 => 1403,  908 => 1386,  903 => 1383,  901 => 1381,  899 => 1379,  897 => 1349,  894 => 1348,  892 => 1334,  889 => 1333,  887 => 1281,  884 => 1280,  882 => 1247,  879 => 1246,  877 => 881,  874 => 880,  872 => 811,  869 => 810,  867 => 777,  864 => 776,  862 => 708,  853 => 702,  852 => 701,  840 => 692,  836 => 691,  828 => 688,  823 => 686,  818 => 683,  816 => 512,  813 => 511,  811 => 509,  808 => 508,  806 => 506,  803 => 505,  801 => 327,  797 => 325,  795 => 324,  791 => 323,  787 => 322,  783 => 321,  779 => 320,  775 => 319,  771 => 318,  767 => 317,  762 => 315,  758 => 314,  754 => 313,  750 => 312,  746 => 311,  742 => 310,  738 => 309,  734 => 308,  730 => 307,  726 => 306,  722 => 305,  718 => 304,  714 => 303,  710 => 301,  707 => 300,  704 => 299,  701 => 298,  694 => 209,  691 => 208,  686 => 193,  682 => 191,  676 => 189,  673 => 188,  669 => 186,  663 => 184,  661 => 183,  650 => 180,  647 => 179,  643 => 155,  639 => 153,  637 => 152,  634 => 151,  631 => 150,  627 => 85,  624 => 84,  617 => 293,  615 => 285,  611 => 284,  605 => 281,  601 => 280,  597 => 279,  593 => 278,  589 => 277,  585 => 276,  581 => 275,  577 => 274,  573 => 273,  569 => 272,  565 => 271,  561 => 269,  555 => 266,  551 => 265,  547 => 264,  543 => 263,  540 => 262,  533 => 258,  527 => 257,  522 => 255,  516 => 254,  511 => 253,  509 => 252,  505 => 251,  498 => 247,  493 => 245,  489 => 244,  483 => 241,  478 => 239,  466 => 230,  462 => 229,  458 => 228,  453 => 226,  447 => 225,  443 => 224,  437 => 220,  430 => 216,  426 => 214,  421 => 211,  419 => 208,  416 => 207,  411 => 205,  406 => 203,  398 => 200,  391 => 197,  389 => 196,  386 => 195,  384 => 179,  381 => 178,  378 => 177,  375 => 176,  372 => 175,  369 => 174,  367 => 173,  364 => 172,  361 => 171,  358 => 170,  355 => 169,  352 => 168,  350 => 167,  347 => 166,  344 => 165,  341 => 164,  339 => 163,  336 => 162,  333 => 161,  330 => 160,  328 => 159,  325 => 158,  323 => 157,  320 => 156,  318 => 150,  311 => 145,  305 => 143,  303 => 142,  300 => 141,  298 => 140,  290 => 135,  280 => 128,  275 => 126,  266 => 120,  261 => 118,  257 => 117,  254 => 116,  248 => 105,  242 => 102,  238 => 101,  231 => 100,  228 => 99,  223 => 97,  218 => 96,  215 => 95,  212 => 94,  210 => 93,  203 => 91,  199 => 89,  196 => 88,  194 => 87,  191 => 86,  188 => 84,  186 => 83,  183 => 82,  180 => 81,  177 => 80,  174 => 79,  168 => 77,  165 => 76,  162 => 75,  159 => 74,  154 => 70,  149 => 71,  147 => 70,  142 => 68,  134 => 63,  126 => 58,  118 => 53,  110 => 48,  99 => 42,  92 => 40,  84 => 38,  81 => 19,  79 => 18,  76 => 17,  72 => 1,  70 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/settings.twig", "/var/www/html/museedelaphotographie/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/settings.twig");
    }
}
