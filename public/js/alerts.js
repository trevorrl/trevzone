window.onload = function () {

    // defining all of our element variables
    let click       = document.getElementById('click');
    let sliding     = document.getElementById('sliding');
    let rotation    = document.getElementById('rotation');
    let textalert   = document.getElementById('textalert');
    let logo        = document.getElementById('logo');
    let msg1        = document.getElementById('msg1');
    let chromakey   = document.getElementById('chroma-key');
    let followAudio = document.getElementById('followAudio');
    let subAudio    = document.getElementById('subAudio');
    let donoAudio   = document.getElementById('donoAudio');

    // functions for each type of potential event coming from the streamlabs websocket API, this one is for donations
    function donation(eventData){
        console.log("Donation received: ");
        console.log(eventData);
        // setting the message text using eventData, which is an object returned by the streamlabs api
        msg1.textContent = (eventData.message[0].name + " just donated " + eventData.message[0].formatted_amount + "!");
        // adding the -animate classes to each div to start the animation
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        console.log('animating');
        // delaying audio until the point in the animation where the message slides out from the left
        setTimeout(function () {
            donoAudio.volume = 0.1;
            donoAudio.play();
        }, 3600);
        // removing the -animate classes and emptying the message content to prepare for the next event after 12.5s
        // which is when the animation should be finished
        setTimeout(function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
            console.log('animation finished, removing classes');
        }, 12500);
    }

    //function to handle follow events
    function follow(eventData) {
        console.log("Follow received: ");
        console.log(eventData);
        msg1.textContent = (eventData.message[0].name + " just followed!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        console.log('animating');
        setTimeout(function () {
            followAudio.volume = 0.5;
            followAudio.play();
        }, 3600);
        setTimeout(function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
            console.log('animation finished, removing classes');
        }, 12500);
    }

    //function to handle subscription events
    function subscription(eventData) {
        console.log("Subscription received: ");
        console.log(eventData);
        msg1.textContent = (eventData.message[0].name + " just subscribed for " + eventData.message[0].months + " months!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        console.log('animating');
        // for subscriptions I want the audio to play right away, instead of delayed
        subAudio.volume = 0.075;
        subAudio.play();
        setTimeout(function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
            console.log('animation finished, removing classes');
        }, 12500);
    }

    //function to handle bits events
    function bits(eventData) {
        console.log("Bits received: ");
        console.log(eventData);
        msg1.textContent = (eventData.message[0].name + " just dropped " + eventData.message[0].amount + " bits!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        console.log('animating');
        setTimeout(function () {
            donoAudio.volume = 0.1;
            donoAudio.play();
        }, 3600);
        setTimeout(function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
            console.log('animation finished, removing classes');
        }, 12500);
    }

    //function to handle host events
    function host(eventData) {
        console.log("Host received: ");
        console.log(eventData);
        msg1.textContent = (eventData.message[0].name + " just hosted with " + eventData.message[0].viewers + " viewers!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        console.log('animating');
        setTimeout(function () {
            followAudio.volume = 0.5;
            followAudio.play();
        }, 3600);
        setTimeout(function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
            console.log('animation finished, removing classes');
        }, 12500);
    }

    //function to handle raid events
    function raid(eventData) {
        console.log("Raid received: ");
        console.log(eventData);
        msg1.textContent = (eventData.message[0].name + " just raided with " + eventData.message[0].raiders + " viewers!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        console.log('animating');
        setTimeout(function () {
            followAudio.volume = 0.5;
            followAudio.play();
        }, 3600);
        setTimeout(function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
            console.log('animation finished, removing classes');
        }, 12500);
    }

    // opening the streamlabs websocket
    const streamlabs = io(('https://sockets.streamlabs.com?token=' + socketToken), {transports: ['websocket']});

    // handling actual streamlabs api events
    streamlabs.on('event', (eventData) => {
        if (eventData.type === 'donation') {
            donation(eventData);
        }
        if (eventData.for === 'twitch_account') {
            switch(eventData.type) {
                case 'follow':
                    follow(eventData);
                    break;
                case 'subscription':
                    subscription(eventData);
                    break;
                case 'host':
                    host(eventData);
                    break;
                case 'bits':
                    bits(eventData);
                    break;
                case 'raid':
                    raid(eventData);
                    break;
                default:
                    //default case
                    console.log(eventData);
            }
        }
    });

    // change background to chroma green for overlay by clicking background
    let params = window.location.search;
    if (params === "?chroma") {
        chromakey.classList.add('chroma-key');
    }

    // test triggering animation and setting message text via click event
    click.onclick = function (event) {

        console.log('clicked, starting animation by adding classes');
        msg1.textContent = "You clicked me!";
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        console.log('animating');
        setTimeout(function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
            console.log('animation finished, removing classes');
        }, 12500);

    }

};