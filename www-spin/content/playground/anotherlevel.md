+++
title =  "Anotherlevel"
description = "Yet another level"
tags = [ "a", "b", "c" ]
tags_weight = 22
categories = ["d"]
categories_weight = 44
type = "event"
layout = "birthday"
chapter = false
slug = "wateengekkeslug"
draft = true
+++

anotherlevel.md

Notice there is no Dutch version, so the language menu is now limited.

{{%expand "Does this learn theme rocks ?" %}}Yes !.{{% /expand%}}

{{%expand%}}
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
{{% /expand%}}


> This is a blockquite
And it is really nice.

# blah

> This is a....
Nested blockquote... Isn't it nice?
>> No, it should work but it doesn't...
Very ugly blockquote here.

### more blah

``` markup
Sample text here...
```

In this example, `<section></section>` should be wrapped as **code**.

    // Some comments atleast an ident of four spaces
    line 1 of code
    line 2 of code
    line 3 of code

### Syntax highlightning

```js
grunt.initConfig({
  assemble: {
    options: {
      assets: 'docs/assets',
      data: 'src/data/*.{json,yml}',
      helpers: 'src/custom-helpers.js',
      partials: ['src/partials/**/*.{hbs,md}']
    },
    pages: {
      options: {
        layout: 'default.hbs'
      },
      files: {
        './': ['src/templates/pages/index.hbs']
      }
    }
  }
};
```

