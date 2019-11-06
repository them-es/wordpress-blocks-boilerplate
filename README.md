## them.es WordPress Blocks

**them.es WordPress Blocks** is a WordPress "Gutenberg" blocks boilerplate which can be included in a theme.


## What's included?
* Gutenberg blocks configuration tested in WordPress v5.1+
* NPM configuration
* ESNext
* Support for Editor color palettes
* Support for a category where all custom blocks can be organized
* A simple "Hello world" block implementation is included
* Optional: Easily add more blocks


## Setup
* Prerequisites: [Node.js](https://nodejs.org) (NPM) needs to be installed on your system
* [Download](https://github.com/them-es/wordpress-blocks-starter/archive/master.zip) the source code of this repository to a new directory (e.g. `/blocks`) in your WordPress theme
* Add the following code snippet to `functions.php` in your theme
```
$theme_blocks = __DIR__ . '/blocks/index.php';
if ( is_readable( $theme_blocks ) ) :
	require_once $theme_blocks;
endif;
```
* Open `/blocks` in Terminal and install the required Node.js dependencies
* `$ npm install`
* A simple `Hello world` block implementation is included to get you started. More examples can be found in the official [Gutenberg examples repository](https://github.com/WordPress/gutenberg-examples)
* You can easily include additional blocks by duplicating `/src/block#` and referencing the new block(s) in `/src/index.js`
* Run the **`start`** script
* `$ npm run start`
* Develop the block(s) by modifying `/src/block#/index.js` - the official [Gutenberg Handbook](https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/writing-your-first-block-type) may help you learn how to build blocks
* When you're done run the **`build`** script to create a minified version of your blocks
* `$ npm run build`
* Now you can test the block(s) in the WordPress Editor


## Technology

* [WordPress Scripts](https://github.com/WordPress/gutenberg/tree/master/packages/scripts), [GPLv2+](https://github.com/WordPress/gutenberg/blob/master/packages/scripts/package.json)
* [Gutenberg](https://wordpress.org/gutenberg/handbook/designers-developers/developers), [GPLv2+](https://github.com/WordPress/gutenberg/blob/master/LICENSE.md)


## Copyright & License

Code and Documentation &copy; [them.es](http://them.es)

Code released under [GPLv2+](http://www.gnu.org/licenses/gpl-2.0.html)