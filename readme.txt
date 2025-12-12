=== Medical Academic Enhancements ===
Contributors: 
Donate link: 
Tags: {{tag1}}, {{tag2}}, {{tag3}}, {{tag4}}, {{tag5}}
Requires at least: 6.5
Tested up to: 
Stable tag: 1.0.0
Requires PHP: 8.0
License: GPL-3.0-or-later
License URI: 



== Description ==

Registers CPTs, taxonomies, and blocks for the Medical Academic platform.

= Key Features =

* **Modern Block Editor Integration** - Built with the latest WordPress block editor standards
* **Multiple Blocks** - Provides a suite of related blocks for comprehensive functionality
* **Customizable Design** - Flexible styling options to match your theme
* **Performance Optimized** - Lightweight and fast-loading
* **Accessibility Ready** - WCAG 2.1 Level AA compliant
* **Translation Ready** - Fully internationalized and ready for translation
* **Developer Friendly** - Clean, well-documented code following WordPress coding standards

= Use Cases =

{{use_case_1}}

{{use_case_2}}

{{use_case_3}}

= Block Features =



= Requirements =

* WordPress 6.5 or higher
* PHP 8.0 or higher
* Modern browser with JavaScript enabled

= Support =

For support requests, please visit  or create an issue on our [GitHub repository]().

= Contributing =

We welcome contributions! Please see our [contributing guidelines](/blob/main/CONTRIBUTING.md) for more information.

= Privacy =

This plugin does not collect or store any personal data. All data remains on your WordPress installation.

== Installation ==

= Automatic Installation =

1. Log in to your WordPress admin panel
2. Navigate to Plugins → Add New
3. Search for "Medical Academic Enhancements"
4. Click "Install Now" and then "Activate"

= Manual Installation =

1. Download the plugin ZIP file
2. Log in to your WordPress admin panel
3. Navigate to Plugins → Add New → Upload Plugin
4. Choose the downloaded ZIP file and click "Install Now"
5. Activate the plugin after installation

= After Activation =

1. Create a new post or page (or edit an existing one)
2. In the block editor, click the "+" button to add a new block
3. Search for ""
4. Add the block to your content
5. Customize the block settings in the sidebar
6. Publish or update your post/page

= Configuration =

The plugin works out of the box with default settings. You can customize the blocks' appearance and behavior using the block settings panel in the editor.

== Frequently Asked Questions ==

= Is this plugin free? =

Yes! Medical Academic Enhancements is completely free and open source under the GPL-3.0-or-later license.

= Does this work with any theme? =

Yes! The plugin is designed to work with any properly coded WordPress theme that supports the block editor.

= Can I use this with the Classic Editor? =

This plugin requires the block editor (Gutenberg). It will not work with the Classic Editor plugin.

= Is this plugin translation ready? =

Yes! The plugin is fully internationalized and ready for translation. Translation files can be added to the `/languages` directory.

= How do I customize the blocks' appearance? =

You can customize the blocks using:
1. The block settings panel in the editor sidebar
2. Theme.json settings in your theme
3. Custom CSS in your theme's stylesheet
4. Block styles and variations

= Does this plugin affect my site's performance? =

No! The plugin is lightweight and optimized for performance. It only loads necessary assets when the blocks are used.

= Where can I report bugs or request features? =

Please create an issue on our [GitHub repository](/issues) or visit our [support forum]().

= Can I contribute to this plugin? =

Absolutely! We welcome contributions. Please see our [contributing guidelines](/blob/main/CONTRIBUTING.md).

= Is GDPR compliance required for this plugin? =

The plugin itself does not collect, process, or store any personal data, so no additional GDPR compliance measures are needed for the plugin itself. However, ensure your site's overall GDPR compliance based on your specific use case.

== Screenshots ==

1. Block in the editor - Shows the block interface in the WordPress block editor
2. Block settings panel - Configuration options available in the sidebar
3. Frontend display - How the block appears on your live site
4. Block variations - Different style options available
5. Multiple blocks - Example of using multiple instances together

== Changelog ==

= 1.0.0 =
Release Date: 

**New Features:**
* {{new_feature_1}}
* {{new_feature_2}}

**Improvements:**
* {{improvement_1}}
* {{improvement_2}}

**Bug Fixes:**
* {{bug_fix_1}}
* {{bug_fix_2}}

**Developer Notes:**
* {{dev_note_1}}
* {{dev_note_2}}

For detailed changelog history, see [CHANGELOG.md](/blob/main/CHANGELOG.md)

== Upgrade Notice ==

= 1.0.0 =


== Additional Information ==

= Technical Details =

* **Block Names:** `medical_academic_enhancements/{{block-slug-1}}`, `medical_academic_enhancements/{{block-slug-2}}`
* **Block Category:** 
* **Supports:** 
* **Text Domain:** medical-academic-enhancements
* **Domain Path:** /languages

= Links =

* [Plugin Homepage]()
* [Documentation]()
* [GitHub Repository]()
* [Support Forum]()
* [Changelog](/blob/main/CHANGELOG.md)
* [Report Issue](/issues)

= Credits =

Developed and maintained by [LightSpeed](https://lightspeedwp.agency).

Special thanks to all [contributors](/graphs/contributors).

== Development ==

= Building from Source =

```bash
# Install dependencies
npm install
composer install

# Start development
npm run start

# Build for production
npm run build

# Run tests
npm run test
composer run test

# Create distribution ZIP
npm run plugin-zip
```

= Developer Hooks =

**Filters:**

* `medical_academic_enhancements_block_attributes` - Modify block attributes
* `medical_academic_enhancements_block_output` - Filter block output HTML
* `medical_academic_enhancements_block_settings` - Modify block settings

**Actions:**

* `medical_academic_enhancements_before_block_render` - Fires before block renders
* `medical_academic_enhancements_after_block_render` - Fires after block renders
* `medical_academic_enhancements_enqueue_assets` - Hook for custom asset enqueuing

For full API documentation, visit our [developer documentation](/developers).

= Testing =

We maintain comprehensive test coverage:

* **PHP Tests:** PHPUnit for PHP code
* **JavaScript Tests:** Jest for JavaScript/React code
* **E2E Tests:** Playwright for end-to-end testing
* **Code Quality:** PHPCS, ESLint, and Stylelint

= Browser Compatibility =

* Chrome (latest 2 versions)
* Firefox (latest 2 versions)
* Safari (latest 2 versions)
* Edge (latest 2 versions)

= Accessibility =

This plugin aims to meet WCAG 2.1 Level AA standards. If you encounter any accessibility issues, please [report them](/issues).
