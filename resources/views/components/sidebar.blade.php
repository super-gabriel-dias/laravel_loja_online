<!-- Crie um botão com o ícone de menu que aciona a sidebar -->
<button style="z-index: 999" id="botao-sidebar" type="button" class="btn btn-outline-dark position-fixed" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
    aria-controls="sidebar">
    <span class="navbar-toggler-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </span>
</button>

<!-- Crie uma sidebar com a classe offcanvas que tem a cor preta, letras brancas e detalhes em laranja -->
<div class="offcanvas offcanvas-start bg-black text-white" id="sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarLabel">Sidebar</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul id="link-laranja" class="list-group list-group-flush">
            <li class="list-group-item bg-black"><a href="#" class="text-decoration-none">Home</a></li>
            <li class="list-group-item bg-black"><a href="#" class="text-decoration-none">About</a></li>
            <li class="list-group-item bg-black"><a href="#" class="text-decoration-none">Contact</a>
        </ul>
    </div>
</div>

<!-- Adicione um estilo CSS para mudar a cor das letras para laranja quando o mouse passar por cima -->
