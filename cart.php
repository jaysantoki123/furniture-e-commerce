<?php
$page = 'cart';
include 'header.php';
?>
<style>

</style>

<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Cart</h1>
        </div>
      </div>
      <div class="col-lg-7">

      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section before-footer-section">
  <div class="container">
    <div class="row mb-5">
      <form class="col-md-12" method="post">
        <div class="site-blocks-table">
          <table class="table">
            <thead>
              <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-total">Total</th>
                <th class="product-remove">Remove</th>
              </tr>
            </thead>
            <tbody>
              <tr class="cart-products">
                <td class="product-thumbnail">
                  <img src="images/product-1.png" alt="Image" class="img-fluid">
                </td>
                <td class="product-name">
                  <h2 class="h5 text-black">Product 1</h2>
                </td>
                <td class="price">$49.00</td>
                <td>
                  <div class="input-group mb-3 d-flex align-items-center" style="max-width: 120px; margin: 0 auto;">

                    <div class="input-group-prepend">
                      <button class="btn btn-outline-black decrease minus" type="button">&minus;</button>
                    </div>

                    <input type="text" class="form-control text-center quantity" value="1" placeholder=""
                      aria-label="Example text with button addon" aria-describedby="button-addon1">

                    <div class="input-group-append">
                      <button class="btn btn-outline-black increase plus" type="button">&plus;</button>
                    </div>

                  </div>
                </td>
                <td class="total">$49.00</td>
                <td><a href="#" class="btn btn-black btn-sm">X</a></td>
              </tr>

              <tr class="cart-products">
                <td class="product-thumbnail">
                  <img src="images/product-2.png" alt="Image" class="img-fluid">
                </td>
                <td class="product-name">
                  <h2 class="h5 text-black">Product 2</h2>
                </td>
                <td class="price">$49.00</td>
                <td>
                  <div class="input-group mb-3 d-flex align-items-center" style="max-width: 120px; margin: 0 auto;">

                    <div class="input-group-prepend">
                      <button class="btn btn-outline-black decrease minus" type="button">&minus;</button>
                    </div>

                    <input type="text" class="form-control text-center quantity" value="1" placeholder=""
                      aria-label="Example text with button addon" aria-describedby="button-addon1">

                    <div class="input-group-append">
                      <button class="btn btn-outline-black increase plus" type="button">&plus;</button>
                    </div>

                  </div>
                </td>
                <td class="total">$49.00</td>
                <td><a href="#" class="btn btn-black btn-sm">X</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="row mb-5">
          <div class="col-md-6 mb-3 mb-md-0">
            <button class="btn btn-black btn-sm btn-block">Update Cart</button>
          </div>
          <div class="col-md-6">
            <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label class="text-black h4" for="coupon">Coupon</label>
            <p>Enter your coupon code if you have one.</p>
          </div>
          <div class="col-md-8 mb-3 mb-md-0">
            <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
          </div>
          <div class="col-md-4">
            <button class="btn btn-black">Apply Coupon</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 pl-5">
        <div class="row justify-content-end">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <span class="text-black">Subtotal</span>
              </div>
              <div class="col-md-6 text-right">
                <strong class="text-black" id="cart-subtotal">$230.00</strong>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6">
                <span class="text-black">Total</span>
              </div>
              <div class="col-md-6 text-right">
                <strong class="text-black" id="cart-total">$230.00</strong>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To
                  Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {

    const parseCurrency = (text) => {
      const cleanString = text.replace(/[$,]/g, '').trim();
      const value = parseFloat(cleanString);
      return isNaN(value) ? 0 : value;
    };

    const products = document.querySelectorAll('.cart-products');
    const subtotalEl = document.getElementById('cart-subtotal');
    const totalEl = document.getElementById('cart-total');

    const updateGrandTotal = () => {
      let grandTotal = 0;
      products.forEach(product => {
        const rowTotalElement = product.querySelector('.total');
        const rowTotal = parseCurrency(rowTotalElement.innerText);
        grandTotal += rowTotal;
      });
      if (subtotalEl) subtotalEl.innerText = '$' + grandTotal.toFixed(2);
      if (totalEl) totalEl.innerText = '$' + grandTotal.toFixed(2);
    };

    products.forEach(product => {
      const plusBtn = product.querySelector('.plus');
      const minusBtn = product.querySelector('.minus');
      const quantityElement = product.querySelector('.quantity');
      const totalElement = product.querySelector('.total');
      const priceElement = product.querySelector('.price');


      let price = parseCurrency(priceElement.innerText);
      let quantity = parseInt(quantityElement.value);

      const updateRow = () => {
        let rowTotal = price * quantity;


        quantityElement.value = quantity;

        totalElement.innerText = '$' + rowTotal.toFixed(2);
        updateGrandTotal();
      };

      if (plusBtn) {
        plusBtn.addEventListener('click', () => {
          quantity++;
          updateRow();
        });
      }

      if (minusBtn) {
        minusBtn.addEventListener('click', () => {
          if (quantity > 1) {
            quantity--;
            updateRow();
          }
        });
      }


      quantityElement.addEventListener('change', () => {
        let val = parseInt(quantityElement.value);
        if (val < 1 || isNaN(val)) val = 1;
        quantity = val;
        updateRow();
      });
    });

    updateGrandTotal();
  });
</script>
<?php include 'footer.php'; ?>