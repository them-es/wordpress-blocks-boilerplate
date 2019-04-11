## them.es WordPress Blocks

**them.es WordPress Blocks** is a WordPress "Gutenberg" blocks boilerplate to include in a theme.


## What's included?
* Gutenberg blocks configuration tested in WordPress v5.1+
* NPM configuration
* ESNext
* Support for Editor color palettes
* Block category
* Optional: Easily add more blocks


## Setup
* Prerequisites: [Node.js](https://nodejs.org) (NPM) needs to be installed on your system
* Download the source code to a new directory (e.g. `/blocks`) in your WordPress theme
* Add `$theme_blocks = __DIR__ . '/blocks/index.php'; if ( is_readable( $theme_blocks ) ) : require_once $theme_blocks; endif;` in `functions.php`
* Open `/blocks` in Terminal and install the required Node.js dependencies
* `$ npm install`
* A simple `Hello world` block implementation is included to get you started. More examples can be found in the official [Gutenberg examples repository](https://github.com/WordPress/gutenberg-examples)
* You can easily add more blocks by duplicating `/src/block1` and importing the new block directory in `/src/index.js`
* Run the **`start`** script
* `$ npm run start`
* Develop the block(s) - [Tutorial](https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/writing-your-first-block-type) - by modifying the block sources `/src/block#/index.js`
* When you're done run the **`build`** script to create the minified version
* `$ npm run build`
* Now you can test the block in the WordPress Editor


## Technology

* [WordPress Scripts](https://github.com/WordPress/gutenberg/tree/master/packages/scripts), [GPLv2+](https://github.com/WordPress/gutenberg/blob/master/packages/scripts/package.json)
* [Gutenberg](https://wordpress.org/gutenberg/handbook/designers-developers/developers), [GPLv2+](https://github.com/WordPress/gutenberg/blob/master/LICENSE.md)


## Copyright & License

Code and Documentation &copy; [them.es](http://them.es)

Code released under [GPLv2+](http://www.gnu.org/licenses/gpl-2.0.html)
