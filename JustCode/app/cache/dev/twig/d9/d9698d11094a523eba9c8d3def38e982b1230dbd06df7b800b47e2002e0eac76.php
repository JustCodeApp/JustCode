<?php

/* fosuser/index.html.twig */
class __TwigTemplate_ea95b544fcee42b4eb7c6b1672cabd5a326a5a2dac709792016c13463cce7421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fosuser/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fabb093eb2d9f5f7ae53af40c6bcb06864e6a4c430ad878faec47c6be04990e = $this->env->getExtension("native_profiler");
        $__internal_7fabb093eb2d9f5f7ae53af40c6bcb06864e6a4c430ad878faec47c6be04990e->enter($__internal_7fabb093eb2d9f5f7ae53af40c6bcb06864e6a4c430ad878faec47c6be04990e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fosuser/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fabb093eb2d9f5f7ae53af40c6bcb06864e6a4c430ad878faec47c6be04990e->leave($__internal_7fabb093eb2d9f5f7ae53af40c6bcb06864e6a4c430ad878faec47c6be04990e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73d581cbc9eb352c1ffca6020fd5cbc02e7b9369593c2a61ff534dbc466be660 = $this->env->getExtension("native_profiler");
        $__internal_73d581cbc9eb352c1ffca6020fd5cbc02e7b9369593c2a61ff534dbc466be660->enter($__internal_73d581cbc9eb352c1ffca6020fd5cbc02e7b9369593c2a61ff534dbc466be660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>FosUser list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Usernamecanonical</th>
                <th>Email</th>
                <th>Emailcanonical</th>
                <th>Enabled</th>
                <th>Salt</th>
                <th>Password</th>
                <th>Lastlogin</th>
                <th>Locked</th>
                <th>Expired</th>
                <th>Expiresat</th>
                <th>Confirmationtoken</th>
                <th>Passwordrequestedat</th>
                <th>Roles</th>
                <th>Credentialsexpired</th>
                <th>Credentialsexpireat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fosUsers"]) ? $context["fosUsers"] : $this->getContext($context, "fosUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["fosUser"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosuser_show", array("id" => $this->getAttribute($context["fosUser"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosUser"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosUser"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosUser"], "usernameCanonical", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosUser"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosUser"], "emailCanonical", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            if ($this->getAttribute($context["fosUser"], "enabled", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosUser"], "salt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosUser"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["fosUser"], "lastLogin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fosUser"], "lastLogin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["fosUser"], "locked", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["fosUser"], "expired", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 43
            if ($this->getAttribute($context["fosUser"], "expiresAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fosUser"], "expiresAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["fosUser"], "confirmationToken", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["fosUser"], "passwordRequestedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fosUser"], "passwordRequestedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["fosUser"], "roles", array())) {
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["fosUser"], "roles", array()), ", "), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 47
            if ($this->getAttribute($context["fosUser"], "credentialsExpired", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 48
            if ($this->getAttribute($context["fosUser"], "credentialsExpireAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fosUser"], "credentialsExpireAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosuser_show", array("id" => $this->getAttribute($context["fosUser"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fosuser_edit", array("id" => $this->getAttribute($context["fosUser"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fosUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("fosuser_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_73d581cbc9eb352c1ffca6020fd5cbc02e7b9369593c2a61ff534dbc466be660->leave($__internal_73d581cbc9eb352c1ffca6020fd5cbc02e7b9369593c2a61ff534dbc466be660_prof);

    }

    public function getTemplateName()
    {
        return "fosuser/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 66,  192 => 61,  180 => 55,  174 => 52,  165 => 48,  157 => 47,  151 => 46,  145 => 45,  141 => 44,  135 => 43,  127 => 42,  119 => 41,  113 => 40,  109 => 39,  105 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  81 => 33,  75 => 32,  72 => 31,  68 => 30,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>FosUser list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Username</th>*/
/*                 <th>Usernamecanonical</th>*/
/*                 <th>Email</th>*/
/*                 <th>Emailcanonical</th>*/
/*                 <th>Enabled</th>*/
/*                 <th>Salt</th>*/
/*                 <th>Password</th>*/
/*                 <th>Lastlogin</th>*/
/*                 <th>Locked</th>*/
/*                 <th>Expired</th>*/
/*                 <th>Expiresat</th>*/
/*                 <th>Confirmationtoken</th>*/
/*                 <th>Passwordrequestedat</th>*/
/*                 <th>Roles</th>*/
/*                 <th>Credentialsexpired</th>*/
/*                 <th>Credentialsexpireat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for fosUser in fosUsers %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('fosuser_show', { 'id': fosUser.id }) }}">{{ fosUser.id }}</a></td>*/
/*                 <td>{{ fosUser.username }}</td>*/
/*                 <td>{{ fosUser.usernameCanonical }}</td>*/
/*                 <td>{{ fosUser.email }}</td>*/
/*                 <td>{{ fosUser.emailCanonical }}</td>*/
/*                 <td>{% if fosUser.enabled %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ fosUser.salt }}</td>*/
/*                 <td>{{ fosUser.password }}</td>*/
/*                 <td>{% if fosUser.lastLogin %}{{ fosUser.lastLogin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if fosUser.locked %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if fosUser.expired %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if fosUser.expiresAt %}{{ fosUser.expiresAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ fosUser.confirmationToken }}</td>*/
/*                 <td>{% if fosUser.passwordRequestedAt %}{{ fosUser.passwordRequestedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if fosUser.roles %}{{ fosUser.roles|join(', ') }}{% endif %}</td>*/
/*                 <td>{% if fosUser.credentialsExpired %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if fosUser.credentialsExpireAt %}{{ fosUser.credentialsExpireAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('fosuser_show', { 'id': fosUser.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('fosuser_edit', { 'id': fosUser.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('fosuser_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
