window.onload = function () {

    // defining streamlabs websocket
    const streamlabs = io(('https://sockets.streamlabs.com?token=' + socketToken), {transports: ['websocket']});

    // variables yo
    let click     = document.getElementById('click');
    let sliding   = document.getElementById('sliding');
    let rotation  = document.getElementById('rotation');
    let textalert = document.getElementById('textalert');
    let logo      = document.getElementById('logo');
    let msg1      = document.getElementById('msg1');
    let msg2      = document.getElementById('msg2');
    let chromakey = document.getElementById('chroma-key');

    // handling streamlab alert events
    // TODO: wrapping stuff in a function didn't actually fix anything so find another solution
    streamlabs.on('event', (eventData) => {
        if (eventData.type === 'donation') {
            //code to handle donation events
            console.log("Donation received: ");
            console.log(eventData);
            msg1.textContent = (eventData.message[0].name + " just donated " + eventData.message[0].formatted_amount + "!");
            msg2.textContent = (eventData.message[0].message);
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
                msg2.textContent = "";
                console.log('animation finished, removing classes');
            }, 12500);
        }
        if (eventData.for === 'twitch_account') {
            switch(eventData.type) {
                case 'follow':
                    //code to handle follow events
                    console.log("Follow received: ");
                    console.log(eventData);
                    msg1.textContent = (eventData.message[0].name + " just followed!");
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
                        msg2.textContent = "";
                        console.log('animation finished, removing classes');
                    }, 12500);
                    break;
                case 'subscription':
                    //code to handle subscription events
                    console.log("Subscription received: ");
                    console.log(eventData);
                    msg1.textContent = (eventData.message[0].name + " just subscribed for " + eventData.message[0].months + " months!");
                    msg2.textContent = (eventData.message[0].message);
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
                        msg2.textContent = "";
                        console.log('animation finished, removing classes');
                    }, 12500);
                    break;
                case 'host':
                    //code to handle host events
                    console.log("Host received: ");
                    console.log(eventData);
                    msg1.textContent = (eventData.message[0].name + " just hosted with " + eventData.message[0].viewers + " viewers!");
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
                        msg2.textContent = "";
                        console.log('animation finished, removing classes');
                    }, 12500);
                    break;
                case 'bits':
                    //code to handle bits events
                    console.log("Bits received: ");
                    console.log(eventData);
                    msg1.textContent = (eventData.message[0].name + " just dropped " + eventData.message[0].amount + " bits!");
                    msg2.textContent = (eventData.message[0].message);
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
                        msg2.textContent = "";
                        console.log('animation finished, removing classes');
                    }, 12500);
                    break;
                case 'raid':
                    //code to handle raids events
                    console.log("Raid received: ");
                    console.log(eventData);
                    msg1.textContent = (eventData.message[0].name + " just raided with " + eventData.message[0].raiders + " viewers!");
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
                        msg2.textContent = "";
                        console.log('animation finished, removing classes');
                    }, 12500);
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