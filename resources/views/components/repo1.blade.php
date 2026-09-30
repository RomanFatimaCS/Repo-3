<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FYP Dashboard - 2022-GWG-1076</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <h2>FYP Management System</h2>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#students">Students</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Header -->
  <header id="home" class="header">
    <h1>Welcome to FYP Dashboard</h1>
    <p>Student: Your Name | Reg No: 2022-GWG-1076</p>
    <button onclick="showMessage()">Click Me</button>
    <p id="message"></p>
  </header>

  <!-- Students Section -->
  <section id="students" class="section">
    <h2>Registered Students</h2>
    <table>
      <thead>
        <tr>
          <th>Reg No</th>
          <th>Name</th>
          <th>Department</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody id="studentTable">
        <tr>
          <td>2022-GWG-1076</td>
          <td>Your Name</td>
          <td>Computer Science</td>
          <td>Active</td>
        </tr>
        <tr>
          <td>2022-GWG-1077</td>
          <td>Ali Ahmed</td>
          <td>Computer Science</td>
          <td>Active</td>
        </tr>
        <tr>
          <td>2022-GWG-1078</td>
          <td>Sara Khan</td>
          <td>Software Engineering</td>
          <td>Pending</td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="section">
    <h2>FYP Projects</h2>
    <div class="project-container">
      <div class="card">
        <h3>Project 1</h3>
        <p>Online Learning System</p>
        <span class="tag">Web</span>
      </div>
      <div class="card">
        <h3>Project 2</h3>
        <p>Hospital Management</p>
        <span class="tag">Java</span>
      </div>
      <div class="card">
        <h3>Project 3</h3>
        <p>AI Chatbot</p>
        <span class="tag">Python</span>
      </div>
      <div class="card">
        <h3>Project 4</h3>
        <p>Inventory System</p>
        <span class="tag">C#</span>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 FYP Dashboard | Made by 2022-GWG-1076</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>