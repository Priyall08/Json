<h2>Signup</h2>

<form id="signupForm">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Signup</button>
</form>

<p id="msg"></p>

<a href="/json-practical/public/index.php?action=loginForm">Login</a>

<script>
document.getElementById("signupForm").addEventListener("submit", function(e) {
    e.preventDefault();

    fetch("/json-practical/public/index.php?action=signup", {
        method: "POST",
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("msg").innerText = data.message;
    });
});
</script>
