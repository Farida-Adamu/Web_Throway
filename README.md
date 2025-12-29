# Resilience Stories - Abidjan Blog

A clean, modern blog template focused on environmental and energy resilience stories from Abidjan, Côte d'Ivoire.

## 📋 What's Included

This project contains a fully functional HTML/CSS blog with:

- **index.html** - Homepage with featured article and blog grid
- **about.html** - About page with project information
- **post.html** - Sample blog post page
- **styles.css** - Complete styling based on your moodboard design

## 🎨 Design Features

- Clean, editorial design inspired by your moodboard
- Warm color palette (terracotta and beige tones)
- Responsive layout (works on mobile, tablet, and desktop)
- Modern typography using Google Fonts (Lora and Inter)
- Grid-based layouts for blog posts
- Smooth hover effects and transitions

## 🚀 How to View Your Blog

### Option 1: Open Directly in Browser
1. Navigate to the project folder on your computer
2. Double-click `index.html`
3. Your default browser will open and display the blog

### Option 2: Use a Local Server (Recommended)
If you have Python installed:

```bash
# Navigate to your project folder in terminal/command prompt
cd /path/to/your/project

# Python 3
python -m http.server 8000

# Then open in browser: http://localhost:8000
```

Or if you have Node.js installed:
```bash
# Install live-server globally (one-time)
npm install -g live-server

# Run in your project folder
live-server
```

## 📝 How to Customize

### Changing Colors
Open `styles.css` and modify the color variables at the top:

```css
:root {
    --primary-color: #C77A5C;      /* Change this */
    --secondary-color: #E8D5C4;    /* Change this */
    --text-dark: #2C2C2C;         /* Change this */
}
```

### Adding Your Content
1. **Homepage**: Edit `index.html`
   - Change the blog post titles, descriptions, and categories
   - Update the featured article

2. **About Page**: Edit `about.html`
   - Add your story and mission
   - Update the contact information

3. **Blog Posts**: Copy `post.html` and create new files like `post2.html`, `post3.html`
   - Replace the content with your actual stories
   - Update the title, date, and body text

### Adding Real Images
Replace the placeholder images:

1. Create an `images` folder in your project
2. Add your images there
3. In the HTML, replace this:
   ```html
   <div class="placeholder-image">Featured Image</div>
   ```
   With this:
   ```html
   <img src="images/your-photo.jpg" alt="Description">
   ```

## 🔄 Converting to WordPress

Since you mentioned wanting to use WordPress as a backend, here's how to proceed:

### Option 1: Use Your HTML/CSS as Reference (Easiest)
1. Install WordPress (locally or on a host)
2. Choose a minimal WordPress theme
3. Use a page builder plugin like Elementor or Gutenberg
4. Recreate your design using the theme customizer
5. Reference your HTML/CSS for colors, fonts, and layouts

### Option 2: Convert to WordPress Theme (More Advanced)
1. Learn WordPress theme structure (template hierarchy)
2. Convert your HTML files to PHP templates:
   - `index.html` → `index.php` and `front-page.php`
   - `post.html` → `single.php`
   - `about.html` → `page.php`
3. Add WordPress template tags and functions
4. Create a `style.css` with WordPress theme headers
5. Add `functions.php` for theme functionality

### Option 3: Use a WordPress Starter Theme (Recommended for Beginners)
1. Install WordPress
2. Use a starter theme like:
   - **Astra** (free, highly customizable)
   - **GeneratePress** (lightweight and flexible)
   - **Kadence** (modern and feature-rich)
3. Install a page builder (Elementor Free works great)
4. Use the Customizer to match your design:
   - Upload your fonts
   - Set your colors (use the color codes from styles.css)
   - Configure layouts
5. Build pages visually using the page builder

## 🛠️ Tools You'll Need for WordPress

1. **Local WordPress Installation** (for testing):
   - [Local by Flywheel](https://localwp.com/) - Free, easy to use
   - [XAMPP](https://www.apachefriends.org/) - Classic option

2. **Code Editor** (if making changes):
   - [VS Code](https://code.visualstudio.com/) - Free, powerful
   - [Sublime Text](https://www.sublimetext.com/) - Lightweight

3. **FTP Client** (to upload to web host):
   - [FileZilla](https://filezilla-project.org/) - Free, reliable

## 📚 Next Steps

1. **Review the current design**: Open index.html in your browser
2. **Customize the content**: Replace placeholder text with your actual content
3. **Add images**: Create an images folder and add your photos
4. **Set up WordPress**:
   - Install WordPress locally using Local by Flywheel
   - Choose and install a starter theme (Astra recommended)
   - Install Elementor (free version)
   - Recreate your design using the visual editor

## 🎓 Learning Resources

- [WordPress Beginner Guide](https://wordpress.org/support/article/new-to-wordpress-where-to-start/)
- [Elementor Documentation](https://elementor.com/help/)
- [HTML & CSS Basics](https://www.w3schools.com/)

## 💡 Tips for Beginners

1. **Start Simple**: Don't try to change everything at once
2. **Make Backups**: Always backup before making major changes
3. **Use Browser DevTools**: Right-click → Inspect to see how things work
4. **Test Responsive Design**: View your site on different screen sizes
5. **Ask for Help**: WordPress has a huge community - don't hesitate to ask questions

## 📞 Support

If you get stuck:
- WordPress Forums: https://wordpress.org/support/forums/
- Elementor Community: https://www.facebook.com/groups/elementorcommunity/
- Stack Overflow: https://stackoverflow.com/ (for code questions)

---

**Good luck with your blog!** You're telling important stories about resilience in Abidjan. The technical part is just a tool to share those stories with the world. 🌍✨
