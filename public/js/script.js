document.getElementById('LoginForm').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'BianAmil'
    const correctPassword = 'bina3004'

    const username = document.getElementById('BianAmil').value;
    const password = document.getElementById('bina3004').value;

    if(username === correctUsername && password === correctPassword){
        alert('Login Berhasil');
        window.location.href ='/home';
    }else{
        alert('Login Gagal');
    }
});