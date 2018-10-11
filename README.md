[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

_wpstarter
===

This is a WordPress starter theme based on _s (underscores), using Tachyons (functional CSS). As of this point, the project is experimental. 

---------------

(Instructions from https://github.com/Automattic/_s)

If you want to set things up manually, download `_wpstarter` from GitHub. The first thing you want to do is copy the `_wpstarter` directory and change the name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in `style.css`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.

OR

1. Search for: `'_s'` and replace with: `'megatherium-is-awesome'`
2. Search for: `_s_` and replace with: `megatherium_is_awesome_`
3. Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium-is-awesome` in `style.css`.
4. Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>
5. Search for: `_s-` and replace with: `megatherium-is-awesome-`

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
