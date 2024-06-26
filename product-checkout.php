
<?php 
  include 'Header.php'
?>



        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Product Checkout</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">We hope you will like this product and give us 5 star rating</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <div class="container">
              <section class="padding-top-100 padding-bottom-100">
                <form class="product-checkout-form">
                  <div class="row">
                    <div class="col-md-6">
                      <h3>Billing Details</h3>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Country</label>
                            <select class="form-control">
                              <option>United State</option>
                              <option>United Kingdom</option>
                              <option>Australia</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Street Address</label>
                            <input type="text" placeholder="House Number" class="form-control mbm">
                            <input type="text" placeholder="Apartment, suit, unit etc." class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Town / City</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>State / Country</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Postcode / ZIP</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Phone</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Additional Information</h3>
                      <div class="form-group">
                        <label>Other notes</label>
                        <textarea name="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <h3>Your order</h3>
                      <table class="shop_table">
                        <thead>
                          <tr>
                            <th class="product-name">Product</th>
                            <th class="product-total">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="cart_item">
                            <td class="product-name">Chocolate Fudge Ripple 							 <strong class="product-quantity">× 1</strong></td>
                            <td class="product-total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.0</span></td>
                          </tr>
                          <tr class="cart_item">
                            <td class="product-name">Coffee Caramel Swirl 							 <strong class="product-quantity">× 1</strong></td>
                            <td class="product-total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>14.0</span></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>39.0</span></td>
                          </tr>
                          <tr class="order-total">
                            <th>Total</th>
                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>39.0</span></strong></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-product-options">
                        <h4>Checkout Method</h4>
                        <div class="form-check">
                          <input id="productQuantity1" type="radio" name="productOption" value="option1" checked="" class="form-check-input">
                          <label for="productQuantity1" class="form-check-label">Bank Transfer</label>
                        </div>
                        <div class="form-check">
                          <input id="productQuantity2" type="radio" name="productOption" value="option2" checked="" class="form-check-input">
                          <label for="productQuantity2" class="form-check-label">Cast On Delivery</label>
                        </div>
                        <div class="form-check">
                          <input id="productQuantity3" type="radio" name="productOption" value="option3" checked="" class="form-check-input">
                          <label for="productQuantity3" class="form-check-label">Paypal</label>
                        </div>
                      </div>
                      <div class="checkout-product-options">
                        <h4>Other options</h4>
                        <div class="form-check">
                          <input id="productOption2" type="checkbox" name="" value="option3" checked="" class="form-check-input">
                          <label for="productOption2" class="form-check-label">Ullam laboris nisi ut aliquip ex ea commodo</label>
                        </div>
                        <div class="form-check">
                          <input id="productOption3" type="checkbox" name="" value="option3" class="form-check-input">
                          <label for="productOption3" class="form-check-label">Ut enim ad minim veniam</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button class="swin-btn checkout-submit"><span>Place Order</span></button>
                    </div>
                  </div>
                </form>
              </section>
            </div>
          </div>
        </div>
 <?php 
  include 'Footer.php'
?>