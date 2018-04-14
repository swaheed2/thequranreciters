
/**
 * 
 * @param {{ src: string, albumId: string, trackId:string }=} obj 
 */
export function play(obj) {

    let src = undefined;

    if (obj) {
        src = `https://archive.org/download/${obj.albumId}${obj.trackId}`;
        obj.src = src;
    }

    return (dispatch) => {
        dispatch({
            type: 'PLAY',
            src: src,
            data: obj
        })
        _monitorProgress(dispatch);
    }
}

export function pause() {
    return (dispatch) => {
        dispatch({
            type: 'PAUSE'
        })
        _clearProgInterval(dispatch);
    }
}

/**
 * 
 * @param {number} rate 
 */
export function updateRate(rate) {
    return (dispatch) => {
        dispatch({
            type: 'UPDATE_RATE',
            value: rate
        })
    }

}

export function skipForward() {
    return (dispatch) => {
        dispatch({
            type: 'FORWARD'
        })
    }
}
export function rewindBack() {
    return (dispatch) => {
        dispatch({
            type: 'REWIND'
        })
    }
}

export function clearProgressInterval() {
    return (dispatch) => {
        _clearProgInterval(dispatch)
    }
}

export function seekTo(progress) {
    return (dispatch) => {
        dispatch({
            type: 'SEEK_TO',
            value: progress
        });
    }
}

export function monitorProgress(dispatch) {
    return (dispath) => {
        _monitorProgress(dispatch)
    }
}

// private

function _clearProgInterval(dispatch) {
    dispatch({
        type: 'CLEAR_PROGRESS_INTERVAL'
    })
}

function _monitorProgress(dispatch) {
    if (!dispatch) {
        return;
    }
    const progressInterval = setInterval(() => {
        dispatch({ type: 'UPDATE_PROGRESS' })
    }, 500);

    dispatch({ type: 'SET_PROGRESS_INTERVAL', value: progressInterval })
}