> [!NOTE]
> The `main` branch is [only compatible with WordPress v6.6+](https://github.com/WordPress/gutenberg/blob/HEAD/packages/scripts/CHANGELOG.md#2800-2024-05-31).

## them.es WordPress Blocks

**them.es WordPress Blocks** is a WordPress "Gutenberg" blocks boilerplate which can be included in a theme.

## What's included?

-   Gutenberg blocks configuration tested in **WordPress v6.6+**
-   **All legacy boilerplates have been archived in the following branches: WordPress <6.6 ("v2" branch) and WordPress <5.8 ("v1" branch)**
-   NPM configuration
-   ESNext
-   Support for a category where all custom blocks can be organized
-   A simple "Hello world" block implementation is included
-   Optional: Easily add more blocks

## Setup

-   Prerequisites: [Node.js](https://nodejs.org) (NPM) needs to be installed on your system
-   [Download](https://github.com/them-es/wordpress-blocks-starter/archive/master.zip) the source code of this repository to a **new directory** (e.g. `/blocks`) in your WordPress theme
-   Add the following code snippet to `functions.php` in your theme (or reference it in your plugin's index.php file)

```
$theme_blocks = __DIR__ . '/blocks/index.php';
if ( is_readable( $theme_blocks ) ) {
	require_once $theme_blocks;
}
```

-   Open the `blocks` directory in Terminal and install the required Node.js dependencies:
-   `$ npm install`
-   A simple `Hello world` block implementation is included to get you started. More examples can be found in the official [Gutenberg examples repository](https://github.com/WordPress/gutenberg-examples)
-   You can include additional blocks by duplicating `/src/#####`
-   Run the **`start`** script:
-   `$ npm run start`
-   Develop the block(s) by modifying `/src/#####/index.js` - the official [Gutenberg Handbook](https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/writing-your-first-block-type) may help you learn how to build a custom block
-   When you're done run the **`build`** script to create a minified version of your blocks:
-   `$ npm run build`
-   Test the block(s) in the WordPress Editor

## Technology

-   [WordPress Scripts](https://github.com/WordPress/gutenberg/tree/master/packages/scripts), [GPLv2+](https://github.com/WordPress/gutenberg/blob/master/packages/scripts/package.json)
-   [Gutenberg](https://wordpress.org/gutenberg/handbook/designers-developers/developers), [GPLv2+](https://github.com/WordPress/gutenberg/blob/master/LICENSE.md)

## Copyright & License

Code and Documentation &copy; [them.es](https://them.es)

Code released under [GPLv2+](https://www.gnu.org/licenses/gpl-2.0.html)
