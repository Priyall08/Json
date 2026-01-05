<h2>Login</h2>

<form id="loginForm">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

<p id="msg"></p>

<a href="/json-practical/public/index.php?action=signupForm">Signup</a>

<script>
document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    fetch("/json-practical/public/index.php?action=login", {
        method: "POST",
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("msg").innerText = data.message;
    });
});
</script>
