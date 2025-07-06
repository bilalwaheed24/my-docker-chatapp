let currentUser = "";

function signup() {
  const username = document.getElementById("username").value;
  fetch("/signup.php", {
    method: "POST",
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ username })
  }).then(res => res.text()).then(data => {
    currentUser = username;
    document.getElementById("signup").style.display = "none";
    document.getElementById("chat").style.display = "block";
    document.getElementById("user").innerText = currentUser;
    setInterval(loadMessages, 2000);
  });
}

function sendMessage() {
  const receiver = document.getElementById("receiver").value;
  const message = document.getElementById("message").value;
  fetch("/send_message.php", {
    method: "POST",
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ sender: currentUser, receiver, message })
  });
}

function loadMessages() {
  fetch("/get_messages.php")
    .then(res => res.json())
    .then(data => {
      const messagesDiv = document.getElementById("messages");
      messagesDiv.innerHTML = "";
      data.forEach(msg => {
        messagesDiv.innerHTML += `<p><strong>${msg.sender}</strong> to <strong>${msg.receiver}</strong>: ${msg.message}</p>`;
      });
    });
}
