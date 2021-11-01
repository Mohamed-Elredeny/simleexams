importScripts('https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.20.0/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyCpBSy53Yt0En9WHNAKtreNA1mL1RRBHxg",
    projectId: "laravelfcm-bfe4f",
    messagingSenderId: "918904671107",
    appId: "1:918904671107:web:9ba34b41c22b2ae3dc84b6"
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({data:{title,body,icon}}) {
    return self.registration.showNotification(title,{body,icon});
});
