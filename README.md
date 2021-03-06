# Savage
[![Build Status](https://travis-ci.org/DekodeInteraktiv/savage-cards.svg?branch=master)](https://travis-ci.org/DekodeInteraktiv/savage-cards)

Hogan + Savage = The Mega Powers!

A plugin for setting up a card view for different content. Intended for use with [Hogan Grid](https://github.com/DekodeInteraktiv/hogan-grid).

Also contains a custom post type for custom global cards.

## Installation
Install the module using Composer `composer require dekodeinteraktiv/savage-cards` or simply by downloading this repository and placing it in `wp-content/plugins`

## Available filters
Meta fields filters:
- `savage/card/meta/image_types` - customize dropdown for card image options
```
//default values
[
	'featured' => __( 'Use featured image', 'savage-cards' ),
	'alternative' => __( 'Use alternative image', 'savage-cards' ),
	'none' => __( 'No image', 'savage-cards' ),
]
```

- `savage/card/meta/locations` - for adding locations to the ACF field group.
- `savage/card/field_group/fields_before` - add new fields to group before existing fields.
- `savage/card/field_group/fields_after` - add new fields to group after existing fields.
- `savage/card/default_card_post_types` - post types that should have the default card
- `savage/card/default_card` - default card type
- `savage/card/default_components` - default components used in the templates
- `savage/card/components/savage_link/text` - link text for screenreaders
- `savage/card/components/savage_link/teaser` - link text (or button) on card
- `savage/card/components/label/auto` - set rules for auto-label on cards

Custom card filters
- `savage/card/custom/bg_color_options` - filter for adding themes's color palette to card bg_color options.
- `savage/card/custom/layouts` - add layouts to custom card flexible content area
- `savage/card/custom/layout/editor/allow_media_upload` - allow media button in editor layout
- `savage/card/custom/layout/editor/toolbar` - customize toolbar for editor layout
- `savage/card/custom/layout/editor/tabs` - customize tabs for editor layout

## Available actions
- `savage/card/template/init` - Runs before template markup
- `savage/card/template/header/{ template name }` - top section section of template
- `savage/card/template/body/{ template name }` - middle section of template
- `savage/card/template/footer/{ template name }` - bottom section of template
- `savage/card/custom/body/layout_content` - content of custom card if layouts are used
