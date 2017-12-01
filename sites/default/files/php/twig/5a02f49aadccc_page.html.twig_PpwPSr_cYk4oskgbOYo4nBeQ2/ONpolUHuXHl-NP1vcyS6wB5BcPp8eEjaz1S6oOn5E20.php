<?php

/* themes/drupal8_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_db90ce103844c8e065d8b8dde6617ebdf016806284bcfe9d3f7988b7ce52fb83 extends Twig_Template
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
        $tags = array("if" => 73);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#responsive-navbar\">
                <span class=\"sr-only\">切换导航</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 74
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
            ";
        }
        // line 76
        echo "            </div>
            <div class=\"collapse navbar-collapse\" id=\"responsive-navbar\">
              <div class=\"col-md-8 col-sm-6\">
                ";
        // line 79
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 80
            echo "                  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
                ";
        }
        // line 82
        echo "              </div>
            </div>
          </div>
      </div>
  </nav>
</header>
<!--End Header & Navbar -->

<div class=\"show_banner\">
   ";
        // line 91
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()))) {
            // line 92
            echo "    <div class=\"show_banner_centos\">
      <div class=\"show_banner_nav \">
        <div class=\"container\">
          <nav class=\"container hidden-xs navbar\" >
              <div style=\"float:left;display: inline-block;\">
                ";
            // line 97
            if ($this->getAttribute(($context["page"] ?? null), "navigation_menu", array())) {
                // line 98
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_menu", array()), "html", null, true));
                echo "
                ";
            }
            // line 100
            echo "              </div>
              <div class=\"clearfix\"></div>
          </nav>
        </div>
      </div>
      <script type=\"text/javascript\">
      // 导航定位到顶部
         var headernav=\$(\".show_banner_centos .show_banner_nav\");
         \$(document).scroll(function() {
            var dix=\$(document).scrollTop();
            if(dix>51){
              \$(headernav).removeClass('show_banner_nav');
              \$(headernav).addClass('show_banner_nav_1');

            }else{
              \$(headernav).removeClass('show_banner_nav_1');
              \$(headernav).addClass('show_banner_nav');
            }

            console.log(dix);
          });
      </script>
  ";
        } else {
            // line 123
            echo "    <div class=\"show_banner_centos\">
      <div class=\"container\">
        <nav class=\"container  hidden-xs\" >
            <div style=\"float:left;display: inline-block;\">
              ";
            // line 127
            if ($this->getAttribute(($context["page"] ?? null), "navigation_menu", array())) {
                // line 128
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_menu", array()), "html", null, true));
                echo "
              ";
            }
            // line 130
            echo "            </div>
        </nav>
      </div>
  ";
        }
        // line 134
        echo "
  <!-- Banner -->
      ";
        // line 136
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()))) {
            // line 137
            echo "      <div class=\"welcome-banner-text\">
            ";
            // line 138
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()), "html", null, true));
            echo "
      </div>
      ";
        }
        // line 141
        echo "    </div>
  <!-- End Banner -->
</div>

<div class=\"clearfix\"></div>
";
        // line 146
        if (($context["is_front"] ?? null)) {
            // line 147
            echo "<!-- 主菜单 -->
<div class=\"showcase-wrap\">
  <div class=\"container\">
    <div class=\"col-xs-6 col-sm-3 col-md-3 row-text-describe row-list-one\">
      <a href=\"/media\">
        <span class=\"fa fa-tv fa-3x\"></span>
        <div class=\"showcase-wrap-cn\">
          <h3>媒体资源</h3>
          <p>资源整合</p>
        </div>
      </a>
    </div>
    <div class=\"col-xs-6 col-sm-3 col-md-3 row-text-describe row-list-two\">
      <a href=\"/triumph\">
        <span class=\"fa fa-tasks fa-3x\"></span>
        <div class=\"showcase-wrap-cn\">
          <h3>成功案例</h3>
          <p>卓越的品质</p>
        </div>
      </a>
    </div>
    <div class=\"col-xs-6 col-sm-3 col-md-3 row-text-describe row-list-three\">
      <a href=\"#\">
        <span class=\"fa fa-crosshairs fa-3x\"></span>
        <div class=\"showcase-wrap-cn\">
          <h3>精准可靠</h3>
          <p>全国门户新闻媒体</p>
        </div>
      </a>
    </div>
    <div class=\"col-xs-6 col-sm-3 col-md-3 row-text-describe row-list-four\">
      <a href=\"/serve\">
        <span class=\" fa fa-object-group fa-3x\"></span>
        <div class=\"showcase-wrap-cn\">
          <h3>服务流程</h3>
          <p>媒体合作流程</p>
        </div>
      </a>
    </div>
    <div class=\"clearfix\"></div>
  </div>
</div>
<!-- end 主菜单 -->
";
        }
        // line 191
        echo "<!-- 产品展示 -->
";
        // line 192
        if (($context["is_front"] ?? null)) {
            // line 193
            echo "<div class=\"product_advantage\">
  <div class=\"container\">
      <div class=\"product-features\">
        <div class=\"row mt20 product-features-center\">
          <a href=\"#\" title=\"\">
            <img src=\"/themes/drupal8_zymphonies_theme/images/selection.jpg\" alt=\"\">
          </a>
        </div>
      </div>
  </div>
</div>
";
        }
        // line 205
        echo "<!-- end产品展示 -->

<!-- Page Title -->
";
        // line 208
        if (($context["is_front"] ?? null)) {
            // line 209
            echo "  <div id=\"page-title\">
      <div class=\"container\" >
      <div class=\"product-products mt20  mb20\">
        <div class=\"product-products-title mt20  mb20\">
          <div class=\"col-md-3 col-sm-3 col-xs-3 product-option\">
            <div class=\"text-center\">
              <img src=\"/themes/drupal8_zymphonies_theme/images/quanz.png\" alt=\"\">
            </div>
            <p class=\"text-center\">社交平台</p>
            <i class=\"san-icon\"></i>
          </div>
          <div class=\"col-md-3 col-sm-3 col-xs-3 product-option\">
            <div class=\"text-center\">
              <img src=\"/themes/drupal8_zymphonies_theme/images/BBS.png\" alt=\"\">
            </div>
            <p class=\"text-center\">论坛平台</p>
            <i class=\"san-icon\"></i>
          </div>
          <div class=\"col-md-3 col-sm-3 col-xs-3 product-option\">
            <div class=\"text-center\">
              <img src=\"/themes/drupal8_zymphonies_theme/images/media.png\" alt=\"\">
            </div>
            <p class=\"text-center\">网媒</p>
            <i class=\"san-icon\"></i>
          </div>
          <div class=\"col-md-3 col-sm-3 col-xs-3 product-option\">
            <div class=\"text-center\">
              <img src=\"/themes/drupal8_zymphonies_theme/images/newspaper.png\" alt=\"\">
            </div>
            <p class=\"text-center\">纸媒</p>
            <i class=\"san-icon\"></i>
          </div>
        </div>
        <div class=\"clearfix\"></div>
      </div>
    </div>
  </div>
  <div class=\"page-title-center-row\">
    <div class=\"page-title-row container\">
        <div class=\"operating-platform\">
          <div class=\"product-next-pointing product-next-pointing-two\">
            <img src=\"/themes/drupal8_zymphonies_theme/images/sanjian.png\" alt=\"\">
          </div>
          <div class=\"product-products-center\">
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"/media/tencent/qzone-pc\" title=\"\">
                <div class=\"product-next-text\">
                <h5>QQ空间广告</h5>
                <span>非常适合品牌在社交场景与年轻人</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"/media/tencent/qq\" title=\"\">
                <div class=\"product-next-text\">
                <h5>QQ客服端</h5>
                <span>打造上亿用户企业号、个人号</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"/media/tencent/wx\" title=\"\">
                <div class=\"product-next-text\">
                <h5>微信广告</h5>
                <span>朋友圈广告、微信公众号广告</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"/media/momo\" title=\"\">
                <div class=\"product-next-text\">
                <h5>陌陌广告</h5>
                <span>聚合优质的app</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>兴趣部落</h5>
                <span>百万优质广告</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>百度贴吧</h5>
                <span>帝吧</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"/media/sine\" title=\"\">
                <div class=\"product-next-text\">
                <h5>微博广告</h5>
                <span>聚合优质的大v</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
          </div>
        </div>
        <div class=\"operating-platform\">
          <div class=\"product-next-pointing product-next-pointing-two\">
            <img src=\"/themes/drupal8_zymphonies_theme/images/sanjian.png\" alt=\"\">
          </div>
          <div class=\"product-products-center \">
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>百度贴吧</h5>
                <span>吧主十日搞定</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>兴趣部落</h5>
                <span>打造上亿用户企业号、个人号</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>知乎论坛</h5>
                <span>问答，总有你的答案</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>新浪论坛</h5>
                <span>新浪论坛社区是互联网最具知名度的综合性BBS</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>天涯论坛</h5>
                <span>打造上亿用户企业号、个人号</span>
                </div>
              </a>
              <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>豆瓣</h5>
                <span>打造上亿用户企业号、个人号</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>长沙通论坛 - 长沙论坛</h5>
                <span>长沙通网站是立足长沙本土的生活消费类网络社区</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>天涯社区</h5>
                <span>天府社区是四川日报报业集团全媒体中心旗下重点打造的城市生活社区网站</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>55bbs</h5>
                <span>天府社区是四川日报报业集团全媒体中心旗下重点打造的城市生活社区网站</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>楚汉网</h5>
                <span>楚汉网是湖北武汉新闻生活综合门户,即武汉生活论坛</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>西祠胡同</h5>
                <span>是国内首创的网友“自行开版、自行管理、自行发展”的开放式社区平台</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>蓝色河畔</h5>
                <span>粤东地区最具人气、网络用户量最多、覆盖面最广、高影响力的时尚网络平台</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>华商论坛</h5>
                <span>陕西西安本地新闻、爆料、乱拍、旅游、汽车、美食、球迷网上交流互动社区论坛</span>
                </div>
              </a>
            </div>
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
              <a href=\"#\" title=\"\">
                <div class=\"product-next-text\">
                <h5>驻马店论坛</h5>
                <span>河南驻马店本地最具人气的交流社区</span>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class=\"operating-platform\">
          <div class=\"product-next-pointing product-next-pointing-two\">
            <img src=\"/themes/drupal8_zymphonies_theme/images/sanjian.png\" alt=\"\">
          </div>
          <div class=\"product-products-center\">
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>今天头条</h5>
                  <span>你关系的才是头条</span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>一点资讯</h5>
                  <span>高度智能的新闻资讯</span>
                  </div>
                </a>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>百家号</h5>
                  <span>帮助内容创作者“在这里影响世界”。 </span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>企鹅号</h5>
                  <span>腾讯旗下的一款自媒体发布平台</span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>网易自媒体</h5>
                  <span>直达亿万读者，共享网易品牌影响力</span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>喜马拉雅 FM</h5>
                  <span>规模最大的在线移动音频分享平台</span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>知乎</h5>
                  <span>一个真实的网络问答社区,寻找答案,分享知</span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>凤凰自媒体</h5>
                  <span>集中在国内的优质大学</span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>UC自媒体平台</h5>
                  <span>内容最早是来源于一些大的媒体平台</span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>A5站长网</h5>
                  <span>内容最早是来源于一些大的媒体平台</span>
                  </div>
                </a>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>卢松松博客</h5>
                  <span>知名博客，不多说，流量杠杠滴！</span>
                  </div>
                </a>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>思达派</h5>
                  <span>专注创业服务市场的新媒体平台,定位“创业干货分享”</span>
                  </div>
                </a>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>简书</h5>
                  <span>书写、编集、发布功能于一体的在线写作编辑工具</span>
                  </div>
                </a>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>钛媒体</h5>
                  <span>国内首家TMT公司人社群媒体,钛度的一人一媒体平台</span>
                  </div>
                </a>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>虎嗅网</h5>
                  <span>关注对象是包括公众公司与创业型业在内的一系列明星公司</span>
                  </div>
                </a>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>砍柴网</h5>
                  <span>一个专注科技观的科技媒体</span>
                  </div>
                </a>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>砍柴网</h5>
                  <span>一个专注科技观的科技媒体</span>
                  </div>
                </a>
              </div>
          </div>
        </div>
        <div class=\"operating-platform\">
          <div class=\"product-next-pointing product-next-pointing-two\">
            <img src=\"/themes/drupal8_zymphonies_theme/images/sanjian.png\" alt=\"\">
          </div>
          <div class=\"product-products-center\">
            <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>江南都市报</h5>
                  <span>新闻爆料</span>
                  </div>
                </a>
                <i class=\"operating-platform-hot pa\"><img src=\"/themes/drupal8_zymphonies_theme/images/hot.png\" alt=\"\"></i>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 pr operating-platform-text\">
                <a href=\"#\" title=\"\">
                  <div class=\"product-next-text\">
                  <h5>杂志</h5>
                  <span>打造上亿用户企业号、个人号</span>
                  </div>
                </a>
              </div>
          </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
   </div>
  </div>
<script type=\"text/javascript\">
// 选卡
  var option= document.getElementsByClassName('product-option');
      // 获取盒子
      var showcase= document.getElementsByClassName('operating-platform');
      // 遍历数组对象
      var sanjiaodom=\$(\".san-icon\");

      showcase[0].style.display = \"block\";
      sanjiaodom[0].style.display=\"block\";
      for (var i = 0; i < option.length; i++) {
        option[i].index=i;
        option[i].onclick = function(){
                show(this.index);
            }
      }
      function show(a){
        for(var j=0;j<showcase.length;j++){
                showcase[j].style.display= \"none\";
                sanjiaodom[j].style.display=\"none\"
            }
            showcase[a].style.display = \"block\";
            sanjiaodom[a].style.display=\"block\";
        }


</script>
";
        }
        // line 647
        echo "<!-- End Page Title ---- >
<!-- source -->
";
        // line 649
        if (($context["is_front"] ?? null)) {
            // line 650
            echo "  <div class=\"source\">
    <div class=\"source-title-top\">
      <div class=\"container\">
        <div class=\"source-title\">
          <h3 class=\"text-center mt15\"><img src=\"/themes/drupal8_zymphonies_theme/images/madil.png\">   媒体资源</h3>
          <p class=\"text-center pb10\">拥有3万多家媒体资源致力打造中国一流媒体营销平台</p>
        </div>
        <div class=\"clearfix\"></div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"source-center\">
        <ul class=\"source-lt row\">
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/1.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/2.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/3.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/4.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/5.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/6.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/7.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/8.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/9.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/10.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/11.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/12.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/13.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/14.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/15.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/16.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/17.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/18.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/19.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/20.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/21.png\" alt=\"\"></li>
          <li class=\"col-md-3 col-sm-4 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/images/source/22.png\" alt=\"\"></li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
    </div>
  </div>
  ";
        }
        // line 692
        echo "<!-- End  source-->
<!-- 优势 -->
";
        // line 694
        if (($context["is_front"] ?? null)) {
            // line 695
            echo "  <div class=\"advantage\">
    <div class=\"container\">
      <div class=\"advantage-title text-center\">
        <h2><i class=\"fa fa-line-chart fa-2x\"></i> 我们的优势</h2>
        <p>全网媒体直线发稿、24小时自助发稿平台、助您提升营销效率！</p>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"advantage-center pb20\">
        <div class=\"col-xs-12 col-sm-6 col-md-4 \">
          <div class=\"advantage-center-center text-center\">
            <img src='/themes/drupal8_zymphonies_theme/images/zuanzhi.png' alt=\"\">
            <h3 class=\"mt20\">vip铂金服务</h3>
            <p class=\"mt20\">一对一专属客户经理服务</p>
            <p class=\"mt10\">为企业提供各种形式的新闻报道，发布在权威的网络媒体上，提高公众对企业产品或服务的认知度，塑造良好品牌形象，并提高销售转化率的营销服务。</p>
          </div>
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4 \">
          <div class=\"advantage-center-center text-center\">
            <img src='/themes/drupal8_zymphonies_theme/images/meit.png' alt=\"\">
            <h3 class=\"mt20\">直线发稿</h3>
            <p class=\"mt20\">千家媒体直线发稿</p>
            <p class=\"mt10\">乾厚佐佑拥有最全、最快的软文发布渠道用户提交需求后，当天即可发布！一步到位，为您个人和公司节约了大量的时间和金钱！</p>
          </div>
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4 \">
          <div class=\"advantage-center-center text-center\">
            <img src='/themes/drupal8_zymphonies_theme/images/fagao.png' alt=\"\">
            <h3 class=\"mt20\">最全媒体资源</h3>
            <p class=\"mt20\">3万多家媒体资源</p>
            <p class=\"mt10\">乾厚佐佑媒体提供上万个媒体的海量、精准数据，涵盖网络媒体、微信微博、视频、报纸杂志、贴吧论坛、问答百科等类型，是中国最大的媒体资源数据库。</p>
          </div>
        </div>
        <div class=\"clearfix\"></div>
      </div>
    </div>
  </div>
";
        }
        // line 733
        echo "<!-- end 优势 -->

<div calss=\"row succeed-banner\">
    <div calss=\"succeed-lt\">
         ";
        // line 737
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
    </div>
    <div class=\"succeed-rt\">
     <div>";
        // line 740
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_log_img"] ?? null), "html", null, true));
        echo "</div>
     <div>
        <h2>";
        // line 742
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
        <p>";
        // line 743
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_text"] ?? null), "html", null, true));
        echo "</p>
     </div>
    </div>
</div>




";
        // line 751
        if (($this->getAttribute(($context["page"] ?? null), "succeed", array()) && ($context["is_front"] ?? null))) {
            // line 752
            echo "<!-- 成功案例 -->
<div class=\"succeed law-gray mt20\">
    <div class=\"container\">
      <div class=\"succeed-title pr pt20 pb10\">
        <div class=\"text-center pt15\">
          <h2><img src=\"/themes/drupal8_zymphonies_theme/images/icon_foot_fill.png\" alt=\"\">成功案例</h2>
          <p>不懈的努力只为追求卓越的品质！</p>
        </div>
      </div>
      <div class=\"clearfix\"></div>
      <div class=\"succeed-center\">
        ";
            // line 763
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "succeed", array()), "html", null, true));
            echo "
      </div>
    </div>
</div>
";
        }
        // line 768
        echo "<!-- end 成功案例 -->

";
        // line 770
        if (($context["is_front"] ?? null)) {
            // line 771
            echo "<!-- cooperation start 合作 -->
  <div class=\"cooperation\">
    <div class=\"container\">
      <div class=\"cooperation-title text-center\">
        <h2><i class=\"fa fa-user-secret\"></i>  携手共赢 合作伙伴</h2>
        <p>拥有3万多家媒体资源致力打造中国一流媒体营销平台</p>
      </div>
    </div>
    <div class=\"container cooperation-center\">
      <ul class=\"cooperation-center-page\">
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/1.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/2.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/3.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/4.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/5.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/6.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/7.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/8.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/9.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/10.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/11.png\"></li>
        <li class=\"col-md-2 col-sm-3 col-xs-6\"><img src=\"/themes/drupal8_zymphonies_theme/partners/12.png\"></li>
      </ul>
    </div>
  </div>
";
        }
        // line 797
        echo "<!-- cooperation start 合作 -->

";
        // line 799
        if (($context["is_front"] ?? null)) {
            // line 800
            echo "
";
        } else {
            // line 802
            echo "  <!-- layout -->
  <div id=\"wrapper\">
    <!-- start: Container -->
      <!--内容 头部-->
        ";
            // line 806
            if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
                // line 807
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
                echo "
        ";
            }
            // line 809
            echo "      <!--End Content top-->

      <!--start:content -->
      <!-- <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 813
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
      </div> -->
      <!-- 广告合作头部 -->
      ";
            // line 816
            if ($this->getAttribute(($context["page"] ?? null), "agreement", array())) {
                // line 817
                echo "            <div class=\"agreement\">
              ";
                // line 818
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "agreement", array()), "html", null, true));
                echo "
            </div>
            <div class=\"clearfix\"></div>
      ";
            }
            // line 822
            echo "      <!-- 腾讯社交广告 头部 -->
      ";
            // line 823
            if ($this->getAttribute(($context["page"] ?? null), "social_ads", array())) {
                // line 824
                echo "          <div class=\"tenxun_social_ads\">
            ";
                // line 825
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "social_ads", array()), "html", null, true));
                echo "
          </div>
          <div calsss=\"clearfix\"></div>
      ";
            }
            // line 829
            echo "      <!-- 今天头条广告 头部 -->
      ";
            // line 830
            if ($this->getAttribute(($context["page"] ?? null), "headline_title", array())) {
                // line 831
                echo "        <div calss=\"headline\">
          ";
                // line 832
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "headline_title", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 835
            echo "      <!-- 新浪广告 头部 -->
      ";
            // line 836
            if ($this->getAttribute(($context["page"] ?? null), "sine_title", array())) {
                // line 837
                echo "        <div class=\"sine\">
          ";
                // line 838
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sine_title", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 841
            echo "      <!-- 陌陌头部 -->
      ";
            // line 842
            if ($this->getAttribute(($context["page"] ?? null), "momo", array())) {
                // line 843
                echo "        <div class=\"momo\">
          ";
                // line 844
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "momo", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 847
            echo "      <!-- 爱奇艺广告 -->
      ";
            // line 848
            if ($this->getAttribute(($context["page"] ?? null), "qiy", array())) {
                // line 849
                echo "        <div class=\"qiy\">
          ";
                // line 850
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "qiy", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 853
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "youku", array())) {
                // line 854
                echo "        <div class=\"youku\">
          ";
                // line 855
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "youku", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 858
            echo "      <!-- conter -->
      ";
            // line 859
            if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
                // line 860
                echo "        <div class=\"layout\">
            <div class=\"content_layout\">
                ";
                // line 862
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
            </div>
        </div>
      ";
            }
            // line 866
            echo "
      ";
            // line 867
            if ($this->getAttribute(($context["page"] ?? null), "wx_bottom", array())) {
                // line 868
                echo "        <!-- 微信 -->
        ";
                // line 869
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "wx_bottom", array()), "html", null, true));
                echo "
      ";
            }
            // line 871
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "triumph", array())) {
                // line 872
                echo "        <div class=\"triumph\">
            <div class=\"container\">
              ";
                // line 874
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "triumph", array()), "html", null, true));
                echo "
            </div>
        </div>
      ";
            }
            // line 878
            echo "
      <!--Start Content Bottom-->
      ";
            // line 880
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
                // line 881
                echo "        <div class=\"row\">
          ";
                // line 882
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 885
            echo "      <!--End Content Bottom-->
  </div>
  <!-- End layout -->
";
        }
        // line 889
        echo "
";
        // line 890
        if (($context["is_front"] ?? null)) {
            // line 891
            echo "  <div class=\"footer\">
  <!--资源-->
      <div class=\"container text-center\">
          <div class=\"col-md-4 col-ms-4 col-xs-4\">
            <h2>PC广告投放</h2>
            <p>自有PC资源投放</p>
            <p>门户网站投放</p>
            <p>中小站点投放</p>
          </div>
          <div class=\"col-md-4 col-ms-4 col-xs-4\">
            <h2>移动广告投放</h2>
            <p>自有移动资源投放</p>
            <p>App嵌入广告投放</p>
            <p>合作移动站点投放</p>
          </div>
            <div class=\"col-md-4 col-ms-4 col-xs-4\">
            <h2>合作流程</h2>
            <p>①咨询方案，签订合同</p>
            <p>②广告素材及资质审核</p>
            <p>③广告上线到媒体展示</p>
          </div>
      </div>
  <!--资源-->
  </div>
";
        }
        // line 916
        echo "  <!-- bottom start  -->
  <div id=\"bottom\">
    <div class=\"container\">
      <div class=\"col-sm-3 col-md-2 bottom-one  hidden-xs\">
        <h3 class=\"bottom-title\">金牌服务</h3>
        <ul class=\"bottom-center\">
          <li><a href=\"＃\" title=\"\">微博运营</a></li>
          <li><a href=\"＃\" title=\"\">论坛运营</a></li>
          <li><a href=\"＃\" title=\"\">视频剪辑</a></li>
          <li><a href=\"＃\" title=\"\">文案策划</a></li>
          <li><a href=\"＃\" title=\"\">自媒体运营</a></li>
          <li><a href=\"＃\" title=\"\">公众号运营</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3 col-md-2 bottom-one hidden-xs\">
        <h3 class=\"bottom-title\">帮助中心</h3>
        <ul class=\"bottom-center\">
          <li><a href=\"/about_us\" title=\"\">关于我们</a></li>
          <li><a href=\"＃\" title=\"\">帮助中心</a></li>
          <li><a href=\"＃\" title=\"\">诚聘英才</a></li>
          <li><a href=\"＃\" title=\"\">网站合作</a></li>
          <li><a href=\"＃\" title=\"\">举报中心</a></li>
          <li><a href=\"＃\" title=\"\">意见征集</a></li>
          <li><a href=\"＃\" title=\"\">知识产品权利</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3 col-md-2 bottom-one hidden-xs\">
        <h3 class=\"bottom-title\">友情链接</h3>
        <ul class=\"bottom-center\">
          <li><a href=\"＃\" title=\"\">微博</a></li>
          <li><a href=\"＃\" title=\"\">优酷</a></li>
          <li><a href=\"＃\" title=\"\">爱奇艺</a></li>
          <li><a href=\"＃\" title=\"\">淘宝网</a></li>
          <li><a href=\"＃\" title=\"\">阿里巴巴</a></li>
        </ul>
      </div>
      <div class=\"col-md-3 bottom-one hidden-xs hidden-sm\">
        <h3 class=\"bottom-title\">联系我们</h3>
        <ul class=\"bottom-center\">
          <li>0791-8316800</li>
          <li>QQ634015966</li>
          <li>xiaofuhao@qq.com</li>
        </ul>
      </div>
      <div class=\"col-xs-12 col-sm-3 col-md-3  text-center\">
        <h3 class=\"bottom-title mt10\">微信公众号</h3>
        <img class=\"mt10 mb10\" src=\"/themes/drupal8_zymphonies_theme/images/weixgzh.png\" alt=\"\">
        <p class=\"bottom-weix-text\">关注微信公众号获取运营方案</p>
      </div>
    </div>
  </div>
  <!-- bottom -->

  <!-- footer  start-->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"footer-center\">
        <p>© 2009-2017 Aliyun.com 版权所有 ICP证：浙B2-20080101</p>
      </div>
    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1100 => 916,  1073 => 891,  1071 => 890,  1068 => 889,  1062 => 885,  1056 => 882,  1053 => 881,  1051 => 880,  1047 => 878,  1040 => 874,  1036 => 872,  1033 => 871,  1028 => 869,  1025 => 868,  1023 => 867,  1020 => 866,  1013 => 862,  1009 => 860,  1007 => 859,  1004 => 858,  998 => 855,  995 => 854,  992 => 853,  986 => 850,  983 => 849,  981 => 848,  978 => 847,  972 => 844,  969 => 843,  967 => 842,  964 => 841,  958 => 838,  955 => 837,  953 => 836,  950 => 835,  944 => 832,  941 => 831,  939 => 830,  936 => 829,  929 => 825,  926 => 824,  924 => 823,  921 => 822,  914 => 818,  911 => 817,  909 => 816,  903 => 813,  897 => 809,  891 => 807,  889 => 806,  883 => 802,  879 => 800,  877 => 799,  873 => 797,  845 => 771,  843 => 770,  839 => 768,  831 => 763,  818 => 752,  816 => 751,  805 => 743,  801 => 742,  796 => 740,  790 => 737,  784 => 733,  744 => 695,  742 => 694,  738 => 692,  694 => 650,  692 => 649,  688 => 647,  248 => 209,  246 => 208,  241 => 205,  227 => 193,  225 => 192,  222 => 191,  176 => 147,  174 => 146,  167 => 141,  161 => 138,  158 => 137,  156 => 136,  152 => 134,  146 => 130,  140 => 128,  138 => 127,  132 => 123,  107 => 100,  101 => 98,  99 => 97,  92 => 92,  90 => 91,  79 => 82,  73 => 80,  71 => 79,  66 => 76,  60 => 74,  58 => 73,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig", "/Users/xialianggui/Desktop/qhzy/themes/drupal8_zymphonies_theme/templates/layout/page.html.twig");
    }
}
