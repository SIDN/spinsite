+++
title =  "Secondlevel"
draft = true
date        = "2013-06-21T11:27:27-04:00"
lastmod     = "2018-01-21T11:27:27-04:00"
description = "Nitro secondlevel test"
tags        = [ "Development", "Go", "profiling" ]
topics      = [ "Development", "Go" ]
slug        = "nitro"
project_url = "https://github.com/spf13/nitro"
# Learn theme specific:
# Table of content (toc) is enabled by default. Set this parameter to true to disable it.
# Note: Toc is always disabled for chapter pages
disableToc = "false"
# If set, this will be used for the page's menu entry (instead of the `title` attribute)
menuTitle = "SecondlevelTitle"
# The title of the page in menu will be prefixed by this HTML content
pre = ""
# The title of the page in menu will be postfixed by this HTML content
post = ""
# Set the page as a chapter, changing the way it's displayed
chapter = false
# Hide a menu entry by setting this to true
hidden = false
# Display name of this page modifier. If set, it will be displayed in the footer. 
LastModifierDisplayName = "Marco"
# Email of this page modifier. If set with LastModifierDisplayName, it will be displayed in the footer
LastModifierEmail = "marco@example.nl"
+++

secondlevel.md \o/

* <i class="fa fa-language"></i> Taal
* <i class="fa fa-fw fa-language"></i> Taal 2
* <i class="fa fa-fw"></i> Taal 3

Notice there is no Dutch version, so the language menu is now limited.

Does children description (below) work:

{{% children description="true"   %}}

<ul class="fa-ul">
  <li><i class="fa-li fa fa-check-square"></i>List icons</li>
  <li><i class="fa-li fa fa-check-square"></i>can be used</li>
  <li><i class="fa-li fa fa-spinner fa-spin"></i>as bullets</li>
  <li><i class="fa-li fa fa-square"></i>in lists</li>
</ul>

{{ .Permalink }}

{{ .Resources.ByType "image" }}

