const staticCurriculumVitae = "dev-cv-site-v1"
const assets = [
  "/",
  "/index.html",
  "/cv.css",
  "/cv.js",
  "/images/14dd0a82-52e7-46a9-b6f3-167d0811e3bd.PNG",
  "/images/3e4c9ec5-2759-4115-9db1-d4dd7f0044e7.JPG",
  "/images/templated.jpg",
]

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticCurriculumVitae).then(cache => {
      cache.addAll(assets)
    })
  )
})

self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
      caches.match(fetchEvent.request).then(res => {
        return res || fetch(fetchEvent.request)
      })
    )
  })