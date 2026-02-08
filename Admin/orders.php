<?php include 'header.php'; ?>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800">Orders</h2>
        <!-- Optional: Add button if needed, though usually orders come from the frontend -->
        <!-- <a href="#" class="btn btn-primary">Create Order</a> -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#ORD-001</td>
                            <td>John Doe</td>
                            <td>Ergonomic Chair</td>
                            <td>2023-10-01</td>
                            <td><span class="status-badge status-active">Completed</span></td>
                            <td>$150.00</td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#ORD-002</td>
                            <td>Jane Smith</td>
                            <td>Wooden Table</td>
                            <td>2023-10-02</td>
                            <td><span class="status-badge status-inactive">Pending</span></td>
                            <td>$350.00</td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#ORD-003</td>
                            <td>Mike Johnson</td>
                            <td>Modern Sofa</td>
                            <td>2023-10-03</td>
                            <td><span class="status-badge status-active">Processing</span></td>
                            <td>$950.00</td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>#ORD-004</td>
                            <td>Emily Davis</td>
                            <td>Office Desk</td>
                            <td>2023-10-04</td>
                            <td><span class="status-badge status-active">Shipped</span></td>
                            <td>$200.00</td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                         <tr>
                            <td>#ORD-005</td>
                            <td>Chris Wilson</td>
                            <td>Gaming Chair</td>
                            <td>2023-10-05</td>
                            <td><span class="status-badge status-inactive">Cancelled</span></td>
                            <td>$250.00</td>
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
