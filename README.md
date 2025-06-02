# Tasty Restaurant Website

This project is a dynamic restaurant website designed to showcase the restaurant's menu, team, and reservation system. It features a responsive design, interactive elements, and a dark/light mode toggle.

## Features

- **Home Section**: Welcomes visitors with a brief introduction and a call-to-action button for reservations.
- **About Section**: Highlights the restaurant's history and milestones.
- **Menu Section**: Displays categorized food items (Lunch, Dinner, Dessert, Drinks) with images and descriptions.
- **Team Section**: Introduces the restaurant's chefs and their social media links.
- **Reservation System**: Allows users to book tables via a form.
- **Dark/Light Mode**: Users can toggle between themes, with preferences saved in local storage.
- **Responsive Design**: Optimized for various screen sizes.

## Technologies Used

- **HTML5**: Structure and content.
- **CSS3/SCSS**: Styling with variables, animations, and responsive design.
- **JavaScript**: Interactivity and dynamic behavior.
- **PHP**: Backend logic for handling reservations.
- **MySQL**: Database for storing reservation data.
- **Font Awesome**: Icons for UI elements.

## Project Structure

```
restaurant/
├── confirmPage.php
├── forum.php
├── index.php
├── menu.php
├── package.json
├── users.sql
├── css/
│   ├── style.css
│   ├── style.css.map
├── img/
│   ├── pexels-ash-376464.jpg
│   ├── pexels-budhaditya-bose-432072.jpg
│   ├── ...
├── js/
│   └── script.js
├── sass/
│   └── main.scss
```

## How to Run

1. Clone the repository:
   ```bash
   git clone <repository-url>
   ```
2. Set up a MySQL database using the `users.sql` file.
3. Update database credentials in `confirmPage.php`.
4. Compile SCSS to CSS using the script defined in `package.json`:
   ```bash
   npm run sass
   ```
5. Start a local server (e.g., XAMPP or WAMP) and place the project in the server's root directory.
6. Open `index.php` in your browser.



## External Libraries

- [Font Awesome](https://fontawesome.com/)
- [Google Fonts](https://fonts.google.com/)

