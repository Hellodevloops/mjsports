<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJ-Sports Premium Jersey Customization</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">

    <!-- ************************* CSS ************************* -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-9a26f71a0382097754e89a94b43cf564.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-light.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-light.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-light.css">

    <!-- IcoFont CSS -->
    <link href="assets/css/icon-font.min.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        :root {
            --primary-color: #1a5f7a;
            --secondary-color: #2d8bac;
            --accent-color: #f8f9fa;
        }

        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
        }

        .form-control,
        .form-select {
            padding: 0.75rem 1rem;
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(26, 95, 122, 0.1);
            border-color: var(--primary-color);
        }

        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .card {
            border: none;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            background: white;
        }

        .section-header {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
            color: var(--primary-color);
        }

        .section-header::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        .input-group-text {
            background-color: var(--accent-color);
            border-color: #dee2e6;
        }

        .btn-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
            padding: 0.8rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 95, 122, 0.2);
        }

        .form-icon {
            color: var(--primary-color);
            margin-right: 0.5rem;
        }

        .progress-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3rem;
        }

        .progress-step {
            text-align: center;
            position: relative;
            flex: 1;
        }

        .step-number {
            width: 35px;
            height: 35px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.5rem;
            color: var(--primary-color);
            font-weight: 600;
            border: 2px solid var(--primary-color);
        }

        .field-group {
            background: var(--accent-color);
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .hover-lift {
            transition: transform 0.2s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
        }

        .upload-zone {
            border: 2px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            text-align: center;
            background-color: #fff;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .upload-zone:hover {
            border-color: var(--bs-primary);
            background-color: rgba(var(--bs-primary-rgb), 0.03);
        }

        .upload-icon {
            font-size: 2rem;
            color: #6c757d;
            margin-bottom: 1rem;
        }

        .preview-image {
            max-width: 100%;
            max-height: 150px;
            border-radius: 0.375rem;
            display: none;
        }

        .file-info {
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #6c757d;
        }

        .upload-progress {
            display: none;
            margin-top: 1rem;
        }

        .remove-file {
            display: none;
            margin-top: 0.5rem;
        }
    </style>
</head>

<body>

    <!--=============================
	=            Header             =
	==============================-->

    <header>
        <!-- header top nav -->
        <div class="header-top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- user information menu -->
                        <div class="user-information-menu">
                            <ul>
                                <li><i class="fa fa-phone"></i> 08141273565 <span class="separator">|</span></li>
                                <li><i class="fa fa-location-dot"></i> GF-10, Kanha Dreams, Opp. Lakulesh-1, Ajwa Rd,
                                    Kamlanagar, Vadodara, Gujarat 390019<span class="separator">|</span></li>
                                <li><i class="fa-solid fa-envelope"></i> Mjsports@gmail.com <span
                                        class="separator">|</span></li>
                            </ul>
                        </div>
                        <!-- end of user information menu -->
                    </div>

                </div>
            </div>
        </div>
        <!-- end of header top nav -->


        <!-- header navigation menu -->
        <nav class="header-navigation black-bg">
            <div class="container px-0">
                <div class="navigation-container mb-0 p-0">
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html"><img width="70px" src="assets/images/logo-mj.png"
                                        class="img-fluid p-0 m-0" alt="logo"></a>
                            </div>
                            <!-- end of logo -->
                        </div>
                        <div class="col-lg-9 col-md-12 my-auto">

                            <!-- Header navigation right side-->

                            <!-- main menu start -->
                            <div class="main-menu">
                                <nav>
                                    <ul class="" >
                                        <li class="active "><a href="{{ route('home') }}">Home</a> </li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('jersey') }}">Custom Jersey</a></li>
                                        <!-- <li class=""><a href="shop.html">Shop</a> </li> -->
                                        <li class=""><a href="{{ route('blog.index') }}">Blog</a></li>
                                        <li class=""><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>

                                <!-- Mobile Menu -->
                                <div class="mobile-menu order-12 d-block col d-lg-none"></div>

                            </div>

                            <!-- end of Header navigation right side-->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end of header navigation menu -->

    </header>
    <!--====  End of Header   ====-->

    <div class="container py-5">
        <!-- Header Section -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-dark mb-3">Premium Jersey Customization</h1>
            <p class="lead text-muted mb-15">Create your personalized sportswear with professional craftsmanship</p>
        </div>

        <!-- Main Form Section -->
        <div class="card rounded-4 p-4 p-md-5">
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <form id="order-form" method="POST" action="{{ route('jerseys.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Personal Information Section -->
           <!-- Personal Information Section -->
           <div class="container">
            <div class="card p-4 shadow-sm">
                <h3 class="section-header">Personal Information</h3>

                <div id="personal-info-section">
                    <div class="row g-4 personal-entry">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><i class="fas fa-user form-icon"></i> First Name</label>
                                <input type="text" class="form-control hover-lift" name="first_name"
                                    value="{{ old('first_name') }}" placeholder="Enter your first name" required>
                                @error('first_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><i class="fas fa-user form-icon"></i> Last Name</label>
                                <input type="text" class="form-control hover-lift" name="last_name"
                                    value="{{ old('last_name') }}" placeholder="Enter your last name" required>
                                @error('last_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><i class="fas fa-envelope form-icon"></i> Email</label>
                                <input type="email" class="form-control hover-lift" name="email"
                                    value="{{ old('email') }}" placeholder="your@email.com" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><i class="fas fa-phone form-icon"></i> Mobile Number</label>
                                <input type="tel" class="form-control hover-lift" name="mobile_number"
                                    value="{{ old('mobile_number') }}" placeholder="Enter your mobile number" required>
                                @error('mobile_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add More Personal Info Button -->
                {{-- <button type="button" class="btn btn-outline-primary mt-3 px-4 py-2 shadow-sm rounded-pill" onclick="addPersonalInfo()">
                    <i class="fas fa-user-plus me-2"></i> Add More Personal Info
                </button> --}}
            </div>
        </div>


            <!-- Jersey Details Section -->
            <div class="container">
                <div class="card p-4 shadow-sm">
                    <h3 class="section-header">Jersey Specifications</h3>

                    <div id="jersey-specifications">
                        <div class="row g-3 jersey-entry align-items-end">
                            <div class="col-md-3">
                                <div class="form-group px-2 py-2">
                                    <label class="form-label">
                                        <i class="fas fa-user form-icon"></i> Name
                                    </label>
                                    <input type="text" class="form-control hover-lift" name="jersey_name[]" placeholder="Enter Name" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group px-2 py-2">
                                    <label class="form-label">
                                        <i class="fas fa-ruler form-icon"></i> Jersey Size
                                    </label>
                                    <select class="form-select hover-lift" name="jersey_size[]" required>
                                        <option value="S">Small</option>
                                        <option value="M">Medium</option>
                                        <option value="L">Large</option>
                                        <option value="XL">X-Large</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group px-2 py-2">
                                    <label class="form-label">
                                        <i class="fas fa-tshirt form-icon"></i> Material Choice
                                    </label>
                                    <select class="form-select hover-lift" name="material_choice[]" required>
                                        <option value="polyester">Premium Polyester</option>
                                        <option value="nylon">Performance Nylon</option>
                                        <option value="spandex">Elite Spandex</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group px-2 py-2">
                                    <label class="form-label">
                                        <i class="fas fa-tshirt form-icon"></i> Sleeves
                                    </label>
                                    <select class="form-select hover-lift" name="sleeves[]" required>
                                        <option value="half">Half Sleeves</option>
                                        <option value="full">Full Sleeves</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group px-2 py-2">
                                    <label class="form-label">
                                        <i class="fas fa-sort-numeric-up form-icon"></i> Number
                                    </label>
                                    <input type="number" class="form-control hover-lift" name="number[]" placeholder="Enter Number">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-success mt-3 px-4 py-2 shadow-sm rounded-pill" onclick="addJerseySpec()">
                        <i class="fas fa-tshirt me-2"></i> Add More Jersey
                    </button>
                </div>


                <!-- Logo Upload Section -->
                <div class="card p-4 mt-4 shadow-sm">
                    <h4 class="mb-3">Logo Details</h4>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-palette form-icon"></i> Left Chest Logo (Text)
                                </label>
                                <input type="text" class="form-control hover-lift" name="left_logo"
                                    value="{{ old('left_logo') }}" placeholder="Enter left chest logo details">
                                @error('left_logo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">
                                    <i class="fas fa-upload form-icon"></i> Upload Left Chest Logo (Image)
                                </label>
                                <input type="file" class="form-control hover-lift" name="left_chest_logo_image" accept="image/*">
                                @error('left_chest_logo_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="fas fa-palette form-icon"></i> Right Chest Logo (Text)
                                </label>
                                <input type="text" class="form-control hover-lift" name="right_logo"
                                    value="{{ old('right_logo') }}" placeholder="Enter right chest logo details">
                                @error('right_logo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">
                                    <i class="fas fa-upload form-icon"></i> Upload Right Chest Logo (Image)
                                </label>
                                <input type="file" class="form-control hover-lift" name="right_chest_logo_image" accept="image/*">
                                @error('right_chest_logo_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="field-group">
                <h3 class="section-header">Additional Information</h3>
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-font form-icon"></i>Team Name</label>
                    <input type="text" class="form-control hover-lift" name="team_name"
                        value="{{ old('team_name') }}" placeholder="Enter name or team name">
                    @error('team_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-shapes form-icon"></i> Choose Your Pattern
                        <a href="{{ asset('almighty.pdf') }}" target="_blank">(View Patterns)</a>
                    </label>
                    <input type="text" class="form-control hover-lift" name="patterns"
                        value="{{ old('patterns') }}" placeholder="Input the pattern number here">
                    @error('patterns')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label"><i class="fas fa-message form-icon"></i>Special Instructions</label>
                    <textarea class="form-control hover-lift" name="special_instructions" rows="4"
                        placeholder="Enter any special instructions for the tailor...">{{ old('special_instructions') }}</textarea>
                    @error('special_instructions')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-end">
                <button type="submit" class="btn btn-custom btn-lg" onclick="downloadFormData()">
                    <i class="fas fa-download me-2"></i>Save and Download
                </button>
                {{-- <button type="button" class="btn btn-custom btn-lg" onclick="downloadFormData()">
                    <i class="fas fa-download me-2"></i>Download PDF
                </button> --}}
            </div>
        </form>



        </div>
    </div>

    <!--============================
            =            footer            =
            =============================-->

    <footer>
        <div class="container-fluid bg-black p-5">
            <!-- footer navigation -->
            <div class="footer-navigation section-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-4 ">
                        <!-- footer description -->
                        <div class="footer-description">
                            <div class="footer-logo text-center">
                                <img width="167" height="69" src="assets/images/logo-mj.png" alt="">
                            </div>
                            <div class="text-center">
                                <p class="text-wrap mb-1 "><i class="fa fa-phone"></i> 08141273565 <span
                                        class="separator"></span> </p>
                                <p class="text-wrap mb-1 "><i class="fa fa-location-dot"></i> GF-10, Kanha Dreams, Opp.
                                    Lakulesh-1, Ajwa Rd,
                                    Kamlanagar, Vadodara, Gujarat 390019<span class="separator"></span>
                                </p>
                                <p class="text-wrap mb-1 "> <i class="fa-solid fa-envelope"></i> Mjsports@gmail.com</p>
                            </div>
                        </div>
                        <!-- end of footer description -->
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <!-- footer nav links -->
                        <div class="row ">
                            <div class="col-lg-3 col-md-6">
                                <!-- single footer nav block -->
                                <div class="single-footer-nav-block">
                                    <h2 class="block-title">OUR SERVICES</h2>
                                    <ul class="footer-nav-links">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About US</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                    </ul>
                                </div>
                                <!-- end of single footer nav block -->
                            </div>
                            {{-- <div class="col-lg-3 col-md-6">
                                <!-- single footer nav block -->
                                <div class="single-footer-nav-block">
                                    <h2 class="block-title">OUR SERVICES</h2>
                                    <ul class="footer-nav-links">
                                        <li><a href="store.html">Our Stores</a></li>
                                        <li><a href="about.html">Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                    </ul>
                                </div>
                                <!-- end of single footer nav block -->
                            </div> --}}
                            {{-- <div class="col-lg-3 col-md-6">
                                <!-- single footer nav block -->
                                <div class="single-footer-nav-block">
                                    <h2 class="block-title">CATEGORIES</h2>
                                    <ul class="footer-nav-links">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="jersey.html">Oder Our Jersey</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Visit Us</a></li>
                                    </ul>
                                </div>
                                <!-- end of single footer nav block -->
                            </div> --}}
                        </div>
                        <!-- end of footer nav links -->

                    </div>
                </div>
            </div>
            <!-- end of footer navigation -->

            <!-- copyright section -->
            <div class="copyright-section">
                <div class="copyright-container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="copyright-text text-center text-md-start">Copyright &copy; 2025 <a
                                    href="#">Devloops</a>.
                                All Rights Reserved</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="payment-logos text-md-end text-center">
                                <img width="252" height="28" src="assets/images/payment.webp" alt="payment logo">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of copyright section -->
            </div>
        </div>
    </footer>

    <!--====  End of footer  ====-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        function downloadFormData() {
            const formData = new FormData(document.getElementById('order-form'));
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            let formContent = '';
            formData.forEach((value, key) => {
                formContent += `${key}: ${value}\n`;
            });
            doc.text(formContent, 10, 10);
            doc.save('order-details.pdf');
        }
    </script>
       <script>
        function downloadFormData() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            let marginX = 15; // Left margin
            let y = 20; // Initial vertical position

            // 🔹 Add Document Header
            doc.setFont("helvetica", "bold");
            doc.setFontSize(18);
            doc.text("Jersey Order Details", 105, y, { align: "center" });
            doc.setLineWidth(0.5);
            doc.line(15, y + 5, 195, y + 5); // Underline
            y += 15;

            // 🔹 Extract Form Data
            let formData = [];

            document.querySelectorAll("#order-form input, #order-form select, #order-form textarea").forEach(input => {
                if (input.type !== "hidden") {
                    formData.push({ name: input.name.replace(/_/g, " "), value: input.value || "N/A" });
                }
            });

            // 🔹 Table Styling
            let colWidths = [60, 120]; // Column widths
            let rowHeight = 8;
            let tableStartY = y;

            // 🔹 Table Header
            doc.setFont("helvetica", "bold");
            doc.setFillColor(230, 230, 230); // Light gray background
            doc.rect(marginX, tableStartY, colWidths[0], rowHeight, "F"); // Field Name Column
            doc.rect(marginX + colWidths[0], tableStartY, colWidths[1], rowHeight, "F"); // Value Column
            doc.text("Field", marginX + 5, tableStartY + 5);
            doc.text("Value", marginX + colWidths[0] + 5, tableStartY + 5);
            y += rowHeight;

            // 🔹 Table Content
            doc.setFont("helvetica", "normal");
            formData.forEach((item, index) => {
                let rowY = y + (index * rowHeight);

                // Add table borders
                doc.rect(marginX, rowY, colWidths[0], rowHeight);
                doc.rect(marginX + colWidths[0], rowY, colWidths[1], rowHeight);

                // Add Field Name
                doc.text(item.name, marginX + 5, rowY + 5);

                // Add Field Value
                doc.text(item.value, marginX + colWidths[0] + 5, rowY + 5);
            });

            // 🔹 Save as PDF
            doc.save("Jersey_Order_Details.pdf");
        }
    </script>

    <script>
        function triggerFileInput(inputId) {
            document.getElementById(inputId).click();
        }

        function handleFileSelect(input, previewId, infoId, progressId, removeId) {
            const file = input.files[0];
            if (file) {
                // Show progress bar
                const progressElement = document.getElementById(progressId);
                const progressBar = progressElement.querySelector('.progress-bar');
                progressElement.style.display = 'block';

                // Simulate upload progress
                let progress = 0;
                const interval = setInterval(() => {
                    progress += 10;
                    progressBar.style.width = `${progress}%`;
                    if (progress >= 100) {
                        clearInterval(interval);
                        setTimeout(() => {
                            progressElement.style.display = 'none';
                            showPreview(file, previewId, infoId, removeId);
                        }, 400);
                    }
                }, 100);
            }
        }

        function showPreview(file, previewId, infoId, removeId) {
            const preview = document.getElementById(previewId);
            const info = document.getElementById(infoId);
            const remove = document.getElementById(removeId);
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                info.textContent = `${file.name} (${formatFileSize(file.size)})`;
                remove.style.display = 'inline-block';

                // Hide the upload icon and text
                preview.parentElement.querySelector('.upload-icon').style.display = 'none';
                preview.parentElement.querySelector('.upload-text').style.display = 'none';
            }

            reader.readAsDataURL(file);

            // Setup remove button
            document.getElementById(removeId).onclick = function (e) {
                e.stopPropagation();
                resetUpload(previewId, infoId, removeId);
                document.getElementById(previewId.replace('Preview', 'Input')).value = '';
            }
        }

        function resetUpload(previewId, infoId, removeId) {
            const preview = document.getElementById(previewId);
            const info = document.getElementById(infoId);
            const remove = document.getElementById(removeId);
            const uploadZone = preview.parentElement;

            preview.style.display = 'none';
            preview.src = '';
            info.textContent = '';
            remove.style.display = 'none';

            // Show the upload icon and text again
            uploadZone.querySelector('.upload-icon').style.display = 'block';
            uploadZone.querySelector('.upload-text').style.display = 'block';
        }

        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        // Setup drag and drop
        ['leftLogoZone', 'rightLogoZone'].forEach(zoneId => {
            const zone = document.getElementById(zoneId);

            zone.addEventListener('dragover', (e) => {
                e.preventDefault();
                zone.classList.add('border-primary');
            });

            zone.addEventListener('dragleave', (e) => {
                e.preventDefault();
                zone.classList.remove('border-primary');
            });

            zone.addEventListener('drop', (e) => {
                e.preventDefault();
                zone.classList.remove('border-primary');

                const file = e.dataTransfer.files[0];
                const input = document.getElementById(zoneId.replace('Zone', 'Input'));
                const previewId = zoneId.replace('Zone', 'Preview');
                const infoId = zoneId.replace('Zone', 'Info');
                const progressId = zoneId.replace('Zone', 'Progress');
                const removeId = zoneId.replace('Zone', 'Remove');

                if (file && file.type.startsWith('image/')) {
                    input.files = e.dataTransfer.files;
                    handleFileSelect(input, previewId, infoId, progressId, removeId);
                }
            });
        });
    </script>
   <script>
    // function addPersonalInfo() {
    //     let newPersonalEntry = document.createElement("div");
    //     newPersonalEntry.classList.add("row", "g-4", "personal-entry");
    //     newPersonalEntry.innerHTML = `
    //         <div class="col-md-6">
    //             <div class="form-group">
    //                 <label class="form-label"><i class="fas fa-user form-icon"></i> First Name</label>
    //                 <input type="text" class="form-control hover-lift" name="first_name[]"
    //                     placeholder="Enter your first name" required>
    //             </div>
    //         </div>
    //         <div class="col-md-6">
    //             <div class="form-group">
    //                 <label class="form-label"><i class="fas fa-user form-icon"></i> Last Name</label>
    //                 <input type="text" class="form-control hover-lift" name="last_name[]"
    //                     placeholder="Enter your last name" required>
    //             </div>
    //         </div>
    //         <div class="col-md-6">
    //             <div class="form-group">
    //                 <label class="form-label"><i class="fas fa-envelope form-icon"></i> Email</label>
    //                 <input type="email" class="form-control hover-lift" name="email[]"
    //                     placeholder="your@email.com" required>
    //             </div>
    //         </div>
    //         <div class="col-md-6">
    //             <div class="form-group">
    //                 <label class="form-label"><i class="fas fa-phone form-icon"></i> Mobile Number</label>
    //                 <input type="tel" class="form-control hover-lift" name="mobile_number[]"
    //                     placeholder="Enter your mobile number" required>
    //             </div>
    //         </div>
    //     `;
    //     document.getElementById("personal-info-section").appendChild(newPersonalEntry);
    // }

    function addJerseySpec() {
        let newJerseyEntry = document.createElement("div");
        newJerseyEntry.classList.add("row", "g-4", "jersey-entry");
        newJerseyEntry.innerHTML = `
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-user form-icon"></i> Name</label>
                    <input type="text" class="form-control hover-lift" name="jersey_name[]" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-ruler form-icon"></i> Jersey Size</label>
                    <select class="form-select hover-lift" name="jersey_size[]" required>
                        <option value="S">Small</option>
                        <option value="M">Medium</option>
                        <option value="L">Large</option>
                        <option value="XL">X-Large</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-tshirt form-icon"></i> Material Choice</label>
                    <select class="form-select hover-lift" name="material_choice[]" required>
                        <option value="polyester">Premium Polyester</option>
                        <option value="nylon">Performance Nylon</option>
                        <option value="spandex">Elite Spandex</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-tshirt form-icon"></i> Sleeves</label>
                    <select class="form-select hover-lift" name="sleeves[]" required>
                        <option value="half">Half Sleeves</option>
                        <option value="full">Full Sleeves</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-sort-numeric-up form-icon"></i> Number</label>
                    <input type="number" class="form-control hover-lift" name="number[]" placeholder="Enter Number">
                </div>
            </div>
        `;
        document.getElementById("jersey-specifications").appendChild(newJerseyEntry);
    }
</script>

</body>

</html>
