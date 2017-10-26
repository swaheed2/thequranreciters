import { RECITERS_ACTION_TYPES } from '../config';
import * as Howler from 'howler';

const initialState = {
    playing: false,
    paused: false,
    stopped: true,
    url: null,
    duration: 0,
    sound: null
}

const AudioPlayerReducer = (state = initialState, action) => {

    const newState = { ...state };

    switch (action.type) {

        case 'PLAY':

            if (!newState.sound) {
                newState.sound = new Howler.Howl({
                    src: ['https://archive.org/download/AlaaAlmezjaji/016.mp3'],
                    html5: true
                });
            }

            newState.playing = true;
            newState.paused = false;
            newState.src = action.src;

            newState.sound.play();

            break;

        case 'PAUSE':
            newState.playing = false;
            newState.paused = true;
            newState.sound.pause();
            break;

        default:
            break;
    }
    console.log(newState)
    return newState;
}

export default AudioPlayerReducer

