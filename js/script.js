const TAMANHO_PADRAO = 16;

let tamanho = parseInt(
    localStorage.getItem('fonte') || TAMANHO_PADRAO
);

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
    // tamanho = Math.max(12, Math.min(18, tamanho)); // Limites

    let maximo = window.innerWidth >= 1024 ? 18 : 28;

    tamanho = Math.max(12, Math.min(maximo, tamanho));


    document.documentElement.style.fontSize = tamanho + 'px';
    localStorage.setItem('fonte', tamanho);
}












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