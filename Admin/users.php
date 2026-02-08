<?php include 'header.php'; ?>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800">Users</h2>
        <a href="add_user.php" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add New User
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="../images/person_1.jpg" alt="User" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
                            </td>
                            <td>Maria Jones</td>
                            <td>maria.jones@example.com</td>
                            <td>Customer</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../images/person_2.jpg" alt="User" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
                            </td>
                            <td>John Smith</td>
                            <td>john.smith@example.com</td>
                            <td>Admin</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <a href="#" class="action-icon"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-trash"></i></a>
                                <a href="#" class="action-icon"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../images/person_3.jpg" alt="User" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
                            </td>
                            <td>Robert Doe</td>
                            <td>robert.doe@example.com</td>
                            <td>Customer</td>
                            <td><span class="status-badge status-inactive">Inactive</span></td>
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
