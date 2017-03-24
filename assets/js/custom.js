// var vid = document.getElementById("bgvid");
// var pauseButton = document.querySelector("#polina button");

// if (window.matchMedia('(prefers-reduced-motion)').matches) {
//     vid.removeAttribute("autoplay");
//     vid.pause();
// pauseButton.innerHTML = "Paused";
// }

// function vidFade() {
//     vid.classList.add("stopfade");
// }

// vid.addEventListener('ended', function()
// {
// only functional if "loop" is removed
//     vid.pause();
// to capture IE10
//     vidFade();
// });


// pauseButton.addEventListener("click", function() {
//     vid.classList.toggle("stopfade");
//     if (vid.paused) {
//         vid.play();
//         pauseButton.innerHTML = "Pause";
//     } else {
//         vid.pause();
//         pauseButton.innerHTML = "Paused";
//     }
// });

function onYouTubeIframeAPIReady() {
    var player;
    player = new YT.Player('video-background', {
        videoId: 'FvkeFOZeOyY',     // YouTube Video ID
        // width: 560,                 // Player width (in px)
        // height: 316,                // Player height (in px)
        playerVars: {
            autoplay: 1,            // Auto-play the video on load
            controls: 0,            // Show pause/play buttons in player
            showinfo: 0,            // Hide the video title
            modestbranding: 1,      // Hide the Youtube Logo
            loop: 1,                // Run the video in a loop
            fs: 0,                  // Hide the full screen button
            cc_load_policy: 0,      // Hide closed captions
            iv_load_policy: 3,      // Hide the Video Annotations
            autohide: 1,             // Hide video controls when playing
                                    // Custom
            frameborder: 0,
            modestbranding: 1,
            playsinline: 1,
            rel: 0,

        },
        events: {
            onReady: function (e) {
                e.target.mute();
            }
        }
    });
}

onYouTubeIframeAPIReady();

// Written by @labnol