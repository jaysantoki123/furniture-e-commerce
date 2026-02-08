<?php include 'header.php'; ?>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800">Products</h2>
        <a href="add_product.php" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add New Product
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="../images/product-1.png" alt="Product" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                            </td>
                            <td>Nordic Chair</td>
                            <td>Chairs</td>
                            <td>$50.00</td>
                            <td>25</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../images/product-2.png" alt="Product" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                            </td>
                            <td>Kruzo Aero Chair</td>
                            <td>Chairs</td>
                            <td>$78.00</td>
                            <td>12</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../images/product-3.png" alt="Product" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                            </td>
                            <td>Ergonomic Chair</td>
                            <td>Chairs</td>
                            <td>$43.00</td>
                            <td>0</td>
                            <td><span class="status-badge status-inactive">Out of Stock</span></td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
