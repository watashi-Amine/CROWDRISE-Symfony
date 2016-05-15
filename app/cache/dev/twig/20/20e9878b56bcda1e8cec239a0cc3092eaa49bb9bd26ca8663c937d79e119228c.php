<?php

/* crowdBundle:user:modifierProfile.html.twig */
class __TwigTemplate_4beb35208dc02eedbd2533e2a5e54c891f8d6cab55ada3cf6c92601ecf9341b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:user:modifierProfile.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::enligne.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        // line 4
        echo "                        ";
        $this->loadTemplate("::sidebar.html.twig", "crowdBundle:user:modifierProfile.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    


\t\t\t\t\t<div class=\"profile-body margin-bottom-20\">
\t\t\t\t\t\t<div class=\"tab-v1\">
\t\t\t\t\t\t\t<ul class=\"nav nav-justified nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#profile\">Info</a></li>
                                                                
                                                 <li><a data-toggle=\"tab\" href=\"editProfile\">Modifier info</a></li>

\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#passwordTab\">changer mot de passe</a></li>
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#payment\">option de payement</a></li>
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#settings\">Notification Settings</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div id=\"profile\" class=\"profile-edit tab-pane fade in active\">
\t\t\t\t\t\t\t\t\t<h2 class=\"heading-md\">Information Generale de profile</h2>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t\t\t\t\t\t\t<dt><strong>Nom d'utilisateur</strong></dt>
\t\t\t\t\t\t\t\t\t\t<dd>
                                                                                    ";
        // line 31
        $this->displayBlock('test', $context, $blocks);
        // line 33
        echo "                                                                                    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                                                                    
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"pull-right\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<dt><strong>email </strong></dt>
\t\t\t\t\t\t\t\t\t\t<dd>
                                                                                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"pull-right\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-u btn-u-default\">Cancel</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-u\">Save Changes</button>
\t\t\t\t\t\t\t\t</div>
                                                            <div id=\"editProfile\" class=\"profile-edit tab-pane fade\" >
\t\t\t\t\t\t\t\t\t<h2 class=\"heading-md\">Information Generale de profile</h2>
\t\t\t\t\t\t\t\t\t<p>information de base</p>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">

                                                                            
\t\t\t\t\t\t\t\t\t\t<dt><strong>Nom d'utilisateur</strong></dt>
                                                                                
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tEdward Rooster
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"pull-right\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<dt><strong>email </strong></dt>
\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\tFKJ-032440
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"pull-right\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-u btn-u-default\">Cancel</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-u\">Save Changes</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"passwordTab\" class=\"profile-edit tab-pane fade\">
\t\t\t\t\t\t\t\t\t<h2 class=\"heading-md\">Manage your Security Settings</h2>
\t\t\t\t\t\t\t\t\t<p>Change your password.</p>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<form class=\"sky-form\" id=\"sky-form4\" action=\"#\">
\t\t\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t\t\t\t\t\t\t\t<dt>Username</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-append fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Username\" name=\"username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Needed to enter the website</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t\t<dt>Email address</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-append fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email address\" name=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Needed to verify your account</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t\t<dt>Enter your password</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-append fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Don't forget your password</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t\t<dt>Confirm Password</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-append fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"passwordConfirm\" placeholder=\"Confirm password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Don't forget your password</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle toggle-change\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Remember password</label>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" id=\"terms\" name=\"terms\"><i></i><a href=\"#\">I agree with the Terms and Conditions</a></label>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-u btn-u-default\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-u\" type=\"submit\">Save Changes</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"payment\" class=\"profile-edit tab-pane fade\">
\t\t\t\t\t\t\t\t\t<h2 class=\"heading-md\">Manage your Payment Settings</h2>
\t\t\t\t\t\t\t\t\t<p>Below are the payment options for your account.</p>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<form class=\"sky-form\" id=\"sky-form\" action=\"#\">
\t\t\t\t\t\t\t\t\t\t<!--Checkout-Form-->
                                                                                
                                                                                
                                                                                
\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inline-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" checked=\"\" name=\"radio-inline\"><i class=\"rounded-x\"></i>Visa</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio-inline\"><i class=\"rounded-x\"></i>MasterCard</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio-inline\"><i class=\"rounded-x\"></i>PayPal</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Name on card\">
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<section class=\"col col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"card\" id=\"card\" placeholder=\"Card number\">
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t<section class=\"col col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cvv\" id=\"cvv\" placeholder=\"CVV2\">
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label col col-4\">Expiration date</label>
\t\t\t\t\t\t\t\t\t\t\t<section class=\"col col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"month\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option disabled=\"\" selected=\"\" value=\"0\">Month</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">January</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">February</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">March</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">April</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">May</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">June</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">July</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">August</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\">September</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">October</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">November</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\">December</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t<section class=\"col col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Year\" id=\"year\" name=\"year\">
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-u btn-u-default\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-u\" type=\"submit\">Save Changes</button>
\t\t\t\t\t\t\t\t\t\t<!--End Checkout-Form-->
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"settings\" class=\"profile-edit tab-pane fade\">
\t\t\t\t\t\t\t\t\t<h2 class=\"heading-md\">Manage your Notifications.</h2>
\t\t\t\t\t\t\t\t\t<p>Below are the notifications you may manage.</p>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<form class=\"sky-form\" id=\"sky-form3\" action=\"#\">
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Email notification</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Send me email notification when a user comments on my blog</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Send me email notification for the latest update</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Send me email notification when a user sends me message</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Receive our monthly newsletter</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-u btn-u-default\">Reset</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-u\" type=\"submit\">Save Changes</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
                                                            
\t\t\t\t\t\t\t\t<div id=\"settings\" class=\"profile-edit tab-pane fade\">
\t\t\t\t\t\t\t\t\t<h2 class=\"heading-md\">Manage your Notifications.</h2>
\t\t\t\t\t\t\t\t\t<p>Below are the notifications you may manage.</p>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<form class=\"sky-form\" id=\"sky-form3\" action=\"#\">
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Email notification</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Send me email notification when a user comments on my blog</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Send me email notification for the latest update</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Send me email notification when a user sends me message</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<label class=\"toggle\"><input type=\"checkbox\" checked=\"\" name=\"checkbox-toggle-1\"><i class=\"no-rounded\"></i>Receive our monthly newsletter</label>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-u btn-u-default\">Reset</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-u\" type=\"submit\">Save Changes</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
                                                            
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                                        ";
    }

    // line 31
    public function block_test($context, array $blocks = array())
    {
        // line 32
        echo "                                                                                        ";
    }

    public function getTemplateName()
    {
        return "crowdBundle:user:modifierProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 32,  305 => 31,  85 => 44,  70 => 33,  68 => 31,  44 => 9,  41 => 8,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::enligne.html.twig' %}*/
/* */
/*     {% block navbar %}*/
/*                         {% include '::sidebar.html.twig' %}*/
/* */
/*         {% endblock %}*/
/* */
/* {%  block body %}*/
/*     */
/* */
/* */
/* 					<div class="profile-body margin-bottom-20">*/
/* 						<div class="tab-v1">*/
/* 							<ul class="nav nav-justified nav-tabs">*/
/* 								<li class="active"><a data-toggle="tab" href="#profile">Info</a></li>*/
/*                                                                 */
/*                                                  <li><a data-toggle="tab" href="editProfile">Modifier info</a></li>*/
/* */
/* 								<li><a data-toggle="tab" href="#passwordTab">changer mot de passe</a></li>*/
/* 								<li><a data-toggle="tab" href="#payment">option de payement</a></li>*/
/* 								<li><a data-toggle="tab" href="#settings">Notification Settings</a></li>*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 								<div id="profile" class="profile-edit tab-pane fade in active">*/
/* 									<h2 class="heading-md">Information Generale de profile</h2>*/
/* 									<p></p>*/
/* 									<br>*/
/* 									<dl class="dl-horizontal">*/
/* 										<dt><strong>Nom d'utilisateur</strong></dt>*/
/* 										<dd>*/
/*                                                                                     {% block  test %}*/
/*                                                                                         {% endblock %}*/
/*                                                                                     {{app.user.username}}*/
/*                                                                                     */
/* 											<span>*/
/* 												<a class="pull-right" href="#">*/
/* 													<i class="fa fa-pencil"></i>*/
/* 												</a>*/
/* 											</span>*/
/* 										</dd>*/
/* 										<hr>*/
/* 										<dt><strong>email </strong></dt>*/
/* 										<dd>*/
/*                                                                                     {{app.user.email}}*/
/* 											<span>*/
/* 												<a class="pull-right" href="#">*/
/* 													<i class="fa fa-pencil"></i>*/
/* 												</a>*/
/* 											</span>*/
/* 										</dd>*/
/* 										*/
/* 									</dl>*/
/* 									<button type="button" class="btn-u btn-u-default">Cancel</button>*/
/* 									<button type="button" class="btn-u">Save Changes</button>*/
/* 								</div>*/
/*                                                             <div id="editProfile" class="profile-edit tab-pane fade" >*/
/* 									<h2 class="heading-md">Information Generale de profile</h2>*/
/* 									<p>information de base</p>*/
/* 									<br>*/
/* 									<dl class="dl-horizontal">*/
/* */
/*                                                                             */
/* 										<dt><strong>Nom d'utilisateur</strong></dt>*/
/*                                                                                 */
/* 										<dd>*/
/* 											Edward Rooster*/
/* 											<span>*/
/* 												<a class="pull-right" href="#">*/
/* 													<i class="fa fa-pencil"></i>*/
/* 												</a>*/
/* 											</span>*/
/* 										</dd>*/
/* 										<hr>*/
/* 										<dt><strong>email </strong></dt>*/
/* 										<dd>*/
/* 											FKJ-032440*/
/* 											<span>*/
/* 												<a class="pull-right" href="#">*/
/* 													<i class="fa fa-pencil"></i>*/
/* 												</a>*/
/* 											</span>*/
/* 										</dd>*/
/* 										*/
/* 									</dl>*/
/* 									<button type="button" class="btn-u btn-u-default">Cancel</button>*/
/* 									<button type="button" class="btn-u">Save Changes</button>*/
/* 								</div>*/
/* */
/* 								<div id="passwordTab" class="profile-edit tab-pane fade">*/
/* 									<h2 class="heading-md">Manage your Security Settings</h2>*/
/* 									<p>Change your password.</p>*/
/* 									<br>*/
/* 									<form class="sky-form" id="sky-form4" action="#">*/
/* 										<dl class="dl-horizontal">*/
/* 											<dt>Username</dt>*/
/* 											<dd>*/
/* 												<section>*/
/* 													<label class="input">*/
/* 														<i class="icon-append fa fa-user"></i>*/
/* 														<input type="text" placeholder="Username" name="username">*/
/* 														<b class="tooltip tooltip-bottom-right">Needed to enter the website</b>*/
/* 													</label>*/
/* 												</section>*/
/* 											</dd>*/
/* 											<dt>Email address</dt>*/
/* 											<dd>*/
/* 												<section>*/
/* 													<label class="input">*/
/* 														<i class="icon-append fa fa-envelope"></i>*/
/* 														<input type="email" placeholder="Email address" name="email">*/
/* 														<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>*/
/* 													</label>*/
/* 												</section>*/
/* 											</dd>*/
/* 											<dt>Enter your password</dt>*/
/* 											<dd>*/
/* 												<section>*/
/* 													<label class="input">*/
/* 														<i class="icon-append fa fa-lock"></i>*/
/* 														<input type="password" id="password" name="password" placeholder="Password">*/
/* 														<b class="tooltip tooltip-bottom-right">Don't forget your password</b>*/
/* 													</label>*/
/* 												</section>*/
/* 											</dd>*/
/* 											<dt>Confirm Password</dt>*/
/* 											<dd>*/
/* 												<section>*/
/* 													<label class="input">*/
/* 														<i class="icon-append fa fa-lock"></i>*/
/* 														<input type="password" name="passwordConfirm" placeholder="Confirm password">*/
/* 														<b class="tooltip tooltip-bottom-right">Don't forget your password</b>*/
/* 													</label>*/
/* 												</section>*/
/* 											</dd>*/
/* 										</dl>*/
/* 										<label class="toggle toggle-change"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Remember password</label>*/
/* 										<br>*/
/* 										<section>*/
/* 											<label class="checkbox"><input type="checkbox" id="terms" name="terms"><i></i><a href="#">I agree with the Terms and Conditions</a></label>*/
/* 										</section>*/
/* 										<button type="button" class="btn-u btn-u-default">Cancel</button>*/
/* 										<button class="btn-u" type="submit">Save Changes</button>*/
/* 									</form>*/
/* 								</div>*/
/* */
/* 								<div id="payment" class="profile-edit tab-pane fade">*/
/* 									<h2 class="heading-md">Manage your Payment Settings</h2>*/
/* 									<p>Below are the payment options for your account.</p>*/
/* 									<br>*/
/* 									<form class="sky-form" id="sky-form" action="#">*/
/* 										<!--Checkout-Form-->*/
/*                                                                                 */
/*                                                                                 */
/*                                                                                 */
/* 										<section>*/
/* 											<div class="inline-group">*/
/* 												<label class="radio"><input type="radio" checked="" name="radio-inline"><i class="rounded-x"></i>Visa</label>*/
/* 												<label class="radio"><input type="radio" name="radio-inline"><i class="rounded-x"></i>MasterCard</label>*/
/* 												<label class="radio"><input type="radio" name="radio-inline"><i class="rounded-x"></i>PayPal</label>*/
/* 											</div>*/
/* 										</section>*/
/* */
/* 										<section>*/
/* 											<label class="input">*/
/* 												<input type="text" name="name" placeholder="Name on card">*/
/* 											</label>*/
/* 										</section>*/
/* */
/* 										<div class="row">*/
/* 											<section class="col col-10">*/
/* 												<label class="input">*/
/* 													<input type="text" name="card" id="card" placeholder="Card number">*/
/* 												</label>*/
/* 											</section>*/
/* 											<section class="col col-2">*/
/* 												<label class="input">*/
/* 													<input type="text" name="cvv" id="cvv" placeholder="CVV2">*/
/* 												</label>*/
/* 											</section>*/
/* 										</div>*/
/* */
/* 										<div class="row">*/
/* 											<label class="label col col-4">Expiration date</label>*/
/* 											<section class="col col-5">*/
/* 												<label class="select">*/
/* 													<select name="month">*/
/* 														<option disabled="" selected="" value="0">Month</option>*/
/* 														<option value="1">January</option>*/
/* 														<option value="1">February</option>*/
/* 														<option value="3">March</option>*/
/* 														<option value="4">April</option>*/
/* 														<option value="5">May</option>*/
/* 														<option value="6">June</option>*/
/* 														<option value="7">July</option>*/
/* 														<option value="8">August</option>*/
/* 														<option value="9">September</option>*/
/* 														<option value="10">October</option>*/
/* 														<option value="11">November</option>*/
/* 														<option value="12">December</option>*/
/* 													</select>*/
/* 													<i></i>*/
/* 												</label>*/
/* 											</section>*/
/* 											<section class="col col-3">*/
/* 												<label class="input">*/
/* 													<input type="text" placeholder="Year" id="year" name="year">*/
/* 												</label>*/
/* 											</section>*/
/* 										</div>*/
/* 										<button type="button" class="btn-u btn-u-default">Cancel</button>*/
/* 										<button class="btn-u" type="submit">Save Changes</button>*/
/* 										<!--End Checkout-Form-->*/
/* 									</form>*/
/* 								</div>*/
/* */
/* 								<div id="settings" class="profile-edit tab-pane fade">*/
/* 									<h2 class="heading-md">Manage your Notifications.</h2>*/
/* 									<p>Below are the notifications you may manage.</p>*/
/* 									<br>*/
/* 									<form class="sky-form" id="sky-form3" action="#">*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Email notification</label>*/
/* 										<hr>*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification when a user comments on my blog</label>*/
/* 										<hr>*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification for the latest update</label>*/
/* 										<hr>*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification when a user sends me message</label>*/
/* 										<hr>*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Receive our monthly newsletter</label>*/
/* 										<hr>*/
/* 										<button type="button" class="btn-u btn-u-default">Reset</button>*/
/* 										<button class="btn-u" type="submit">Save Changes</button>*/
/* 									</form>*/
/* 								</div>*/
/*                                                             */
/* 								<div id="settings" class="profile-edit tab-pane fade">*/
/* 									<h2 class="heading-md">Manage your Notifications.</h2>*/
/* 									<p>Below are the notifications you may manage.</p>*/
/* 									<br>*/
/* 									<form class="sky-form" id="sky-form3" action="#">*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Email notification</label>*/
/* 										<hr>*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification when a user comments on my blog</label>*/
/* 										<hr>*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification for the latest update</label>*/
/* 										<hr>*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification when a user sends me message</label>*/
/* 										<hr>*/
/* 										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Receive our monthly newsletter</label>*/
/* 										<hr>*/
/* 										<button type="button" class="btn-u btn-u-default">Reset</button>*/
/* 										<button class="btn-u" type="submit">Save Changes</button>*/
/* 									</form>*/
/* 								</div>*/
/*                                                             */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/*                                         {% endblock %}*/
