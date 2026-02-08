<?php include 'header.php'; ?>

<div class="container-fluid p-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800">Add to Cart</h2>
        <a href="#" class="btn btn-success">
            <i class="fas fa-shopping-cart me-2"></i> Checkout
        </a>
    </div>

    <!-- Cart Table -->
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table custom-table align-middle">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- Item 1 --> 
                        <tr>
                            <td>
                                <img src="../images/product-1.png"
                                    style="width:50px;height:50px;border-radius:8px;object-fit:cover;">
                            </td>
                            <td>Wooden Chair</td>
                            <td>₹2,500</td>
                            <td>2</td>
                            <td>₹5,000</td>
                            <td><span class="status-badge status-active">In Cart</span></td>
                            <td>
                                <a href="#" class="action-icon text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                        <!-- Item 2 -->
                        <tr>
                            <td>
                                <img src="../images/product-2.png"
                                    style="width:50px;height:50px;border-radius:8px;object-fit:cover;">
                            </td>
                            <td>Modern Table</td>
                            <td>₹6,800</td>
                            <td>1</td>
                            <td>₹6,800</td>
                            <td><span class="status-badge status-active">In Cart</span></td>
                            <td>
                              
                                <a href="#" class="action-icon text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                        <!-- Item 3 -->
                        <tr>
                            <td>
                                <img src="../images/product-3.png"
                                    style="width:50px;height:50px;border-radius:8px;object-fit:cover;">
                            </td>
                            <td>Comfort Sofa</td>
                            <td>₹18,000</td>
                            <td>1</td>
                            <td>₹18,000</td>
                            <td><span class="status-badge status-inactive">Saved</span></td>
                            <td>
                                <a href="#" class="action-icon text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                    </tbody>

                    <!-- Cart Summary -->
                    <tfoot>
                        <tr>
                            <th colspan="4" class="text-end">Grand Total</th>
                            <th colspan="3">₹29,800</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
