<?php
$page = 'product_detail';
include 'header.php';
?>

<link rel="stylesheet" href="admin_profile.css">
<div class="container my-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="profile-sidebar">
                <!-- Profile Photo Section -->
                <div class="profile-photo-section text-center p-4 bg-white rounded shadow-sm mb-3">
                    <div class="profile-photo-wrapper position-relative d-inline-block mb-3">
                        <img id="profilePhoto"
                            src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?w=300&q=80"
                            alt="Profile Photo" class="profile-photo rounded-circle">
                        <label for="photoUpload" class="photo-upload-btn">
                            <i class="fas fa-camera"></i>
                        </label>
                        <input type="file" id="photoUpload" accept="image/*" style="display: none;">
                    </div>
                    <h5 class="mb-1">Shyam fichadiya</h5>
                    <p class="text-muted mb-0">shyam.fichadiya@example.com</p>
                </div>

                <!-- Navigation Menu -->
                <div class="profile-menu bg-white rounded shadow-sm">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#profile" class="menu-item active" onclick="showSection('profile')">
                                <i class="fas fa-user me-2"></i> Profile Details
                            </a>
                        </li>
                        <li>
                            <a href="#edit-profile" class="menu-item" onclick="showSection('edit-profile')">
                                <i class="fas fa-edit me-2"></i> Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href="#change-password" class="menu-item" onclick="showSection('change-password')">
                                <i class="fas fa-lock me-2"></i> Change Password
                            </a>
                        </li>
                        
                        <li>
                            <a href="#addresses" class="menu-item" onclick="showSection('addresses')">
                                <i class="fas fa-map-marker-alt me-2"></i> Addresses
                            </a>
                        </li>
                       
                        <li>
                            <a href="#" class="menu-item text-danger">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-lg-9">
            <!-- Profile Details Section -->
            <div id="profile" class="content-section">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Profile Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Full Name</label>
                                    <p class="detail-value">Shyam fichadiya</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Email Address</label>
                                    <p class="detail-value">shyam.fichadiya@example.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Phone Number</label>
                                    <p class="detail-value">+91 98765 43210</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Date of Birth</label>
                                    <p class="detail-value">15 January 1995</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Gender</label>
                                    <p class="detail-value">Male</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Member Since</label>
                                    <p class="detail-value">January 2024</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="detail-item">
                                    <label class="detail-label">Address</label>
                                    <p class="detail-value">123, MG Road, Ahmedabad, Gujarat - 380001, India</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-primary" onclick="showSection('edit-profile')">
                                <i class="fas fa-edit me-2"></i>Edit Profile
                            </button>
                        </div>
                    </div>
                </div>

               
         
            </div>

            <!-- Edit Profile Section -->
            <div id="edit-profile" class="content-section" style="display: none;">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="/update-profile" method="POST">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" value="Jay"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName"
                                        value="Santoki" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="jay.santoki@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        value="+91 98765 43210" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" value="1995-01-15">
                                </div>
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="123, MG Road"
                                    placeholder="Street Address">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" name="city" value="Ahmedabad">
                                </div>
                                <div class="col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" name="state" value="Gujarat">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="pincode" class="form-label">Pin Code</label>
                                    <input type="text" class="form-control" id="pincode" name="pincode" value="380001">
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" name="country" value="India">
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Save Changes
                                </button>
                                <button type="button" class="btn btn-secondary" onclick="showSection('profile')">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Change Password Section -->
            <!-- Change Password Section -->
            <div id="change-password" class="content-section" style="display: none;">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Change Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Password must be at least 8 characters long and include uppercase, lowercase, number, and
                            special character.
                        </div>

                        <form id="changePasswordForm" action="/change-password" method="POST" novalidate>
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Current Password *</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="currentPassword"
                                        name="currentPassword">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('currentPassword')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <span class="error-message" id="currentPassword-error"></span>
                            </div>

                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password *</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="newPassword" name="newPassword">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('newPassword')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                
                                <span class="error-message" id="newPassword-error"></span>

                                <!-- Password Requirements List -->
                              
                            </div>

                            <div class="mb-4">
                                <label for="confirmPassword" class="form-label">Confirm New Password *</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirmPassword"
                                        name="confirmPassword">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('confirmPassword')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div id="passwordMatch" class="mt-2"></div>
                                <span class="error-message" id="confirmPassword-error"></span>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-lock me-2"></i>Update Password
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

           
            </div>


            <!-- Orders Section -->
          

            <!-- Addresses Section -->
            <div id="addresses" class="content-section" style="display: none;">
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Saved Addresses</h4>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                            <i class="fas fa-plus me-2"></i>Add New Address
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Address 1 -->
                            <div class="col-md-6 mb-3">
                                <div class="address-card border rounded p-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6>Home</h6>
                                        <span class="badge bg-primary">Default</span>
                                    </div>
                                    <p class="mb-1"><strong>Shyam fichadiya</strong></p>
                                    <p class="mb-1">123, MG Road</p>
                                    <p class="mb-1">Ahmedabad, Gujarat - 380001</p>
                                    <p class="mb-3">Phone: +91 98765 43210</p>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Address 2 -->
                            <div class="col-md-6 mb-3">
                                <div class="address-card border rounded p-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6>Office</h6>
                                    </div>
                                    <p class="mb-1"><strong>Shyam fichadiya</strong></p>
                                    <p class="mb-1">456, SG Highway</p>
                                    <p class="mb-1">Ahmedabad, Gujarat - 380015</p>
                                    <p class="mb-3">Phone: +91 98765 43210</p>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        <button class="btn btn-sm btn-outline-success">Set as Default</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </div>
    </div>
</div>

<!-- Add Address Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="/add-address" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Address Type</label>
                        <select class="form-select" name="addressType" required>
                            <option value="">Select Type</option>
                            <option value="home">Home</option>
                            <option value="office">Office</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-control" name="fullName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number *</label>
                        <input type="tel" class="form-control" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address *</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label">City *</label>
                            <input type="text" class="form-control" name="city" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">State *</label>
                            <input type="text" class="form-control" name="state" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label">Pin Code *</label>
                            <input type="text" class="form-control" name="pincode" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Country *</label>
                            <input type="text" class="form-control" name="country" value="India" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="setDefault" id="setDefault">
                            <label class="form-check-label" for="setDefault">
                                Set as default address
                            </label>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Save Address</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js>"></script>
<script src="<https://code.jquery.com/jquery-3.6.0.min.js>"></script>
<script src="<https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js>"></script>
<script>
    function showSection(sectionId) {
        // Hide all sections
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => {
            section.style.display = 'none';
        });

        const selectedSection = document.getElementById(sectionId);
        if (selectedSection) {
            selectedSection.style.display = 'block';
        }

        // Update active menu item
        const menuItems = document.querySelectorAll('.menu-item');
        menuItems.forEach(item => {
            item.classList.remove('active');
        });

        const activeItem = document.querySelector(`a[href="#${sectionId}"]`);
        if (activeItem) {
            activeItem.classList.add('active');
        }

        // Prevent default anchor behavior
        event.preventDefault();
    }

    // Toggle Password Visibility
    function togglePassword(inputId) {
        const input = document.getElementById(inputId);
        const icon = event.currentTarget.querySelector('i');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        showSection('profile');
    });

</script>


<?php include 'footer.php'; ?>