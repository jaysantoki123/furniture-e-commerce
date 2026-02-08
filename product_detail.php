<?php
$page = 'product_detail';
include 'header.php';
?>

<link rel="stylesheet" href="css/product_detail.css">
    <!-- Product Details Section -->

    <!-- Product Details Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Product Images -->
            <div class="col-lg-6 mb-4">
                <div class="product-images">
                    <div class="main-image mb-3">
                        <img id="mainImage" src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=800&q=80" alt="Modern Accent Chair" class="img-fluid rounded">
                    </div>
                    <div class="thumbnail-images d-flex gap-2">
                        <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=200&q=80" alt="Front View" class="img-thumbnail thumbnail" onclick="changeImage(this)">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=200&q=80" alt="Side View" class="img-thumbnail thumbnail" onclick="changeImage(this)">
                        <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?w=200&q=80" alt="Angle View" class="img-thumbnail thumbnail" onclick="changeImage(this)">
                        <img src="https://images.unsplash.com/photo-1519947486511-46149fa0a254?w=200&q=80" alt="Detail View" class="img-thumbnail thumbnail" onclick="changeImage(this)">
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <div class="product-info">
                    <h1 class="product-title mb-3">Modern Velvet Accent Chair</h1>

                    <!-- Rating -->
                    <div class="rating mb-3">
                        <span class="stars">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </span>
                        <span class="ms-2">(4.5/5) - <a href="#reviews">96 Reviews</a></span>
                    </div>

                    <!-- Price -->
                    <div class="price mb-3">
                        <span class="current-price h2 text-danger">₹12,999</span>
                        <span class="original-price text-muted text-decoration-line-through ms-2">₹18,499</span>
                        <span class="badge bg-success ms-2">30% OFF</span>
                    </div>

                    <!-- Short Description -->
                    <p class="product-short-desc mb-4">
                        Elevate your living space with this luxurious modern accent chair. Featuring premium velvet upholstery,
                        sturdy wooden legs, and ergonomic design for ultimate comfort and style.
                    </p>

                    <!-- Product Options -->
                    <div class="product-options mb-4">
                        <!-- Color Selection -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Color:</label>
                            <div class="color-options d-flex gap-2 flex-wrap">
                                <input type="radio" class="btn-check" name="color" id="navy" checked>
                                <label class="btn btn-outline-primary" for="navy">Navy Blue</label>

                                <input type="radio" class="btn-check" name="color" id="grey">
                                <label class="btn btn-outline-secondary" for="grey">Grey</label>

                                <input type="radio" class="btn-check" name="color" id="pink">
                                <label class="btn btn-outline-danger" for="pink">Blush Pink</label>

                                <input type="radio" class="btn-check" name="color" id="green">
                                <label class="btn btn-outline-success" for="green">Emerald</label>
                            </div>
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Quantity:</label>
                            <div class="quantity-selector d-flex align-items-center">
                                <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                                <input type="number" id="quantity" class="form-control mx-2 text-center" value="1" min="1" max="10" style="width: 80px;">
                                <button class="btn btn-outline-secondary" onclick="increaseQuantity()">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons d-flex gap-3 mb-4">
                        <button class="btn btn-primary btn-lg flex-grow-1" onclick="addToCart()">
                            <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                        </button>
                        <button class="btn btn-outline-danger btn-lg">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>

                    <!-- Product Meta -->
                    <div class="product-meta">
                        <p><strong>SKU:</strong> CHR-VLV-001</p>
                        <p><strong>Category:</strong> Living Room, Accent Chairs</p>
                        <p><strong>Material:</strong> Velvet Fabric, Solid Wood Legs</p>
                        <p><strong>Availability:</strong> <span class="text-success">In Stock</span></p>
                        <p><strong>Delivery:</strong> Free delivery within 7-10 business days</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="productTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button">
                            Description
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button">
                            Specifications
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button">
                            Reviews (96)
                        </button>
                    </li>
                </ul>

                <div class="tab-content p-4 border border-top-0" id="productTabContent">
                    <!-- Description Tab -->
                    <div class="tab-pane fade show active" id="description">
                        <h3>Product Description</h3>
                        <p>
                            Transform your living space with our Modern Velvet Accent Chair. This stunning piece combines
                            contemporary design with timeless elegance, making it the perfect addition to any room.
                            The luxurious velvet upholstery provides a soft, comfortable seating experience while adding
                            a touch of sophistication to your home décor.
                        </p>
                        <h5>Key Features:</h5>
                        <ul>
                            <li>Premium quality velvet fabric with soft texture</li>
                            <li>Sturdy solid wood legs with natural finish</li>
                            <li>Ergonomic design with comfortable backrest</li>
                            <li>High-density foam cushioning for optimal comfort</li>
                            <li>Easy to assemble with included hardware</li>
                            <li>Weight capacity: 120 kg</li>
                            <li>Perfect for living room, bedroom, or office</li>
                            <li>Available in multiple elegant colors</li>
                        </ul>
                        <h5>Care Instructions:</h5>
                        <ul>
                            <li>Vacuum regularly to remove dust</li>
                            <li>Spot clean stains immediately with mild soap and water</li>
                            <li>Avoid direct sunlight to prevent fading</li>
                            <li>Professional cleaning recommended for deep stains</li>
                        </ul>
                    </div>

                    <!-- Specifications Tab -->
                    <div class="tab-pane fade" id="specifications">
                        <h3>Technical Specifications</h3>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td><strong>Dimensions (L x W x H)</strong></td>
                                    <td>70 cm x 65 cm x 85 cm</td>
                                </tr>
                                <tr>
                                    <td><strong>Seat Height</strong></td>
                                    <td>45 cm</td>
                                </tr>
                                <tr>
                                    <td><strong>Seat Depth</strong></td>
                                    <td>50 cm</td>
                                </tr>
                                <tr>
                                    <td><strong>Backrest Height</strong></td>
                                    <td>40 cm</td>
                                </tr>
                                <tr>
                                    <td><strong>Weight</strong></td>
                                    <td>12 kg</td>
                                </tr>
                                <tr>
                                    <td><strong>Weight Capacity</strong></td>
                                    <td>120 kg</td>
                                </tr>
                                <tr>
                                    <td><strong>Upholstery Material</strong></td>
                                    <td>Premium Velvet Fabric</td>
                                </tr>
                                <tr>
                                    <td><strong>Frame Material</strong></td>
                                    <td>Solid Wood</td>
                                </tr>
                                <tr>
                                    <td><strong>Cushion Fill</strong></td>
                                    <td>High-Density Foam</td>
                                </tr>
                                <tr>
                                    <td><strong>Leg Finish</strong></td>
                                    <td>Natural Wood / Gold Metal</td>
                                </tr>
                                <tr>
                                    <td><strong>Assembly Required</strong></td>
                                    <td>Yes (Easy assembly, tools included)</td>
                                </tr>
                                <tr>
                                    <td><strong>Warranty</strong></td>
                                    <td>1 Year Manufacturing Defect</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="tab-pane fade" id="reviews">
                        <h3>Customer Reviews</h3>

                        <!-- Overall Rating -->
                        <div class="overall-rating mb-4 p-4 bg-light rounded">
                            <div class="row align-items-center">
                                <div class="col-md-3 text-center">
                                    <h1 class="display-3 mb-0">4.5</h1>
                                    <div class="stars mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                    </div>
                                    <p class="text-muted">Based on 96 reviews</p>
                                </div>
                                <div class="col-md-9">
                                    <div class="rating-breakdown">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2">5★</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 65%"></div>
                                            </div>
                                            <span>65%</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2">4★</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 25%"></div>
                                            </div>
                                            <span>25%</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2">3★</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 7%"></div>
                                            </div>
                                            <span>7%</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2">2★</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 2%"></div>
                                            </div>
                                            <span>2%</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">1★</span>
                                            <div class="progress flex-grow-1 me-2">
                                                <div class="progress-bar bg-warning" style="width: 1%"></div>
                                            </div>
                                            <span>1%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Individual Reviews -->
                        <div class="reviews-list mb-4">
                            <!-- Review 1 -->
                            <div class="review-item border-bottom pb-3 mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <strong>Priya Sharma</strong>
                                        <div class="stars">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <small class="text-muted">Jan 28, 2026</small>
                                </div>
                                <h6>Beautiful and Comfortable!</h6>
                                <p class="text-muted">
                                    This chair is absolutely stunning! The navy blue velvet looks luxurious and the comfort
                                    level is amazing. Easy to assemble and the quality is top-notch. Highly recommend!
                                </p>
                            </div>

                            <!-- Review 2 -->
                            <div class="review-item border-bottom pb-3 mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <strong>Rajesh Kumar</strong>
                                        <div class="stars">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <small class="text-muted">Jan 25, 2026</small>
                                </div>
                                <h6>Great value for money</h6>
                                <p class="text-muted">
                                    Very good quality chair for the price. The wooden legs are sturdy and the velvet fabric
                                    feels premium. Perfect for my reading corner. Delivery was also on time.
                                </p>
                            </div>

                            <!-- Review 3 -->
                            <div class="review-item pb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <strong>Neha Patel</strong>
                                        <div class="stars">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <small class="text-muted">Jan 20, 2026</small>
                                </div>
                                <h6>Exceeded expectations!</h6>
                                <p class="text-muted">
                                    I was skeptical about ordering furniture online but this chair proved me wrong.
                                    The pink color is exactly as shown in pictures. Very comfortable and stylish.
                                    Love it!
                                </p>
                            </div>
                        </div>

                        <!-- Add Review Form -->
                        <div class="add-review-form">
                            <h4>Write a Review</h4>
                            <form id="reviewForm" class="mt-3">
                                <div class="mb-3">
                                    <label class="form-label">Your Rating *</label>
                                    <div class="star-rating">
                                        <input type="radio" name="rating" value="5" id="star5">
                                        <label for="star5"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" value="4" id="star4">
                                        <label for="star4"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" value="3" id="star3">
                                        <label for="star3"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" value="2" id="star2">
                                        <label for="star2"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" value="1" id="star1">
                                        <label for="star1"><i class="fas fa-star"></i></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="reviewName" class="form-label">Name *</label>
                                        <input type="text" class="form-control" id="reviewName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="reviewEmail" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="reviewEmail" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="reviewTitle" class="form-label">Review Title *</label>
                                    <input type="text" class="form-control" id="reviewTitle" required>
                                </div>

                                <div class="mb-3">
                                    <label for="reviewText" class="form-label">Your Review *</label>
                                    <textarea class="form-control" id="reviewText" rows="4" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="<https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js>"></script>
    <script>
        // Change main product image
        function changeImage(thumbnail) {
            const mainImage = document.getElementById('mainImage');
            mainImage.src = thumbnail.src;

            // Remove active class from all thumbnails
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.style.borderColor = 'transparent';
            });

            // Add active class to clicked thumbnail
            thumbnail.style.borderColor = '#0d6efd';
        }

        // Quantity functions
        function increaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let currentValue = parseInt(quantityInput.value);
            if (currentValue < parseInt(quantityInput.max)) {
                quantityInput.value = currentValue + 1;
            }
        }

        function decreaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > parseInt(quantityInput.min)) {
                quantityInput.value = currentValue - 1;
            }
        }

        // Add to cart function
        function addToCart() {
            const quantity = document.getElementById('quantity').value;
            const selectedColor = document.querySelector('input[name="color"]:checked').nextElementSibling.textContent;

            // Show success notification
            showNotification(`Added ${quantity} item(s) in ${selectedColor} to cart!`);

            // Here you would typically send this data to your backend
            console.log('Added to cart:', {
                quantity: quantity,
                color: selectedColor
            });
        }

        // Show notification
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'toast-notification';
            notification.innerHTML = `
        <i class="fas fa-check-circle me-2"></i>
        ${message}
    `;

            document.body.appendChild(notification);

            setTimeout(() => {
                notification.style.animation = 'slideIn 0.3s ease-out reverse';
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }

        // Review form submission
        document.getElementById('reviewForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const rating = document.querySelector('input[name="rating"]:checked');
            const name = document.getElementById('reviewName').value;
            const email = document.getElementById('reviewEmail').value;
            const title = document.getElementById('reviewTitle').value;
            const reviewText = document.getElementById('reviewText').value;

            if (!rating) {
                alert('Please select a rating');
                return;
            }

            // Here you would send this data to your backend
            console.log('Review submitted:', {
                rating: rating.value,
                name: name,
                email: email,
                title: title,
                review: reviewText
            });

            showNotification('Thank you for your review!');
            this.reset();
        });

        // Initialize first thumbnail as active
        document.addEventListener('DOMContentLoaded', function () {
            const firstThumbnail = document.querySelector('.thumbnail');
            if (firstThumbnail) {
                firstThumbnail.style.borderColor = '#0d6efd';
            }
        });

    </script>

    <?php include 'footer.php'; ?>