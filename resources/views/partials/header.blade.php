
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nvidia</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <meta name ="csrf-token" content="{{ csrf_token() }}">
</head>

 <header class="main">
      <div class="halfmain">
        <div class="left-container">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/NVIDIA_logo.svg/1200px-NVIDIA_logo.svg.png" alt="">
            <button class="div-button"><span>Prodotti</span></button>                
            <button class="div-button"><span>Soluzioni</span></button>
            <button class="div-button"><span>Industries</span></button>
        </div>


        <div class="right-container">
            <button class="div-button"><span>Acquista</span></button>
            <button class="div-button"><span>Drivers</span></button>
            <button class="div-button"><span>Assistenza</span></button>
            <button class="cart" id="cartToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 35 24" fill="black">
                    <path d="M7 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm11.8-2.4c-.3-.4-.7-.6-1.2-.6H8.1l-.9-2H18c.8 0 1.5-.5 1.8-1.2l2.7-6c.2-.5.2-1.1-.1-1.6-.3-.5-.9-.8-1.4-.8H5.2l-.9-2H1v2h2l3.6 7.6-1.4 2.4C4.5 15.8 5.2 17 6.2 17h12c.6 0 1-.4 1-1 0-.2-.1-.5-.2-.6zM17 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                </svg>
                <span class="cart-count">0</span> 
            </button>
        </div>
            
        
      </div>
    </header>
</html>
