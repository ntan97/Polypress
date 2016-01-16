# Polypress

A start of a skeleton theme to integrate Google's Polymer Web Components with WordPress

## Notes

Here's a couple notes to keep in mind:

- This is not a finished product.
- This will be consistently worked on till I likely get bored.
- Any help or feedback will be accepted.

## Usage

Before you get going you need to setup a few things.

### Setting up Polymer

To setup Polymer it's really simple. 

If you havn't installed bower yet, do that first.

I've included a bower.json.default. Rename to bower.json and run

```
bower install
```

This will initialize your node_modules folder in the root of the theme, and download all of Polymer and it's default web components.

### Setting up WordPress

To start to use the extra components you need to access you have to include add support to WordPress:

``` PHP
add_theme_support('polymer');
```

This is included by default in the skeleton theme. 

Now you can easily add any web component included in Polymer.

```PHP
// a couple poymer elements for examples
$polymer_support = array(
  'paper-toolbar',
  'roboto',
  'paper-menu'
);

add_polymer_support($polymer_support);
```

## Seperate Components
- [WP_Polymer_Nav_Walker](https://github.com/ntan97/WP_Polymer_Nav_Walker)

## Future Additions
- Add in all basic theme files, and create navigation options
- Integrate with different Google APIs.
- Add in default global theme options.
- Figure out what's next.
