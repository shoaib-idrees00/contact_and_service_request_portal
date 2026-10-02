<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request a Service</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<header class="header">

    <div class="container nav-container">

        <h1 class="logo"><a class="logo-a" href="index.php">C & S Request Portal</a></h1>

        <nav>
            <a href="index.php#services">Services</a>
        </nav>

    </div>

</header>


<main>

<section class="form-section">

<div class="container">

<h2>Request a Service</h2>

<form id="serviceForm" action="process.php" method="POST">



    <div class="form-group">

        <label for="full_name">
            Full Name
        </label>

        <input
            type="text"
            id="full_name"
            name="full_name"
        >

        <small class="error" id="nameError"></small>

    </div>


    

    <div class="form-group">

        <label for="email">
            Email
        </label>

        <input
            type="email"
            id="email"
            name="email"
        >

        <small class="error" id="emailError"></small>

    </div>


    

    <div class="form-group">

        <label for="phone">
            Phone Number
        </label>

        <input
            type="number"
            id="phone"
            name="phone"
        >

        <small class="error" id="phoneError"></small>

    </div>


    

    <div class="form-group">

        <label for="service">
            Service
        </label>

        <select id="service" name="service">

            <option value="">Select a service</option>

            <option value="Web Development">
                Web Development
            </option>

            <option value="Digital Marketing">
                Digital Marketing
            </option>

            <option value="SEO">
                SEO
            </option>

            <option value="E-Commerce">
                E-Commerce
            </option>

            <option value="IT Support">
                IT Support
            </option>

        </select>

        <small class="error" id="serviceError"></small>

    </div>




    <div class="form-group">

        <label for="budget">
            Budget
        </label>

        <select id="budget" name="budget">

            <option value="">Select budget</option>

            <option value="$500 - $1,000">
                $500 - $1,000
            </option>

            <option value="$1,000 - $2,500">
                $1,000 - $2,500
            </option>

            <option value="$2,500 - $5,000">
                $2,500 - $5,000
            </option>

            <option value="$5,000+">
                $5,000+
            </option>

        </select>

    </div>


    

    <div class="form-group">

        <label for="description">
            Project Description
        </label>

        <textarea
            id="description"
            name="description"
            rows="6"
        ></textarea>

        <small class="error" id="descriptionError"></small>

    </div>


    

    <div class="form-group">

        <label>
            Preferred Contact Method
        </label>

        <div>

            <label>
                <input
                    type="radio"
                    name="contact_method"
                    value="Email"
                >
                Email
            </label>

            <label>
                <input
                    type="radio"
                    name="contact_method"
                    value="Phone"
                >
                Phone
            </label>

        </div>

        <small class="error" id="contactError"></small>

    </div>


    <button type="submit" class="btn">
        Submit Request
    </button>

</form>

</div>

</section>

</main>


<footer class="footer">

    <div class="container">

        <p>© 2026 C & S Request Portal. All rights reserved.</p>

    </div>

</footer>


<script src="js/validation.js"></script>

</body>

</html>