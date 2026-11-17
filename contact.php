<?php include 'header.php'; ?>
<div class="form-container"><form id="contactForm" class="auth-form">
<h2>Contact Us</h2><div id="contactMsg"></div>
<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>
<input type="text" name="subject" placeholder="Subject" required>
<textarea name="message" rows="5" placeholder="Message" required></textarea>
<button type="submit">Send Message</button></form></div>
<script>
document.getElementById('contactForm').onsubmit = async(e) => {
    e.preventDefault(); const formData = new FormData(e.target);
    const res = await fetch('api/contact_submit.php', {method:'POST', body:formData});
    const data = await res.json(); document.getElementById('contactMsg').innerHTML = `<p class="success">${data.msg}</p>`; e.target.reset();
}
</script><?php include 'footer.php'; ?>