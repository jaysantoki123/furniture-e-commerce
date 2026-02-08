<?php
$page = 'product_detail';
include 'header.php';
?>

<link rel="stylesheet" href="css/profile.css">
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
                    <h5 class="mb-1">Jay Santoki</h5>
                    <p class="text-muted mb-0">jay.santoki@example.com</p>
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
                            <a href="#orders" class="menu-item" onclick="showSection('orders')">
                                <i class="fas fa-shopping-bag me-2"></i> My Orders
                            </a>
                        </li>
                        <li>
                            <a href="#addresses" class="menu-item" onclick="showSection('addresses')">
                                <i class="fas fa-map-marker-alt me-2"></i> Addresses
                            </a>
                        </li>
                        <li>
                            <a href="#wishlist" class="menu-item" onclick="showSection('wishlist')">
                                <i class="fas fa-heart me-2"></i> Wishlist
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
                                    <p class="detail-value">Jay Santoki</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Email Address</label>
                                    <p class="detail-value">jay.santoki@example.com</p>
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

                <!-- Account Statistics -->
                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="stat-card bg-primary text-white rounded shadow-sm p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="mb-0">12</h3>
                                    <p class="mb-0">Total Orders</p>
                                </div>
                                <i class="fas fa-shopping-cart fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="stat-card bg-success text-white rounded shadow-sm p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="mb-0">8</h3>
                                    <p class="mb-0">Wishlist Items</p>
                                </div>
                                <i class="fas fa-heart fa-2x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="stat-card bg-warning text-white rounded shadow-sm p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="mb-0">3</h3>
                                    <p class="mb-0">Saved Addresses</p>
                                </div>
                                <i class="fas fa-map-marker-alt fa-2x opacity-50"></i>
                            </div>
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
                                <div class="password-strength mt-2" id="passwordStrength"></div>
                                <span class="error-message" id="newPassword-error"></span>

                                <!-- Password Requirements List -->
                                <div class="password-requirements mt-2">
                                    <small class="d-block text-muted mb-1">Password must contain:</small>
                                    <small id="req-length" class="requirement-item">
                                        <i class="fas fa-circle"></i> At least 8 characters
                                    </small>
                                    <small id="req-uppercase" class="requirement-item">
                                        <i class="fas fa-circle"></i> One uppercase letter
                                    </small>
                                    <small id="req-lowercase" class="requirement-item">
                                        <i class="fas fa-circle"></i> One lowercase letter
                                    </small>
                                    <small id="req-number" class="requirement-item">
                                        <i class="fas fa-circle"></i> One number
                                    </small>
                                    <small id="req-special" class="requirement-item">
                                        <i class="fas fa-circle"></i> One special character (@$!%*?&#)
                                    </small>
                                </div>
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

                <!-- Recent Password Changes -->
                <div class="card shadow-sm mt-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Security Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="activity-icon bg-success text-white rounded-circle me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-bold">Password Last Changed</p>
                                <small class="text-muted">January 15, 2026 at 10:30 AM</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="activity-icon bg-info text-white rounded-circle me-3">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-bold">Last Login</p>
                                <small class="text-muted">February 3, 2026 at 6:15 PM</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Orders Section -->
            <div id="orders" class="content-section" style="display: none;">
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">My Orders</h4>
                        <div>
                            <select class="form-select form-select-sm">
                                <option>All Orders</option>
                                <option>Pending</option>
                                <option>Delivered</option>
                                <option>Cancelled</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Order Item 1 -->
                        <div class="order-item border rounded p-3 mb-3">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=200&q=80"
                                        alt="Product" class="img-fluid rounded">
                                </div>
                                <div class="col-md-7">
                                    <h6>Modern Velvet Accent Chair</h6>
                                    <p class="text-muted mb-1">Color: Navy Blue | Qty: 1</p>
                                    <p class="mb-1"><strong>Order ID:</strong> #ORD-2026-001234</p>
                                    <p class="mb-0"><small class="text-muted">Ordered on: Jan 25, 2026</small></p>
                                </div>
                                <div class="col-md-3 text-end">
                                    <h5 class="text-primary mb-2">₹12,999</h5>
                                    <span class="badge bg-success mb-2">Delivered</span>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary">Track Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Order Item 2 -->
                        <div class="order-item border rounded p-3 mb-3">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=200&q=80"
                                        alt="Product" class="img-fluid rounded">
                                </div>
                                <div class="col-md-7">
                                    <h6>Luxury Sofa Set</h6>
                                    <p class="text-muted mb-1">Color: Grey | Qty: 1</p>
                                    <p class="mb-1"><strong>Order ID:</strong> #ORD-2026-001235</p>
                                    <p class="mb-0"><small class="text-muted">Ordered on: Jan 30, 2026</small></p>
                                </div>
                                <div class="col-md-3 text-end">
                                    <h5 class="text-primary mb-2">₹45,999</h5>
                                    <span class="badge bg-warning mb-2">In Transit</span>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary">Track Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Order Item 3 -->
                        <div class="order-item border rounded p-3">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://images.unsplash.com/photo-1503602642458-232111445657?w=200&q=80"
                                        alt="Product" class="img-fluid rounded">
                                </div>
                                <div class="col-md-7">
                                    <h6>Wooden Dining Chair (Set of 4)</h6>
                                    <p class="text-muted mb-1">Color: Walnut | Qty: 4</p>
                                    <p class="mb-1"><strong>Order ID:</strong> #ORD-2026-001236</p>
                                    <p class="mb-0"><small class="text-muted">Ordered on: Feb 01, 2026</small></p>
                                </div>
                                <div class="col-md-3 text-end">
                                    <h5 class="text-primary mb-2">₹24,999</h5>
                                    <span class="badge bg-info mb-2">Processing</span>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary">Track Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                    <p class="mb-1"><strong>Jay Santoki</strong></p>
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
                                    <p class="mb-1"><strong>Jay Santoki</strong></p>
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

            <!-- Wishlist Section -->
            <div id="wishlist" class="content-section" style="display: none;">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">My Wishlist</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Wishlist Item 1 -->
                            <div class="col-md-4 mb-4">
                                <div class="wishlist-card border rounded">
                                    <div class="position-relative">
                                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&q=80"
                                            alt="Product" class="img-fluid rounded-top">
                                        <button class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="p-3">
                                        <h6>Modern Velvet Chair</h6>
                                        <p class="text-primary mb-2"><strong>₹12,999</strong></p>
                                        <button class="btn btn-primary btn-sm w-100">
                                            <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist Item 2 -->
                            <div class="col-md-4 mb-4">
                                <div class="wishlist-card border rounded">
                                    <div class="position-relative">
                                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&q=80"
                                            alt="Product" class="img-fluid rounded-top">
                                        <button class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="p-3">
                                        <h6>Luxury Sofa Set</h6>
                                        <p class="text-primary mb-2"><strong>₹45,999</strong></p>
                                        <button class="btn btn-primary btn-sm w-100">
                                            <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist Item 3 -->
                            <div class="col-md-4 mb-4">
                                <div class="wishlist-card border rounded">
                                    <div class="position-relative">
                                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&q=80"
                                            alt="Product" class="img-fluid rounded-top">
                                        <button class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="p-3">
                                        <h6>Dining Chair Set</h6>
                                        <p class="text-primary mb-2"><strong>₹24,999</strong></p>
                                        <button class="btn btn-primary btn-sm w-100">
                                            <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                                        </button>
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
    // Show/Hide Sections
    function showSection(sectionId) {
        // Hide all sections
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => {
            section.style.display = 'none';
        });

        // Show selected section
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

    // Profile Photo Upload
    document.getElementById('photoUpload').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('profilePhoto').src = e.target.result;
                showNotification('Profile photo updated successfully!', 'success');
            };
            reader.readAsDataURL(file);
        }
    });

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

    // Password Strength Checker


    // Password Match Checker


    // Show Notification
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
        notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
        notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.remove();
        }, 3000);
    }

    // Initialize - Show profile section by default
    document.addEventListener('DOMContentLoaded', function () {
        showSection('profile');
    });

</script>

<script>
    // jQuery Validation for Change Password Form
    $(document).ready(function () {

        // Custom validation method for strong password
        $.validator.addMethod("strongPassword", function (value, element) {
            return this.optional(element) ||
                /^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[@$!%*?&#])[A-Za-z\\d@$!%*?&#]{8,}$/.test(value);
        }, "Password must contain at least 8 characters, one uppercase, one lowercase, one number and one special character");

        // Initialize form validation
        $("#changePasswordForm").validate({
            rules: {
                currentPassword: {
                    required: true,
                    minlength: 6
                },
                newPassword: {
                    required: true,
                    minlength: 8,
                    strongPassword: true,
                    notEqualTo: "#currentPassword"
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#newPassword"
                }
            },
            messages: {
                currentPassword: {
                    required: "Please enter your current password",
                    minlength: "Password must be at least 6 characters long"
                },
                newPassword: {
                    required: "Please enter a new password",
                    minlength: "Password must be at least 8 characters long",
                    notEqualTo: "New password must be different from current password"
                },
                confirmPassword: {
                    required: "Please confirm your new password",
                    equalTo: "Passwords do not match"
                }
            },
            errorElement: 'span',
            errorClass: 'error-message',
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('error').removeClass('success');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('error').addClass('success');
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-group').length ? element.closest('.input-group') : element);

                // Insert after password match div if it exists
                if (element.attr('id') === 'confirmPassword') {
                    error.insertAfter('#passwordMatch');
                }
            },
            submitHandler: function (form) {
                // Show loading state
                const submitBtn = $(form).find('button[type="submit"]');
                submitBtn.addClass('loading').prop('disabled', true);
                submitBtn.html('<span class="spinner-border spinner-border-sm me-2"></span>Updating...');

                // Simulate form submission (replace with actual AJAX call)
                setTimeout(function () {
                    // Success
                    showNotification('Password changed successfully!', 'success');

                    // Reset form
                    form.reset();
                    $('#changePasswordForm').validate().resetForm();
                    $('.form-control').removeClass('error success');

                    // Reset button
                    submitBtn.removeClass('loading').prop('disabled', false);
                    submitBtn.html('<i class="fas fa-lock me-2"></i>Update Password');

                    // Clear password requirements
                    $('.requirement-item').removeClass('met not-met');
                    $('#passwordStrength').removeClass('weak medium strong');
                    $('#passwordMatch').html('');

                    // Switch to profile view
                    setTimeout(function () {
                        showSection('profile');
                    }, 1500);

                }, 2000);

                return false; // Prevent default form submission
            }
        });

        // Custom method to check if new password is different from current
        $.validator.addMethod("notEqualTo", function (value, element, param) {
            return this.optional(element) || value !== $(param).val();
        }, "New password must be different from current password");

        // Real-time password strength checker
        $('#newPassword').on('input', function () {
            const password = $(this).val();
            const strengthBar = $('#passwordStrength');

            // Check requirements
            const requirements = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /\\d/.test(password),
                special: /[@$!%*?&#]/.test(password)
            };

            // Update requirement items
            $('#req-length').toggleClass('met', requirements.length).toggleClass('not-met', !requirements.length);
            $('#req-uppercase').toggleClass('met', requirements.uppercase).toggleClass('not-met', !requirements.uppercase);
            $('#req-lowercase').toggleClass('met', requirements.lowercase).toggleClass('not-met', !requirements.lowercase);
            $('#req-number').toggleClass('met', requirements.number).toggleClass('not-met', !requirements.number);
            $('#req-special').toggleClass('met', requirements.special).toggleClass('not-met', !requirements.special);

            // Calculate strength
            const metRequirements = Object.values(requirements).filter(Boolean).length;

            strengthBar.removeClass('weak medium strong');

            if (password.length === 0) {
                strengthBar.removeClass('weak medium strong');
            } else if (metRequirements <= 2) {
                strengthBar.addClass('weak');
            } else if (metRequirements <= 4) {
                strengthBar.addClass('medium');
            } else {
                strengthBar.addClass('strong');
            }
        });

        // Real-time password match checker
        $('#confirmPassword').on('input', function () {
            const newPassword = $('#newPassword').val();
            const confirmPassword = $(this).val();
            const matchDiv = $('#passwordMatch');

            if (confirmPassword.length > 0) {
                if (newPassword === confirmPassword) {
                    matchDiv.html('<small class="text-success"><i class="fas fa-check-circle me-1"></i>Passwords match</small>');
                    $(this).addClass('success').removeClass('error');
                } else {
                    matchDiv.html('<small class="text-danger"><i class="fas fa-times-circle me-1"></i>Passwords do not match</small>');
                    $(this).addClass('error').removeClass('success');
                }
            } else {
                matchDiv.html('');
                $(this).removeClass('success error');
            }
        });

        // Clear validation on reset
        $('#changePasswordForm').on('reset', function () {
            setTimeout(function () {
                $('#changePasswordForm').validate().resetForm();
                $('.form-control').removeClass('error success');
                $('.requirement-item').removeClass('met not-met');
                $('#passwordStrength').removeClass('weak medium strong');
                $('#passwordMatch').html('');
            }, 0);
        });
    });

    // Toggle Password Visibility (keep existing function)
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

    // Show Notification (keep existing function)
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
        notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);';
        notification.innerHTML = `
        <i class="fas fa-${type === 'success' ? 'check' : 'exclamation'}-circle me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.remove();
        }, 3000);
    }

</script>
<?php include 'footer.php'; ?>