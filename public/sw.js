var cacheName = 'assetPWA-v2';
var filesToCache = [
  '/',
  '/manifest.json',
  '/index.php',
  '/js/app.js',
  '/js/bundle.js',
  'css/bundle.css',
  '/css/app.css',
  '/images/cj.jpg',
  '/images/ao.jpg',
  '/images/con.jpg',
  '/images/Jesus.jpg',
  


];

//install event
self.addEventListener('install', function(e) {
  console.log('[ServiceWorker] Install');
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[ServiceWorker] Caching app shell');
      return cache.addAll(filesToCache);
    })
  );
});


//activate event
self.addEventListener('activate', function(e) {
  console.log('[ServiceWorker] Activate');
  e.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(keyList.map(function(key) {
        if (key !== cacheName) {
          console.log('[ServiceWorker] Removing old cache', key);
          return caches.delete(key);
        }
      }));
    })
  );
});
//fetch event
self.addEventListener('fetch',function(e){
    console.log('[ServiceWorker] Fetch',e.request.url);
    e.respondWith(
        caches.match(e.request).then(function(response){
            return response || fetch(e.request);
        })
    );
});
