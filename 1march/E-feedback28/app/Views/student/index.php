<?= $this->extend('layout/student') ?>
<?= $this->section("content") ?>
    <div class="container">
		<h1>Instructions</h1>
		<p>Welcome to our website! Here are some instructions to help you get started:</p>
		<ol>
			<li>Step 1: Click the "Sign up" button to create an account.</li>
			<li>Step 2: Once you've created an account, log in using your email and password.</li>
			<li>Step 3: Browse our products and add items to your cart.</li>
			<li>Step 4: When you're ready to checkout, click the "Checkout" button and enter your shipping and payment information.</li>
			<li>Step 5: Review your order and click "Confirm" to complete your purchase.</li>
		</ol>
		<p>If you have any questions or issues, please contact our customer support team at support@website.com.</p>
		<button id="start-button" href="">Get Started</button>
	</div>
	
<style>
 .container {
	margin: 50px auto;
	padding: 20px;
	max-width: 800px;
	text-align: center;
	background-color: #f2f2f2;
	border: 1px solid #ccc;
}

h1 {
	font-size: 36px;
	margin-bottom: 20px;
}

ol {
	text-align: left;
	margin-left: 50px;
}

button {
	padding: 10px 20px;
	font-size: 24px;
	background-color: #007bff;
    margin-top:10px;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: background-color 0.3s ease-in-out;
}

button:hover {
	background-color: #0056b3;
}

</style>
<script>
    document.getElementById("start-button").addEventListener("click", function() {
	alert("Let's get started!");
    window.location.href = "<?php echo base_url('theoryFeedback');?>";
});

</script>
<?= $this->endSection() ?>
