Added our own menu.html from hugo-theme-learn here because we want to pass 
the HTML-validation test and fixing this in https://github.com/matcornic/hugo-theme-learn/
was not really an option (for now anyways).

Changes in our menu.html:
* select is no longer a descendant of a element
* select is no longer in an ul element
* we also removed <i class="fa fa-fw fa-language"></i> because it was no longer padded as a result of the above deletions and this was the easiest solution.

In order to make this work, we als added an 'sidebar .select-style' in
theme-spin.css.

Also done, but submitted as pull request:
* <li class="" role=""> to <li>
 * https://github.com/matcornic/hugo-theme-learn/pull/121


 