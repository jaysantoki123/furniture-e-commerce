<?php include 'header.php'; ?>
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

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name"
                                    placeholder="Enter first name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email address">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="role">
                                    <option value="">Choose role...</option>
                                    <option value="customer">Customer</option>
                                    <option value="admin">Admin</option>
                                    <option value="editor">Editor</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Enter phone number">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Profile Image</label>
                            <input class="form-control" type="file" name="avatar">
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="active" checked>
                                <label class="form-check-label">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="inactive">
                                <label class="form-check-label">Inactive</label>
                            </div>
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


<script>
    $(document).ready(function () {

        $("#addUserForm").validate({

            rules: {
                first_name: {
                    required: true,
                    minlength: 2
                },
                last_name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                role: {
                    required: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                avatar: {
                    required: true,
                    extension: "jpg|jpeg|png"
                }
            },

            messages: {
                first_name: {
                    required: "First name is required",
                    minlength: "Minimum 2 characters required"
                },
                last_name: {
                    required: "Last name is required",
                    minlength: "Minimum 2 characters required"
                },
                email: {
                    required: "Email address is required",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Password is required",
                    minlength: "Password must be at least 6 characters"
                },
                role: {
                    required: "Please select a role"
                },
                phone: {
                    required: "Phone number is required",
                    digits: "Only numbers are allowed",
                    minlength: "Phone number must be 10 digits",
                    maxlength: "Phone number must be 10 digits"
                },
                avatar: {
                    required: "Profile image is required",
                    extension: "Only JPG, JPEG, PNG files are allowed"
                }
            },

            errorElement: "div",
            errorClass: "error-message",

            highlight: function (element) {
                $(element)
                    .removeClass("is-valid")
                    .addClass("is-invalid")
                    .next(".valid-feedback-icon").remove();
            },

            unhighlight: function (element) {
                $(element)
                    .removeClass("is-invalid")
                    .addClass("is-valid");


            },

            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },

            submitHandler: function (form) {
                alert("All required fields are valid ✔");
                // form.submit(); // enable when backend is ready
            }
        });

    });
</script>



<?php include 'footer.php'; ?>