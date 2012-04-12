## Getting started

To begin work on this theme, use git to clone it into the `wp-content/themes` folder in your Wordpress install.

## Compiling CSS

[Compass](http://compass-style.org/) is used to compile SCSS files into CSS. See the documentation for [SASS/SCSS](http://sass-lang.com/). Nerds with a Ruby installed can start the compiler using:

    bundle exec compass watch

Non-nerds can install [Compass App](http://compass.handlino.com/) and avoid the command-line.

## HTML templates

If you want to edit the HTML for the site, then edit one of the files in the `templates` folder. `layout.php` is a special file that contains a layout that will be wrapped around all of the other templates.