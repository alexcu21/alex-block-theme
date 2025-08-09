# Alex's Block Theme

A modern, responsive WordPress block theme designed specifically for tech book clubs and learning communities. Built with the latest WordPress block editor (Gutenberg) and featuring a clean, professional design with orange and teal accents.

## 🚀 Features

### Design & Layout
- **Modern Block-Based Design**: Built entirely with WordPress blocks for maximum flexibility
- **Responsive Layout**: Mobile-first design that works perfectly on all devices
- **Professional Color Scheme**: Orange (#e67e22) and teal (#16a085) accent colors
- **Clean Typography**: System fonts with excellent readability
- **Smooth Animations**: Subtle hover effects and scroll animations

### Content Sections
- **Hero Section**: Eye-catching introduction with call-to-action
- **Features Section**: Highlight key benefits with checkmark lists
- **Journey Steps**: 4-step process visualization
- **Membership Tiers**: Three pricing options (Starter, Pro, Enterprise)
- **Testimonials**: Social proof section
- **Call-to-Action**: Final conversion section

### Technical Features
- **Full Site Editing (FSE)**: Complete block-based theme customization
- **Custom Block Styles**: Outline buttons, hero sections, CTA sections
- **Custom Color Palette**: 10 predefined colors for easy customization
- **Custom Gradients**: Beautiful gradient presets
- **Custom Font Sizes**: 6 predefined font sizes
- **WooCommerce Ready**: Full e-commerce support
- **SEO Optimized**: Clean, semantic HTML structure
- **Performance Optimized**: Minimal CSS and JavaScript

## 📋 Requirements

- WordPress 6.0 or higher
- PHP 7.4 or higher
- Modern web browser with CSS Grid and Flexbox support

## 🛠️ Installation

### Method 1: Upload via WordPress Admin
1. Download the theme files as a ZIP archive
2. Go to **Appearance > Themes** in your WordPress admin
3. Click **Add New** then **Upload Theme**
4. Choose the ZIP file and click **Install Now**
5. Activate the theme

### Method 2: Manual Installation
1. Extract the theme files to your computer
2. Upload the `alexs-block-theme` folder to `/wp-content/themes/` via FTP
3. Go to **Appearance > Themes** in your WordPress admin
4. Activate the "Alex's Block Theme" theme

### Method 3: Development Installation
1. Clone or download the theme files
2. Place in your WordPress themes directory
3. Activate via WordPress admin
4. For development, use a local WordPress installation

## 🎨 Customization

### Using the Site Editor (Recommended)
1. Go to **Appearance > Editor** in your WordPress admin
2. Customize the layout using the block editor
3. Modify colors, typography, and spacing using the theme settings
4. Save your changes

### Using the Customizer
1. Go to **Appearance > Customize**
2. Navigate to **Alex's Block Theme Options**
3. Customize:
   - Hero subtitle
   - CTA text
   - Colors and typography
   - Layout options

### Custom CSS
Add custom CSS via:
- **Appearance > Customize > Additional CSS**
- **Appearance > Editor > Styles > Additional CSS**

### Custom JavaScript
Add custom JavaScript via:
- **Appearance > Customize > Additional JavaScript**
- Or modify `js/theme.js` for theme-wide changes

## 📁 File Structure

```
alexs-block-theme/
├── style.css                 # Main stylesheet with theme info
├── theme.json               # Block theme configuration
├── functions.php            # Theme functions and setup
├── index.php               # Main template file
├── templates/
│   └── page.html           # Main page template
├── parts/
│   ├── header.html         # Header template part
│   └── footer.html         # Footer template part
├── js/
│   ├── theme.js            # Main theme JavaScript
│   └── customizer.js       # Customizer functionality
├── patterns/               # Block patterns (if any)
├── styles/                 # Additional style variations
└── README.md              # This file
```

## 🎯 Block Patterns

The theme includes several custom block patterns:

### Hero Section
- Two-column layout with text and image
- Call-to-action button
- Social proof elements

### Features Section
- Alternating image and text layout
- Checkmark lists
- Responsive grid

### Journey Steps
- 4-step process visualization
- Numbered circles
- Clean card design

### Membership Cards
- Three-tier pricing structure
- Feature lists
- Call-to-action buttons

### Testimonial Section
- Star ratings
- Quote styling
- Author attribution

## 🎨 Custom Block Styles

### Button Styles
- **Default**: Orange background with white text
- **Outline**: Transparent background with colored border

### Group Styles
- **Hero Section**: Gradient background with padding
- **CTA Section**: Teal gradient background

## 🔧 Development

### Local Development Setup
1. Set up a local WordPress development environment
2. Install the theme in your local WordPress installation
3. Use browser developer tools for debugging
4. Test across different devices and browsers

### Making Changes
1. **CSS Changes**: Modify `style.css` or add custom CSS
2. **JavaScript Changes**: Edit `js/theme.js` for frontend functionality
3. **PHP Changes**: Modify `functions.php` for backend functionality
4. **Template Changes**: Edit files in `templates/` and `parts/` directories

### Testing
- Test on multiple browsers (Chrome, Firefox, Safari, Edge)
- Test on mobile devices
- Validate HTML and CSS
- Check accessibility compliance
- Test with different content lengths

## 📱 Responsive Design

The theme is fully responsive with breakpoints at:
- **Mobile**: 320px - 768px
- **Tablet**: 768px - 1024px
- **Desktop**: 1024px+

### Mobile Optimizations
- Touch-friendly buttons and navigation
- Optimized typography for small screens
- Simplified layouts for mobile devices
- Fast loading times

## 🚀 Performance

### Optimization Features
- Minimal CSS and JavaScript
- Optimized images with proper sizing
- Lazy loading for images
- Efficient block rendering
- Clean, semantic HTML

### Performance Tips
1. Optimize images before uploading
2. Use appropriate image sizes
3. Minimize custom CSS and JavaScript
4. Enable caching plugins
5. Use a CDN for static assets

## 🔒 Security

### Security Features
- Sanitized user inputs
- Escaped output
- Nonce verification for forms
- Secure file permissions
- WordPress coding standards compliance

### Security Best Practices
1. Keep WordPress and plugins updated
2. Use strong passwords
3. Enable two-factor authentication
4. Regular security scans
5. Backup your site regularly

## 🌐 Browser Support

- **Chrome**: 90+
- **Firefox**: 88+
- **Safari**: 14+
- **Edge**: 90+
- **Mobile Safari**: 14+
- **Chrome Mobile**: 90+

## 📞 Support

### Getting Help
1. Check this README for common issues
2. Review WordPress documentation
3. Search WordPress.org forums
4. Contact theme developer

### Common Issues

#### Theme Not Activating
- Ensure WordPress version is 6.0+
- Check PHP version (7.4+)
- Verify file permissions

#### Styles Not Loading
- Clear browser cache
- Check for plugin conflicts
- Verify theme activation

#### Blocks Not Working
- Update to latest WordPress version
- Check for plugin conflicts
- Verify block editor is enabled

## 🤝 Contributing

### How to Contribute
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

### Coding Standards
- Follow WordPress coding standards
- Use proper PHP documentation
- Maintain consistent formatting
- Test all changes

## 📄 License

This theme is licensed under the GPL v2 or later.

## 🙏 Credits

- The design for this theme is based on the "Tech Book Club" template from [Frontend Mentor](https://www.frontendmentor.io/).
- All design rights belong to their respective owners at Frontend Mentor.

## 🏷️ Version History

### Version 1.0.0
- Initial release
- Full block theme support
- Responsive design
- Custom block styles
- WooCommerce integration