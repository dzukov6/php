<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap 5 Blueprint Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
    .blue-block {
      background-color: #66b3ff;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
    }
    .team-block {
      background-color: #007bff;
      height: 250px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.25rem;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Team</a></li>
      </ul>
      <button class="btn btn-outline-primary">Button</button>
    </div>
  </div>
</nav>

<div class="container text-center mt-5">
  <h1>Beautiful Bootstrap 5 Blueprints</h1>
  <p>Reusable Bootstrap 5 Snippets Library. Simply copy and paste the necessary parts of the code.</p>
  <div class="mb-4">
    <a class="btn btn-primary me-2" href="#">Download Now</a>
    <a class="btn btn-outline-secondary" href="#">Learn more now</a>
  </div>
  <div class="blue-block mx-auto" style="width: 100%; height: 450px;">1140 x 450</div>
</div>

<div class="container mt-5">
  <div class="row text-center">
    <div class="col-md-6">
      <h5>Feature One</h5>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
    </div>
    <div class="col-md-6">
      <h5>Feature Two</h5>
      <p>Even the all-powerful Pointing has no control about the blind texts.</p>
    </div>
    <div class="col-md-6">
      <h5>Feature Three</h5>
      <p>On her way she met a copy. The copy warned the Little Blind Text.</p>
    </div>
    <div class="col-md-6">
      <h5>Feature Four</h5>
      <p>A small river named Duden flows by their place far away.</p>
    </div>
  </div>
</div>

<!-- Blocks Section -->
<div class="container text-center my-5">
  <div class="rounded-circle mx-auto blue-block mb-3" style="width:80px; height:80px;">80 x 80</div>
  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  <div class="row align-items-center mt-4">
    <div class="col-md-6 blue-block" style="height: 300px;">1170 x 700</div>
    <div class="col-md-6 text-start p-3">
      <h3>Blocks</h3>
      <p>ADonec id elit non mi porta gravida at eget metus...</p>
      <a href="#">Download</a>
    </div>
  </div>
  <div class="row align-items-center mt-4">
    <div class="col-md-6 blue-block" style="height: 300px;">1170 x 700</div>
    <div class="col-md-6 text-start p-3">
      <h3>Blocks</h3>
      <p>ADonec id elit non mi porta gravida at eget metus...</p>
      <a href="#">Download</a>
    </div>
  </div>
</div>

<!-- Wireframes Section -->
<div class="container my-5">
  <div class="row">
    <div class="col-md-6">
      <h2>Wireframes</h2>
      <p>Fusce dapibus, tellus ac cursus commodo...</p>
      <strong>Works in every browser:</strong>
      <div class="row">
        <div class="col-6">
          <div class="blue-block mb-2" style="height: 200px;">200 x 200</div>
        </div>
        <div class="col-6">
          <div class="blue-block mb-2" style="height: 200px;">200 x 200</div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="blue-block" style="height: 450px;">600 x 450</div>
    </div>
  </div>
  <h3 class="text-center mt-5">Wireframes</h3>
  <div class="row text-center">
    <div class="col-md-4">
      <div class="blue-block mb-3" style="height: 300px;">1170 x 700</div>
    </div>
    <div class="col-md-4">
      <div class="blue-block mb-3" style="height: 300px;">1170 x 700</div>
    </div>
    <div class="col-md-4">
      <div class="blue-block mb-3" style="height: 300px;">1170 x 700</div>
    </div>
  </div>

  <!-- Our Team Section -->
  <h4 class="text-center mt-5">Our Team</h4>
  <div class="container text-center mb-5">
    <div class="row">
      <div class="col-md-3">
        <div class="team-block mb-3">250 x 250</div>
        <h5 class="mt-2">Jane Doe</h5>
        <p class="text-muted">Position</p>
        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
        <div>
          <a href="#" class="me-2 text-dark"><i class="bi bi-twitter"></i></a>
          <a href="#" class="me-2 text-dark"><i class="bi bi-facebook"></i></a>
          <a href="#" class="me-2 text-dark"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-envelope"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="team-block mb-3">250 x 250</div>
        <h5 class="mt-2">John Doe</h5>
        <p class="text-muted">Position</p>
        <p>He packed his seven versalia, put his initial into the belt and made himself on the way.</p>
        <div>
          <a href="#" class="me-2 text-dark"><i class="bi bi-twitter"></i></a>
          <a href="#" class="me-2 text-dark"><i class="bi bi-facebook"></i></a>
          <a href="#" class="me-2 text-dark"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-envelope"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="team-block mb-3">250 x 250</div>
        <h5 class="mt-2">Jane Doe</h5>
        <p class="text-muted">Position</p>
        <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
        <div>
          <a href="#" class="me-2 text-dark"><i class="bi bi-twitter"></i></a>
          <a href="#" class="me-2 text-dark"><i class="bi bi-facebook"></i></a>
          <a href="#" class="me-2 text-dark"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-envelope"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="team-block mb-3">250 x 250</div>
        <h5 class="mt-2">John Doe</h5>
        <p class="text-muted">Position</p>
        <p>He packed his seven versalia, put his initial into the belt and made himself on the way.</p>
        <div>
          <a href="#" class="me-2 text-dark"><i class="bi bi-twitter"></i></a>
          <a href="#" class="me-2 text-dark"><i class="bi bi-facebook"></i></a>
          <a href="#" class="me-2 text-dark"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials Section -->
  <h4 class="text-center mt-5">Testimonials</h4>
  <div class="container text-center my-5">
    <div class="row">
      <div class="col-md-4">
        <div class="rounded-circle mx-auto blue-block mb-3" style="width: 80px; height: 80px;">80 x 80</div>
        <p class="fst-italic">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor."</p>
        <h6>Person Name</h6>
        <p class="text-muted">Co-founder at Company</p>
      </div>
      <div class="col-md-4">
        <div class="rounded-circle mx-auto blue-block mb-3" style="width: 80px; height: 80px;">80 x 80</div>
        <p class="fst-italic">"Duis mollis, est non commodo luctus. Vivamus sagittis lacus vel augue."</p>
        <h6>Person Name</h6>
        <p class="text-muted">Co-founder at Company</p>
      </div>
      <div class="col-md-4">
        <div class="rounded-circle mx-auto blue-block mb-3" style="width: 80px; height: 80px;">80 x 80</div>
        <p class="fst-italic">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor."</p>
        <h6>Person Name</h6>
        <p class="text-muted">Co-founder at Company</p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<!-- Add below to your existing HTML, just before </body> -->

<!-- Pricing Plans Section -->
<div class="container my-5">
  <h2 class="text-center mb-5">Pricing Plans</h2>
  <div class="row justify-content-center text-center">
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Startup</h5>
          <h2 class="my-3">$9.90</h2>
          <p class="text-muted">Far far away, behind the word mountains, far from the countries.</p>
          <hr />
          <ul class="list-unstyled">
            <li>Unlimited calls</li>
            <li>Free hosting</li>
            <li>40MB of storage</li>
          </ul>
          <a href="#" class="btn btn-primary mt-3">Choose Plan</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Business</h5>
          <h2 class="my-3">$19.90</h2>
          <p class="text-muted">Far far away, behind the word mountains, far from the countries.</p>
          <hr />
          <ul class="list-unstyled">
            <li>Unlimited calls</li>
            <li>Free hosting</li>
            <li>1GB of storage</li>
            <li>10 hours of support</li>
            <li>Custom domain</li>
          </ul>
          <a href="#" class="btn btn-primary mt-3">Choose Plan</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Professional</h5>
          <h2 class="my-3">$39.90</h2>
          <p class="text-muted">Far far away, behind the word mountains, far from the countries.</p>
          <hr />
          <ul class="list-unstyled">
            <li>Unlimited calls</li>
            <li>Free hosting</li>
            <li>40MB of storage</li>
            <li>20 hours of support</li>
            <li>Custom domain</li>
            <li>Analytics and SEO</li>
          </ul>
          <a href="#" class="btn btn-primary mt-3">Choose Plan</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Subscribe Section -->
<div class="bg-light py-5">
  <div class="container text-center">
    <h3 class="mb-4">Subscribe</h3>
    <div class="d-flex justify-content-center mb-3">
      <input type="email" class="form-control w-50 me-2" placeholder="Email" />
      <button class="btn btn-primary">Subscribe</button>
    </div>
    <small>
      Find us on 
      <a href="#" class="text-decoration-none">Facebook</a> and 
      <a href="#" class="text-decoration-none">Twitter</a>.
    </small>
  </div>
</div>
<!-- Contact Section -->
<div class="container-fluid p-0">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.092414804788!2d-122.42067918468138!3d37.77492927975992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c7e43f011%3A0x4e0c17eec0d4d4fc!2sSan+Francisco%2C+CA!5e0!3m2!1sen!2sus!4v1610000000000"
    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
  </iframe>
</div>

<div class="container py-5">
  <div class="row">
    <div class="col-md-6 mb-4">
      <h3>Contact Us</h3>
      <p>
        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        Fusce dapibus, tellus ac cursus commodo.
      </p>
      <p>
        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
      </p>
      <p><strong>Email:</strong> <a href="mailto:hello@website.com">hello@website.com</a></p>
      <p><strong>Phone:</strong> +44 123 123 1232</p>
    </div>
    <div class="col-md-6">
      <form>
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="First name" />
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Last name" />
          </div>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="Enter email" />
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Subject" />
        </div>
        <div class="mb-3">
          <textarea class="form-control" rows="4" placeholder="How can we help?"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</html>
