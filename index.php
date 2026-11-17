<?php include 'header.php'; ?>
<div class="main-wrapper"><div class="chat-container">
<div class="chat-header"><img src="images/bot.png"><div><h3>College Enquiry Bot</h3><span class="status">Online</span></div></div>
<div class="chat-box" id="chatBox">
<div class="message bot"><img src="images/bot.png" class="avatar"><div class="bubble">Hi! Select a question from the dropdown below to get started.</div></div>
</div>
<div class="chat-controls">
<select id="questionSelect">
<option value="">Choose option... click three dots</option>
<option value="Hello">Hello</option>
<option value="Admission procedures and requirements">Admission procedures and requirements</option>
<option value="Accepted payment options for fees">Accepted payment options for fees</option>
<option value="Availability and activities of clubs or student organizations">Availability and activities of clubs or student organizations</option>
<option value="Academic calendar">Academic calendar</option>
<option value="Description of the campus">Description of the campus</option>
</select>
<button id="sendBtn" class="btn-send">Send</button>
<button id="clearBtn" class="btn-clear">Clear</button>
</div></div></div>
<script>
let sessionId = localStorage.getItem('chatSession') || 'sess_' + Date.now();
localStorage.setItem('chatSession', sessionId);
const chatBox = document.getElementById('chatBox'), select = document.getElementById('questionSelect');
function addMessage(text, sender) {
    const msgDiv = document.createElement('div'); msgDiv.className = `message ${sender}`;
    const avatar = sender === 'bot' ? 'images/bot.png' : 'images/user.png';
    msgDiv.innerHTML = `<img src="${avatar}" class="avatar"><div class="bubble">${text}</div>`;
    chatBox.appendChild(msgDiv); chatBox.scrollTop = chatBox.scrollHeight;
}
document.getElementById('sendBtn').onclick = async() => {
    const message = select.value; if(!message) return alert('Please select a question');
    addMessage(message, 'user');
    const res = await fetch('api/chatbot.php', {method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({sessionId, message})});
    const data = await res.json(); setTimeout(() => addMessage(data.reply, 'bot'), 400); select.value = '';
};
document.getElementById('clearBtn').onclick = () => { chatBox.innerHTML = ''; addMessage('Chat cleared. Select a question to start again.', 'bot'); };
</script>
<?php include 'footer.php'; ?>