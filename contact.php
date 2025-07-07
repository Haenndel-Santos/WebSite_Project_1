<?php include 'includes/header.php'; ?>

<div class="page-hero">
    <h1>Contact Us</h1>
    <p>Have a project in mind or need more information? Let’s talk — we’re here to support your goals.</p>
</div>

<div class="page-content">
    <div class="page-section">
        <h2>Get in Touch</h2>
        <p>Use the form below or contact us directly. Our team will get back to you as soon as possible.</p>

        <form action="mailto:info@mail.com" method="post" enctype="text/plain" class="contact-form">
            <label for="name">Name*</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email*</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject">

            <label for="message">Message*</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit" class="page-btn">Send Message</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/bottombar.php'; ?>
