let user = localStorage.getItem('chat_bot_token_for_unauthorized_user')
if(!user)
{
    generateToken();
}

function generateToken()
{
    let url = "/api/generate/token/user"
    fetch(url, {})
        .then(response => response.json())
        .then(data => {
            localStorage.setItem('chat_bot_token_for_unauthorized_user', data.token);
        });
}
