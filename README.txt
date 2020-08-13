INTRODUCTION
------------

This module crated for have global content that can be used on site for different purposes.


INSTALLATION
------------

1. Copy this module directory to your sites/SITENAME/modules directory.

2. Enable the module(s).


USING THE Global Content module
-------------

Global content list and field settings avaliable on /admin/config by Global Content list 
and Global Content settings links.

Global conent avaliable on theme hook, whether implemented as a template or function:
-    variables["global_content"],
on twig templates using:
    {{ global_content }}
or everywhere on drupal enviroment using services:
-    $global_content = \Drupal::service('global_content.global_content_service')->get_content();

Global variables can be added from Global Content list or from code using _global_content_code_defined_variables() function 
in global_content.module file.