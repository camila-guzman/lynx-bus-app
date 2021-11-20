<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include '../templates/headerinfolderloggedin.php';
        } else { 
            include '../templates/headerinfolderloggedout.php';
        }?>
<style>
    .btn-primary{
        background-color: #d60c8c;
        border-color: #d60c8c;
    }
    .btn-primary:hover{
        background-color: #ce5ba4;
        border-color: #ce5ba4;
    }
    </style>

<!--Insert Content Here-->
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/images/lynxlogo.png" alt="lynx logo" width="72" height="72">
      <h2>Checkout</h2>
      <p class="lead">Please review the information below before purchasing, Lynx does not offer refunds all sales are final.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Single Ride Pass</h6>
              <small class="text-muted">1 Single Ride Admission</small>
            </div>
            <span class="text-muted">2$</span>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" action="./purchaseredirect.php" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option > Alabama </option>
                <option > Alaska </option>
                <option >Arizona </option>
                <option >Arkansas </option>
                <option >California </option>
                <option >Colorado </option>
                <option >Connecticut </option>
                <option >Delaware </option>
                <option >Florida </option>
                <option >Georgia </option>
                <option >Hawaii </option>
                <option >Idaho </option>
                <option >Illinois </option>
                <option >Indiana </option>
                <option >Iowa </option>
                <option >Kansas </option>
                <option >Kentucky </option>
                <option >Louisiana </option>
                <option >Maine </option>
                <option >Maryland </option>
                <option >Massachusetts </option>
                <option >Michigan </option>
                <option >Minnesota </option>
                <option >Mississippi </option>
                <option >Missouri </option>
                <option >Montana </option>
                <option >Nebraska </option>
                <option >Nevada </option>
                <option >New Hampshire </option>
                <option >New Jersey </option>
                <option >New Mexico </option>
                <option >New York </option>
                <option >North Carolina </option>
                <option >North Dakota </option>
                <option >Ohio </option>
                <option >Oklahoma </option>
                <option >Oregon </option>
                <option >Pennsylvania </option>
                <option >Rhode Island </option>
                <option >South Carolina </option>
                <option >South Dakota </option>
                <option >Tennessee </option>
                <option >Texas </option>
                <option >Utah </option>
                <option >Vermont </option>
                <option >Virginia </option>
                <option >Washington </option>
                <option >West </option>
                <option >Virginia </option>
                <option >Wisconsin </option>
                <option >Wyoming </option>

              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Checkout</button>
        </form>
      </div>
    </div>
  </main>

</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="../assets/dist/js/form-validation.js"></script>


<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>