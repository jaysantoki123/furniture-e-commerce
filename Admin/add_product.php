<?php include 'header.php'; ?>

<style>
/* Custom error message */
.error-message {
    display: block;
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
    font-weight: 500;
}


</style>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800">Add New Product</h2>
        <a href="products.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i> Back to Products
        </a>
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <form id="addProductForm" action="#" method="POST" enctype="multipart/form-data">

                        <div class="mb-3 position-relative">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name"
                                   placeholder="Enter product name">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 position-relative">
                                <label class="form-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" name="price"
                                           placeholder="0.00" step="0.01">
                                </div>
                            </div>

                            <div class="col-md-6 position-relative">
                                <label class="form-label">Stock Quantity</label>
                                <input type="number" class="form-control" name="stock"
                                       placeholder="0">
                            </div>
                        </div>

                        <div class="mb-3 position-relative">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="category">
                                <option value="">Choose category...</option>
                                <option value="chairs">Chairs</option>
                                <option value="tables">Tables</option>
                                <option value="sofas">Sofas</option>
                                <option value="beds">Beds</option>
                            </select>
                        </div>

                        <div class="mb-3 position-relative">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="4"
                                      placeholder="Enter product description"></textarea>
                        </div>

                        <div class="mb-3 position-relative">
                            <label class="form-label">Product Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status"
                                       value="active" checked>
                                <label class="form-check-label">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status"
                                       value="inactive">
                                <label class="form-check-label">Inactive</label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Save Product
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<script>
$(document).ready(function () {

    $("#addProductForm").validate({

        rules: {
            product_name: {
                required: true,
                minlength: 3
            },
            price: {
                required: true,
                number: true,
                min: 1
            },
            stock: {
                required: true,
                digits: true,
                min: 0
            },
            category: {
                required: true
            },
            description: {
                required: true,
                minlength: 10
            },
            image: {
                required: true,
                extension: "jpg|jpeg|png"
            }
        },

        messages: {
            product_name: {
                required: "Product name is required",
                minlength: "At least 3 characters required"
            },
            price: {
                required: "Price is required",
                number: "Enter a valid price",
                min: "Price must be greater than 0"
            },
            stock: {
                required: "Stock quantity is required",
                digits: "Only whole numbers allowed",
                min: "Stock cannot be negative"
            },
            category: {
                required: "Please select a category"
            },
            description: {
                required: "Description is required",
                minlength: "Minimum 10 characters required"
            },
            image: {
                required: "Product image is required",
                extension: "Only JPG, JPEG, PNG files allowed"
            }
        },

        errorElement: "span",
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
            alert("Product validated successfully ✔");
            // form.submit(); // enable when backend is ready
        }
    });

});
</script>

<?php include 'footer.php'; ?>
