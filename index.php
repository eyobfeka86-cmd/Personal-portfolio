<?php
$pageTitle = "Eyob Fekadu | Personal Portfolio";
$success = false;
$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["contact_submit"])) {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");
    if ($name === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === "") {
        $error = "Please complete all fields with a valid email address.";
    } else {
        // Demo-safe handling: no email is sent until you configure a mail service.
        $success = true;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The personal portfolio of Eyob Fekadu.">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="90">
<nav id="mainNav" class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#home">EYOB<span>.</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
        <li class="nav-item"><a class="nav-link contact-nav" href="#contact">Contact me <i class="bi bi-arrow-up-right"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

<header id="home" class="hero-section">
  <div class="container">
    <div class="row align-items-center min-vh-100 gy-5">
      <div class="col-lg-7">
        <p class="eyebrow"><span></span> PERSONAL PORTFOLIO</p>
        <h1>Hi, I'm <span>Eyob Fekadu.</span><br>Building ideas into<br><em>digital experiences.</em></h1>
        <p class="hero-copy">I’m an aspiring web developer interested in creating useful, clean, and responsive websites. Welcome to my portfolio.</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#projects" class="btn btn-accent">Explore my work <i class="bi bi-arrow-up-right ms-2"></i></a>
          <a href="#contact" class="btn btn-outline-light">Get in touch</a>
        </div>
        <div class="hero-meta mt-5"><span>BASED IN</span><strong>Gondar, Ethiopia</strong><i class="bi bi-dot"></i><span>OPEN TO LEARNING & OPPORTUNITIES</span></div>
      </div>
      <div class="col-lg-5">
        <div class="hero-art">
          <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
          <div class="initial-card"><span>EF</span><small>CREATIVE MINDSET<br>DEVELOPING EVERY DAY</small></div>
          <div class="floating-tag tag-top"><i class="bi bi-code-slash"></i> WEB DEVELOPMENT</div>
          <div class="floating-tag tag-bottom"><i class="bi bi-lightning-charge"></i> KEEP CREATING</div>
        </div>
      </div>
    </div>
  </div>
  <a class="scroll-cue" href="#about"><span></span> SCROLL TO EXPLORE</a>
</header>

<main>
<section id="about" class="section-pad">
  <div class="container">
    <div class="section-kicker">01 / ABOUT</div>
    <div class="row gy-4 align-items-start">
      <div class="col-lg-5"><h2 class="section-title">A little about <span>me.</span></h2></div>
      <div class="col-lg-7"><p class="about-lead">I’m Eyob Fekadu, a motivated learner with an interest in technology and web development.</p>
        <p class="muted-copy">I enjoy exploring how websites work, learning new tools, and turning ideas into simple digital solutions. I’m currently growing my skills in front-end development and PHP, and I’m excited to keep improving through practice and projects.</p>
        <div class="row mt-4 g-3">
          <div class="col-sm-6"><div class="info-tile"><small>NAME</small><strong>Eyob Fekadu</strong></div></div>
          <div class="col-sm-6"><div class="info-tile"><small>LOCATION</small><strong>Gondar, Ethiopia</strong></div></div>
          <div class="col-sm-6"><div class="info-tile"><small>FOCUS</small><strong>Web Development</strong></div></div>
          <div class="col-sm-6"><div class="info-tile"><small>APPROACH</small><strong>Learn · Build · Improve</strong></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="skills" class="section-pad section-dark">
  <div class="container">
    <div class="section-kicker">02 / SKILLS</div>
    <div class="row align-items-end mb-5 gy-3"><div class="col-lg-7"><h2 class="section-title">Tools I’m learning<br>and <span>working with.</span></h2></div><div class="col-lg-5"><p class="muted-copy mb-0">My skills are a work in progress. I’m focused on building a strong foundation and improving with every project.</p></div></div>
    <div class="row g-3">
      <div class="col-6 col-lg-3"><div class="skill-card"><i class="bi bi-filetype-html"></i><h3>HTML5</h3><p>Page structure</p></div></div>
      <div class="col-6 col-lg-3"><div class="skill-card"><i class="bi bi-filetype-css"></i><h3>CSS3</h3><p>Styling & layout</p></div></div>
      <div class="col-6 col-lg-3"><div class="skill-card"><i class="bi bi-bootstrap"></i><h3>Bootstrap</h3><p>Responsive design</p></div></div>
      <div class="col-6 col-lg-3"><div class="skill-card"><i class="bi bi-filetype-php"></i><h3>PHP</h3><p>Server-side basics</p></div></div>
    </div>
  </div>
</section>

<section id="projects" class="section-pad">
  <div class="container">
    <div class="section-kicker">03 / SELECTED WORK</div>
    <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-5"><h2 class="section-title mb-0">Projects & <span>practice.</span></h2><span class="muted-copy">A starting point for my work</span></div>
    <div class="row g-4">
      <div class="col-md-6"><article class="project-card"><div class="project-visual visual-one"><span>01</span><i class="bi bi-window"></i></div><div class="project-info"><div><small>WEB DESIGN · BOOTSTRAP</small><h3>Responsive Website</h3><p>A responsive website concept designed to work across desktop and mobile screens.</p></div><span class="project-arrow"><i class="bi bi-arrow-up-right"></i></span></div></article></div>
      <div class="col-md-6"><article class="project-card"><div class="project-visual visual-two"><span>02</span><i class="bi bi-person-workspace"></i></div><div class="project-info"><div><small>PHP · HTML · CSS</small><h3>Personal Portfolio</h3><p>This portfolio project, built to introduce my interests, skills, and learning journey.</p></div><span class="project-arrow"><i class="bi bi-arrow-up-right"></i></span></div></article></div>
    </div>
    <p class="small muted-copy mt-3">Replace these sample project cards with links and screenshots of your own completed work.</p>
  </div>
</section>

<section id="education" class="section-pad section-tint">
  <div class="container">
    <div class="section-kicker">04 / EDUCATION</div>
    <div class="row gy-4"><div class="col-lg-5"><h2 class="section-title">Always in<br><span>learning mode.</span></h2></div><div class="col-lg-7"><div class="timeline-item"><span class="timeline-dot"></span><small>CONTINUOUS LEARNING</small><h3>Web Development</h3><p class="muted-copy">Developing practical knowledge of HTML, CSS, Bootstrap, and PHP through study and hands-on practice.</p></div><div class="timeline-item"><span class="timeline-dot"></span><small>NEXT STEP</small><h3>Build more real projects</h3><p class="muted-copy">My goal is to keep practicing, strengthen my fundamentals, and create projects that solve real problems.</p></div></div></div>
  </div>
</section>

<section id="contact" class="section-pad section-dark">
  <div class="container">
    <div class="section-kicker">05 / CONTACT</div>
    <div class="row gy-5">
      <div class="col-lg-5"><h2 class="section-title">Have an idea?<br><span>Let’s connect.</span></h2><p class="muted-copy mt-3">Use the form to send a message. Add your real email and social links before publishing.</p><div class="contact-detail mt-4"><i class="bi bi-geo-alt"></i><span>Gondar, Ethiopia</span></div><div class="contact-detail"><i class="bi bi-envelope"></i><span>your-email@example.com <small>(replace this)</small></span></div></div>
      <div class="col-lg-6 offset-lg-1">
        <?php if ($success): ?><div class="alert alert-success">Thanks! Your form was validated. Connect a mail service in PHP to receive messages.</div><?php endif; ?>
        <?php if ($error !== ""): ?><div class="alert alert-warning"><?= htmlspecialchars($error) ?></div><?php endif; ?>
        <form method="post" action="#contact" class="contact-form">
          <div class="mb-3"><label for="name" class="form-label">Your name</label><input class="form-control" id="name" name="name" required placeholder="Enter your name"></div>
          <div class="mb-3"><label for="email" class="form-label">Email address</label><input class="form-control" id="email" name="email" type="email" required placeholder="name@example.com"></div>
          <div class="mb-4"><label for="message" class="form-label">Your message</label><textarea class="form-control" id="message" name="message" rows="5" required placeholder="Tell me about your idea..."></textarea></div>
          <button class="btn btn-accent" type="submit" name="contact_submit">Send message <i class="bi bi-arrow-up-right ms-2"></i></button>
        </form>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="footer"><div class="container d-flex flex-wrap justify-content-between gap-2"><span>© <?= date("Y") ?> Eyob Fekadu. All rights reserved.</span><a href="#home">Back to top ↑</a></div></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
