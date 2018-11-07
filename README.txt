Genesis Sample SK Theme (Scout Knows)

This theme was adapted from the Genesis Sample SB (for CYS) Theme on Oct 16, 2018.

Styling:
It uses NPM package node-sass (https://www.npmjs.com/package/node-sass) for Sass compiling.
to run, get into 'genesis-sam-sk' directory and use 'npm run scss' to start compiling watch script.

NOTE (TO BE FIXED):
The style.scss file must be saved every time a change is made in any of the scss files in order for the css compiler to run.
Also Make sure that in Chrome Dev tools, caching is turned off in 'Network' Tab. 

It's using most of the Genesis Sample Theme CSS File, and adding Scss compiled alterations and additions to the end of _genesis_sample.scss

Log in to the WP Admin Dashboard on Local Machine is:
teague
Ae23

The Icons used are from ionicons.com. Usage instruction at: https://www.tutorialspoint.com/ionic/ionic_icons.htm


######### Installation Instructions From Genesis Sample  ######### 

1. Upload the Genesis Sample theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the Genesis Sample theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## For Developers

The version of [Genesis Sample on GitHub](https://github.com/copyblogger/genesis-sample/) includes tooling to check code against WordPress standards. To use it:

1. Install Composer globally on your development machine. [See Composer setup steps](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable).
2. In the command line, change directory to the Genesis Sample folder.
3. Type the command `composer install` to install PHP development dependencies.
4. Type `composer phpcs` to run coding standards checks.

You'll see output highlighting issues with PHP files that do not conform to Genesis Sample coding standards.

### Packaging for distribution

1. Switch to the branch you plan to distribute.
2. Run `composer export` to zip all non-development files as `genesis-sample.zip`.

The `export` command is an alias for `git archive -o genesis-sample.zip HEAD`.

## Theme Support

Please visit https://my.studiopress.com/help/ for theme support.
