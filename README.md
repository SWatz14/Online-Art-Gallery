# Online Art Gallery

## Project Overview
The **Online Art Gallery** is a web application that allows users to explore, showcase, and manage art collections online. Built using **PHP** and **CSS**, the application provides an interactive platform for artists to display their artwork and for art enthusiasts to browse, purchase, or inquire about pieces of art.

---

## Features
1. **Homepage**: Displays featured artworks, upcoming events, and announcements.
2. **Gallery Page**: Showcases a collection of art pieces with their details (title, artist, price, and description).
3. **Artist Profiles**: Each artist has a dedicated profile showcasing their bio and portfolio.
4. **Search Functionality**: Users can search for art pieces by title, category, or artist.
5. **Art Submission**: Registered users can upload new artwork, including images and descriptions.
6. **Contact Form**: A form to send inquiries or feedback.
7. **Admin Dashboard**: Manage users, artwork, and website content.
8. **Responsive Design**: Optimized for both desktop and mobile devices.

---

## Technologies Used
### Frontend
- **HTML**: Structure of web pages.
- **CSS**: Styling and layout.
  - Flexbox and Grid for responsive design.
  - Custom animations for smooth transitions.
- **JavaScript** (optional): For additional interactivity (e.g., modals and dynamic loading).

### Backend
- **PHP**: Server-side scripting for handling requests and processing data.
- **MySQL**: Database for storing user data, artwork details, and transactions.

### Additional Tools
- **Bootstrap** (optional): To enhance CSS styling.
- **Font Awesome**: Icons for better UI design.

---

## Installation
### Prerequisites
- Web server (e.g., Apache, Nginx) with PHP support.
- MySQL or MariaDB database.
- A modern web browser.

### Steps
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/online-art-gallery.git
   ```

2. **Setup Database**:
   - Import the `art_gallery.sql` file into your MySQL database.
   - Update database credentials in `config.php`:
     ```php
     $db_host = 'localhost';
     $db_user = 'root';
     $db_pass = 'password';
     $db_name = 'art_gallery';
     ```

3. **Deploy Application**:
   - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
   - Start your web server and navigate to `http://localhost/online-art-gallery`.

4. **Test the Application**:
   - Ensure all features work as expected.

---

## Folder Structure
```
/online-art-gallery
|-- css/                # Stylesheets
|-- js/                 # JavaScript files (optional)
|-- images/             # Uploaded images
|-- includes/           # Reusable PHP components
|-- templates/          # HTML templates
|-- index.php           # Homepage
|-- gallery.php         # Gallery page
|-- artist.php          # Artist profiles
|-- upload.php          # Art submission page
|-- admin/              # Admin dashboard
|-- config.php          # Database configuration
|-- art_gallery.sql     # Database schema
```

---

## Usage
1. **User Registration and Login**:
   - Create an account to upload artwork or inquire about pieces.

2. **Exploring Artworks**:
   - Browse through the gallery and view detailed descriptions.

3. **Admin Controls**:
   - Log in as an admin to manage users, artworks, and site content.

---

## Contributions
Contributions are welcome! If you would like to contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a pull request.

---

## License
This project is licensed under the MIT License. See `LICENSE` for more details.

---

## Acknowledgments
- Inspiration from various online art gallery platforms.
- Open-source tools and libraries used in development.

---

## Contact
For questions or suggestions, please contact:
- **Email**: yourname@example.com
- **GitHub**: [yourusername](https://github.com/yourusername)

