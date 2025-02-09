<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="L'Ochy Academy propose des cours et des quiz pour étudiants. Apprenez en vous amusant !">
  <meta name="keywords" content="cours, quiz, étudiants, éducation, apprentissage, académie">
  <meta name="author" content="L'Ochy Academy">
  <title>L'Ochy Academy - Apprenez en Vous Amusant</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* CSS Variables for Reusability */
    :root {
      --primary-color: #4a90e2;
      --secondary-color: #ff6f61;
      --accent-color: #ffd166;
      --text-color: #2d2d2d;
      --light-text: #ffffff;
      --background-light: #f9f9f9;
      --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      --transition: all 0.3s ease;
    }

    /* General Styles */
    body {
      background-color: var(--background-light);
      color: var(--text-color);
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.6;
    }

    h1, h2, h3, h4, h5, h6 {
      margin: 0;
      font-weight: 700;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Navbar */
    header {
      background-color: var(--light-text);
      box-shadow: var(--shadow);
      padding: 20px;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .navbar h1 {
      font-size: 2rem;
      color: var(--primary-color);
    }

    .navbar h1 span {
      color: var(--secondary-color);
    }

    nav {
      display: flex;
      gap: 25px;
    }

    nav a {
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--text-color);
      transition: var(--transition);
    }

    nav a:hover,
    nav a.active {
      color: var(--secondary-color);
      transform: translateY(-2px);
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, var(--primary-color), #6a11cb);
      color: var(--light-text);
      text-align: center;
      padding: 150px 20px;
      position: relative;
      overflow: hidden;
    }

    .hero h2 {
      font-size: 3rem;
      margin-bottom: 15px;
      animation: fadeIn 1.5s ease-in-out;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      animation: fadeIn 2s ease-in-out;
    }

    .hero .cta {
      background-color: var(--secondary-color);
      color: var(--light-text);
      font-size: 1.2rem;
      padding: 15px 30px;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: var(--transition);
      animation: fadeIn 2.5s ease-in-out;
    }

    .hero .cta:hover {
      background-color: var(--accent-color);
      transform: scale(1.05);
    }

    /* Features Section */
    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin: 4rem auto;
      padding: 0 20px;
      max-width: 1200px;
    }

    .feature {
      background-color: var(--light-text);
      padding: 2rem;
      border-radius: 15px;
      box-shadow: var(--shadow);
      transition: var(--transition);
      text-align: center;
    }

    .feature:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .feature i {
      font-size: 3rem;
      color: var(--primary-color);
      margin-bottom: 15px;
    }

    .feature h3 {
      font-size: 1.5rem;
      color: var(--text-color);
      margin-bottom: 1rem;
    }

    .feature p {
      font-size: 1rem;
      color: #666;
    }

    /* About Section */
    .about {
      background-color: var(--light-text);
      padding: 4rem 20px;
      text-align: center;
    }

    .about h2 {
      font-size: 2.5rem;
      color: var(--primary-color);
    }

    .about p {
      font-size: 1.1rem;
      color: var(--text-color);
      max-width: 800px;
      margin: 0 auto;
    }

    /* Testimonials Section */
    .testimonials {
      background-color: var(--primary-color);
      padding: 4rem 20px;
      text-align: center;
    }

    .testimonials h2 {
      font-size: 2.5rem;
      margin-bottom: 2rem;
      color: var(--light-text);
    }

    .testimonial-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .testimonial-card {
      background-color: var(--light-text);
      padding: 1.5rem;
      border-radius: 15px;
      box-shadow: var(--shadow);
      text-align: center;
    }

    .testimonial-card p {
      font-size: 1rem;
      color: var(--text-color);
    }

    .testimonial-card h4 {
      font-size: 1.2rem;
      color: var(--primary-color);
      margin-top: 1rem;
    }

    /* Comments Section */
    .comments {
      background-color: var(--light-text);
      padding: 4rem 20px;
      text-align: center;
    }

    .comments h2 {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin-bottom: 2rem;
    }

    .comment-form {
      max-width: 600px;
      margin: 0 auto 3rem auto;
      text-align: left;
    }

    .comment-form h3 {
      font-size: 1.8rem;
      color: var(--text-color);
      margin-bottom: 1rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      font-size: 1.1rem;
      color: var(--text-color);
      margin-bottom: 0.5rem;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: var(--transition);
    }

    .form-group textarea {
      resize: vertical;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      border-color: var(--primary-color);
      outline: none;
    }

    .comment-list {
      max-width: 800px;
      margin: 0 auto;
      text-align: left;
    }

    .comment-list h3 {
      font-size: 1.8rem;
      color: var(--text-color);
      margin-bottom: 1.5rem;
    }

    .comment {
      background-color: var(--background-light);
      padding: 1.5rem;
      border-radius: 10px;
      margin-bottom: 1rem;
      box-shadow: var(--shadow);
    }

    .comment h4 {
      font-size: 1.2rem;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
    }

    .comment p {
      font-size: 1rem;
      color: var(--text-color);
      line-height: 1.6;
    }

    .comment small {
      font-size: 0.9rem;
      color: #666;
    }

    /* Footer Styles */
    footer {
      background: linear-gradient(135deg, var(--primary-color), #6a11cb);
      color: var(--light-text);
      padding: 30px 20px;
      border-top: 3px solid var(--accent-color);
      margin-top: 20px;
    }

    .footer-content {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-section {
      text-align: left;
    }

    .footer-section h4 {
      font-size: 1.5rem;
      margin-bottom: 15px;
      color: var(--accent-color);
    }

    .footer-section p {
      font-size: 1rem;
      line-height: 1.6;
      color: var(--light-text);
    }

    .footer-section.links ul {
      list-style: none;
      padding: 0;
    }

    .footer-section.links ul li {
      margin-bottom: 10px;
    }

    .footer-section.links ul li a {
      color: var(--light-text);
      text-decoration: none;
      transition: var(--transition);
    }

    .footer-section.links ul li a:hover {
      color: var(--accent-color);
      text-decoration: underline;
    }

    .social-icons {
      display: flex;
      gap: 15px;
    }

    .social-icons .social-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background-color: var(--light-text);
      color: var(--primary-color);
      border-radius: 50%;
      font-size: 1.2rem;
      transition: var(--transition);
    }

    .social-icons .social-icon:hover {
      background-color: var(--accent-color);
      color: var(--light-text);
      transform: translateY(-5px);
    }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-bottom p {
      margin: 0;
      font-size: 0.9rem;
      color: var(--light-text);
    }

    .footer-bottom a {
      color: var(--accent-color);
      text-decoration: none;
    }

    .footer-bottom a:hover {
      text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        width: 100%;
        flex-direction: column;
        gap: 15px;
        margin-top: 10px;
      }

      .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .footer-section {
        margin-bottom: 20px;
      }

      .social-icons {
        justify-content: center;
      }
    }

    /* Animations */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="navbar">
      <h1><span>L'</span>Ochy Academy</h1>
      <nav>
        <a href="index.php" class="active">Accueil</a>
        <a href="cours.php">Cours</a>
        <a href="quiz.php">Quiz</a>
        <a href="cour.php">PDF Courses/Exercices</a>
        <a href="blog.php">Blog</a>
        <a href="formation.php">Formation</a>
        <a href="community.php">À propos</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <h2>Apprenez en Vous Amusant !</h2>
      <p>Découvrez nos cours interactifs, nos quiz éducatifs, et bien plus encore.</p>
      <button class="cta">Commencez Maintenant</button>
    </section>

    <section class="features">
      <div class="feature">
        <i class="fas fa-graduation-cap"></i>
        <h3>Cours Interactifs</h3>
        <p>Apprenez avec des cours interactifs et engageants adaptés à votre programme universitaire.</p>
      </div>
      <div class="feature">
        <i class="fas fa-clipboard-check"></i>
        <h3>Quiz Éducatifs</h3>
        <p>Testez vos connaissances et améliorez vos compétences avec nos quiz éducatifs.</p>
      </div>
      <div class="feature">
        <i class="fas fa-laptop"></i>
        <h3>Accès Flexible</h3>
        <p>Étudiez où et quand vous voulez grâce à notre plateforme en ligne.</p>
      </div>
    </section>

    <section class="about">
      <h2>À Propos de L'Ochy Academy</h2>
      <p>
        L'Ochy Academy est une plateforme éducative innovante conçue pour aider les étudiants à apprendre de manière ludique et efficace.
        Nous proposons des cours interactifs, des quiz éducatifs et des ressources pédagogiques de haute qualité.
      </p>
    </section>

    <section class="testimonials">
      <h2>Témoignages</h2>
      <div class="testimonial-cards">
        <div class="testimonial-card">
          <p>"Les cours sont très bien structurés et faciles à comprendre. Je recommande !"</p>
          <h4>— Jean Dupont</h4>
        </div>
        <div class="testimonial-card">
          <p>"Les quiz m'ont aidé à améliorer mes compétences rapidement. Merci L'Ochy Academy !"</p>
          <h4>— Marie Curie</h4>
        </div>
        <div class="testimonial-card">
          <p>"Une plateforme intuitive et très utile pour mes études."</p>
          <h4>— Pierre Durand</h4>
        </div>
      </div>
    </section>

    <!-- Comments Section -->
    <section class="comments">
      <h2>Commentaires</h2>
      <div class="comment-form">
        <h3>Laissez un commentaire</h3>
        <form id="commentForm">
          <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="comment">Commentaire:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
          </div>
          <button type="submit" class="cta">Envoyer</button>
        </form>
      </div>
      <div class="comment-list">
        <h3>Commentaires récents</h3>
        <div id="commentsContainer">
          <!-- Comments will be dynamically added here -->
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h4>Navigation</h4>
        <ul>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="formation.php">Formation</a></li>
          <li><a href="community.php">À propos</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Contact</h4>
        <p>Email : <a href="mailto:info@lochyacademy.com">info@lochyacademy.com</a></p>
        <p>Téléphone : +33 1 23 45 67 89</p>
      </div>
      <div class="footer-section">
        <h4>Réseaux Sociaux</h4>
        <div class="social-icons">
          <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 L'Ochy Academy. Tous droits réservés.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
    const commentsContainer = document.getElementById('commentsContainer');

    // Function to fetch and display comments
    function fetchComments() {
      axios.get('comments.php')
        .then(response => {
          commentsContainer.innerHTML = ''; // Clear existing comments
          response.data.forEach(comment => {
            const commentElement = document.createElement('div');
            commentElement.classList.add('comment');
            commentElement.innerHTML = `
              <h4>${comment.name}</h4>
              <p>${comment.comment}</p>
              <small>${new Date(comment.created_at).toLocaleString()}</small>
            `;
            commentsContainer.appendChild(commentElement);
          });
        })
        .catch(error => {
          console.error('Error fetching comments:', error);
        });
    }

    // Function to save a comment
    document.getElementById('commentForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const name = document.getElementById('name').value;
      const comment = document.getElementById('comment').value;

      axios.post('comments.php', { name, comment })
        .then(response => {
          if (response.data.status === 'success') {
            fetchComments(); // Refresh comments after saving
            document.getElementById('commentForm').reset(); // Clear the form
          } else {
            alert('Error saving comment: ' + response.data.message);
          }
        })
        .catch(error => {
          console.error('Error saving comment:', error);
        });
    });

    // Fetch comments when the page loads
    fetchComments();
  </script>
</body>
</html>