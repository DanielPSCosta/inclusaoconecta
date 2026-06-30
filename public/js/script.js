// const TAMANHO_PADRAO = 16;

// let tamanho = parseInt(
//     localStorage.getItem('fonte') || TAMANHO_PADRAO
// );

// aplicarFonte();

// document.getElementById('aumentar').onclick = () => {
//     tamanho += 2;
//     aplicarFonte();
// };

// document.getElementById('diminuir').onclick = () => {
//     tamanho -= 2;
//     aplicarFonte();
// };

// document.getElementById('resetar').onclick = () => {
//     tamanho = TAMANHO_PADRAO;
//     aplicarFonte();
// };

// function aplicarFonte() {
//     // tamanho = Math.max(12, Math.min(18, tamanho)); // Limites

//     let maximo = window.innerWidth >= 1024 ? 18 : 24; // Limites
//     tamanho = Math.max(12, Math.min(maximo, tamanho));


//     document.documentElement.style.fontSize = tamanho + 'px';
//     localStorage.setItem('fonte', tamanho);
// }

const TAMANHO_PADRAO = 16;

let tamanho = parseInt(localStorage.getItem('fonte') || TAMANHO_PADRAO);

aplicarFonte();

document.getElementById('aumentar').onclick = () => {
    tamanho += 2;
    aplicarFonte();
};

document.getElementById('diminuir').onclick = () => {
    tamanho -= 2;
    aplicarFonte();
};

document.getElementById('resetar').onclick = () => {
    tamanho = TAMANHO_PADRAO;
    aplicarFonte();
};

function aplicarFonte() {
    // Limites responsivos baseados na largura da tela
    const largura = window.innerWidth;
    
    let maximo;
    if (largura >= 1200) {
        maximo = 20;      // Desktop grande
    } else if (largura >= 768) {
        maximo = 22;      // Tablet / Desktop médio
    } else {
        maximo = 26;      // Celular
    }

    tamanho = Math.max(12, Math.min(maximo, tamanho));

    // Aplica no <html>
    document.documentElement.style.fontSize = `${tamanho}px`;
    
    // Salva
    localStorage.setItem('fonte', tamanho);
}

// Atualiza os limites quando a janela for redimensionada
window.addEventListener('resize', () => {
    aplicarFonte();
});

//////////////////
// Chamada css ///
//////////////////
function carregarCSS() {
    // Verifica se o CSS já foi carregado para evitar duplicar
    if (document.getElementById('css-letra')) return;

    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = '../css/letra.css';
    link.id = 'css-letra';        // id para identificar depois
    link.type = 'text/css';
    
    document.head.appendChild(link);
}

// Chame a função quando quiser carregar o CSS
carregarCSS();







































///////////////////////////////////////////////////////////
// Botão para instalar app que aparece no inicio da tela //
///////////////////////////////////////////////////////////
// let deferredPrompt;

// window.addEventListener('beforeinstallprompt', (e) => {
//     e.preventDefault();
//     deferredPrompt = e;

//     const toast = new bootstrap.Toast(
//         document.getElementById('installToast'),
//         {
//             autohide: false
//         }
//     );

//     toast.show();
// });

// document.getElementById('btnInstalar').addEventListener('click', async () => {

//     if (!deferredPrompt) return;

//     deferredPrompt.prompt();

//     await deferredPrompt.userChoice;

//     deferredPrompt = null;
// });

// document.getElementById('btnFecharToast').addEventListener('click', () => {

//     const toast = bootstrap.Toast.getInstance(
//         document.getElementById('installToast')
//     );

//     if (toast) {
//         toast.hide();
//     }
// });

// window.addEventListener('appinstalled', () => {

//     const toast = bootstrap.Toast.getInstance(
//         document.getElementById('installToast')
//     );

//     if (toast) {
//         toast.hide();
//     }

//     localStorage.setItem('app_instalado', 'true');
// });

let deferredPrompt;

const toastElement = document.getElementById('installToast');

const toast = new bootstrap.Toast(toastElement, {
    autohide: false
});

const isIOS = /iphone|ipad|ipod/i.test(navigator.userAgent);

const isStandalone =
    window.matchMedia('(display-mode: standalone)').matches ||
    window.navigator.standalone;

// iPhone
if (isIOS && !isStandalone) {

    document.getElementById('iosInstall').style.display = 'block';

    toast.show();
}

// Android / Chrome
window.addEventListener('beforeinstallprompt', (e) => {

    if (localStorage.getItem('app_instalado') === 'true') {
        return;
    }

    e.preventDefault();

    deferredPrompt = e;

    document.getElementById('androidInstall').style.display = 'block';

    toast.show();
});

document.getElementById('btnInstalar').addEventListener('click', async () => {

    if (!deferredPrompt) return;

    deferredPrompt.prompt();

    const { outcome } = await deferredPrompt.userChoice;

    if (outcome === 'accepted') {
        toast.hide();
    }

    deferredPrompt = null;
});

document.getElementById('btnFecharToast').addEventListener('click', () => {
    toast.hide();
});

document.getElementById('btnFecharToastIOS').addEventListener('click', () => {
    toast.hide();
});

window.addEventListener('appinstalled', () => {

    localStorage.setItem('app_instalado', 'true');

    toast.hide();

    console.log('Aplicativo instalado!');
});