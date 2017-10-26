

export function play() {
    return (dispatch) => {
        dispatch({
            type: 'PLAY'
        })
    }
}

export function pause() {
    return (dispatch) => {
        dispatch({
            type: 'PAUSE'
        })
    }
}
