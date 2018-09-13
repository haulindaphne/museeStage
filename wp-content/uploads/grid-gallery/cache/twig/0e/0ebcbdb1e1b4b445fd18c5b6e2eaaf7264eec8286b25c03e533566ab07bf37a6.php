<?php

/* @ui/type.twig */
class __TwigTemplate_0e4d040559ab142d0cc4c14ebe901120d14e6090c20d3870c07efd857f529018 extends Twig_Template
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
        // line 60
        echo "
";
        // line 73
        echo "
";
        // line 103
        echo "
";
        // line 136
        echo "
";
        // line 179
        echo "
";
    }

    // line 1
    public function getlist_view($__entities__ = null, $__sliderSettings__ = null, $__galleryId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "sliderSettings" => $__sliderSettings__,
            "galleryId" => $__galleryId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["hlp"] = $this->loadTemplate("@core/helpers.twig", "@ui/type.twig", 2);
            // line 3
            echo "    ";
            $context["view"] = $this;
            // line 4
            echo "    ";
            ob_start();
            // line 5
            echo "    <tr class=\"ui-jqgrid-labels-custom\" role=\"rowheader\">
        <th scope=\"col\" id=\"check-all\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            <input type=\"checkbox\" id=\"checkAll\" class=\"gg-checkbox\">
        </th>
        <th colspan=\"2\" scope=\"col\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Position")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
        </th>
        <th scope=\"col\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption / Description")), "html", null, true);
            echo "
            ";
            // line 16
            echo $context["hlp"]->getshowTooltip(((((((("<b>" . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption"))) . "</b>: ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add image caption. You may find detailed caption settings at Settings > Captions page"))) . "</br><b>") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))) . "</b>: ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add image description. You may find detailed description settings at Settings > Captions page. Note: in order to show descriptions and to change the description settings 'Caption builder' option should be enabled first."))), "top", true);
            // line 17
            echo "
        </th>
        <th scope=\"col\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO Alt / Title")), "html", null, true);
            echo "
            ";
            // line 21
            echo $context["hlp"]->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add SEO keywords, separated by comma, or SEO-optimized sentences. They will appear under your image, when it opens in pop-up window.")), "top", true);
            echo "
        </th>
        <th scope=\"col\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Options")), "html", null, true);
            echo "
            ";
            // line 25
            echo $context["hlp"]->getshowTooltip((((((((((((((((((((((((("<b>" . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link"))) . "</b>: ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You may add the link, which opens when clicking on your image thumbnail instead of pop-up window. Note: if you add video URL, this option will be inactive."))) . "</br><b>") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video"))) . "</b>: ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you may add the video url. After clicking on the image thumbnail, video will open in pop-up window instead of the image."))) . "</br><b>") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories"))) . "</b>: ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("If you want to arrange your gallery by categories, you should add category names here and separate them by commas."))) . "</br><b>") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked images"))) . "</b>: ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you may choose one or several linked images for this image thumbnail. Note: this option works only with Popup theme #7."))) . " <a target='_blank' href='https://supsystic.com/example/linked-images-popup/'>https://supsystic.com/example/linked-images-popup/</a></br><b>") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Crop"))) . "</b>: ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("In some gallery types image thumbnails are cropped. Here you may select the crop position to be sure that the most important part of the image will be visible."))) . "</br><b>") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover"))) . "</b>: ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you may add the image that will the original image when mouse cursor is over the thumbnail. Note: in order to make this feature work, you should enable 'Image on hover' option in Settings > Captions."))) . "</br><a target='_blank' href='https://supsystic.com/documentation/images-settings/'>https://supsystic.com/documentation/images-settings/</a>"), "top", true);
            // line 32
            echo "
        </th>
    </tr>
    ";
            $context["head"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 36
            echo "
    <form id=\"gallery-editor-hidden\" style=\"display: none;\">
        <input name=\"gallery_id\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["galleryId"] ?? null), "html", null, true);
            echo "\" type=\"hidden\"/>
        <input name=\"action\" value=\"grid-gallery\" type=\"hidden\"/>
        <input name=\"route[module]\" value=\"photos\" type=\"hidden\"/>
        <input name=\"route[action]\" value=\"updateAttachment\" type=\"hidden\"/>
    </form>
    <table id=\"ui-jqgrid-htable-img\" class=\"ui-jqgrid-htable\" style=\"margin: 0 0 7px -5px; width: 100%;\">
        <thead class=\"jqgrid-head-nav\">
        ";
            // line 45
            echo twig_escape_filter($this->env, ($context["head"] ?? null), "html", null, true);
            echo "
        </thead>
        <tbody id=\"the-list\" data-sortable data-container=\"list\">
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entities"] ?? null), "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 49
                echo "            ";
                echo $context["view"]->getlist_folder($context["folder"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entities"] ?? null), "images", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 52
                echo "            ";
                echo $context["view"]->getlist_image($context["image"], ($context["sliderSettings"] ?? null), ($context["galleryId"] ?? null));
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 54
                echo "            ";
                // line 55
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </tbody>
    </table>

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

    // line 61
    public function getblock_view($__entities__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 62
            echo "    ";
            $context["view"] = $this;
            // line 63
            echo "    <ul class=\"sg-photos\" data-sortable data-container=\"block\">
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entities"] ?? null), "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 65
                echo "            ";
                echo $context["view"]->getblock_folder($context["folder"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entities"] ?? null), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 69
                echo "            ";
                echo $context["view"]->getblock_image($context["image"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "    </ul>
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

    // line 74
    public function getblock_folder($__folder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $__folder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "    <li data-droppable class=\"gg-list-item\" data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "id", array()), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["folder"] ?? null)));
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 0;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute(($context["folder"] ?? null), "id", array()), "view" => "block")), "method"), "html", null, true);
            echo "\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     alt=\"\" width=\"150\" height=\"150\"/>

                <div style=\"position: absolute; top: 55px; left: 55px; color: #bdc3c7;\">
                    <i class=\"fa fa-folder-open-o\" style=\"font-size: 5em;\"></i>
                </div>

                <div class=\"gg-folder-photos\">
                    <i class=\"fa fa-picture-o\"></i> <span class=\"gg-folder-photos-num\">";
            // line 90
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "photos", array())), "html", null, true);
            echo "</span>
                </div>
            </a>

            <p>
                <span class=\"folder-title\">";
            // line 95
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "title", array())), "html", null, true);
            echo "</span>
                <small>
                    ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "date", array()), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
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

    // line 104
    public function getblock_image($__image__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 105
            echo "    <li class=\"gg-list-item\" data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" data-entity-type=\"photo\"
        data-entity-info=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["image"] ?? null)));
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 10;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a data-colorbox href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "sizes", array()), "full", array()), "url", array()), "html", null, true);
            echo "\">
                ";
            // line 112
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "sizes", array()), "thumbnail", array()))) {
                // line 113
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "sizes", array()), "full", array()), "url", array());
                // line 114
                echo "                    ";
                if (($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "orientation", array()) == "landscape")) {
                    // line 115
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 116
                    echo "                    ";
                } else {
                    // line 117
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 118
                    echo "                    ";
                }
                // line 119
                echo "                ";
            } else {
                // line 120
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "sizes", array()), "thumbnail", array()), "url", array());
                // line 121
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 122
                echo "                ";
            }
            // line 123
            echo "                <img class=\"supsystic-lazy\" data-original=\"";
            echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            echo "\" width=\"150\"
                     style=\"min-height:150px;max-height:150px;\"/>
            </a>

            <p title=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            echo "\">
                ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            echo "
                <small>
                    ";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "dateFormatted", array()), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
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

    // line 137
    public function getlist_folder($__folder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $__folder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 138
            echo "    <tr data-droppable data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "id", array()), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 139
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["folder"] ?? null)));
            echo "\">
        <th scope=\"row\" class=\"check-column\">
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute(($context["folder"] ?? null), "title", array())), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"folder[]\" id=\"cb-select-";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "id", array()), "html", null, true);
            echo "\"
                   data-observable>
        </th>
        <td class=\"column-icon media-icon\" style=\"position: relative;\">
            <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute(($context["folder"] ?? null), "id", array()), "view" => "list")), "method"), "html", null, true);
            echo "\"
               data-colorbox>
                <img width=\"60\" height=\"60\"
                     src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     class=\"attachment-80x60 supsystic-lazy\" alt=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "title", array()), "html", null, true);
            echo "\">
            </a>

            <div style=\"position: absolute; top: 20px; left: 31px; color: #bdc3c7; z-index: 100;\">
                <i class=\"fa fa-folder-open-o\" style=\"font-size: 3em;\"></i>
            </div>
        </td>
        <td class=\"title column-title\">
            <strong>
                <a href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute(($context["folder"] ?? null), "id", array()), "view" => "list")), "method"), "html", null, true);
            echo "\">
                    <span class=\"folder-title\">";
            // line 161
            echo twig_title_string_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "title", array()));
            echo "</span>
                </a>
            </strong>

            <p>
                <span class=\"gg-folder-photos-num\">
                    ";
            // line 167
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "photos", array())), "html", null, true);
            echo "
                </span>
                ";
            // line 169
            if ((twig_length_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "photos", array())) == 1)) {
                // line 170
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photo")), "html", null, true);
                echo "
                ";
            } else {
                // line 172
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photos")), "html", null, true);
                echo "
                ";
            }
            // line 174
            echo "            </p>
        </td>
        <td class=\"date column-date\">";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "date", array()), "html", null, true);
            echo "</td>
    </tr>
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

    // line 180
    public function getlist_image($__image__ = null, $__sliderSettings__ = null, $__galleryId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "sliderSettings" => $__sliderSettings__,
            "galleryId" => $__galleryId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 181
            echo "    ";
            $context["hlp"] = $this->loadTemplate("@core/helpers.twig", "@ui/type.twig", 181);
            // line 182
            echo "
    ";
            // line 183
            $context["nonProMsg"] = "Available in PRO";
            // line 184
            echo "    <tr data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" data-settings=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["sliderSettings"] ?? null)));
            echo "\" data-entity-type=\"photo\" data-entity-info=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["image"] ?? null)));
            echo "\" class=\"ggImgInfoRow\">
        <th scope=\"row\" class=\"check-column ggImgVertMoveCol\">
            <i class=\"fa fa-arrows-v ggImgVerticalMove\" aria-hidden=\"true\"></i>
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "title", array())), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"image[]\" id=\"cb-select-";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" data-observable>
        </th>
        <td class=\"title column-title\">
            <input id=\"position-image-";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" type=\"text\" disabled style=\"height:24px; width: 30px;\" value=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["image"] ?? null), "position", array()) + 1), "html", null, true);
            echo "\">
        </td>
        <td class=\"column-icon media-icon top-align\">
            <a href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "sizes", array()), "full", array()), "url", array()), "html", null, true);
            echo "\" data-colorbox>
                ";
            // line 196
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "sizes", array()), "thumbnail", array()))) {
                // line 197
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "sizes", array()), "full", array()), "url", array());
                // line 198
                echo "                    ";
                if (($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "orientation", array()) == "landscape")) {
                    // line 199
                    echo "                        ";
                    $context["sizes"] = array("width" => 120, "height" => 90);
                    // line 200
                    echo "                    ";
                } else {
                    // line 201
                    echo "                        ";
                    $context["sizes"] = array("width" => 90, "height" => 120);
                    // line 202
                    echo "                    ";
                }
                // line 203
                echo "                ";
            } else {
                // line 204
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "sizes", array()), "thumbnail", array()), "url", array());
                // line 205
                echo "                    ";
                $context["sizes"] = array("width" => 90, "height" => 90);
                // line 206
                echo "                ";
            }
            // line 207
            echo "                <img width=\"100\" height=\"100\" data-original=\"";
            echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
            echo "\"
                     class=\"attachment-thumbnail supsystic-lazy\" alt=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            echo "\">
            </a>
        </td>
        <td class=\"title column-title top-align\" style=\"text-align: left; padding-left:15px !important;\">
            ";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "filename", array()), "html", null, true);
            echo "</br>
            ";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "gg_wp_upload_date", array()), "html", null, true);
            echo "</br>
            ";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "filesizeHumanReadable", array()), "html", null, true);
            echo "</br>
            ";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "width", array()), "html", null, true);
            echo "x";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "height", array()), "html", null, true);
            echo "</br></br>
            <div class=\"gg-wraper-option-links\">
                ";
            // line 217
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                // line 218
                echo "                    <a href=\"#gg-attributes\" class=\"gg-option-links attributes-image\" data-image-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
                echo "\" data-values=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["image"] ?? null), "attributes", array())));
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Attributes")), "html", null, true);
                echo "</a></br>
                ";
            }
            // line 220
            echo "                <a href=\"#gg-meta\" class=\"gg-option-links metadata-image\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Meta")), "html", null, true);
            echo "</a></br>
                <a href=\"#gg-replace\" class=\"gg-option-links replace-image\" data-image-id=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" data-attachment-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Replace")), "html", null, true);
            echo "</a></br>
                <a href=\"#gg-delete\" id=\"delete-image-";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"gg-option-links\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete")), "html", null, true);
            echo "</a>
            </div></br>
        </td>
        <td class=\"title column-textarea top-align\">
            <form id=\"photo-editor-caption-";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"photo-editor\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\">
                <textarea name=\"caption\" rows=\"2\" placeholder=\"";
            // line 227
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "caption", array());
            echo "</textarea></br>
                ";
            // line 228
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
                // line 229
                echo "                    <span style=\"color:red\" class=\"description\">
                        <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=images_caption_description&utm_campaign=gallery\" target=\"_blank\">
                            ";
                // line 231
                echo ($context["nonProMsg"] ?? null);
                echo "
                        </a>
                    </span>
                ";
            } else {
                // line 235
                echo "                    <textarea name=\"captionDescription\" rows=\"5\" placeholder=\"Description\">";
                echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "captionDescription", array());
                echo "</textarea>
                ";
            }
            // line 237
            echo "            </form>
        </td>
        <td class=\"title column-textarea top-align\">
            <form id=\"photo-editor-seo-";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"photo-editor\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\">
                <textarea name=\"alt\" rows=\"2\" placeholder=\"";
            // line 241
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alternative text")), "html", null, true);
            echo "\">";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "alt", array()))) {
                if (($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "alt", array()) == " ")) {
                    echo "";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "alt", array()), "html", null, true);
                }
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            }
            echo "</textarea></br>
                <textarea name=\"description\" rows=\"5\" placeholder=\"";
            // line 242
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "description", array());
            echo "</textarea>
            </form>
        </td>
        <td class=\"title column-title top-align\" style=\"text-align: left; padding-left:15px !important; padding-right:5px !important;\">
            <form id=\"photo-editor-";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"photo-editor attachment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" style=\"margin-top: 0;\">
                <div class=\"gg-image-option-links\">
                    <div class=\"gg-wraper-option-links\" style=\"float: left\">
                        <a href=\"#gg-effect\" class=\"gg-option-links option-link\">";
            // line 249
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "</a></br>
                        <a href=\"#gg-linked\" class=\"gg-option-links option-link\">";
            // line 250
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked Images")), "html", null, true);
            echo "</a></br>
                        <a href=\"#gg-hover\" class=\"gg-option-links option-link\">";
            // line 251
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on Hover")), "html", null, true);
            echo "</a></br>
                        <a href=\"#gg-copy\" class=\"gg-option-links option-link\">";
            // line 252
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Copy to")), "html", null, true);
            echo "</a></br>
                        <a href=\"#gg-move\" class=\"gg-option-links option-link\">";
            // line 253
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Move to")), "html", null, true);
            echo "</a></br>
                    </div>
                    <div class=\"gg-wraper-option-links\" style=\"float: left\">
                        <a href=\"#gg-categories\" class=\"gg-option-links option-link\">";
            // line 256
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
            echo "</a></br>
                        <a href=\"#gg-video\" class=\"gg-option-links option-link\">";
            // line 257
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video")), "html", null, true);
            echo "</a></br>
                        <a href=\"#gg-link\" class=\"gg-option-links option-link\">";
            // line 258
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link")), "html", null, true);
            echo "</a></br>
                        <a href=\"#gg-rotate\" class=\"gg-option-links option-link\">";
            // line 259
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rotate")), "html", null, true);
            echo "</a></br>
                        <a href=\"#gg-crop\" class=\"gg-option-links option-link\">";
            // line 260
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Crop")), "html", null, true);
            echo "</a></br>
                    </div>
                </div>
                <div class=\"gg-option-containers\" style=\"clear:both;\">
                    <div class=\"gg-effect-option gg-option-container ggSettingsDisplNone\">
                        <button class=\"button selectCaptionEffectBtn\" data-id=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "</button>
                        <input type=\"text\" class=\"captionEffectVal\" name=\"captionEffect\" data-id=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["sliderSettings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sliderSettings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
            echo "\" style=\"display: none;\" />
                    </div>
                    <div class=\"gg-copy-option gg-option-container ggSettingsDisplNone\">
                        <select class=\"copy-option\" style=\"width: 100%;\"></select></br>
                        <button class=\"button image-copy-btn\">";
            // line 270
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "</button>
                    </div>
                    <div class=\"gg-move-option gg-option-container ggSettingsDisplNone\">
                        <select class=\"copy-option\" style=\"width: 100%;\"></select></br>
                        <button class=\"button image-move-btn\">";
            // line 274
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "</button>
                    </div>
                    <div class=\"gg-link-option gg-option-container ggSettingsDisplNone\">
                        <input type=\"text\" name=\"link\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "external_link", array()), "html", null, true);
            echo "\" style=\"width: 100%;\" placeholder=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("http://example.com/")), "html", null, true);
            echo "\"/></br>
                        <label>
                            <input type=\"checkbox\" name=\"target\" value=\"_blank\" ";
            // line 279
            if (($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "target", array()) == "_blank")) {
                echo " checked=\"checked\" ";
            }
            echo "/>
                            ";
            // line 280
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open in new window")), "html", null, true);
            echo "
                        </label>
                        <label>
                            <input type=\"checkbox\" name=\"rel\" value=\"nofollow\" ";
            // line 283
            if (($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "rel", array()) == "nofollow")) {
                echo " checked=\"checked\" ";
            }
            echo "/>
                            ";
            // line 284
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add nofollow attribute")), "html", null, true);
            echo "
                        </label>
                    </div>
                    <div class=\"gg-video-option gg-option-container ggSettingsDisplNone\">
                        <input type=\"text\"
                            ";
            // line 289
            if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
                // line 290
                echo "                                name=\"video\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "video", array()), "html", null, true);
                echo "\"
                            ";
            } else {
                // line 292
                echo "                                disabled=\"disabled\"
                            ";
            }
            // line 294
            echo "                            style=\"width: 100%;\"
                            placeholder=\"";
            // line 295
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video URL")), "html", null, true);
            echo "\"
                        >
                        ";
            // line 297
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
                // line 298
                echo "                            <span style=\"color:red\" class=\"description\">
                                </br><a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=video&utm_campaign=gallery\" target=\"_blank\">
                                    ";
                // line 300
                echo ($context["nonProMsg"] ?? null);
                echo "
                                </a>
                            </span>
                        ";
            }
            // line 304
            echo "                    </div>
                    <div class=\"gg-categories-option gg-option-container ggSettingsDisplNone\">
                        ";
            // line 306
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
                // line 307
                echo "                            <input type=\"text\" disabled placeholder=\"Categories\" style=\"width: 70%;\">
                            <span style=\"color:red\" class=\"description\">
                                </br><a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=imagescategories&utm_campaign=gallery\" target=\"_blank\">
                                    ";
                // line 310
                echo ($context["nonProMsg"] ?? null);
                echo "
                                </a>
                            </span>
                        ";
            } else {
                // line 314
                echo "                            <input type=\"text\" class=\"gg-tags\" id=\"tags-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_join_filter($this->getAttribute(($context["image"] ?? null), "tags", array()), ",");
                echo "\">
                        ";
            }
            // line 316
            echo "                    </div>
                    <div class=\"gg-linked-option gg-option-container ggSettingsDisplNone\">
                        ";
            // line 318
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
                // line 319
                echo "                            <button class=\"button disabled\" disabled>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
                            <span style=\"color:red\" class=\"description\">
                                </br><a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=linked_images&utm_campaign=gallery\" target=\"_blank\">
                                    ";
                // line 322
                echo ($context["nonProMsg"] ?? null);
                echo "
                                </a>
                            </span>
                        ";
            } else {
                // line 326
                echo "                            <button class=\"button selectLinkedImages\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
                            <input type=\"text\" name=\"linkedImages\" data-id=\"";
                // line 327
                echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array(), "any", false, true), "linkedImages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array(), "any", false, true), "linkedImages", array()), "")) : ("")), "html", null, true);
                echo "\" style=\"display: none;\" />
                        ";
            }
            // line 329
            echo "                    </div>
                    <div class=\"gg-hover-option gg-option-container ggSettingsDisplNone\">
                        ";
            // line 331
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
                // line 332
                echo "                            <button class=\"button disabled\" disabled=\"disabled\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "</button>
                            <span class=\"description\">
                                </br><a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=hover_caption_image_bg&utm_campaign=gallery\" target=\"_blank\">
                                    ";
                // line 335
                echo ($context["nonProMsg"] ?? null);
                echo "
                                </a>
                            </span>
                        ";
            } else {
                // line 339
                echo "                            <input id=\"hover-caption-image-inp-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
                echo "\" type=\"text\" name=\"hoverCaptionImageInp\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array(), "any", false, true), "hoverCaptionImage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array(), "any", false, true), "hoverCaptionImage", array()), "")) : ("")), "html", null, true);
                echo "\"
                             style=\"width: 100%;\" readonly=\"readonly\"/></br>
                            <button class=\"button select-hover-caption-image\" data-image-id=\"";
                // line 341
                echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "</button>
                        ";
            }
            // line 343
            echo "                    </div>
                    <div class=\"gg-crop-option gg-option-container ggSettingsDisplNone\">
                        <label>Image crop position: </label></br>
                        ";
            // line 346
            $context["cropPositionList"] = array("left-top" => "Top Left", "center-top" => "Top Center", "right-top" => "Top Right", "left-center" => "Center Left", "center-center" => "Center Center", "right-center" => "Center Right", "left-bottom" => "Bottom Left", "center-bottom" => "Bottom Center", "right-bottom" => "Bottom Right");
            // line 357
            echo "                        <select name=\"cropPosition\">
                            ";
            // line 358
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cropPositionList"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                // line 359
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
                if (((($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array(), "any", false, true), "cropPosition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array(), "any", false, true), "cropPosition", array()), "center-center")) : ("center-center")) == $context["value"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "                        </select>
                    </div>
                    <div class=\"gg-rotate-option gg-option-container ggSettingsDisplNone\">
                        <select class=\"rotate-option\" style=\"width:100%\">
                            <option value=\"clockwise\" selected=\"selected\">";
            // line 365
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rotate Clockwise")), "html", null, true);
            echo "</option>
                            <option value=\"counter\">";
            // line 366
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rotate Counter-Clockwise")), "html", null, true);
            echo "</option>
                        </select></br>
                        <button class=\"button image-rotate-btn\">";
            // line 368
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "</button>
                    </div>
                </div>

                <input name=\"replace_attachment_id\" id=\"replace_attachment_id_";
            // line 372
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"buttonLinkTitle\" value=\"";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "buttonLinkTitle", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"buttonLinkUrl\" value=\"";
            // line 374
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "buttonLinkUrl", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"imageKeywords\" value=\"";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "imageKeywords", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
            </form>
            <form id=\"photo-editor-hidden-";
            // line 377
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" style=\"display: none;\">
                <input name=\"image_id\" value=\"";
            // line 378
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"attachment_id\" value=\"";
            // line 379
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "attachment", array()), "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
            </form>
        </td>
    </tr>
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

    public function getTemplateName()
    {
        return "@ui/type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 379,  1073 => 378,  1069 => 377,  1064 => 375,  1060 => 374,  1056 => 373,  1052 => 372,  1045 => 368,  1040 => 366,  1036 => 365,  1030 => 361,  1015 => 359,  1011 => 358,  1008 => 357,  1006 => 346,  1001 => 343,  992 => 341,  984 => 339,  977 => 335,  970 => 332,  968 => 331,  964 => 329,  957 => 327,  948 => 326,  941 => 322,  934 => 319,  932 => 318,  928 => 316,  918 => 314,  911 => 310,  906 => 307,  904 => 306,  900 => 304,  893 => 300,  889 => 298,  887 => 297,  882 => 295,  879 => 294,  875 => 292,  869 => 290,  867 => 289,  859 => 284,  853 => 283,  847 => 280,  841 => 279,  834 => 277,  828 => 274,  821 => 270,  812 => 266,  804 => 265,  796 => 260,  792 => 259,  788 => 258,  784 => 257,  780 => 256,  774 => 253,  770 => 252,  766 => 251,  762 => 250,  758 => 249,  748 => 246,  739 => 242,  725 => 241,  719 => 240,  714 => 237,  708 => 235,  701 => 231,  697 => 229,  695 => 228,  689 => 227,  683 => 226,  674 => 222,  666 => 221,  661 => 220,  651 => 218,  649 => 217,  642 => 215,  638 => 214,  634 => 213,  630 => 212,  623 => 208,  618 => 207,  615 => 206,  612 => 205,  609 => 204,  606 => 203,  603 => 202,  600 => 201,  597 => 200,  594 => 199,  591 => 198,  588 => 197,  586 => 196,  582 => 195,  574 => 192,  566 => 189,  560 => 188,  548 => 184,  546 => 183,  543 => 182,  540 => 181,  526 => 180,  508 => 176,  504 => 174,  498 => 172,  492 => 170,  490 => 169,  485 => 167,  476 => 161,  472 => 160,  460 => 151,  453 => 147,  444 => 143,  438 => 142,  432 => 139,  427 => 138,  415 => 137,  394 => 130,  389 => 128,  385 => 127,  375 => 123,  372 => 122,  369 => 121,  366 => 120,  363 => 119,  360 => 118,  357 => 117,  354 => 116,  351 => 115,  348 => 114,  345 => 113,  343 => 112,  339 => 111,  331 => 106,  326 => 105,  314 => 104,  293 => 97,  288 => 95,  280 => 90,  268 => 81,  260 => 76,  255 => 75,  243 => 74,  227 => 71,  218 => 69,  214 => 68,  211 => 67,  202 => 65,  198 => 64,  195 => 63,  192 => 62,  180 => 61,  162 => 56,  156 => 55,  154 => 54,  146 => 52,  140 => 51,  131 => 49,  127 => 48,  121 => 45,  111 => 38,  107 => 36,  101 => 32,  99 => 25,  95 => 24,  89 => 21,  85 => 20,  80 => 17,  78 => 16,  74 => 15,  66 => 10,  59 => 5,  56 => 4,  53 => 3,  50 => 2,  36 => 1,  31 => 179,  28 => 136,  25 => 103,  22 => 73,  19 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ui/type.twig", "/var/www/html/museedelaphotographie/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Ui/views/type.twig");
    }
}
