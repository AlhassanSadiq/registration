<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.88.1" />

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/" />

  <!-- Bootstrap core CSS -->
  <link href="csss/bootstrap.css" rel="stylesheet" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="csss/form-validation.css" rel="stylesheet" />
</head>

<body class="bg-light">
  <div class="container">
    <main>
      <div class="py-3 text-center">
        <a href="index.html"><img class="d-block mx-auto mb-4" src="images/bagdeland1.png" alt="" width="242" height="142" />
        </a>
        <h2>REGISTRATION FORM</h2>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm text-white bg-dark">
              <div>
                <h6 class="my-0">Tuition Fee</h6>
              </div>
              <span class="text-muted">8</span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm text-black bg-light">
              <div>
                <h6 class="my-0">Third item</h6>
              </div>
              <span class="text-muted">$18</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-warning">
              <span>Total (USD)</span>
              <strong>$26</strong>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">FILL IN YOUR INFORMATION</h4>
          <form action="connect.php" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required />
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required />
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-sm-6">
                <label for="Primary-certificate" class="form-label">Primary Certificate
                </label>
                <input type="file" class="form-control" id="certificate" placeholder="" value="" required />
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="date-of-birth" class="form-label">Date Of Birth</label>
                <input type="date" class="form-control" id="dob" placeholder="" value="" required />
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required />
              <div class="invalid-feedback">
                Please enter a valid email address to Acquire Your Receipt.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required />
            </div>

            <div class="row g-3">
              <div class="col-md-6">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" required>
                  <option value="">Choose...</option>
                  <option name="nigeria" value="nigeria">NIGERIA</option>
                  <option name="niger" value="niger">NIGER</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

              <div class="col-12">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="Benue State" required />
              </div>

            </div>
        </div>



        <div class="col-md-4">
          <label for="state" class="form-label">Class</label>
          <select class="form-select" id="class" required>
            <option value="">Choose...</option>
            <option name="jss1" value="jss1">JSS1</option>
            <option name="jss2" value="jss2">JSS2</option>
            <option name="jss3" value="jss3">JSS3</option>
            <option name="sss1" value="sss1">SSS1</option>
            <option name="sss2" value="sss2"></option>>SSS2</option>
            <option name="sss3" value="sss3"></option>>SSS3</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid Class.
          </div>
        </div>

        <div class="col-md-4">
          <label for="state" class="form-label">School Terms</label>
          <select class="form-select" id="term" required>
            <option value="">Choose...</option>
            <option name="1st" value="1st">1st Term</option>
            <option name="2nd" value="2nd">2nd Term</option>
            <option name="3rd " value="3rd">3rd Term</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
      </div>
      <input type='submit' value='submit' />

      <hr class="my-4" />

      <div class="text-center">
        <button class="text-center btn btn-primary btn-lg" type="submit">
          Continue to checkout
        </button>
      </div>
      </form>
  </div>
  </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021PRINCEA GLSS</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
    </ul>
  </footer>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="js/form-validation.js"></script>
</body>

</html>