+++
title =  "Menu testing"
description = "No description yet"
chapter = false
draft = true
+++

`author` Value : {{% siteparam "author" %}}

Test: {{% siteparam "description" %}}

.Ref "anotherlevel.md"


Notice there is no Dutch version, so the language menu is now limited.

1. Lorem ipsum dolor sit amet
1. Consectetur adipiscing elit
1. Integer molestie lorem at massa
1. Facilisis in pretium nisl aliquet
1. Nulla volutpat aliquam velit
1. Faucibus porta lacus fringilla vel
1. Aenean sit amet erat nunc
1. Eget porttitor lorem

+ Lorem ipsum dolor sit amet
+ Consectetur adipiscing elit
+ Integer molestie lorem at massa
+ Facilisis in pretium nisl aliquet
+ Nulla volutpat aliquam velit
  - Phasellus iaculis neque
  - Purus sodales ultricies
  - Vestibulum laoreet porttitor sem
  - Ac tristique libero volutpat at
+ Faucibus porta lacus fringilla vel
+ Aenean sit amet erat nunc
+ Eget porttitor lorem

{{%expand "Is this learn theme rocks ?" %}}Yes !.{{% /expand%}}

{{%expand%}}
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
{{% /expand%}}

[anchor test]({{< relref "playground/secondlevel.md#another-anchor" >}})

or with percentsymbols...?

[anchor test]({{% relref "playground/secondlevel.md#another-anchor" %}})

In any case, please make sure the relref is correct, in this case for
example 'playground/nitro/#another-anchor' would be wrong.

[anchor test with mouse over]({{% relref "playground/secondlevel.md#another-anchor" "wertkt dit? Nee!" %}})