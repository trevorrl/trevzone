$(window).on('load', function () {

    // chroma-key background if ?chroma is added to end of url (for obs overlay)
    let chromakey   = document.getElementById('chroma-key');
    let params = window.location.search;
    if (params === "?chroma") {
        chromakey.classList.add('chroma-key');
    }

    // open streamlabs websocket
    const streamlabs = io(('https://sockets.streamlabs.com?token=' + socketToken), {transports: ['websocket']});

    // define element variables
    let click       = document.getElementById('click');
    let sliding     = document.getElementById('sliding');
    let rotation    = document.getElementById('rotation');
    let textalert   = document.getElementById('textalert');
    let logo        = document.getElementById('logo');
    let msg1        = document.getElementById('msg1');
    let followAudio = document.getElementById('followAudio');
    let subAudio    = document.getElementById('subAudio');
    let donoAudio   = document.getElementById('donoAudio');

    // self-contained functions for each event type so that the actual websocket event handling is more concise
    function donation(eventData) {
        msg1.textContent = (eventData.message[0].name + " just donated " + eventData.message[0].formatted_amount + "!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        // delay on audio so it plays when the text animates
        setTimeout(function () {
            donoAudio.volume = 0.1;
            donoAudio.play();
        }, 3600);
        // using jquery to remove our classes and custom alert text once the animation is finished
        $(sliding).one('animationend', function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
        })
    }

    function follow(eventData) {
        msg1.textContent = (eventData.message[0].name + " just followed!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        setTimeout(function () {
            followAudio.volume = 0.5;
            followAudio.play();
        }, 3600);
        $(sliding).one('animationend', function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
        })
    }

    function subscription(eventData) {
        msg1.textContent = (eventData.message[0].name + " just subscribed for " + eventData.message[0].months + " months!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        // no delay as we want the audio to play throughout the animation
        subAudio.volume = 0.075;
        subAudio.play();
        $(sliding).one('animationend', function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
        })
    }

    function bits(eventData) {
        msg1.textContent = (eventData.message[0].name + " just dropped " + eventData.message[0].amount + " bits!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        setTimeout(function () {
            donoAudio.volume = 0.1;
            donoAudio.play();
        }, 3600);
        $(sliding).one('animationend', function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
        })
    }

    function host(eventData) {
        msg1.textContent = (eventData.message[0].name + " just hosted with " + eventData.message[0].viewers + " viewers!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        setTimeout(function () {
            followAudio.volume = 0.5;
            followAudio.play();
        }, 3600);
        $(sliding).one('animationend', function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
        })
    }

    function raid(eventData) {
        msg1.textContent = (eventData.message[0].name + " just raided with " + eventData.message[0].raiders + " viewers!");
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        setTimeout(function () {
            followAudio.volume = 0.5;
            followAudio.play();
        }, 3600);
        $(sliding).one('animationend', function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
        })
    }

    // websocket event handling with a single layer of redundancy
    // when an event comes in, we first check if an animation is in progress, and if so,
    // wait until one second after the animation ends before triggering the next
    // this doesn't account for multiple events during an animation, so if they overlap by more than one,
    // some events can be lost. TODO: find a proper sequential solution
    streamlabs.on('event', (eventData) => {
        if (eventData.type === 'donation') {
            if (sliding.classList.contains('sliding-animate')) {
                $(sliding).one('animationend', function () {
                    setTimeout(function () {
                        donation(eventData)
                    }, 1000);
                })
            } else {
                donation(eventData)
            }
        }
        if (eventData.for === 'twitch_account') {
            switch(eventData.type) {
                case 'follow':
                    if (sliding.classList.contains('sliding-animate')) {
                        $(sliding).one('animationend', function () {
                            setTimeout(function () {
                                follow(eventData)
                            }, 1000);
                        })
                    } else {
                        follow(eventData)
                    }
                    break;
                case 'subscription':
                    if (sliding.classList.contains('sliding-animate')) {
                        $(sliding).one('animationend', function () {
                            setTimeout(function () {
                                subscription(eventData)
                            }, 1000);
                        })
                    } else {
                        subscription(eventData)
                    }
                    break;
                case 'host':
                    if (sliding.classList.contains('sliding-animate')) {
                        $(sliding).one('animationend', function () {
                            setTimeout(function () {
                                host(eventData)
                            }, 1000);
                        })
                    } else {
                        host(eventData)
                    }
                    break;
                case 'bits':
                    if (sliding.classList.contains('sliding-animate')) {
                        $(sliding).one('animationend', function () {
                            setTimeout(function () {
                                bits(eventData)
                            }, 1000);
                        })
                    } else {
                        bits(eventData)
                    }
                    break;
                case 'raid':
                    if (sliding.classList.contains('sliding-animate')) {
                        $(sliding).one('animationend', function () {
                            setTimeout(function () {
                                raid(eventData)
                            }, 1000);
                        })
                    } else {
                        raid(eventData)
                    }
                    break;
                default:
                    //default case
                    console.log(eventData);
            }
        }
    });

    // same thing as WS event except on click, for testing / debugging purposes
    click.onclick = function () {

        console.log('clicked, starting animation by adding classes');
        msg1.textContent = "You clicked me!";
        sliding.classList.add('sliding-animate');
        rotation.classList.add('rotation-animate');
        textalert.classList.add('textalert-animate');
        logo.classList.add('logo-animate');
        console.log('animating');
        $(sliding).one('animationend', function () {
            sliding.classList.remove('sliding-animate');
            rotation.classList.remove('rotation-animate');
            textalert.classList.remove('textalert-animate');
            logo.classList.remove('logo-animate');
            msg1.textContent = "";
        })

    }

});