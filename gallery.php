html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

.container.gallery-container {
    background: url(https://i.pinimg.com/736x/4f/d6/22/4fd622433a21e15d7c12d7e2390f87ad.jpg) no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    color: #35373a;
    height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}
.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery .lightbox img {
    max-width: 100%;
    height: auto;
    border-radius: 0;
    position: relative;
}

.tz-gallery .row > div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}

.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media (max-width: 1200px) {
    .container.gallery-container {
        padding: 0 20px;
    }
}

@media (max-width: 768px) {
    .container.gallery-container {
        padding: 0 10px;
    }
}