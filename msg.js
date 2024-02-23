const form = document.querySelector('.input-msg'),
sendBtn = form.querySelector(".vamos"),
chatBox = document.querySelector(".msg-space"),
inputField = form.querySelector(".inputx");

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
            xhr.open("POST", "insert-chat.php", true);
            xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        inputField.value = "";
                        scrollBottom();
                    }
                }
            }
            let formData = new FormData(form);
            xhr.send(formData);
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add('active');
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove('active');
}

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'get-chat.php', true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;

                if(!chatBox.classList.contains('active')){
                    scrollBottom();
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);

function scrollBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
    console.log(chatBox.scrollTop);
}