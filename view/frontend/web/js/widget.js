/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'jquery',
    'domReady!'
], function ($) {
    'use strict';

    return function (config, element) {
        console.log('WhatsApp Chat Widget JS loaded!');
        var $widget = $(element);
        var $button = $widget.find('[data-whatsapp-button]');
        var $box = $widget.find('[data-whatsapp-box]');
        var $close = $widget.find('[data-whatsapp-close]');
        var $contacts = $widget.find('[data-whatsapp-contact]');
        
        console.log('Widget elements found:', {
            widget: $widget.length,
            button: $button.length,
            box: $box.length,
            close: $close.length,
            contacts: $contacts.length
        });
        
        var config = JSON.parse($widget.attr('data-whatsapp-config') || '{}');
        console.log('Parsed config:', config);
        var isBoxOpen = false;
        var currentDesign = $widget.attr('class').match(/design-\d+/);
        currentDesign = currentDesign ? currentDesign[0] : 'design-1';
        
        console.log('Widget class:', $widget.attr('class'));
        console.log('Current WhatsApp Chat Design:', currentDesign);

        /**
         * Initialize the widget
         */
        function init() {
            bindEvents();
            setupAnimations();
            checkTimeRestrictions();
            setupDesignSpecificFeatures();
            
            // Debug: Log widget initialization
            console.log('WhatsApp Chat Widget initialized with design:', currentDesign);
        }

        /**
         * Setup design-specific features
         */
        function setupDesignSpecificFeatures() {
            // Debug: Log design setup
            console.log('Setting up design-specific features for:', currentDesign);
            
            // Apply design-specific animations
            switch (currentDesign) {
                case 'design-2':
                    // Corporate Blue - Add pulse animation
                    $button.addClass('pulse-animation');
                    console.log('Applied pulse animation for design-2');
                    break;
                case 'design-3':
                    // Dark Elegant - Add bounce animation
                    $button.addClass('bounce-animation');
                    console.log('Applied bounce animation for design-3');
                    break;
                case 'design-4':
                    // Gradient Modern - Add shake animation
                    $button.addClass('shake-animation');
                    console.log('Applied shake animation for design-4');
                    break;
                case 'design-5':
                    // Bright Vibrant - Add tada animation
                    $button.addClass('tada-animation');
                    console.log('Applied tada animation for design-5');
                    break;
                case 'design-6':
                    // Arabic Banner - No special animations
                    console.log('Applied Arabic banner design-6');
                    break;
                default:
                    // Design 1 - No special animations
                    console.log('No special animations for design-1');
                    break;
            }

            // Add hover effects based on design
            setupHoverEffects();
        }

        /**
         * Setup hover effects for different designs
         */
        function setupHoverEffects() {
            $button.hover(
                function() {
                    $(this).addClass('hover-effect');
                },
                function() {
                    $(this).removeClass('hover-effect');
                }
            );

            $contacts.hover(
                function() {
                    $(this).addClass('contact-hover');
                },
                function() {
                    $(this).removeClass('contact-hover');
                }
            );
        }

        /**
         * Bind event handlers
         */
        function bindEvents() {
            // Button click
            $button.on('click', function (e) {
                e.preventDefault();
                console.log('WhatsApp button clicked!');
                toggleBox();
            });

            // Close button click
            $close.on('click', function (e) {
                e.preventDefault();
                closeBox();
            });

            // Contact button click
            $contacts.on('click', '[data-whatsapp-contact-button]', function (e) {
                e.preventDefault();
                var phone = $(this).attr('data-whatsapp-phone');
                var message = $(this).attr('data-whatsapp-message');
                openWhatsApp(phone, message);
            });

            // Contact row click (for better UX)
            $contacts.on('click', function (e) {
                if (!$(e.target).closest('[data-whatsapp-contact-button]').length) {
                    var $button = $(this).find('[data-whatsapp-contact-button]');
                    var phone = $button.attr('data-whatsapp-phone');
                    var message = $button.attr('data-whatsapp-message');
                    openWhatsApp(phone, message);
                }
            });

            // Close box when clicking outside
            $(document).on('click', function (e) {
                if (!$(e.target).closest('.whatsapp-chat-widget').length && isBoxOpen) {
                    closeBox();
                }
            });

            // Close box on escape key
            $(document).on('keydown', function (e) {
                if (e.key === 'Escape' && isBoxOpen) {
                    closeBox();
                }
            });

            // Keyboard navigation for accessibility
            setupKeyboardNavigation();
        }

        /**
         * Setup keyboard navigation
         */
        function setupKeyboardNavigation() {
            $contacts.on('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    var $button = $(this).find('[data-whatsapp-contact-button]');
                    var phone = $button.attr('data-whatsapp-phone');
                    var message = $button.attr('data-whatsapp-message');
                    openWhatsApp(phone, message);
                }
            });
        }

        /**
         * Toggle the contact box
         */
        function toggleBox() {
            console.log('toggleBox called, isBoxOpen:', isBoxOpen);
            if (isBoxOpen) {
                closeBox();
            } else {
                openBox();
            }
        }

        /**
         * Open the contact box
         */
        function openBox() {
            console.log('openBox called');
            if (!checkTimeRestrictions()) {
                console.log('Time restrictions prevented box opening');
                return;
            }

            console.log('Opening box...');
            $box.addClass('active');
            isBoxOpen = true;
            
            // Focus management for accessibility
            $close.focus();
            
            // Track analytics if available
            trackEvent('whatsapp_box_opened');
            
            // Add design-specific opening animation
            addOpeningAnimation();
        }

        /**
         * Add opening animation based on design
         */
        function addOpeningAnimation() {
            switch (currentDesign) {
                case 'design-2':
                    $box.addClass('slide-in-right');
                    break;
                case 'design-3':
                    $box.addClass('fade-in-scale');
                    break;
                case 'design-4':
                    $box.addClass('slide-in-bottom');
                    break;
                case 'design-5':
                    $box.addClass('bounce-in');
                    break;
                case 'design-6':
                    $box.addClass('slide-in-right');
                    break;
                default:
                    $box.addClass('fade-in');
                    break;
            }
        }

        /**
         * Close the contact box
         */
        function closeBox() {
            $box.removeClass('active');
            isBoxOpen = false;
            
            // Remove animation classes
            $box.removeClass('slide-in-right fade-in-scale slide-in-bottom bounce-in fade-in');
            
            // Focus back to button for accessibility
            $button.focus();
            
            // Track analytics if available
            trackEvent('whatsapp_box_closed');
        }

        /**
         * Open WhatsApp with contact
         */
        function openWhatsApp(phone, message) {
            if (!phone) {
                console.error('WhatsApp phone number not provided');
                return;
            }

            // Format phone number
            var formattedPhone = formatPhoneNumber(phone);
            
            // Encode message
            var encodedMessage = encodeURIComponent(message || '');
            
            // Create WhatsApp URL
            var whatsappUrl = 'https://wa.me/' + formattedPhone;
            if (encodedMessage) {
                whatsappUrl += '?text=' + encodedMessage;
            }
            
            // Track analytics
            trackEvent('whatsapp_contact_clicked', {
                phone: formattedPhone,
                contact_name: getContactName(phone)
            });
            
            // Open WhatsApp
            window.open(whatsappUrl, '_blank');
            
            // Close box after opening WhatsApp
            closeBox();
        }

        /**
         * Format phone number for WhatsApp
         */
        function formatPhoneNumber(phone) {
            // Remove all non-digit characters except +
            var cleaned = phone.replace(/[^\d+]/g, '');
            
            // Ensure it starts with country code
            if (!cleaned.startsWith('+')) {
                cleaned = '+' + cleaned;
            }
            
            return cleaned;
        }

        /**
         * Get contact name by phone number
         */
        function getContactName(phone) {
            var contactName = '';
            $contacts.each(function() {
                var $contact = $(this);
                var contactPhone = $contact.find('[data-whatsapp-contact-button]').attr('data-whatsapp-phone');
                if (contactPhone === phone) {
                    contactName = $contact.find('.whatsapp-contact__name').text().trim();
                    return false; // break the loop
                }
            });
            return contactName;
        }

        /**
         * Check time restrictions
         */
        function checkTimeRestrictions() {
            if (!config.display || !config.display.time_restrictions) {
                return true;
            }

            var now = new Date();
            var currentTime = now.getHours() * 100 + now.getMinutes();
            var startTime = parseInt(config.display.start_time.replace(':', ''));
            var endTime = parseInt(config.display.end_time.replace(':', ''));

            if (startTime <= endTime) {
                return currentTime >= startTime && currentTime <= endTime;
            } else {
                // Handle overnight hours
                return currentTime >= startTime || currentTime <= endTime;
            }
        }

        /**
         * Setup animations
         */
        function setupAnimations() {
            // Add animation classes based on configuration
            if (config.button && config.button.animation_name) {
                $button.addClass(config.button.animation_name + '-animation');
            }
        }

        /**
         * Track analytics events
         */
        function trackEvent(eventName, additionalData) {
            // Google Analytics 4
            if (typeof gtag !== 'undefined') {
                gtag('event', eventName, {
                    event_category: 'WhatsApp Chat',
                    event_label: additionalData ? JSON.stringify(additionalData) : '',
                    value: 1
                });
            }
            
            // Universal Analytics
            if (typeof ga !== 'undefined') {
                ga('send', 'event', 'WhatsApp Chat', eventName, additionalData ? JSON.stringify(additionalData) : '', 1);
            }
        }

        /**
         * Check device type
         */
        function isMobile() {
            var mobile = window.innerWidth <= 768;
            console.log('isMobile check:', mobile, 'window.innerWidth:', window.innerWidth);
            return mobile;
        }

        /**
         * Check if widget should be shown on current device
         */
        function shouldShowOnDevice() {
            console.log('shouldShowOnDevice called, config:', config);
            if (isMobile() && config.display && !config.display.show_on_mobile) {
                console.log('Mobile device but show_on_mobile is false');
                return false;
            }
            if (!isMobile() && config.display && !config.display.show_on_desktop) {
                console.log('Desktop device but show_on_desktop is false');
                return false;
            }
            console.log('Device check passed');
            return true;
        }

        // Initialize the widget
        console.log('About to initialize widget...');
        if (shouldShowOnDevice()) {
            console.log('Device check passed, initializing...');
            init();
        } else {
            console.log('Device check failed, hiding widget...');
            $widget.hide();
        }
    };
});
