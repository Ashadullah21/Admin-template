document.addEventListener('DOMContentLoaded', () => {
    const chatInput = document.getElementById('chatInput');
    const btnSend = document.getElementById('btnSend');
    const chatMessages = document.getElementById('chatMessages');
    const inputContainer = document.getElementById('inputContainer');

    if (!chatInput || !btnSend || !chatMessages || !inputContainer) return;

    chatInput.addEventListener('focus', () => inputContainer.classList.add('focused'));
    chatInput.addEventListener('blur', () => inputContainer.classList.remove('focused'));

    function scrollToBottom() {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    scrollToBottom();

    function sendMessage() {
        const text = chatInput.value.trim();
        if(!text) return;

        const time = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
        
        const html = `
        <div class="message-wrapper sent" style="opacity: 0; transform: translateY(10px); animation: fadeIn 0.3s forwards;">
            <div class="message sent">${text}</div>
            <div class="message-time">${time} <i class="bi bi-check2 text-muted ms-1"></i></div>
        </div>`;
        
        chatMessages.insertAdjacentHTML('beforeend', html);
        chatInput.value = '';
        scrollToBottom();
        
        // Simulate reply
        setTimeout(() => {
            const replyTime = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
            const replyHtml = `
            <div class="message-wrapper received" style="opacity: 0; transform: translateY(10px); animation: fadeIn 0.3s forwards;">
                <div class="message received">Thanks, I'll take a look at it soon. Let me know if you need any help!</div>
                <div class="message-time">${replyTime}</div>
            </div>`;
            chatMessages.insertAdjacentHTML('beforeend', replyHtml);
            scrollToBottom();
        }, 1500);
    }

    btnSend.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
});

function switchChat(name, status, avatarSrc) {
    document.querySelectorAll('.chat-item').forEach(item => item.classList.remove('active'));
    event.currentTarget.classList.add('active');
    
    document.getElementById('header-name').innerText = name;
    document.getElementById('header-avatar').src = avatarSrc;
    
    const statusText = document.getElementById('header-status-text');
    const statusDot = document.getElementById('header-status-dot');
    
    if (status === 'online') {
        statusText.innerText = 'Active now';
        statusDot.className = 'position-absolute bottom-0 end-0 p-1 bg-success border border-white rounded-circle';
    } else {
        statusText.innerText = 'Offline';
        statusDot.className = 'position-absolute bottom-0 end-0 p-1 bg-secondary border border-white rounded-circle';
    }
}
