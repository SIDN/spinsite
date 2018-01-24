Added our own menu.html from hugo-theme-learn here because we want to pass 
the HTML-validation test and fixing this in https://github.com/matcornic/hugo-theme-learn/
was not really an option (for now anyways).

Changes in our menu.html:
* select is no longer a descendant of an 'a' element
* select is no longer in an 'ul' element
* we also removed "&lt;i class="fa fa-fw fa-language"&gt;&lt;/i&gt;" because it was no longer properly padded as a result of the above deletions and this was the easiest solution (the country flags make a great alternative).

In order to make this work, we als added an 'sidebar .select-style' in our own theme-spin.css.

Also done, but submitted as pull request:
* "&lt;li class="" role=""&gt;" to just "&lt;li&gt;" (class has no use and an empty role is invalid)
* https://github.com/matcornic/hugo-theme-learn/pull/121


 
