const video = document.querySelector('.add-video');
const mediaSource = new MediaSource();
const videoURL = './asset/1part_vWjLDKiK.mp4';

video.src = URL.createObjectURL(mediaSource);

mediaSource.addEventListener('sourceopen', function () {
    const sourceBuffer = mediaSource.addSourceBuffer('video/mp4; codecs="avc1.640028"');
    const fetchURL = './asset/1part_vWjLDKiK.mp4';
    
    fetch(fetchURL)
        .then(response => response.arrayBuffer())
        .then(data => {
            sourceBuffer.appendBuffer(data);
            video.play();
        })
        .catch(error => {
            console.error('Error loading video:', error);
        });
});

mediaSource.addEventListener('error', function (e) {
    console.error('MediaSource error:', e);
});
