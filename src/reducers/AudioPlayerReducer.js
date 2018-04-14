import * as Howler from 'howler';

const initialState = {
    playing: false,
    paused: false,
    stopped: true,
    url: undefined,
    duration: 0,
    progress: 0,
    rate: 1,
    sound: undefined,
    progressInterval: undefined,
    nowPlaying: undefined

}

const AudioPlayerReducer = (state = initialState, action) => {

    const newState = { ...state };

    switch (action.type) {

        case 'PLAY':

            // sound obj not initialzed 
            // and no src provided
            if (!newState.sound && !action.src) {
                console.error('no sound object initialized and play called');
                break;
            }

            let newAudio = false;

            /**
             * playing first time
             */
            if (!newState.sound) {
                newState.sound = new Howler.Howl({
                    src: [action.src],
                    html5: true,
                    rate: 1
                });
                newAudio = true;
                newState.nowPlaying = action.data;
            }

            /**
             * Play new audio than currently playing
             */
            else if (
                action.src &&
                newState.nowPlaying &&
                newState.nowPlaying.src !== action.src) {

                newState.sound = new Howler.Howl({
                    src: [action.src],
                    html5: true
                });

                newAudio = true;

                newState.nowPlaying = action.data;
            }

            if (newAudio) {
                const savedSeek = localStorage.getItem(newState.nowPlaying.src);
                if (savedSeek) {
                    seekTo(newState, savedSeek);
                }
            }

            startPlaying(newState, action);

            break;

        case 'PAUSE':
            pausePlaying(newState);
            break;

        case 'FORWARD':
            const newSeek = newState.progress + 15;
            if (newState.duration > newSeek) {
                seekTo(newState, newSeek);
            }
            break;

        case 'REWIND':
            const backSeek = newState.progress - 15;
            if (backSeek > 0) {
                seekTo(newState, backSeek);
            }
            break;

        case 'STOP':
            stopPlaying(newState);
            break;

        case 'UPDATE_PROGRESS':
            if (newState.sound) {
                newState.progress = newState.sound.seek();
                newState.duration = newState.sound.duration();
                if (newState.sound.playing()) {
                    newState.playing = true;
                    newState.paused = false;
                    newState.stopped = false;
                }
                localStorage.setItem(newState.nowPlaying.src, newState.progress + '');
            }
            break;

        case 'SEEK_TO':
            if (action.value && newState.sound) {
                const seekingTo = newState.duration * (action.value / 100);
                seekTo(newState, seekingTo);
            }
            break;

        case 'UPDATE_RATE':
            if (action.value && newState.sound) {
                newState.sound.rate(action.value);
                newState.rate = action.value;
            }
            break;

        case 'CLEAR_PROGRESS_INTERVAL':
            clearInterval(newState.progressInterval)
            break;

        case 'SET_PROGRESS_INTERVAL':
            newState.progressInterval = action.value;
            break;

        default:
            break;
    }
    return newState;
}

function startPlaying(newState, action, s) {

    if (newState.playing) {
        stopPlaying(newState);
    }

    newState.playing = true;
    newState.paused = false;
    newState.stopped = false;
    newState.src = action.src;
    newState.sound.play();
}

function stopPlaying(newState) {
    if (!newState.sound) {
        return;
    }
    newState.playing = false;
    newState.paused = false;
    newState.stopped = true;
    window.Howler._howls.forEach(element => {
        if (element.playing()) {
            element.stop();
        }
    });
    console.log('stopping sounds');
}

function pausePlaying(newState) {
    if (!newState.sound) {
        return;
    }
    newState.playing = false;
    newState.stopped = false;
    newState.paused = true;
    newState.sound.pause();
}

function seekTo(newState, seekingTo) {
    newState.progress = seekingTo;
    newState.sound.seek(seekingTo);
}

export default AudioPlayerReducer

