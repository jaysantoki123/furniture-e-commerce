<?php include 'header.php'; ?>

</style>
<style>
    .error-message {
        display: block;
        color: #dc3545;
        font-size: 1rem;
        margin-top: 0.25rem;
        font-weight: 500;
        font-family: 'Fira Sans', sans-serif;
    }
</style>
<script src="/js/validation.js"></script>
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800">Add New User</h2>
        <a href="users.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i> Back to Users
        </a>
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <form id="addUserForm" action="#" method="POST" enctype="multipart/form-data">

                        <!-- First & Last Name -->
                        <div class="row mb-3">
                            <div class="col-md-6 position-relative">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="firstName" placeholder="Enter first name"
                                    data-validation="required min max alphabetic" data-min="2" data-max="30">
                                <div id="firstName_error"></div>
                            </div>

                            <div class="col-md-6 position-relative">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastName" placeholder="Enter last name"
                                    data-validation="required min max alphabetic" data-min="2" data-max="30">
                                <div id="lastName_error"></div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3 position-relative">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email address"
                                data-validation="required email">
                            <div id="email_error"></div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3 position-relative">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password"
                                data-validation="required strongPassword">
                            <div id="password_error"></div>
                        </div>

                        <!-- Role & Phone -->
                        <div class="row mb-3">
                            <div class="col-md-6 position-relative">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="role" data-validation="required select">
                                    <option value="">Choose role...</option>
                                    <option value="customer">Customer</option>
                                    <option value="admin">Admin</option>
                                    <option value="editor">Editor</option>
                                </select>
                                <div id="role_error"></div>
                            </div>

                            <div class="col-md-6 position-relative">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Enter phone number"
                                    data-validation="required number min max" data-min="10" data-max="10">
                                <div id="phone_error"></div>
                            </div>
                        </div>

                        <!-- Profile Image -->
                        <div class="mb-3 position-relative">
                            <label class="form-label">Profile Image</label>
                            <input class="form-control" type="file" name="avatar" data-validation="required fileSize fileType"
                                data-filesize="2048" data-filetype="jpg,jpeg,png">
                            <div id="avatar_error"></div>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label d-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="active" checked
                                    data-validation="required">
                                <label class="form-check-label">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="inactive">
                                <label class="form-check-label">Inactive</label>
                            </div>
                            <div id="status_error"></div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Create User
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>





<?php include 'footer.php'; ?>