import { RECITERS_ACTION_TYPES } from '../config';
import * as Howler from 'howler';

const initialState = {
    playing: false,
    paused: false,
    stopped: true,
    url: null,
    duration: 0,
    progress: 0,
    sound: null,
    progressInterval: null

}

const AudioPlayerReducer = (state = initialState, action) => {

    const newState = { ...state };

    switch (action.type) {

        case 'PLAY':

            // sound obj not initialzed 
            // and no src provided
            if (!newState.sound && !action.src) {
                break;
            }

            if (!newState.sound) {
                newState.sound = new Howler.Howl({
                    src: [action.src],
                    html5: true
                });
            }

            if (newState.playing) {
                stopPlaying(newState);
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
            newState.progress = newState.sound.seek();
            newState.duration = newState.sound.duration();
            break;

        case 'SEEK_TO':
            if (action.value && newState.sound) {
                const seekingTo = newState.duration * (action.value / 100);
                seekTo(newState, seekingTo);
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

function startPlaying(newState, action) {
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
    newState.sound.stop();
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

function onseek(s) {
    console.log(s)
}

function seekTo(newState, seekingTo) {
    console.log('seeking to');
    newState.progress = seekingTo;
    newState.sound.seek(seekingTo);
}

export default AudioPlayerReducer

