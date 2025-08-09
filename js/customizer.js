/**
 * Tech Book Club Customizer JavaScript
 *
 * @package TechBookClub
 * @since 1.0.0
 */

(function($) {
    'use strict';

    // Hero subtitle live preview
    wp.customize('hero_subtitle', function(value) {
        value.bind(function(newval) {
            $('.hero-section .wp-block-paragraph').text(newval);
        });
    });

    // CTA text live preview
    wp.customize('cta_text', function(value) {
        value.bind(function(newval) {
            $('.cta-section .wp-block-heading').text(newval);
        });
    });

    // Site title live preview
    wp.customize('blogname', function(value) {
        value.bind(function(newval) {
            $('.site-title a').text(newval);
        });
    });

    // Site description live preview
    wp.customize('blogdescription', function(value) {
        value.bind(function(newval) {
            $('.site-description').text(newval);
        });
    });

    // Custom logo live preview
    wp.customize('custom_logo', function(value) {
        value.bind(function(newval) {
            if (newval) {
                wp.media.attachment(newval).fetch().then(function() {
                    $('.custom-logo-link img').attr('src', wp.media.attachment(newval).get('sizes').full.url);
                });
            } else {
                $('.custom-logo-link img').remove();
            }
        });
    });

    // Primary color live preview
    wp.customize('primary_color', function(value) {
        value.bind(function(newval) {
            $(':root').css('--primary-color', newval);
        });
    });

    // Secondary color live preview
    wp.customize('secondary_color', function(value) {
        value.bind(function(newval) {
            $(':root').css('--secondary-color', newval);
        });
    });

    // Typography live preview
    wp.customize('body_font', function(value) {
        value.bind(function(newval) {
            $('body').css('font-family', newval);
        });
    });

    wp.customize('heading_font', function(value) {
        value.bind(function(newval) {
            $('h1, h2, h3, h4, h5, h6').css('font-family', newval);
        });
    });

    // Layout options live preview
    wp.customize('container_width', function(value) {
        value.bind(function(newval) {
            $('.wp-block-group').css('max-width', newval + 'px');
        });
    });

    // Footer text live preview
    wp.customize('footer_text', function(value) {
        value.bind(function(newval) {
            $('.footer p').text(newval);
        });
    });

    // Social media links live preview
    wp.customize('twitter_url', function(value) {
        value.bind(function(newval) {
            $('.social-links a[href*="twitter"]').attr('href', newval);
        });
    });

    wp.customize('linkedin_url', function(value) {
        value.bind(function(newval) {
            $('.social-links a[href*="linkedin"]').attr('href', newval);
        });
    });

    // Background color live preview
    wp.customize('background_color', function(value) {
        value.bind(function(newval) {
            $('body').css('background-color', '#' + newval);
        });
    });

    // Header background color live preview
    wp.customize('header_background_color', function(value) {
        value.bind(function(newval) {
            $('.header').css('background-color', newval);
        });
    });

    // Footer background color live preview
    wp.customize('footer_background_color', function(value) {
        value.bind(function(newval) {
            $('.footer').css('background-color', newval);
        });
    });

    // Button style live preview
    wp.customize('button_style', function(value) {
        value.bind(function(newval) {
            $('.wp-block-button__link').removeClass('rounded square pill').addClass(newval);
        });
    });

    // Animation effects live preview
    wp.customize('enable_animations', function(value) {
        value.bind(function(newval) {
            if (newval) {
                $('body').addClass('animations-enabled');
            } else {
                $('body').removeClass('animations-enabled');
            }
        });
    });

    // Mobile menu style live preview
    wp.customize('mobile_menu_style', function(value) {
        value.bind(function(newval) {
            $('.wp-block-navigation').removeClass('slide-over hamburger').addClass(newval);
        });
    });

    // Custom CSS live preview
    wp.customize('custom_css', function(value) {
        value.bind(function(newval) {
            $('#alexs-block-theme-custom-css').remove();
            if (newval) {
                $('<style id="alexs-block-theme-custom-css">' + newval + '</style>').appendTo('head');
            }
        });
    });

    // Custom JavaScript live preview
    wp.customize('custom_js', function(value) {
        value.bind(function(newval) {
            // Note: Custom JS preview is limited for security reasons
            // This would typically be handled differently in production
            console.log('Custom JS updated:', newval);
        });
    });

    // Theme options section
    wp.customize.section('alex_block_theme_options', function(section) {
        section.expanded.bind(function(isExpanded) {
            if (isExpanded) {
                // Add custom controls or behaviors when section is expanded
                console.log('Alex\'s Block Theme options section expanded');
            }
        });
    });

    // Add custom control for color picker with preset colors
    wp.customize.control('primary_color', function(control) {
        control.container.find('.wp-picker-container').append(
            '<div class="color-presets">' +
            '<button type="button" class="preset-color" data-color="#e67e22" style="background-color: #e67e22;"></button>' +
            '<button type="button" class="preset-color" data-color="#3498db" style="background-color: #3498db;"></button>' +
            '<button type="button" class="preset-color" data-color="#e74c3c" style="background-color: #e74c3c;"></button>' +
            '<button type="button" class="preset-color" data-color="#27ae60" style="background-color: #27ae60;"></button>' +
            '</div>'
        );

        control.container.find('.preset-color').on('click', function() {
            const color = $(this).data('color');
            control.setting.set(color);
        });
    });

    // Add custom control for typography
    wp.customize.control('body_font', function(control) {
        const fonts = [
            { label: 'System Default', value: '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif' },
            { label: 'Open Sans', value: '"Open Sans", sans-serif' },
            { label: 'Roboto', value: '"Roboto", sans-serif' },
            { label: 'Lato', value: '"Lato", sans-serif' },
            { label: 'Poppins', value: '"Poppins", sans-serif' }
        ];

        const select = $('<select>');
        fonts.forEach(function(font) {
            select.append($('<option>', {
                value: font.value,
                text: font.label
            }));
        });

        control.container.find('.customize-control-content').append(select);
        select.val(control.setting.get());

        select.on('change', function() {
            control.setting.set($(this).val());
        });
    });

    // Add custom control for layout options
    wp.customize.control('container_width', function(control) {
        const slider = $('<input type="range" min="800" max="1600" step="50">');
        const value = $('<span class="value-display"></span>');

        control.container.find('.customize-control-content').append(slider, value);

        slider.val(control.setting.get());
        value.text(control.setting.get() + 'px');

        slider.on('input', function() {
            const newValue = $(this).val();
            value.text(newValue + 'px');
            control.setting.set(newValue);
        });
    });

    // Add custom control for social media
    wp.customize.control('social_media_links', function(control) {
        const socialPlatforms = ['twitter', 'linkedin', 'github', 'youtube'];
        const container = $('<div class="social-media-controls"></div>');

        socialPlatforms.forEach(function(platform) {
            const field = $('<div class="social-field">' +
                '<label>' + platform.charAt(0).toUpperCase() + platform.slice(1) + ' URL:</label>' +
                '<input type="url" placeholder="https://' + platform + '.com/yourusername">' +
                '</div>');
            container.append(field);
        });

        control.container.find('.customize-control-content').append(container);
    });

    // Add custom control for testimonials
    wp.customize.control('testimonials', function(control) {
        const container = $('<div class="testimonials-controls"></div>');
        const addButton = $('<button type="button" class="add-testimonial">Add Testimonial</button>');

        container.append(addButton);

        addButton.on('click', function() {
            const testimonial = $('<div class="testimonial-item">' +
                '<textarea placeholder="Testimonial text"></textarea>' +
                '<input type="text" placeholder="Author name">' +
                '<input type="text" placeholder="Author title">' +
                '<button type="button" class="remove-testimonial">Remove</button>' +
                '</div>');
            container.append(testimonial);
        });

        control.container.find('.customize-control-content').append(container);
    });

    // Add custom control for membership tiers
    wp.customize.control('membership_tiers', function(control) {
        const container = $('<div class="membership-controls"></div>');
        const addButton = $('<button type="button" class="add-tier">Add Tier</button>');

        container.append(addButton);

        addButton.on('click', function() {
            const tier = $('<div class="tier-item">' +
                '<input type="text" placeholder="Tier name">' +
                '<input type="text" placeholder="Price">' +
                '<textarea placeholder="Features (one per line)"></textarea>' +
                '<button type="button" class="remove-tier">Remove</button>' +
                '</div>');
            container.append(tier);
        });

        control.container.find('.customize-control-content').append(container);
    });

    // Initialize customizer
    $(document).ready(function() {
        console.log('Alex\'s Block Theme customizer initialized');

        // Add custom styles for customizer controls
        $('<style>' +
            '.color-presets { margin-top: 10px; }' +
            '.preset-color { width: 30px; height: 30px; border: 2px solid #ddd; margin-right: 5px; cursor: pointer; border-radius: 50%; }' +
            '.preset-color:hover { border-color: #0073aa; }' +
            '.social-field { margin-bottom: 10px; }' +
            '.social-field label { display: block; margin-bottom: 5px; }' +
            '.social-field input { width: 100%; }' +
            '.testimonial-item, .tier-item { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; }' +
            '.testimonial-item textarea, .tier-item textarea { width: 100%; height: 80px; }' +
            '.value-display { margin-left: 10px; font-weight: bold; }' +
            '</style>').appendTo('head');
    });

})(jQuery); 